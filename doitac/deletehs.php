<?php 
    include 'connect.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM khachsan WHERE id = $id";
        $result = $conn->query($sql);
        if($result){
            header("Location: homestay.php");
        }
    }
?>