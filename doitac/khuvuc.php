<?php 
    include 'header.php';
    include 'connect.php';
?>
    <h1 class="text-center py-5">Khu vực</h1>
    <a href="addkv.php" class="btn btn-primary my-3">Thêm khu vực</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">STT</th>
          <th scope="col">Name</th>
          <th scope="col">Số khách sạn</th>
          <th scope="col">Address</th>
          <th scope="col">Image</th>
          <th scope="col">Time</th>
          <th scope="col">Chức năng</th>
        </tr>
      </thead>
      <tbody>
        <?php 
            if($_COOKIE['admin']){
                $sql_kv = "SELECT * FROM khuvuc";
                $result_kv = $conn -> query($sql_kv);
                if($result_kv->num_rows > 0){
                    $dem = 1;
                    while($row_kv = $result_kv->fetch_assoc()){
                        $id = $row_kv['id'];
                        $sql_ks = "SELECT * FROM khachsan where id_khuvuc = '$id'";
                        $result_ks = $conn -> query($sql_ks);
                        $dem1 = 0;
                        if($result_ks->num_rows > 0){
                            while($row_ks = $result_ks->fetch_assoc()){
                                $dem1++;
                            }
                        }
                        echo '
                            <tr class="align-items-center">
                                <th scope="row">'.$dem.'</th>
                                <td>'.$row_kv['name'].'</td>
                                <td>'.$dem1.'</td>
                                <td style="width: 200px;">'.$row_kv['address'].'</td>
                                <td><img src="../public/image/khuvuc/'.$row_kv['image'].'" style="width: 100px;" alt=""></td>
                                <td>'.$row_kv['time'].'</td>
                                <td>
                                    <a href="editkv.php?id='.$row_kv['id'].'" class="btn btn-primary">Sửa</a>
                                    <a onclick="return confirm(\'Bạn có muốn xóa không ?\')" href="deletekv.php?id='.$row_kv['id'].'"  class="btn btn-danger">Xóa</a>
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