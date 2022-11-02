<div class="col-md-9">
                    <section class="static about-sec">
                        <div class="container">
                        <h2>Quản lý sách</h2>                  
                       <form action="<?php echo $_GET['url']?>" method="post" enctype="multipart/form-data">
                       <table id="cart" class="table table-hover table-condensed">
                        <thead>
                          <tr>
                                
                              <th>
                                  
                              </th>
                              <th class="hidden-xs text-center">
                                <input type="file" placeholder="Ảnh" name="Image" style="width:80px;">
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
                                <button class="btn btn-danger btn-sm" name="btn-capnhat" style="width:100%;">
                                       cập nhật
                                    </button>
                                </th>
                            </tr>
                            <tr class="text-center" style="color: orange;">
                                <th style="width: 5%">id</th>
                                <th style="width: 5%">anh</th>
                                <th style="width: 45%">Tên sách</th>
                                <th style="width: 17%">Giá</th>
                                <th style="width: 20%"> Thể loại</th>
                                <th style="width: 8%">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
    
                            <?php
                              $string=$data["Product"];
                              $row=json_decode($string);
                                for($i=0;$i<count($row);$i++){
                                $cost= number_format($row[$i]->gia);
                                echo '<tr class="text-center" style="color: black">';
                                echo '<td>
                                     <div>
                                    '. $row[$i]->idsanpham.'
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
                                <a href="http://localhost:8080/project/Admin/Xoasanpham/'.$row[$i]->idsanpham.'" class="btn btn-success btn-block">Xóa <i class="fa fa-trash-o"></i></a>                           
                                 </td>;
                                  </tr>';
                                }
                            ?>
        
                        </tbody>
                       
                    </table>
                       </form>
                                                        
                            
                        </div>
                    </section>
        
    </div>