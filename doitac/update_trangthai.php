<?php
    include 'connect.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $id_hs = $_GET['id_hs'];
        $sql = "SELECT * FROM donhang WHERE id = $id";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                $trangthai = $row['trangthai'];
                $tongtien = $row['tongtien'];
                $time_out = $row['checkout'];
                $time_up = $row['checkin'];
                $name = $row['name'];
                $email = $row['email'];
                $phone = $row['phone'];
                $address = $row['address'];
                $trangthainew = $trangthai + 1;
                if($trangthainew<=4){
                    $sql_update = "UPDATE donhang SET trangthai=$trangthainew WHERE id=$id";
                    $result_update = $conn->query($sql_update);
                    if($result_update){
                        header("Location: chitietdonhang.php?id=$id_hs");
                    }
                }else{
                    $sql_delete = "DELETE FROM donhang WHERE id=$id";
                    $result_delete = $conn->query($sql_delete);
                    if($result_delete){
                        $sql_history = "INSERT INTO history VALUES (null,'$name','$email',$phone,'$address',$tongtien,'$time_up','$time_out',$id_hs,$id_dt,'$today')";
                        $result_history = $conn->query($sql_history);
                        if($result_history){
                            header("Location: chitietdonhang.php?id=$id_hs");
                        }
                    }
                }
                
            }
        }
    }
?>