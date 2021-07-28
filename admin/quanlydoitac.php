<?php 
    include 'header.php';
?>
    <h3 class="text-center my-3">Quản lý đối tác theo khu vực</h3>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">STT</th>
          <th scope="col">Tên đối tác</th>
          <th scope="col">Số homestay</th>
          <th scope="col">Email</th>
          <th scope="col">Số điện thoại</th>
          <th scope="col">Số cmnd</th>
          <th scope="col">Địa chỉ</th>
          <th scope="col">Xem chi tiết</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $sql_dt = "SELECT * FROM doitac";
          $result_dt = $conn->query($sql_dt);
          if($result_dt->num_rows > 0){
            $dem1 = 0;
            while($row_dt = $result_dt->fetch_assoc()){
              $dem1++;
              $id_dt = $row_dt['id'];
              $name_dt = $row_dt['name'];
              $email_dt = $row_dt['email'];
              $address_dt = $row_dt['address'];
              $cmnd = $row_dt['cmnd'];
              $phone = $row_dt['phone'];
              $sql_hs = "SELECT * FROM khachsan where id_doitac = $id_dt";
              $result_hs = $conn -> query($sql_hs);
              if ($result_hs->num_rows > 0) {
                $dem2 = 0;
                while ($row_hs = $result_hs->fetch_assoc()) {
                  $dem2++;
                }
                echo '
                <tr>
                  <th scope="row">'.$dem1.'</th>
                  <td>'.$name_dt.'</td>
                  <td>'.$dem2.'</td>
                  <td>'.$email_dt.'</td>
                  <td>0'.$phone.'</td>
                  <td>'.$cmnd.'</td>
                  <td>'.$address_dt.'</td>
                  <td>
                    <a href="doitachomestay.php?id='.$id_dt.'" class="btn btn-success">Xem chi tiết</a>
                  </td>
                </tr>
              ';
              }
              
            }
          }
        ?>
        
      </tbody>
    </table>
<?php 
    include 'footer.php';
?>