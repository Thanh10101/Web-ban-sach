<form action="./Logined/Giohang" method="post">
    <section>
        <div class="contentChiTiet">
            <div class="container">
                <div class="row">
                   
                   
    <?php

   $string=$data["Product"];
   $row=json_decode($string);  
   $i=0;
   $cost= number_format($row[$i]->gia);
    echo  '<section class="product-sec">
    <div class="container khungSPDon">';
   echo    ' <h1>'.$row[$i]->tensanpham.'</h1>';
   echo   '  <div class="row">
            <div class="col-md-7" style="text-align:justify">
                <div class="row singleProduct">';
  echo                  '<img src="'.$row[$i]->anh.'" style="width:40%; height: 100%" class="anhMax" />';
  echo             '
                </div>
            </div>
            <div class="col-md-3 col-xs-3 slider-content ThongTinSP">
                <ul>
                    <li>
                        <span class="name">Giá bán</span><span class="clm">:</span>';
     echo                  ' <span class="price final">'.$cost.' đồng</span>';
     echo              ' </li>
                        <span class="name">Số lượng:</span>
                        <input class="form-control text-center" value="1" name="soluong['.$row[$i]->idsanpham.']" type="number" style="width: 80px">
                    </li>
                </ul>
                <div class="btn-sec">

                <button class="btn btn-danger btn-sm" name="btn-themgiohang" style="width:100%;">
                thêm vào giỏ hàng
             </button>
                    <div id="snackbar">Bạn đã thêm vào giỏ hàng thành công</div>
                </div>
            </div>
        </div>
    </div>
</section>';
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
                            <li><a href="TrangChu.html">Trang chủ</a></li>
                           
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
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript">
        $(".anhKemSP").hover(function() {
            var srcAnhNho = $(this).attr('src')
            $(".anhMax").attr('src', srcAnhNho)
        })

        function myFunction() {
            var x = document.getElementById("snackbar");
            x.className = "show";
            setTimeout(function() {
                x.className = x.className.replace("show", "");
            }, 3000);
        }
    </script>
</form>