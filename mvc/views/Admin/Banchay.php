<div class="col-md-9">
                    <section class="static about-sec">   
                        <div class="container">
                        <h2>Bán chạy</h2>
                        <form action="./Admin/Themsanpham" method="post" enctype="multipart/form-data">
                       <table id="cart" class="table table-hover table-condensed">
                        <thead>
                        <tr>
                              <th>
                                  
                              </th>
                              <th class="hidden-xs text-center">
                                <input type="file" placeholder="Ảnh" name="Image" style="width:107px;">
                                </th>
                                <th class="hidden-xs"> 
                                <input type="text" placeholder="Tên sách" name="Namebook" >
                                </th>
                                <th class="hidden-xs text-center">
                                <input type="text" placeholder="Giá" style="width:100px;" name="Cost">
                                </th>
                                <th class="hidden-xs text-center">
                                <?php
                                echo '<select name="Idtype[]">';
                                  $string1=$data["Theloai"];
                                  $row1=json_decode($string1);
                                  for($i=0;$i<count($row1);$i++){
                                      echo '<option value="'.$row1[$i]->idtheloai.'">'.$row1[$i]->tentheloai.'</option>';
                                  }
                                  echo '</select';
                                ?>
                                </th>
                                <th>
                                <button class="btn btn-danger btn-sm" name="btn-them" style="width:100%;">
                                       thêm 
                                    </button>
                                </th>
                            </tr>
                            <tr class="text-center" style="color: orange;">
                                <th style="width: 5%">id</th>
                                <th style="width: 5%">anh</th>
                                <th style="width: 45%">Tên sách</th>
                                <th style="width: 17%">Giá</th>
                                <th style="width: 20%"> Thể loại</th>
                                <th style="width: 8%">Lần mua</th>
                            </tr>
                        </thead>
                        <tbody>
    
                            <?php
                              $string=$data["ProductBestSell"];
                              $row=json_decode($string);
                                for($i=0;$i<count($row);$i++){
                                $cost= number_format($row[$i]->gia);
                                echo '<tr class="text-center" style="color: black">';
                                echo '<td>
                                     <div>
                                    '.$row[$i]->idsanpham.'
                                     </div>
                                 </td>
                                 <td data-th="Product">
                                     <div class="col-img-prod">';
                                echo        ' <img src="'.$row[$i]->anh.'" alt="Ảnh '.$row[$i]->tensanpham.'" class="img-responsive" style="width:100px;">';
                                echo     '</div>
                                 </td>
                                 <td>
                                     <div style="text-align: left;">';
                                echo      '<a href="#">'. $row[$i]->tensanpham.'</a>';
                                echo     '</div>
                                 </td>
                                 <td data-th="Price">';
                                echo   '  <div>'.$cost.'</div>';
                                echo '</td>';
                                echo' <td data-th="Subtotal" style="color: red;">'.$row[$i]->idtheloai.'</td>';
                                echo '<td class="actions" data-th>
                                        '.$row[$i]->lanmua.' cuốn
                        
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