<form action="./Logined/Capnhatgiohang" method="post">
    
<div class="main">
        <div class="content">
            <div class="section group">
                <h2 class="text-center">Giỏ hàng của bạn</h2>
                <div class="container">
                    <table id="cart" class="table table-hover table-condensed">
                        <thead>
                            <tr class="text-center" style="color: orange;">
                                <th style="width: 5%">SST</th>
                                <th style="width: 5%"></th>
                                <th style="width: 45%">Sản phẩm</th>
                                <th style="width: 8%">Đơn giá</th>
                                <th style="width: 9%">Số lượng</th>
                                <th style="width:20%"> Thành tiền</th>
                                <th style="width: 8%">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php
                         if(!empty($_SESSION["cart"])){
                            $num=1;
                            $string=$data["Cart"];
                            $row=json_decode($string);
                            $tong=0;
                            for($i=0;$i<count($row);$i++){
                              $cost= number_format($row[$i]->gia);
                              $thanhtien=number_format($_SESSION["cart"][$row[$i]->idsanpham]*$row[$i]->gia);
                             $tong=$tong+$_SESSION["cart"][$row[$i]->idsanpham]*$row[$i]->gia;
                              echo    ' <tr class="text-center" style="color: black;">
                                   <td>
                                       <div>
                                          '.$num.'
                                       </div>
                                   </td>';
                             echo      '<td data-th="Product">
                                       <div class="col-img-prod">';
                             echo  ' <img src="'.$row[$i]->anh.'" alt="Ảnh sản phẩm 1" class="img-responsive" width="100">';
                             echo          '</div>
                                   </td>
                                   <td>
                                       <div style="text-align: left;">';
                              echo            $row[$i]->tensanpham;
                              echo       '  </div>
                                   </td>
                                   <td data-th="Price">';
                              echo       '  <div>'.$cost.' VNĐ</div>';
                              echo    ' </td>
                                   <td data-th="Quantity">
                                       <div>';
                             echo            '  <input class="form-control text-center" name="soluong['.$row[$i]->idsanpham.']" value="'.$_SESSION["cart"][$row[$i]->idsanpham].'" type="number" style="width: 80px">';
                             echo          '</div>
                                   </td>
                                   <td data-th="Subtotal" style="color: red;">'.$thanhtien.' VNĐ</td>
                                   <td class="actions" data-th>
                                   <a href="http://localhost:8080/project/Logined/Xoasanpham/'.$row[$i]->idsanpham.'" class="btn btn-success btn-block">Xóa <i class="fa fa-trash-o"></i></a>      
                                   </td>
   
                               </tr>   ';
                               $num++;
                            }
                         }
                           ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td></td>
                                <td>
                                    <a href="http://localhost:8080/Project/Logined" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
                                </td>
                                <td colspan="2" class="hidden-xs"> </td>
                                <td class="hidden-xs text-center">
                                    <strong>Tổng tiền</strong>
                                </td>
                                <td class="hidden-xs text-center">
                                    <strong style="color: red;">
                                    <?php
                                       if(!empty($_SESSION["cart"])){
                                        echo number_format($tong)." VNĐ";
                                       }
                                    ?>
                                </strong>
                                </td>
                                <td>
                                <button class="btn btn-danger btn-sm" name="btn-capnhatgiohang" style="width:100%;">
                                        cập nhật
                                     </button>
                                   
                                
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                                       <Table border="1" id="cart" class="table table-hover table-condensed">
                                           <thead>
                                           <tr class="text-center" style="color: orange;">
                                       
                                    </tr>
                                           </thead>
                                           <tbody>
                                           <tr>
                                              <td>Người nhận</td>
                                              <?php
                                              echo '<td ><input name="nguoinhan" class="form-control mr-sm-2" type="text"  value="'.$_SESSION["name"].'"></td>';
                                              ?>                                             
                                           </tr>
                                           <tr>
                                              <td>Email</td>
                                              <?php
                                              echo '<td ><input class="form-control mr-sm-2" type="hidden">'.$_SESSION["email"].'</td>';
                                              ?>                                             
                                           </tr>
                                           <tr>
                                              <td>Số điện thoại</td>
                                              <?php
                                              echo '<td ><input name="sodienthoai" type="text" class="form-control mr-sm-2" value="'.$_SESSION["sodienthoai"].'"></td>';
                                              ?>                                             
                                           </tr>
                                           <tr>
                                              <td>Địa chỉ</td>
                                              <?php
                                              echo '<td ><input name="diachi" class="form-control mr-sm-2" type="text"  value="'.$_SESSION["diachi"].'"></td>';
                                              ?>                                             
                                           </tr>
                                          
                                           <tr>
                                                <td colspan="2" style="text-align: center;">
                            
                                                <button class="btn btn-danger btn-sm" name="btn-thanhtoan" style="width:20%;margin:0 auto;">
                Thanh toán
             </button>
                                                </td>                                    
                                           </tr>
                                           </tbody>
                                       </Table>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class="container footer-content">
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
        
        <div class="copy-right">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Nhom UM</h5>
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

</form>