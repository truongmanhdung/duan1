<?php 
    include 'header.php';
?>
<a href="addmagiamgia.php" class="btn btn-primary my-2">Thêm mã giảm giá</a>
<h3 class="text-center my-3">Mã giảm giá tất cả homestay</h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Mã giảm giá</th>
      <th scope="col">Mức giảm</th>
      <th scope="col">Trạng thái</th>
      <th scope="col">Ngày bắt đầu</th>
      <th scope="col">Ngày kết thúc</th>
      <th scope="col">Chức năng</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        $sql_all = "SELECT * FROM maggall";
        $result_all = $conn->query($sql_all);
        if($result_all->num_rows > 0){
            $dem_all = 0;
            while($row_all = $result_all->fetch_assoc()){
                $dem_all++;
                $id_all = $row_all['id'];
                $magiamgia_all = $row_all['magiamgia'];
                $time_up_all = $row_all['time_up'];
                $mucgiam_all = $row_all['mucgiam'];
                $time_out_all = $row_all['time_out'];
                $status_all = $row_all['status'];
                echo '<tr>
                <th scope="row">'.$dem_all.'</th>
                <td>'.$magiamgia_all.'</td>';
                if($status_all == 1){
                  echo '<td>'.number_format($mucgiam_all).'đ</td>';
                }else{
                  echo '<td>'.$mucgiam_all.'%</td>';
                }
                if(strtotime($time_out_all) > strtotime($today)){
                  echo '<td>Còn hạn</td>';
                }else{
                  echo '<td>Hết hạn</td>';
                }
                echo '<td>'.$time_up_all.'</td>
                <td>'.$time_out_all.'</td>
                <td>
                  <a class="btn btn-primary" href="editmaggall.php?id='.$id_all.'">Sửa</a>
                  <a class="btn btn-danger" onclick="return confirm(\'Bạn có muốn xóa không ?\')" href="deletemaggall.php?id='.$id_all.'">Xóa</a>
                </td>
              </tr>';

            }
        }
    ?>
    
    
  </tbody>
</table>
<h3 class="text-center my-3 mt-5">Mã giảm giá theo khu vực</h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Tên Khu Vực</th>
      <th scope="col">Số mã</th>
      <th scope="col">Xem chi tiết</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        $sql_1 = "SELECT DISTINCT id_khuvuc FROM mggkhuvuc";
        $result_1= $conn->query($sql_1);
        if($result_1->num_rows > 0){
            $dem_1 = 0;
            while($row_1 = $result_1->fetch_assoc()){
                $dem_1++;
                $id_1 = $row_1['id_khuvuc'];
                $sql_2= "SELECT * FROM khuvuc WHERE id = $id_1";
                $result_2 = $conn -> query($sql_2);
                if($result_2->num_rows > 0){
                    while($row_2 = $result_2->fetch_assoc()){
                      $name_khuvuc = $row_2['name'];
                    }
                }
                $sql_all = "SELECT * FROM mggkhuvuc WHERE id_khuvuc = $id_1";
                $result_all = $conn->query($sql_all);
                if($result_all->num_rows > 0){
                    $dem_2=0;
                    while($row_all = $result_all->fetch_assoc()){ 
                        $dem_2++;
                    }
                }
                echo '<tr>
                <th scope="row">'.$dem_1.'</th>
                <td>'.$name_khuvuc.'</td>
                <td>'.$dem_2.'</td>
                <td><a class="btn btn-primary" href="magiamgiadetail.php?id='.$id_1.'&loai=khuvuc">Xem chi tiết</a></td>
              </tr>';

            }
        }
    ?>
    
    
  </tbody>
</table>
<h3 class="text-center my-3">Mã giảm giá tất cả homestay</h3>
<table class="table">
  <thead>
    <tr>
      <th  scope="col">STT</th>
      <th  scope="col">Tên homestay</th>
      <th  scope="col">Số mã</th>
      <th  scope="col">Xem chi tiết</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        $sql_ma = "SELECT DISTINCT id_khachsan FROM phieugiamgia";
        $result_ma = $conn->query($sql_ma);
        if($result_ma->num_rows > 0){
            $dem1 = 0;
            while($row_ma = $result_ma->fetch_assoc()){
                $dem1++;
                $id_hs = $row_ma['id_khachsan'];
                $sql_hs = "SELECT * FROM khachsan WHERE id = $id_hs";
                $result_hs = $conn -> query($sql_hs);
                if($result_hs->num_rows > 0){
                    while($row_hs = $result_hs->fetch_assoc()){
                      $name = $row_hs['name'];
                    }
                }
                $sql_magiam = "SELECT * FROM phieugiamgia WHERE id_khachsan = $id_hs";
                $result_magiam = $conn->query($sql_magiam);
                if($result_magiam->num_rows > 0){
                    $dem=0;
                    while($row_magiam = $result_magiam->fetch_assoc()){ 
                        $dem++;
                    }
                }
                echo '<tr>
                <th scope="row">'.$dem1.'</th>
                <td>'.$name.'</td>
                <td>'.$dem.'</td>
                <td><a class="btn btn-primary" href="magiamgiadetail.php?id='.$id_hs.'&loai=homestay">Xem chi tiết</a></td>
              </tr>';

            }
        }
    ?>
    
    
  </tbody>
</table>
<h3 class="text-center my-3">Mã giảm theo user mới đăng ký</h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Tên user</th>
      <th scope="col">Mã giảm giá</th>
      <th scope="col">Mức giảm</th>
      <th scope="col">Trạng thái</th>
      <th scope="col">Ngày hết hạn</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        $sql_mauser = "SELECT* FROM mgguser";
        $result_mauser = $conn->query($sql_mauser);
        if($result_mauser->num_rows > 0){
            $dem1 = 0;
            while($row_mauser = $result_mauser->fetch_assoc()){
                $dem1++;
                $name_magguser = $row_mauser['magiamgia'];
                $time_out = $row_mauser['time_out'];
                $status = $row_mauser['status'];
                $mucgiam = $row_mauser['mucgiam'];
                $id_user = $row_mauser['id_user'];
                $sql_user = "SELECT * FROM user WHERE id = $id_user";
                $result_user = $conn -> query($sql_user);
                if($result_user->num_rows > 0){
                  while($row_user = $result_user->fetch_assoc()){
                    $name_user = $row_user['name'];
                  }
                }
                echo '<tr>
                <th scope="row">'.$dem1.'</th>
                <td>'.$name_user.'</td>
                <td>'.$name_magguser.'</td>
                <td>'.$mucgiam.'đ</td>';
                if(strtotime($time_out) > strtotime($today)){
                  echo '<td>Còn hạn</td>';
                }else{
                  echo '<td>Hết hạn</td>';
                }
                
              echo '
              <td>'.$time_out.'</td>
              </tr>';

            }
        }
    ?>
    
    
  </tbody>
</table>
<?php 
    include 'footer.php';
?>