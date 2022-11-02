<?php
if(!isset($_SESSION['id'])||$_SESSION["role"]==1){
    header("Location:http://localhost:8080/Project/Logined/Dangxuat");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<base href="http://localhost:8080/Project/Admin">
    <meta charset="UTF-8">
    <title>Book Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="ChiTietSP.html03a6f3">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="public/css/styles.css">
    <link rel="stylesheet" href="public/css/YourStyle.css" />
</head>

<body>
    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 tenShop">
                        <h5>Web bán sach online nhóm 6</h5>
                    </div>
                    <div class="col-md-3">
                        <span class="ph-number">SĐT: 0909 090 909</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-menu">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.html"><img src="public/images/logo.png" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="navbar-item">
                                <a href="http://localhost:8080/Project/Logined/Dangxuat" class="nav-link">Đăng xuất</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="breadcrumb">
                        <div class="container">
                            <a class="breadcrumb-item" href="http://localhost:8080/project/Admin">Nhóm UM</a>
                            <span class="breadcrumb-item active">Quản lý</span>

                        </div>
                    </div>
                    <nav class="mainNav">
                        <ul>
                            <li class="selected"><a href="http://localhost:8080/project/Admin">Quản lý sản phẩm</a>
                                <ul>
                                    <li><a href="http://localhost:8080/project/Admin/Quanlysach">Quản lý sách</a>
                                    </li>
                                    <li><a href="http://localhost:8080/project/Admin/Quanlynguoidung">Quản lý người dùng</a>
                                    </li>
                                    <li><a href="http://localhost:8080/project/Admin/Quanlydathang">Quản lý đặt hàng</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="http://localhost:8080/project/Admin/Doanhthu">Thống kê</a>
                                <ul>
                                    <li><a href="http://localhost:8080/project/Admin/Doanhthu">Doanh thu</a>
                                    </li>
                                    <li><a href="http://localhost:8080/project/Admin/Banchay">Bán chạy</a>
                                    </li>
                                </ul>
                                </li>
                        </ul>
                    </nav>
                </div>
                <?php
                require_once "./mvc/views/Admin/".$data["Admin"].".php";
?>
    <footer>
        <div class="container footer-content">
            <div class="row">
                
                <div class="col-md-4">
                    <div class="navigation1">
                        <br />
                        <br />
                        <h4>Nhóm UM</h4>
                        <ul>
                            <li><a href="index.html">Trang chủ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Nhóm UM</h5>
                    </div>
                    <div class="col-md-6">
                        <div class="share align-middle">
                            <span class="fb"><i class="fa fa-facebook-official"></i></span>
                            <span class="instagram"><i class="fa fa-instagram"></i></span>
                            <span class="twitter"><i class="fa fa-twitter"></i></span>
                            <span class="pinterest"><i class="fa fa-pinterest"></i></span>
                            <span class="google"><i class="fa fa-google-plus"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="public/js/owl.carousel.min.js"></script>
    <script src="public/js/custom.js"></script>
</body>

</html>