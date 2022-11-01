<?php
class Admin extends Controller{
    private $AdminModel;
    function __construct(){
        $this->AdminModel=$this->model("AdminModel");
    }
    function Main(){
        $this->view("Admin",
        [
            "Admin"=>"Quanlysach",
            "Product"=>$this->AdminModel->getProduct(),
            "Theloai"=>$this->AdminModel->getTheloai()
        ]);
    }
    function Quanlysach(){
        $this->view("Admin",
        [
            "Admin"=>"Quanlysach",
            "Product"=>$this->AdminModel->getProduct(),
            "Theloai"=>$this->AdminModel->getTheloai()
        ]);
    }
    function Quanlynguoidung(){
        $this->view("Admin",
        [
            "Admin"=>"Quanlynguoidung",
            "User"=>$this->AdminModel->getUser()
        ]);
    }
    function Quanlydathang(){
        $this->view("Admin",
        [
            "Admin"=>"Quanlydathang",
            "Manageoder"=>$this->AdminModel->getOder()
        ]);
    }
    function Chitietgiohang($id){
        $this->view("Admin",
        [
            "Admin"=>"Chitietgiohang",
            "Detail"=>$this->AdminModel->getDetailOderId($id)
        ]);
    }
    function Doanhthu(){
        $this->view("Admin",
        [
            "Admin"=>"Doanhthu",
            "Manageoder"=>$this->AdminModel->getOder1()
        ]);
    }
    function Bieudodoanhthu(){
        $this->view("Admin",
        [
            "Admin"=>"Doanhthu",
            "Manageoder"=>$this->AdminModel->getOder1()
        ]);
    }
    function Banchay(){
        $this->view("Admin",
        [
            "Admin"=>"Banchay",
            "ProductBestSell"=>$this->AdminModel->getProductBestSell(),
            "Theloai"=>$this->AdminModel->getTheloai()
        ]);
    }
    function Themsanpham(){
       if(isset($_POST["btn-them"])){
        $namebook=$_POST["Namebook"];
        move_uploaded_file($_FILES["Image"]["tmp_name"],"public/images/".$_FILES["Image"]["name"]);
        $image="public/images/".$_FILES["Image"]["name"];
        $cost=$_POST["Cost"];
        $idtype=$_POST["Idtype"][0];
        $this->AdminModel->insertProduct($namebook,$image,$cost,$idtype);
        $this->view("Admin",
        [
            "Admin"=>"Quanlysach",
            "Product"=>$this->AdminModel->getProduct(),
            "Theloai"=>$this->AdminModel->getTheloai()
        ]);
       }
       if(isset($_POST["btn-capnhat"])){
        $id=$_POST["Id"];
        $namebook=$_POST["Namebook"];
        move_uploaded_file($_FILES["Image"]["tmp_name"],"public/images/".$_FILES["Image"]["name"]);
        $image="public/images/".$_FILES["Image"]["name"];
        $cost=$_POST["Cost"];
        $idtype=$_POST["Idtype"][0];
        $this->AdminModel->updateProduct($id,$namebook,$image,$cost,$idtype);
        $this->view("Admin",
        [
            "Admin"=>"Quanlysach",
            "Product"=>$this->AdminModel->getProduct(),
            "Theloai"=>$this->AdminModel->getTheloai()
        ]);
       }
    }
    function Capnhatsanpham($id){
        if(isset($_POST["btn-capnhat"])){
            $namebook=$_POST["Namebook"];
            move_uploaded_file($_FILES["Image"]["tmp_name"],"public/images/".$_FILES["Image"]["name"]);
            $image="public/images/".$_FILES["Image"]["name"];
            $cost=$_POST["Cost"];
            $idtype=$_POST["Idtype"][0];
            $this->AdminModel->updateProduct($id,$namebook,$image,$cost,$idtype);
        }
        $this->view("Admin",
        [
            "Admin"=>"Capnhatsach",
            "Product"=>$this->AdminModel->getProduct(),
            "Theloai"=>$this->AdminModel->getTheloai()
        ]);
    }
    function Xoasanpham($id){
        $this->AdminModel->deleteId($id);
        $this->view("Admin",
        [
            "Admin"=>"Quanlysach",
            "Product"=>$this->AdminModel->getProduct(),
            "Theloai"=>$this->AdminModel->getTheloai()
        ]);
       
    }
}
?>