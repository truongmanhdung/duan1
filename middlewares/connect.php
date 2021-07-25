<?php 
    $conn = new mysqli("localhost","root","","duan1");
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $timestamp = time();
    $date = date('Y-m-d',$timestamp);
    $today = date('Y-m-d H:i:s',$timestamp);
?>