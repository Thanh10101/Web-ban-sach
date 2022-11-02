<?php
class Logined extends Controller{
    private $LoginModel;
    private $AdminModel;
    public $Taikhoan;
    function __construct()
    {   
        
        $this->LoginModel=$this->model("LoginModel");
        $this->AdminModel=$this->model("AdminModel");
    }
    function Main(){
        $this->view("Logined",[
            "Logined"=>"Trangchu",
            "Product"=>$this->AdminModel->getProduct(),
            "ProductBestSell"=>$this->AdminModel->getProductBestSell(),
            "Taikhoan"=>$this->Taikhoan
        ]);
    }
    function Dangky(){
        if(isset($_POST["btn-dangky"])){
            $username=$_POST["Username"];
            $password=$_POST["Password"];
            $password=password_hash($password,PASSWORD_DEFAULT);
            $phone=$_POST["Phone"];
            $adress=$_POST["Adress"];
            $email=$_POST["Email"];
            $fullname=$_POST["Fullname"];
            $result=$this->LoginModel->InsertUser($username,$password,$email,$adress,$phone,$fullname);
            if($result){
                echo "Dăng ký thành công";
            }
            else echo "Đăng ký thất bại";
            $this->view("Dangky");
        }
        else $this->view("Dangky");
    }
    function Dangnhap(){
        if(isset($_POST["btn-dangnhap"])){
            $username=$_POST["Username"];
            $password=$_POST["Password"];
            $a=$this->LoginModel->Login($username,$password);
            $kq=json_decode($a);
            $mang=array();
            for($i=0;$i<count($kq);$i++){
                if($username==$kq[$i]->username && $password==password_verify($password,$kq[$i]->password)){
                    $mang[]=$kq[$i];
                    $_SESSION["id"]=$kq[$i]->idnguoidung;
                    $_SESSION["role"]=$kq[$i]->role;
                    $_SESSION["name"]=$kq[$i]->hoten;
                    $_SESSION["email"]=$kq[$i]->email;
                    $_SESSION["diachi"]=$kq[$i]->diachi;
                    $_SESSION["sodienthoai"]=$kq[$i]->sodienthoai;
                    break;
                }
            }
            if($mang[0]->role==1){
                $this->view("Logined",[
                    "Logined"=>"Trangchu",
                    "Product"=>$this->AdminModel->getProduct(),
                    "ProductBestSell"=>$this->AdminModel->getProductBestSell(),
                ]);
            }
            else{
                $this->view("Admin",[
                    
                "Admin"=>"Quanlysach",
                "Product"=>$this->AdminModel->getProduct(),
                "Theloai"=>$this->AdminModel->getTheloai()
                ]);
            }
        }
        else $this->view("Dangnhap");
    }
    public function Dangxuat(){
        unset($_SESSION["id"]);
        session_destroy();
        $this->view("Trangchu",[
            "Page"=>"Trangchu",
            "Product"=>$this->AdminModel->getProduct(),
            "ProductBestSell"=>$this->AdminModel->getProductBestSell(),
        ]);
    }
    function Chitietsanpham($id){
        $this->view("Logined",[
            "Logined"=>"Chitietsanpham",
            "Product"=>$this->AdminModel->getProductId($id),
            "ProductBestSell"=>$this->AdminModel->getProductBestSell(),
        ]);
    }
    function Giohang(){
        if(isset($_POST["btn-themgiohang"])){
            foreach($_POST["soluong"] as $id => $soluong){
                $_SESSION["cart"][$id]=$soluong;
            }
        }
        if(!empty($_SESSION["cart"])){
            $qr="SELECT * FROM `sanpham` WHERE `idsanpham` IN (".implode(",",array_keys($_SESSION["cart"])).")";
            $result=mysqli_query($this->AdminModel->con,$qr);
            $mang=array();
            while($row=mysqli_fetch_assoc($result)){
                $mang[]=$row;
            }
            $cart=json_encode($mang);
            $this->view("Logined",[
                "Logined"=>"Giohang",
                "Cart"=>$cart,
            ]);
        }
        else{
            $this->view("Logined",[
                "Logined"=>"Giohang",
    
            ]);
        }
    }
    function Capnhatgiohang(){
        if(isset($_POST["btn-capnhatgiohang"])){
            foreach($_POST["soluong"] as $id => $soluong){
                $_SESSION["cart"][$id]=$soluong;
            }
            
        }
        if(isset($_POST["btn-thanhtoan"])){
            $qr="SELECT * FROM `sanpham` WHERE `idsanpham` IN (".implode(",",array_keys($_SESSION["cart"])).")";
            $product=mysqli_query($this->AdminModel->con,$qr);
            $total=0;
            $times=0;
            $mang=array();
            $idnguoidung=$_SESSION["id"];
            while($row=mysqli_fetch_array($product)){
                $mang[]=$row;
                $times+=$_POST["soluong"][$row["idsanpham"]]+$row["lanmua"];
                $total+=$row["gia"]*$_POST["soluong"][$row["idsanpham"]];
                $this->AdminModel->updateCost($row["idsanpham"],$times);
            }
            date_default_timezone_set("Asia/Vientiane");
            $date=date('y/m/d H:i:s');
           $query="INSERT INTO `dathang`(`iddathang`, `idnguoidung`, `tong`, `ngay`, `trangthai`, `nguoinhan`, `diachi`, `sodienthoai`) 
           VALUES (NULL,'$idnguoidung','$total','$date','Đang xử lý','".$_POST["nguoinhan"]."','".$_POST["diachi"]."','".$_POST["sodienthoai"]."')";
           $insertoder=mysqli_query($this->AdminModel->con,$query);
           $orderid=$this->AdminModel->con->insert_id;
           
           $insertstring="";
           $tieude="Cảm ơn bạn đã đến với shop UM";
           $noidung="<h2>Đơn đặt hàng</h2>"."<h3>Mã hóa đơn:".$orderid."</h3>"
           .'<div><p>Người nhận: '.$_POST["nguoinhan"].'</p>
           <p>Số điện thoại: '.$_POST["sodienthoai"].'</p>
           <p>Địa chỉ: '.$_POST["diachi"].'</p>
           </div>'
           .'<table border="1">'.'<tr>
           <th style="min-width: 500px">Tên sản phẩm</th>
           <th style="min-width: 200px">Số lượng</th>
           </tr>';
           foreach($mang as $key=>$product){
               $cost=$product["gia"]*$_POST["soluong"][$product["idsanpham"]];
            $insertstring.="(NULL,'".$orderid."','".$product["idsanpham"]."','".$_POST["soluong"][$product["idsanpham"]]."','".$product["gia"]."','".$cost."')";
            if($key != count($mang)-1){
                $insertstring.=",";
            }
           
             $noidung.="<tr>
                <td>".$product["tensanpham"]."</td>
                <td>".number_format($product["gia"])."*".$_POST["soluong"][$product["idsanpham"]]."</td>
             </tr>";
             
             unset($_SESSION["cart"][$product["idsanpham"]]);
            }
            $noidung.='<tr>
            <td>Thành tiền</td>
            <td>'.number_format($cost).' VNĐ</td>
            </tr>'."</table>";
            $gmail=$_SESSION["email"];
            $mail=new SendMail();
            $mail->Dathang($tieude,$noidung,$gmail);
        
           $query2="INSERT INTO `giohang`(`id`, `iddathang`, `idsanpham`, `soluong`, `gia`, `tong`)
            VALUES ".$insertstring;
            $insertoder1=mysqli_query($this->AdminModel->con,$query2);
            echo '<h2 class="text-center">Đặt hàng thành công <i class="fa fa-check-circle-o" aria-hidden="true"></i></h2>';
           
        }
        if(!empty($_SESSION["cart"])){
            $qr="SELECT * FROM `sanpham` WHERE `idsanpham` IN (".implode(",",array_keys($_SESSION["cart"])).")";
            $result=mysqli_query($this->AdminModel->con,$qr);
            $mang=array();
            while($row=mysqli_fetch_assoc($result)){
                $mang[]=$row;
            }
            $cart=json_encode($mang);
            $this->view("Logined",[
                "Logined"=>"Giohang",
                "Cart"=>$cart
    
            ]);
        }
        else{
            $this->view("Logined",[
                "Logined"=>"Giohang",
            ]);
        }
    }
    function Xoasanpham($id){
        if(isset($_POST["btn-capnhatgiohang"])){
            foreach($_POST["soluong"] as $id => $soluong){
                $_SESSION["cart"][$id]=$soluong;
            }
        }
        unset($_SESSION["cart"][$id]);
        if(empty($_SESSION["cart"])){
            header("Location:http://localhost:8080/Project/Logined/");
        }
        if(!empty($_SESSION["cart"])){
            $qr="SELECT * FROM `sanpham` WHERE `idsanpham` IN (".implode(",",array_keys($_SESSION["cart"])).")";
            $result=mysqli_query($this->AdminModel->con,$qr);
            $mang=array();
            while($row=mysqli_fetch_assoc($result)){
                $mang[]=$row;
            }
            $cart=json_encode($mang);
            $this->view("Logined",[
                "Logined"=>"Giohang",
                "Cart"=>$cart
    
            ]);
        }
        else{
            $this->view("Logined",[
                "Logined"=>"Giohang",
            ]);
        }
    }
  
}
?>