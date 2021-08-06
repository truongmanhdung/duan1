<?php
    include "./connect.php";
        if(isset($_POST['message'])){
            $id_user = $_POST['id_user'];
            $sql_user = "SELECT * FROM user WHERE id = $id_user";
            $result_user = $conn->query($sql_user);
            if($result_user->num_rows > 0){
                while($row_user = $result_user->fetch_assoc()){
                    $email = $row_user['email'];
                    $name = $row_user['name'];
                }
            }
            $message = $_POST['message'];
            $sql_message = "INSERT INTO message VALUES (null,$id_user,'$name','$email','$message','$today',1)";
            $result_message = $conn->query($sql_message);
            if($result_message){
                $sql_show = "SELECT * from message where id_user = $id_user ORDER BY time ASC";
                $result_show = $conn->query($sql_show);
                if($result_show->num_rows > 0){
                    while ($row_show = $result_show->fetch_assoc()){
                        $message_show = $row_show['message'];
                        $id_mess1 = $row_show['id'];
                        $status = $row_show['status'];
                        if ($status == 0) {
                            echo '<div class="bubble you">
                                ' . $message_show . '
                                </div>';
                          } else {
                            echo '<div class="bubble me">
                                ' . $message_show . '
                              </div>';
                          }
                        
                        
                    }
                }
            }
        }
