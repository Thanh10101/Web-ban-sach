<!DOCTYPE html>
<html lang="en">

<head>
<base href="http://localhost:8080/Project/Logined">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="public/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="public/css/Login.css" rel="stylesheet" type="text/css" media="all" />
</head>

    <body>
        <div class="container demo-1">
            <div class="content">
                <div id="large-header" class="large-header">
                    <h1>Trang web bán sách online nhóm 6</h1>
                    <div class="main-agileits">
                        <!--form-stars-here-->
                        <div class="form-w3-agile dangky">
                            <h2>Đăng Ký Tài Khoản</h2>
                            <form action="./Logined/Dangky" method="post">
                                <div class="form-sub-w3">
                                    <input type="text" name="Username" placeholder="Tên đăng nhập" required="" />
                                    <div class="icon-w3">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="form-sub-w3">
                                    <input type="text" name="Fullname" placeholder="Họ và tên" required="" />
                                    <div class="icon-w3">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="form-sub-w3">
                                    <input type="text" name="Email" placeholder="Email" required="" />
                                    <div class="icon-w3">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    
                                    </div>
                                </div>
                                <div class="form-sub-w3">
                                    <input type="text" name="Adress" placeholder="Địa chỉ" required="" />
                                    <div class="icon-w3">
                                    <i class="fa fa-address-card" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="form-sub-w3">
                                    <input type="text" name="Phone" placeholder="Số điện thoại" required="" />
                                    <div class="icon-w3">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="form-sub-w3">
                                    <input type="password" name="Password" placeholder="Mật khẩu" required="" />
                                    <div class="icon-w3">
                                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="form-sub-w3">
                                    <input type="password" name="submitPassword" placeholder="Nhập lại mật khẩu" required="" />
                                    <div class="icon-w3">
                                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <p class="p-bottom-w3ls1">Bạn đã có tài khoản?<a class href="http://localhost:8080/Project/Logined/Dangnhap"> Đăng nhập</a></p>
                                <div class="clear"></div>
                                <div class="submit-w3l">
                                    <input type="submit" name="btn-dangky" value="Đăng Ký">
                                </div>
                            </form>
                            <div class="social w3layouts">
                                <div class="heading">
                                    <h5>Đăng nhập với</h5>
                                    <div class="clear"></div>
                                </div>
                                <div class="icons">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        
                                    <div class="clear"></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="copyright w3-agile">
                        <p>Nhóm UM</p>
                    </div>
                </div>
            </div>

        </div>

    </body>

</html>