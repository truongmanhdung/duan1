<?php 
    include "connect.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $id_hs = $_GET['id_hs'];
        $sql = "DELETE FROM donhang WHERE id = $id";
        $result = $conn->query($sql);
        if($result){
            header("Location: chitietdonhang.php?id=$id_hs");
        }
    }
?>