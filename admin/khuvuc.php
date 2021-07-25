<?php 
    include 'header.php';
    include 'connect.php';
?>
    <h1 class="text-center py-5">Khu vực</h1>
    <a href="addkv.php" class="btn btn-primary my-3">Thêm khu vực</a>
    <table class="table">
      <thead>
        <tr>
          <th class="text-center" scope="col">STT</th>
          <th class="text-center" scope="col">Name</th>
          <th class="text-center" scope="col">Số khách sạn</th>
          <th class="text-center" scope="col">Address</th>
          <th class="text-center" scope="col">Image</th>
          <th class="text-center" scope="col">Time</th>
          <th class="text-center" scope="col">Chức năng</th>
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
                                <th class="text-center" scope="row">'.$dem.'</th>
                                <td class="text-center">'.$row_kv['name'].'</td>
                                <td class="text-center">'.$dem1.'</td>
                                <td class="text-center" style="width: 200px;">'.$row_kv['address'].'</td>
                                <td class="text-center"><img src="../public/image/khuvuc/'.$row_kv['image'].'" style="width: 100px;" alt=""></td>
                                <td class="text-center">'.$row_kv['time'].'</td>
                                <td class="text-center">
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