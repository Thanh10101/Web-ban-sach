<div class="col-md-9">
                    <section class="static about-sec">   
                        <div class="container">
                        <h2>Quản người dùng</h2>
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
                              
                                </th>
                                <th>
                                <button class="btn btn-danger btn-sm" name="btn-them" style="width:100px;">
                                       TÌm kiếm
                                    </button>
                                </th>
                            </tr>
                            <tr class="text-center" style="color: orange;">
                                <th style="width: 5%">id</th>
                                <th style="width: 5%">Họ và tên</th>
                                <th style="width: 45%">Email</th>
                                <th style="width: 17%">Số điện thoại</th>
                                <th style="width: 8%">Tài khoản</th>
                                <th style="width: 20%">Mật khẩu</th>
                            </tr>
                        </thead>
                        <tbody>
    
                            <?php
                              $string=$data["User"];
                              $row=json_decode($string);
                                for($i=0;$i<count($row);$i++){
                                echo '<tr class="text-center" style="color: black">';
                                echo '<td>
                                     <div >
                                    '.$row[$i]->idnguoidung.'
                                     </div>
                                 </td>
                                 <td data-th="Product">
                                     <div style="text-align: left;">';
                                echo       $row[$i]->hoten;
                                echo     '</div>
                                 </td>
                                 <td>
                                     <div style="text-align: left;">';
                                echo      $row[$i]->email;
                                echo     '</div>
                                 </td>
                                 <td data-th="Price">';
                                echo   '  <div>'.$row[$i]->sodienthoai.'</div>';
                                echo '</td>';
                                echo' <td data-th="Subtotal" style="color: red;">'.$row[$i]->username.'</td>';
                                echo '<td class="actions" data-th>
                                '.$row[$i]->password.'
                        
                                 </td>
                                  </tr>';
                                }
                            ?>
        
                        </tbody>
                       
                    </table>
                       </form>
                                                        
                            
                        </div>
                    </section>
        
    </div>