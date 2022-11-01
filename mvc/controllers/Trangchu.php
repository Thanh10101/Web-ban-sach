<?php


class Trangchu extends Controller{

   private $AdminModel;
   private $RegisterModel;
   function __construct()
   {    
       $this->AdminModel=$this->model("AdminModel");
       $this->RegisterModel=$this->model("RegisterModel");
   }
    function Main(){
        $this->view("Trangchu",
        [
            "Page"=>"Trangchu",
            "Product"=>$this->AdminModel->getProduct(),
            "ProductBestSell"=>$this->AdminModel->getProductBestSell()
        ]
    );
    }
   


}
?>