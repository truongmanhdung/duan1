<?php 
    include 'connect.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM khuvuc WHERE id = $id";
        $result = $conn->query($sql);
        if($result){
            header("Location: khuvuc.php");
        }
    }
?>