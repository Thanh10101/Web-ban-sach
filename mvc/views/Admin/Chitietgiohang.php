<div class="col-md-9">
                    <section class="static about-sec">   
                        <div class="container">
                        <h2>Chi tiết giỏ hàng</h2>
                        <form action="./Admin/Themsanpham" method="post" enctype="multipart/form-data">
                       <table id="cart" class="table table-hover table-condensed">
                        <thead>
                        <tr>
                              <th>
                                  
                              </th>
                              <th class="hidden-xs text-center" >
                                <input type="text" placeholder="Id đặt hàng" name="Name" style="width:107px;">
                                </th>
                                <th class="hidden-xs"> 
                                <input type="text" placeholder="Id sản phẩm" name="Namebook" >
                                </th>
                                <th class="hidden-xs text-center">
                                <input type="text" placeholder="Số lượng" style="width:100px;" name="Cost">
                                </th>
                                <th class="hidden-xs text-center">
                                 <input type="text" placeholder="Giá" style="width:100px;" name="Cost">
                                </th>
                                
                                <th>
                                <button class="btn btn-danger btn-sm" name="btn-them" style="width:100px;">
                                       TÌm kiếm
                                    </button>
                                </th>
                            </tr>
                            <tr class="text-center" style="color: orange;">
                                <th style="width: 5%">id</th>
                                <th style="width: 5%">Id đặt hàng</th>
                                <th style="width: 45%">Id sanpham</th>
                                <th style="width: 17%">Số lượng</th>
                                <th style="width: 8%">Giá</th>
                                <th style="width: 20%">Tổng</th>
                            </tr>
                        </thead>
                        <tbody>
    
                            <?php
                              $string=$data["Detail"];
                              $row=json_decode($string);
                                for($i=0;$i<count($row);$i++){
                                    $cost=number_format($row[$i]->gia);
                                    $total=number_format($row[$i]->tong);
                                echo '<tr class="text-center" style="color: black">';
                                echo '<td>
                                     <div >
                                    '.$row[$i]->id.'
                                     </div>
                                 </td>
                                 <td data-th="Product">
                                     <div style="text-align: left;">';
                                echo       $row[$i]->iddathang;
                                echo     '</div>
                                 </td>
                                 <td>
                                     <div style="text-align: left;">';
                                echo      $row[$i]->idsanpham;
                                echo     '</div>
                                 </td>
                                 <td data-th="Price">';
                                echo   '  <div>'.$row[$i]->soluong.'</div>';
                                echo '</td>';
                                echo' <td data-th="Subtotal" style="color: red;">'.$cost.'</td>';
                                echo '<td class="actions" data-th>
                                '.$total.'
                        
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