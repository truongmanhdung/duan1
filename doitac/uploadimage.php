<?php 
    include 'header.php';
    include '../middlewares/connect.php';
    if(isset($_GET['id'])){
        $id_hs = $_GET['id'];
    }
?>
    <h1 class="text-center py-3">Thêm ảnh homestyle</h1>
    <a onclick="history.go(-1)" class="btn btn-outline-primary" style="margin-left: 23px;">Trở lại</a>
    
  <form method="post" id="uploadForm" enctype="multipart/form-data" class="mx-4">
      <div class="form-group my-4">
        <label>Choose Images</label>
        <input type="file" name="images[]" id="images" multiple >
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Thêm ảnh</button>
  </form>

  <!-- display upload status -->
  <div id="uploadStatus" class="m-3" style="margin: 10px 0 0 20px"></div>

  <!-- gallery view of uploaded images --> 
  <div class="gallery" id="imagesPreview"></div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
      $(document).ready(function(){
          $('#uploadForm').ajaxForm({
              target:'#imagesPreview',
              url:'uploadimage.php',
              data: 'id=' + 1,
              beforeSubmit:function(){
                  $('#uploadStatus').html('<img src="uploading.gif"/>');
              },
              success:function(){
                  $('#images').val('');
                  $('#uploadStatus').html('');
              },
              error:function(){
                  $('#uploadStatus').html('Images upload failed, please try again.');
              }
          });
      });
</script>
</body>

</html>
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
          $sql_up = "INSERT INTO imagechitietkhachsan VALUES (null,$id_hs,'$image_src')";
          $result_up = $conn->query($sql_up);
          if($result_up){
            echo "<script>location.href='chitietkhachsan.php?id='$id_hs'";
          }
        }
    
    }


?>
<?php 
    include 'footer.php';
?>



