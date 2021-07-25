<?php 
    include 'header.php';
    include 'connect.php';
?>
    <h1 class="text-center py-3">Quản lý homestay</h1>
    <a href="addhs.php" class="btn btn-primary my-3">Thêm homestay</a>
    <table class="table">
      <thead>
        <tr>
          <th class="text-center" scope="col">STT</th>
          <th class="text-center" scope="col">Tên homestay</th>
          <th class="text-center" scope="col">Giá</th>
          <th class="text-center" scope="col">Địa chỉ</th>
          <th class="text-center" scope="col">Số điện thoại</th>
          <th class="text-center" scope="col">Ảnh</th>
          <th class="text-center" scope="col">Số phòng</th>
          <th class="text-center" scope="col">Khu vực</th>
          <th class="text-center" scope="col">Ngày thêm</th>
          <th class="text-center" scope="col">Chức năng</th>
        </tr>
      </thead>
      <tbody>
        <?php 
            if($_COOKIE['doitac']){
                $sql_hs = "SELECT * FROM khachsan where id_doitac = $id_dt";
                $result_hs = $conn -> query($sql_hs);
                if($result_hs->num_rows > 0){
                    $dem = 1;
                    while($row_hs = $result_hs->fetch_assoc()){
                        $name = $row_hs['name'];
                        $address = $row_hs['address'];
                        $phone = $row_hs['phone'];
                        $price = $row_hs['price'];
                        $sophong = $row_hs['sophong'];
                        $image = $row_hs['image'];
                        $id_khuvuc = $row_hs['id_khuvuc'];
                        $time = $row_hs['time'];
                        $sql_kv = "SELECT * FROM khuvuc where id = $id_khuvuc";
                        $result_kv = $conn->query($sql_kv);
                        if($result_kv->num_rows > 0){
                            while($row_kv = $result_kv->fetch_assoc()){
                                $namekv = $row_kv['name'];
                            }
                        }
                        echo '
                            <tr>
                                <td class="text-center">'.$dem.'</td>
                                <td class="text-center"><a href="homestaydetail.php?id='.$row_hs['id'].'">'.$name.'</a></td>
                                <td class="text-center">'.number_format($price).' đ</td>
                                <td class="text-center">'.$address.'</td>
                                <td class="text-center">'.$phone.'</td>
                                <td class="text-center">
                                    <img src="../public/image/homestay/'.$image.'" style="width: 100px;" alt="">
                                </td>
                                <td class="text-center">'.$sophong.'</td>
                                <td class="text-center">'.$namekv.'</td>
                                <td class="text-center">'.$time.'</td>
                                <td class="text-center">
                                    <a href="ediths.php?id='.$row_hs['id'].'" class="btn btn-primary">Sửa</a>
                                    <a onclick="return confirm(\'Bạn có muốn xóa không ?\')" href="deletehs.php?id='.$row_hs['id'].'"  class="btn btn-danger">Xóa</a>
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