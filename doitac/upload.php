<?php
    if(isset($_POST['submit'])){
        // File upload configuration
        $targetDir = "../public/image/homestay/homestaydetail/";
        $allowTypes = array('jpg','png','jpeg','gif');
        
        $images_arr = array();
        foreach($_FILES['images']['name'] as $key=>$val){
            $image_name = $_FILES['images']['name'][$key];
            $tmp_name   = $_FILES['images']['tmp_name'][$key];
            $size       = $_FILES['images']['size'][$key];
            $type       = $_FILES['images']['type'][$key];
            $error      = $_FILES['images']['error'][$key];
            
            // File upload path
            $fileName = basename($_FILES['images']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;
            
            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){    
                // Store images on the server
                if(move_uploaded_file($_FILES['images']['tmp_name'][$key],$targetFilePath)){
                    $images_arr[] = $fileName;
                }
            }
        }
        foreach($images_arr as $image_src){
          $sql_up = "INSERT INTO imagechitietkhachsan VALUES (null,$id_chitiet,'$image_src')";
          $result_up = $conn->query($sql_up);
          if($result_up){
            echo '
                <img src="../public/image/homestay/homestaydetail/'.$image_src.'" class="" width="100px" height="100px" style="object-fit: cover" alt="">
            ';
          }
        }
    
    }


?>
