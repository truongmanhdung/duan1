<?php 
    include 'header.php';
?>

<?php 
    if(isset($_GET['loai'])){
        $loai = $_GET['loai'];
        if($loai =="homestay"){
            echo '<table class="table">
            <thead>
              <tr>
                <th class="text-center" scope="col">STT</th>
                <th class="text-center" scope="col">Mã giảm giá</th>
                <th class="text-center" scope="col">Trạng thái</th>
                <th class="text-center" scope="col">Mức giảm</th>
                <th class="text-center" scope="col">Bắt đầu</th>
                <th class="text-center" scope="col">Kết thúc</th>
                <th class="text-center" scope="col">Ngày thêm mã</th>
                <th class="text-center" scope="col">Chức năng</th>
              </tr>
            </thead>
            <tbody>';
                  if(isset($_GET['id'])){
                      $id_hs = $_GET['id'];
                      $sql = "SELECT * FROM phieugiamgia WHERE id_khachsan = $id_hs";
                      $result = $conn->query($sql);
                      if($result->num_rows > 0){
                          $dem = 0;
                          while($row_magiam = $result->fetch_assoc()){
                              $dem++;
                              $magiamgia = $row_magiam['magiamgia'];
                              $status = $row_magiam['status'];
                              $time_up = $row_magiam['time_up'];
                              $time_out = $row_magiam['time_out'];
                              $time = $row_magiam['time'];
                              $mucgiam = $row_magiam['mucgiam'];
                              $id_ma = $row_magiam['id'];
                              echo '
                                      <tr>
                                          <td class="text-center">'.$dem.'</td>   
                                          <td class="text-center">'.$magiamgia.'</td>
                                          ';
                                          if(strtotime($time_out) > strtotime($today)){
                                              echo '<td class="text-center"><p class="btn btn-primary">Còn hạn</p></td>';
                                          }else{
                                              echo '<td class="text-center"><label for="checkngay'.$id_ma.'" class="btn btn-primary">Hết hạn,Cập nhật</label>
                                                  <input type="checkbox" class="checkngay" hidden id="checkngay'.$id_ma.'">
                                                  <form action="" method="POST" class="add_time_out">
                                                      <input type="datetime-local" name="themngay" class="form-control">
                                                      <button class="btn btn-primary my-2" type="submit" name="submit_ngay'.$id_ma.'">Thêm mới</button>
                                                  </form>
                                              </td>';
                                          }
                                          if($status == 0){
                                              echo '<td class="text-center">'.$mucgiam.' %</td>';
                                          }else{
                                              echo '<td class="text-center">'.number_format($mucgiam).' đ</td>';
                                          }
                                          echo '
                              
                                          <td class="text-center">'.$time_up.'</td>
                                          <td class="text-center">'.$time_out.'</td>
                                          <td class="text-center">'.$time.'</td>
                                          <td class="text-center">
                                              <a href="editmagiamgia.php?id='.$id_ma.'&id_hs='.$id_hs.'&loai=homestay" class="btn btn-primary">Sửa</a>
                                              <a href="deletemagiamgia.php?id='.$id_ma.'&id_hs='.$id_hs.'&loai=homestay" class="btn btn-danger" onclick="return confirm(\'Bạn có muốn xóa không ?\')">Xóa</a>
                                      </td>
                                      </tr>
                                  ';
                              if(isset($_POST['submit_ngay'.$id_ma.''])){
                                  $time_out_new = $_POST['themngay'];
                                  $sql_upngay = "UPDATE phieugiamgia SET time_out = '$time_out_new' WHERE id=$id_ma";
                                  $result_upngay = $conn->query($sql_upngay);
                                  if($result_upngay){
                                      echo '
                                          <script>location.href="magiamgiadetail.php?id='.$id_hs.'&loai=homestay"</script>
                                      ';
                                  }
                              }            
                              
                          }
                      }
                  }
            echo '</tbody>
          </table>';
        }else if($loai =="khuvuc"){
            echo '<table class="table">
            <thead>
              <tr>
                <th class="text-center" scope="col">STT</th>
                <th class="text-center" scope="col">Mã giảm giá</th>
                <th class="text-center" scope="col">Trạng thái</th>
                <th class="text-center" scope="col">Mức giảm</th>
                <th class="text-center" scope="col">Bắt đầu</th>
                <th class="text-center" scope="col">Kết thúc</th>
                <th class="text-center" scope="col">Ngày thêm mã</th>
                <th class="text-center" scope="col">Chức năng</th>
              </tr>
            </thead>
            <tbody>';
                  if(isset($_GET['id'])){
                      $id_kv = $_GET['id'];
                      $sql_kv = "SELECT * FROM mggkhuvuc WHERE id_khuvuc = $id_kv";
                      $result_kv = $conn->query($sql_kv);
                      if($result_kv->num_rows > 0){
                          $dem = 0;
                          while($row_magiam = $result_kv->fetch_assoc()){
                              $dem++;
                              $magiamgia = $row_magiam['magiamgia'];
                              $status = $row_magiam['status'];
                              $time_up = $row_magiam['time_up'];
                              $time_out = $row_magiam['time_out'];
                              $time = $row_magiam['time'];
                              $mucgiam = $row_magiam['mucgiam'];
                              $id_ma = $row_magiam['id'];
                              echo '
                                      <tr>
                                          <td class="text-center">'.$dem.'</td>   
                                          <td class="text-center">'.$magiamgia.'</td>
                                          ';
                                          if(strtotime($time_out) > strtotime($today)){
                                              echo '<td class="text-center"><p class="btn btn-primary">Còn hạn</p></td>';
                                          }else{
                                              echo '<td class="text-center"><label for="checkngay'.$id_ma.'" class="btn btn-primary">Hết hạn,Cập nhật</label>
                                                  <input type="checkbox" class="checkngay" hidden id="checkngay'.$id_ma.'">
                                                  <form action="" method="POST" class="add_time_out">
                                                      <input type="datetime-local" name="themngay" class="form-control">
                                                      <button class="btn btn-primary my-2" type="submit" name="submit_ngay'.$id_ma.'">Thêm mới</button>
                                                  </form>
                                              </td>';
                                          }
                                          if($status == 0){
                                              echo '<td class="text-center">'.$mucgiam.' %</td>';
                                          }else{
                                              echo '<td class="text-center">'.number_format($mucgiam).' đ</td>';
                                          }
                                          echo '
                              
                                          <td class="text-center">'.$time_up.'</td>
                                          <td class="text-center">'.$time_out.'</td>
                                          <td class="text-center">'.$time.'</td>
                                          <td class="text-center">
                                              <a href="editmagiamgia.php?id='.$id_ma.'&id_kv='.$id_kv.'&loai=khuvuc" class="btn btn-primary">Sửa</a>
                                              <a href="deletemagiamgia.php?id='.$id_ma.'&id_kv='.$id_kv.'&loai=khuvuc" class="btn btn-danger" onclick="return confirm(\'Bạn có muốn xóa không ?\')">Xóa</a>
                                      </td>
                                      </tr>
                                  ';
                              if(isset($_POST['submit_ngay'.$id_ma.''])){
                                  $time_out_new = $_POST['themngay'];
                                  $sql_upngay = "UPDATE mggkhuvuc SET time_out = '$time_out_new' WHERE id=$id_ma";
                                  $result_upngay = $conn->query($sql_upngay);
                                  if($result_upngay){
                                      echo '
                                          <script>location.href="magiamgiadetail.php?id='.$id_kv.'&loai=khuvuc"</script>
                                      ';
                                  }
                              }            
                              
                          }
                      }
                  }
            echo '</tbody>
          </table>';
    }   
    }
?>

    
    

<?php 
    include 'footer.php';
?>