<?php 
    setcookie("user",$email, time() - (86400 * 30), "/");
    header("Location: index.php");
?>