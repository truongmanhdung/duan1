<?php 
    include 'connect.php';
    if(isset($_GET['loai'])){
        $loai = $_GET['loai'];
        if($loai =="khuvuc"){
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $id_kv = $_GET['id_kv'];
                $sql = "DELETE FROM mggkhuvuc WHERE id = '$id'";
                $result = $conn->query($sql);
                if($result){
                    header("location: magiamgiadetail.php?id=$id_kv&loai=khuvuc");
                }
            }
        }else if($loai =="homestay"){
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $id_hs = $_GET['id_hs'];
                $sql = "DELETE FROM phieugiamgia WHERE id = '$id'";
                $result = $conn->query($sql);
                if($result){
                    header("location: magiamgiadetail.php?id=$id_hs&loai=homestay");
                }
            }
        }
        
    }
?>