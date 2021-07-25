<?php 
    include 'header.php';
?>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">STT</th>
          <th scope="col">Tin nhắn</th>
          <th scope="col">Trạng thái</th>
          <th scope="col">Thời gian nhắn</th>
        </tr>
      </thead>
      <tbody>
          <?php 
            if(isset($_GET['id'])){
                $id_user = $_GET['id'];
                $sql = "SELECT * FROM message WHERE id_user = $id_user";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    $dem = 0;
                    while($row = $result->fetch_assoc()){
                        $dem++;
                        $id_mess = $row['id'];
                        $message = $row['message'];
                        $status = $row['status'];
                        $time = $row['time'];
                        echo '<tr>
                        <th scope="row">'.$dem.'</th>
                        <td>'.$message.'</td>';
                        if($status==0){
                            echo '
                                <td>
                                    <label for="checkmess'.$id_mess.'" class="btn btn-primary">Chưa trả lời, trả lời ngay</label>
                                    <input type="checkbox" hidden id="checkmess'.$id_mess.'" class="checkmess">
                                    <form action="" method="POST" class="repmess">
                                        <input type="text" class="form-control" name="repmessage" required>
                                        <button class="btn my-2 btn-primary" name="submit_repmess'.$id_mess.'" type="submit">Gửi</button>
                                    </form>
                                </td>
                            ';
                            if(isset($_POST['submit_repmess'.$id_mess.''])){
                                $repmessage = $_POST['repmessage'];
                                $sql_repmess = "INSERT INTO repmessage VALUES (null,$id_mess,$id_user,'$repmessage','$today')";
                                $result_repmess = $conn->query($sql_repmess);
                                if($result_repmess){
                                    $sql_status = "UPDATE message SET status = 1 WHERE id = $id_mess";
                                    $result_status = $conn->query($sql_status);
                                    if($result_status){
                                        echo '
                                            <script>
                                                alert("đã trả lời thành công");
                                                location.href="messagedetail.php?id='.$id_user.'"
                                            </script>
                                        ';
                                        
                                        
                                    }
                                }
                            }
                        }else{
                            echo '
                                <td>
                                    <button class="btn btn-primary">Đã trả lời</button>
                                </td>
                            ';
                        }
                        echo '<td>'.$time.'</td>
                      </tr>';
                    }
                }
            }
          ?>
        
        
      </tbody>
    </table>
<?php 
    include 'footer.php';
?>