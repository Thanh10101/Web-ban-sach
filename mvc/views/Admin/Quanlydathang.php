<div class="col-md-9">
                    <section class="static about-sec">   
                        <div class="container">
                        <h2>Quản lý đặt hàng</h2>
                        <form action="./Admin/Themsanpham" method="post" enctype="multipart/form-data">
                       <table id="cart" class="table table-hover table-condensed">
                        <thead>
                        <tr>
                              <th>
                                  
                              </th>
                              <th class="hidden-xs text-center" >
                                <input type="text" placeholder="Tên người dùng" name="Name" style="width:107px;">
                                </th>
                                <th class="hidden-xs"> 
                                <input type="text" placeholder="Email" name="Namebook" >
                                </th>
                                <th class="hidden-xs text-center">
                                <input type="text" placeholder="Số điện thoại" style="width:100px;" name="Cost">
                                </th>
                                <th class="hidden-xs text-center">
                                <input type="text" placeholder="Ngày đặt" style="width:100px;" name="Cost">
                                </th>
                                <th>

                                </th>
                                <th>
                                <button class="btn btn-danger btn-sm" name="btn-them" style="width:100%;">
                                       TÌm kiếm
                                    </button>
                                  
                                </th>
                            </tr>
                            <tr class="text-center" style="color: orange;">
                                <th style="width: 5%">id đặt hàng</th>
                                <th style="width: 5%">Người nhận</th>
                                <th style="width: 45%">Địa chỉ</th>
                                <th style="width: 17%">Số điện thoại</th>
                                <th style="width: 17%">Ngày đặt</th>
                                <th style="width: 17%">Tổng tiền</th>
                                <th style="width: 17%">Chi tiết giỏ hàng</th>
                            </tr>
                        </thead>
                        <tbody>
    
                            <?php
                              $string=$data["Manageoder"];
                              $row=json_decode($string);
                                for($i=0;$i<count($row);$i++){
                                    $total=number_format($row[$i]->tong);
                                echo '<tr class="text-center" style="color: black">';
                                echo '<td>
                                     <div >
                                    '.$row[$i]->iddathang.'
                                     </div>
                                 </td>
                                 <td data-th="Product">
                                     <div >';
                                echo       $row[$i]->nguoinhan;
                                echo     '</div>
                                 </td>
                                 <td>
                                     <div >';
                                echo      $row[$i]->diachi;
                                echo     '</div>
                                 </td>
                                 <td data-th="Price">';
                                echo   '  <div>'.$row[$i]->sodienthoai.'</div>';
                                echo '</td>
                                <td data-th="Price">';
                                echo   '  <div>'.date_format(date_create($row[$i]->ngay),"d/m/Y H:i:s").'</div>'; 
                                echo '</td>
                                <td data-th="Price">';
                                echo   '  <div>'.$total.'</div>';
                                echo '</td>
                                <td>
                                <a href="http://localhost:8080/project/Admin/Chitietgiohang/'.$row[$i]->iddathang.'" class="btn btn-success btn-block">Chi tiết giỏ hàng</a>
                                  </tr>';
                                }
                            ?>
        
                        </tbody>
                       
                    </table>
                       </form>
                                                        
                            
                        </div>
                    </section>
     
    </div>