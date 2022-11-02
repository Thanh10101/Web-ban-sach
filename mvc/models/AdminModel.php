<?php
class AdminModel extends DB{
    public function getProduct(){
        $qr = "SELECT * FROM sanpham ORDER BY idsanpham DESC";
        return $this->query($qr);
    }
    public function getTheloai(){
        $qr = "SELECT * FROM theloai";
        return $this->query($qr);
    }
    public function getUser(){
        $qr = "SELECT * FROM nguoidung";
        return $this->query($qr);
    }
    public function getOder1(){
        $qr = "SELECT *
        FROM dathang 
        ORDER BY iddathang DESC";
        return $this->query($qr);
    }
    public function getOder(){
        $qr = "SELECT *
        FROM dathang 
        ORDER BY iddathang DESC";
        return $this->query($qr);
    }
    public function getProductBestSell(){
        $qr = "SELECT * FROM sanpham ORDER BY lanmua DESC";
        return $this->query($qr);
    }
    public function getDetailOderId($id){
        $qr = 'SELECT * FROM giohang where iddathang="'.$id.'"';
        return $this->query($qr);
    }
    public function deleteId($id){
        $qr = "DELETE FROM sanpham WHERE `sanpham`.`idsanpham` = ".$id;
        mysqli_query($this->con,$qr);
    }
    public function updateProduct($id,$name,$image,$cost,$idtype){
        $qr = "UPDATE `sanpham` SET `tensanpham`='$name'
        ,`anh`='$image',`gia`='$cost',`idtheloai`='$idtype' WHERE `idsanpham`='".$id."'";
        mysqli_query($this->con,$qr);
    }
    public function updateCost($id,$times){
        $qr = "UPDATE `sanpham` SET `lanmua`='$times' WHERE `idsanpham`='".$id."'";
        mysqli_query($this->con,$qr);
    }
    public function getProductId($id){
        $qr = 'SELECT * FROM sanpham where idsanpham="'.$id.'"';
      return $this->query($qr);
    }
    public function insertProduct($name,$image,$cost,$idtype){
        $qr="INSERT INTO `sanpham`(`idsanpham`, `tensanpham`, `anh`, `gia`, `idtheloai`, `lanmua`) 
        VALUES (NULL,'$name','$image','$cost','$idtype','0')";
       mysqli_query($this->con,$qr);
    }
    function query($query){
        $result =  mysqli_query($this->con,$query);
        $mang=array();
        while($row=mysqli_fetch_assoc($result)){
            $mang[]=$row;
        }
        return json_encode($mang);
     }
 
}
?>