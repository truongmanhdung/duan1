<?php 
    include 'header.php';
?>

<h1 class="text-center py-5">Chi tiết bình luận</h1>
<div class="ms-2 my-3">
  <a onclick="history.go(-1)" class="btn btn-outline-primary" style="margin-left: 23px;">Trở lại</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th class="text-center" scope="col">STT</th>
      <th class="text-center" scope="col">Tên user</th>
      <th class="text-center" scope="col">Nội dung</th>
      <th class="text-center" scope="col">Số lượt thích</th>
      <th class="text-center" scope="col">Trạng thái</th>
      <th class="text-center" scope="col">Thời gian</th>
      <th class="text-center" scope="col">Chức năng</th>
    </tr>
  </thead>
  <tbody>
    <?php
        if(isset($_GET['id_hs'])){
            $id_hs = $_GET['id_hs'];
            $sql_comment = "SELECT * FROM comment WHERE id_khachsan=$id_hs";
            $result_comment = $conn->query($sql_comment);
            $dem = 0;
            if($result_comment->num_rows > 0){
                while($row_comment = $result_comment->fetch_assoc()){
                    $dem++;
                    $id_comment = $row_comment['id'];
                    $id_user = $row_comment['id_user'];
                    $comment = $row_comment['comment'];
                    $love = $row_comment['love'];
                    $solike = $row_comment['solike'];
                    $time = $row_comment['time'];
                    $sql_user = "SELECT * FROM user WHERE id = $id_user";
                    $result_user = $conn->query($sql_user);
                    $status = $row_comment['status'];
                    if($result_user->num_rows > 0){
                        while($row_user = $result_user->fetch_assoc()){
                            $name_user = $row_user['name'];
                        }
                    }
                    if($status == 0){
                        $trangthai ='
                            <label class="btn btn-primary" for="show_comment'.$id_comment.'">Chưa trả lời</label>
                            <input type="checkbox" hidden class="check_form"name="status" value="" id="show_comment'.$id_comment.'">
                            <div class="show_repadmin">
                                <form action="" method="post">
                                    <input type="text" class="form-control" name="admin_rep">
                                    <button type="submit" name="admin_rep_submit'.$id_comment.'" class="btn btn-primary my-2">Trả lời</button>
                                </form>
                            </div>
                        ';
                        if(isset($_POST['admin_rep_submit'.$id_comment.''])){
                            $admin_comment = $_POST['admin_rep'];
                            $sql_repadmin = "INSERT INTO admin_rep VALUES (null,$id_comment,$id_hs,$id_user,'$admin_comment','$today')";
                            $result_repadmin = $conn->query($sql_repadmin);
                            if($result_repadmin){
                                $sql_upstatus = "UPDATE comment SET status=1 WHERE id=$id_comment";
                                $result_up = $conn->query($sql_upstatus);
                                if($result_up){
                                    echo '
                                        <script>alert("Trả lời thành công")</script>
                                        <script>location.href="comment_detail.php?id_hs='.$id_hs.'"</script>
                                    ';
                                }
                            }
                        }
                    }else{
                        $trangthai = '
                        <button class="btn btn-success" disabled>Đã trả lời</button>
                    ';
                    }
                    echo '
                        <tr>
                            <th class="text-center" scope="row">'.$dem.'</th>
                            <td class="text-center">'.$name_user.'</td>
                            <td class="text-center">'.$comment.'</td>
                            <td class="text-center">'.$solike.'</td>
                            <td class="text-center">'.$trangthai.'</td>
                            <td class="text-center">'.$time.'</td>
                            <td class="text-center">
                                <a class="btn btn-danger"href="deletecomment.php?id='.$id_comment.'">Xóa bình luận</a>
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