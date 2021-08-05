<?php
    include './middlewares/connect.php';
    if (isset($_POST['solike']) && isset($_POST['love']) && isset($_POST['id_rep'])){
        $solike = $_POST['solike'];
        $love = $_POST['love'];
        $id_rep = $_POST['id_rep'];
        if($love==0){
            $solikenew = $solike+1;
            $lovenew = 1;
            $sql_comment = "UPDATE repcomment SET love=$lovenew , solike=$solikenew WHERE id=$id_rep";
            $result_comment = $conn->query($sql_comment);
            if($result_comment){
                echo $solikenew;
                echo "/";
                echo $lovenew;
            }
        }else{
            $lovenew = 0;
            $solikenew = $solike-1;
            $sql_comment = "UPDATE repcomment SET love=$lovenew , solike=$solikenew WHERE id=$id_rep";
            $result_comment = $conn->query($sql_comment);
            if($result_comment){
                echo $solikenew;
                echo "/";
                echo $lovenew;
            }
        }
        
        
    }
