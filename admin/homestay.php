<?php 
    include 'header.php';
    include 'connect.php';
?>
    <h1 class="text-center py-3">Quản lý homestay</h1>
    <table class="table">
      <thead>
        <tr>
          <th class="text-center" scope="col">STT</th>
          <th class="text-center" scope="col">Tên</th>
          <th class="text-center" scope="col">Giá</th>
          <th class="text-center" scope="col">Địa chỉ</th>
          <th class="text-center" scope="col">SĐT</th>
          <th class="text-center" scope="col">Ảnh</th>
          <th class="text-center" scope="col">Số phòng</th>
          <th class="text-center" scope="col">Khu vực</th>
          <th class="text-center" scope="col">Ngày thêm</th>
          <th class="text-center" scope="col">Chức năng</th>
        </tr>
      </thead>
      <tbody>
        <?php 
            if($_COOKIE['admin']){
                $sql_hs = "SELECT * FROM khachsan";
                $result_hs = $conn -> query($sql_hs);
                if($result_hs->num_rows > 0){
                    $dem = 1;
                    while($row_hs = $result_hs->fetch_assoc()){
                        $name = $row_hs['name'];
                        $address = $row_hs['address'];
                        $phone = $row_hs['phone'];
                        $sophong = $row_hs['sophong'];
                        $image = $row_hs['image'];
                        $id_khuvuc = $row_hs['id_khuvuc'];
                        $price = $row_hs['price'];
                        $time = $row_hs['time'];
                        $sql_kv = "SELECT * FROM khuvuc where id = $id_khuvuc";
                        $result_kv = $conn->query($sql_kv);
                        if($result_kv->num_rows > 0){
                            while($row_kv = $result_kv->fetch_assoc()){
                                $namekv = $row_kv['name'];
                            }
                        }
                        echo '
                            <tr >
                                <td style="vertical-align: middle" class="text-center">'.$dem.'</td>
                                <td style="vertical-align: middle; overflow: hidden" class="text-justify"><p style="width: 200px;">'.$name.'</p></td>
                                <td style="vertical-align: middle" class="text-center">'.number_format($price).'đ</td>
                                <td style="vertical-align: middle" class="text-center">'.$address.'</td>
                                <td style="vertical-align: middle" class="text-center">'.$phone.'</td>
                                <td style="vertical-align: middle" class="text-center">
                                    <img src="../public/image/homestay/'.$image.'" style="width: 100px;" alt="">
                                </td>
                                <td style="vertical-align: middle" class="text-center">'.$sophong.'</td>
                                <td style="vertical-align: middle" class="text-center">'.$namekv.'</td>
                                <td style="vertical-align: middle" class="text-center">'.$time.'</td>
                                <td style="vertical-align: middle" class="text-center">
                                    <a href="homestaydetail.php?id='.$row_hs['id'].'" class="btn btn-primary">Xem chi tiết</a>
                            </td>
                            </tr>
                        ';
                        $dem++;

                    }
                }
            }
        ?>
        
        
      </tbody>
    </table>

<?php 
    include 'footer.php';
?>