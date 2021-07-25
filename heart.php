<?php
include './middlewares/connect.php';    
    if(isset($_COOKIE['user'])){
      $email = $_COOKIE['user'];
      $sql_user = "SELECT * FROM user where email = '$email'";
      $result_user = $conn->query($sql_user);
      if($result_user->num_rows > 0){
        while ($row_user = $result_user->fetch_assoc()){
          $id_user = $row_user['id'];
        }
      }
      if(isset($_POST['id'])){
        $id_hs1 = $_POST['id'];
        $sql1 = "SELECT * FROM khachsan WHERE id = '$id_hs1'";
        $result1 = $conn->query($sql1);
        if($result1->num_rows > 0){
          while($row1 = $result1->fetch_assoc()) {
            $love = $row1['love'];
            if($love ===  "0"){
              $sql_love = "INSERT INTO favourite VALUES (null,$id_hs1,$id_user,1,'$today')";
              $result_love = $conn->query($sql_love);
              $sql_tym = "UPDATE khachsan SET love = '1' WHERE id = '$id_hs1'";
              $result_tym = $conn->query($sql_tym);
              if($result_tym && $result_love){
                echo "đã thêm vào mục yêu thích";
              }
            }else{
              $sql_love = "DELETE FROM favourite where id_khachsan = $id_hs1";
              $result_love = $conn->query($sql_love);
              $sql_tym = "UPDATE khachsan SET love = 0 WHERE id = '$id_hs1'";
              $result_tym = $conn->query($sql_tym);
              if($result_tym && $result_love){
                echo "đã xóa khỏi mục yêu thích";
              }
            }
          }
        }
    }
    }else{
      echo "vui lòng đăng kí hoặc đăng nhập để thêm homestay yêu thích nhé !!!";
    }

?>