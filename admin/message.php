<?php 
    include 'header.php';
?>

<table class="table">
  <thead>
    <tr>
      <th class="text-center" scope="col">STT</th>
      <th class="text-center" scope="col">Tên</th>
      <th class="text-center" scope="col">Số tin nhắn</th>
      <th class="text-center" scope="col">Xem chi tiết</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        $sql = "SELECT DISTINCT id_user FROM message";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            $dem1 = 0;
            while($row = $result->fetch_assoc()){
                $dem1++;
                $id_user = $row['id_user'];
                $sql_mess = "SELECT * FROM message WHERE id_user = $id_user";
                $result_mess = $conn->query($sql_mess);
                if($result_mess->num_rows > 0){
                    $dem=0;
                    while($row_mess = $result_mess->fetch_assoc()){
                        $dem++;
                        $name = $row_mess['name'];
                    }
                }
                echo '<tr>
                <th class="text-center" scope="row">'.$dem1.'</th>
                <td class="text-center">'.$name.'</td>
                <td class="text-center">'.$dem.'</td>
                <td class="text-center"><a class="btn btn-primary" href="messagedetail.php?id='.$id_user.'">Xem chi tiết</a></td>
              </tr>';

            }
        }
    ?>
    
    
  </tbody>
</table>
<?php 
    include 'footer.php';
?>