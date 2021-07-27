<?php 
    include 'header.php';
    include 'connect.php';
?>
    <h3 class="text-center my-5">Quản lý đơn đặt phòng</h3>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">STT</th>
          <th scope="col">Tên Homestay</th>
          <th scope="col">Số đơn đặt phòng</th>
          <th scope="col">Xem chi tiết</th>
        </tr>
      </thead>
      <tbody>
        <?php 
            $sql_hs = "SELECT * FROM khachsan WHERE id_doitac = $id_dt";
            $result_hs = $conn->query($sql_hs);
            if($result_hs->num_rows > 0){
                $dem = 0;
                while ($row_hs = $result_hs->fetch_assoc()) {
                    $dem++;
                    $id_hs = $row_hs['id'];
                    $name_hs = $row_hs['name'];
                    $sql_dh = "SELECT * FROM donhang WHERE id_hs = $id_hs";
                    $result_dh = $conn->query($sql_dh);
                    if($result_dh->num_rows > 0){
                        $dem2 = 0;
                        while($row_dh = $result_dh->fetch_assoc()){
                            $dem2++;
                        }
                        echo '
                        <tr>
                            <th scope="row">'.$dem.'</th>
                            <td>'.$name_hs.'</td>
                            <td>'.$dem2.'</td>
                            <td>
                                <a href="chitietdonhang.php?id='.$id_hs.'" class="btn btn-primary">Xem chi tiết</a>
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