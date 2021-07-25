<?php
    include "./middlewares/connect.php";
    if(isset($_COOKIE['user'])){
        if(isset($_POST['message'])){
            $email = $_COOKIE['user'];
            $sql_user = "SELECT * FROM user where email = '$email'";
            $result_user = $conn->query($sql_user);
            if($result_user->num_rows > 0){
                while($row_user = $result_user->fetch_assoc()){
                    $id_user = $row_user['id'];
                    $email = $row_user['email'];
                    $name = $row_user['name'];
                }
            }
            $message = $_POST['message'];
            $sql_message = "INSERT INTO message VALUES (null,$id_user,'$name','$email','$message','$today',0)";
            $result_message = $conn->query($sql_message);
            if($result_message){
                $sql_show = "SELECT * from message where id_user = $id_user";
                $result_show = $conn->query($sql_show);
                if($result_show->num_rows > 0){
                    while ($row_show = $result_show->fetch_assoc()){
                        $message_show = $row_show['message'];
                        $id_mess1 = $row_show['id'];
                        echo '<p class="message_show my-2">'.$message_show.'</p>';
                        $sql_repmessage = "SELECT * FROM repmessage WHERE id_message = '$id_mess1'";
                            $result_repmessage = $conn->query($sql_repmessage);
                            if($result_repmessage->num_rows > 0){
                                while($row_repmessage = $result_repmessage->fetch_assoc()){
                                    $rep_message = $row_repmessage['message'];
                                    echo '<div class="d-flex align-items-center ms-2 rep-message">
                                                <img width="50px" height="50px" src="https://www.pikpng.com/pngl/b/75-756814_login-user-imagen-user-png-clipart.png" class="rounded-circle" alt="">
                                                <p class="message_rep">'.$rep_message.'</p>
                                        </div>';
                                }
                            }
                    }
                }
            }
        }
    }
    
?>