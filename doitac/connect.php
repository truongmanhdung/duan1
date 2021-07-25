<?php 
    $conn = new mysqli("localhost","root","","duan1");
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $timestamp = time();
    
    $today = date('Y-m-d H:i:s',$timestamp);
    if(isset($_COOKIE['doitac'])){
        $email_doitac = $_COOKIE['doitac'];
        $sql_dt = "SELECT * FROM doitac WHERE email = '$email_doitac'";
        $result_dt = $conn->query($sql_dt);
        if($result_dt->num_rows > 0){
            while($row_dt = $result_dt->fetch_assoc()){
                $id_dt = $row_dt['id'];
            }
        }
    }
?>