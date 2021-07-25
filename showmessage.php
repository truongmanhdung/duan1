<?php 
    include "./middlewares/connect.php";
    if(!empty($_POST['email'])){
        $email = $_POST['email'];
        var_dump($email);
        $sql = "SELECT * FROM messages WHERE email = '$email'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                $message = $row['message'];
                echo '<div class="message_hover">
                <div class="d-flex bg-primary text-white align-items-center justify-content-between p-3">
                    <h5 class="m-0 ">Tin nhắn</h5>
                    <label for="checkbox_message" class="fas fa-times"></label>
                </div>
                <div class="p-3">
                  <p class="showmessage bg-white p-2">
                    <p class="p-x2 m-0 text-ad text-lg-end">'.$message.'</p>
                  </p>
                  <textarea class="form-control message_add" name="message" placeholder="Nhập tin nhắn" ></textarea>
                </div>
            </div>';
            }
        }
    }
?>