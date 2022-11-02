<?php
class LoginModel extends DB
{
    public function InsertUser($username,$password,$email,$adress,$phone,$fullname){
        $qr = "INSERT INTO `nguoidung`(`hoten`, `email`, `sodienthoai`, `username`, `password`, `diachi`, `role`)
         VALUES ('$fullname','$email','$phone','$username','$password','$adress','1')";
        $result=false;
        if(mysqli_query($this->con,$qr)){
                $result=true;
        }
        return json_encode($result);

    }
    public function Login($username,$password){
        $qr="select * from nguoidung";
        $result=mysqli_query($this->con,$qr);
        $mang=array();
        while($row=mysqli_fetch_assoc($result)){
            $mang[]=$row;
        }
        return json_encode($mang);
    }
}

?>