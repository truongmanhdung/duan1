<?php 
    setcookie("doitac",$email, time() - (86400 * 30), "/");
    header("Location: index.php");
?>