<?php 
    include 'header.php';
    if(isset($_GET['id'])){
        $id_dt = $_GET['id'];
        $sql_dt = "SELECT * FROM doitac WHERE id = '$id_dt'";
        $result_dt = $conn->query($sql_dt);
        if($result_dt->num_rows > 0){
            while($row_dt = $result_dt->fetch_assoc()){
                $name_dt = $row_dt['name'];
                echo '<h3 class="text-center my-3 ">Tất cả homestay của <span class="text-uppercase">'.$name_dt.'</span></h3>';
            }
        }
    }
?>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">STT</th>
          <th scope="col">Tên Homestay</th>
          <th scope="col">Khu vực</th>
          <th scope="col">Giá 1 đêm</th>
          <th scope="col">Số điện thoại</th>
          <th scope="col">Ảnh</th>
          <th scope="col">Số đơn đặt phòng</th>
          <th scope="col">Xem chi tiết</th>
        </tr>
      </thead>
      <tbody>
        <?php 
            $sql_hs = "SELECT * FROM khachsan WHERE id_doitac = $id_dt";
            $result_hs = $conn->query($sql_hs);
            if($result_hs->num_rows > 0){
                $dem1 = 0;
                while ($row_hs = $result_hs->fetch_assoc()) {
                    $dem1++;
                    $id_hs = $row_hs['id'];
                    $name_hs = $row_hs['name'];
                    $id_kv = $row_hs['id_khuvuc'];
                    $sql_kv = "SELECT * FROM khuvuc WHERE id = $id_kv";
                    $result_kv = $conn->query($sql_kv);
                    if($result_kv->num_rows > 0){
                        while ($row_kv = $result_kv->fetch_assoc()) {
                            $name_kv = $row_kv['name'];
                        }
                    }
                    $price_hs = $row_hs['price'];
                    $phone_hs = $row_hs['phone'];
                    $image_hs = $row_hs['image'];
                    $sql_dh = "SELECT * FROM donhang WHERE id_hs = $id_hs";
                    $result_dh = $conn->query($sql_dh);
                    $dem2 = 0;
                    if($result_dh->num_rows > 0){
                        while ($row_dh = $result_dh->fetch_assoc()) {
                            $dem2++;
                        }
                    }
                    echo '<tr>
                    <th scope="row">'.$dem1.'</th>
                    <td>'.$name_hs.'</td>
                    <td>'.$name_kv.'</td>
                    <td>'.number_format($price_hs).'đ</td>
                    <td>'.$phone_hs.'</td>
                    <td><img width="100px" height="100px" style="object-fit: cover" src="../public/image/homestay/'.$image_hs.'" alt=""></td>
                    <td>'.$dem2.'</td>
                    <td>
                        <a class="btn btn-primary"href="donhang.php?id='.$id_hs.'">Xem chi tiết</a>
                    </td>
                  </tr>';
                }
            }

        ?>
        
      </tbody>
    </table>
<?php 
    include 'footer.php';
?>