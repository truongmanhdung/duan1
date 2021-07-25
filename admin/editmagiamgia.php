<?php 
    include 'header.php';
    include 'connect.php';
?>
    <?php

    if(isset($_GET['loai'])){
      $loai = $_GET['loai'];
      if($loai=="khuvuc"){
        if(isset($_GET['id'])){
          $id_ma = $_GET['id'];
          $id_kv = $_GET['id_kv'];
          $sql_ma = "SELECT * FROM mggkhuvuc WHERE id = $id_ma";
          $result_ma = $conn->query($sql_ma);
          if($result_ma->num_rows > 0){
              while($row_ma = $result_ma->fetch_assoc()){
                  $name = $row_ma['magiamgia'];
                  $mucgiam = $row_ma['mucgiam'];
                  $status = $row_ma['status'];
                  $time = $row_ma['time'];
                  $time_out = $row_ma['time_out'];
                  $time_up = $row_ma['time_up'];
              }
          }
        }
      }else if($loai=="homestay"){
          $id_ma = $_GET['id'];
          $id_hs = $_GET['id_hs'];
          $sql_ma = "SELECT * FROM phieugiamgia WHERE id = $id_ma";
          $result_ma = $conn->query($sql_ma);
          if($result_ma->num_rows > 0){
              while($row_ma = $result_ma->fetch_assoc()){
                  $name = $row_ma['magiamgia'];
                  $mucgiam = $row_ma['mucgiam'];
                  $status = $row_ma['status'];
                  $time = $row_ma['time'];
                  $time_out = $row_ma['time_out'];
                  $time_up = $row_ma['time_up'];
              }
          }
      }
    }
        
    ?>
    <h1 class="text-center py-5">Sửa mã giảm giá</h1>
    <div class="ms-2">
        <a onclick="history.go(-1)" class="btn btn-outline-primary" style="margin-left: 23px;">Trở lại</a>
    </div>
    <form method="post" action="" class="m-4" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Tên mã</label>
        <input type="text" value="<?php echo $name?>" name="name" class="form-control" id="exampleInputexampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Ngày bắt đầu</label>
        <input type="datetime-local" value="<?php echo $time_up?>" name="timeup" class="form-control" id="exampleInputexampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Ngày kết thúc</label>
        <input type="datetime-local" value="<?php echo $time_out?>" name="timeout" class="form-control" id="exampleInputexampleInputPassword1">
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input
          class="form-check-input"
          type="radio"
          id="radio1"
          name="radio"
          <?php 
            if($status == 1){
                echo 'checked';
            }
          ?>
          value="1"
        />
        <label class="form-check-label" for="radio1">
          Theo giá tiền
        </label>
      </div>
      <div class="form-check">
        <input
          class="form-check-input"
          type="radio"
          id="radio2"
          name="radio"
          value="0"
          <?php 
            if($status == 0){
                echo 'checked';
            }
          ?>
        />
        <label class="form-check-label" for="radio2">
          Theo phần trăm
        </label>
      </div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Mức giảm</label>
        <input type="number" name="mucgiam" value="<?php echo $mucgiam?>" class="form-control" id="exampleInputexampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary" name="submit_edit_phieu">Sửa mã giảm giá</button>
</form>

<?php

      if($loai =="khuvuc"){
        if (isset($_POST["submit_edit_phieu"])) {
          $name = $_POST['name'];
          $time_up = $_POST['timeup'];
          $time_out = $_POST['timeout'];
          $status = $_POST['radio'];
          $mucgiam = $_POST['mucgiam'];
          $sql_magiam = "UPDATE mggkhuvuc SET magiamgia = '$name',mucgiam = '$mucgiam',status = $status,time_out='$time_out',time_up='$time_up' WHERE id=$id_ma";
          $result_magiam = $conn->query($sql_magiam);
          if($result_magiam){
              echo '
                  <script>location.href="magiamgiadetail.php?id='.$id_kv.'&loai=khuvuc"</script>
              ';
          }
      }
      }else if($loai =="homestay"){
        if (isset($_POST["submit_edit_phieu"])) {
          $name = $_POST['name'];
          $time_up = $_POST['timeup'];
          $time_out = $_POST['timeout'];
          $status = $_POST['radio'];
          $mucgiam = $_POST['mucgiam'];
          $sql_magiam = "UPDATE phieugiamgia SET magiamgia = '$name',mucgiam = '$mucgiam',status = $status,time_out='$time_out',time_up='$time_up' WHERE id=$id_ma";
          $result_magiam = $conn->query($sql_magiam);
          if($result_magiam){
              echo '
                  <script>location.href="magiamgiadetail.php?id='.$id_hs.'&loai=homestay"</script>
              ';
          }
      }
      }
      
?>
<?php 
    include 'footer.php';
?>