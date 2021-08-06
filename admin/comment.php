<?php 
    include 'header.php';
    include 'connect.php';
?>
    <h1 class="text-center py-5">Quản lý bình luận</h1>
    
    <table class="table">
      <thead>
        <tr>
          <th class="text-center" scope="col">STT</th>
          <th class="text-center" scope="col">Tên homestay</th>
          <th class="text-center" scope="col">Số comment</th>
          <th class="text-center" scope="col">Xem chi tiết</th>
        </tr>
      </thead>
      <tbody>
        <?php 
            if($_COOKIE['admin']){
                $sql_comment = "SELECT DISTINCT id_khachsan FROM comment";
                $result_comment = $conn->query($sql_comment);
                $dem1 = 0;
                if($result_comment->num_rows > 0){
                    $dem1++;
                    while($row = $result_comment->fetch_assoc()){
                        $id_hs = $row['id_khachsan'];
                        $sql_hs = "SELECT * FROM khachsan WHERE id= $id_hs";
                        $result_hs = $conn->query($sql_hs);
                        if($result_hs->num_rows > 0){
                            while($row_hs = $result_hs->fetch_assoc()){
                                $name_hs = $row_hs['name'];
                            }
                        }
                        $sql_dem = "SELECT * FROM comment WHERE id_khachsan = $id_hs";
                        $result_dem = $conn->query($sql_dem);
                        $dem=0;
                        if($result_dem->num_rows>0){
                            while ($row_dem = $result_dem->fetch_assoc()) {
                                $dem++;
                            }
                        }
                        echo '
                            <tr>
                                <td class="text-center">'.$dem1.'</td>
                                <td class="text-center">'.$name_hs.'</td>
                                <td class="text-center">'.$dem.'</td>
                                <td class="text-center"><a class="btn btn-primary" href="comment_detail.php?id_hs='.$id_hs.'">Xem chi tiết</a></td>
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