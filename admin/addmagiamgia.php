<?php
include 'header.php';
include 'connect.php';
?>

<h1 class="text-center py-5">Thêm mã giảm giá</h1>
<div class="ms-2">
  <a onclick="history.go(-1)" class="btn btn-outline-primary" style="margin-left: 23px;">Trở lại</a>
</div>
<div class="m-4">
  <h3 class="my-3">Chọn loại mã giảm giá</h3>
  <div class="d-flex justify-content-between align-items-center ativiti">
    <div class="form-check ">
      <label class="form-check-label" id="radio1" for="radio1">
        Áp dụng tất cả
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" id="radio2" for="radio2">
        Áp dụng theo khu vực
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" id="radio3" for="radio3">
        Áp dụng theo homestay
      </label>
    </div>
  </div>
</div>
<form method="post" action="" class="m-4 form1" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Tên mã</label>
    <input type="text" name="name" class="form-control" id="exampleInputexampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Ngày bắt đầu</label>
    <input type="datetime-local" min="<?php echo $today?>" name="timeup" class="form-control" id="exampleInputexampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Ngày kết thúc</label>
    <input type="datetime-local" min="<?php echo $today?>" name="timeout" class="form-control" id="exampleInputexampleInputPassword1">
  </div>
  <div class="mb-3">
    <div class="form-check">
      <input class="form-check-input" type="radio" id="radio1" name="radio1" checked value="1" />
      <label class="form-check-label" for="radio1">
        Theo giá tiền
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" id="radio2" name="radio1" value="0" />
      <label class="form-check-label" for="radio2">
        Theo phần trăm
      </label>
    </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mức giảm</label>
    <input type="number" name="mucgiam" class="form-control" id="exampleInputexampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary" name="submit_add_phieu1">Thêm mã giảm giá</button>
</form>
<?php 
if (isset($_POST["submit_add_phieu1"])) {
  $magiamgia = $_POST['name'];
  $timeup = $_POST['timeup'];
  $timeout = $_POST['timeout'];
  $status = $_POST['radio1'];
  $mucgiam = $_POST['mucgiam'];
  $sql_magiam = "INSERT INTO maggall VALUES (null,'$magiamgia','$mucgiam','$status','$timeup','$timeout','$today')";
  $result_magiam = $conn->query($sql_magiam);
  if ($result_magiam) {
    echo '
                  <script>location.href="magiamgia.php"</script>
              ';
  }
}
?>

<form method="post" action="" class="m-4 form2" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Tên mã</label>
    <input type="text" name="name" class="form-control" id="exampleInputexampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Chọn khu vực</label>
    <select class="form-select form-control" name="id_khuvuc" aria-label="Default select example">
      <?php
      $sql_kv = "SELECT * FROM khuvuc";
      $result_kv = $conn->query($sql_kv);
      if ($result_kv->num_rows > 0) {
        while ($row_kv = $result_kv->fetch_assoc()) {
          $id_kv = $row_kv['id'];
          $name_kv = $row_kv['name'];

          echo '<option value="' . $id_kv . '">' . $name_kv . '</option>';
        }
      }
      ?>
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Ngày bắt đầu</label>
    <input type="datetime-local" min="<?php echo $today?>" name="timeup" class="form-control" id="exampleInputexampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Ngày kết thúc</label>
    <input type="datetime-local" min="<?php echo $today?>" name="timeout" class="form-control" id="exampleInputexampleInputPassword1">
  </div>
  <div class="mb-3">
    <div class="form-check">
      <input class="form-check-input" type="radio" id="radio12" name="radio" checked value="1" />
      <label class="form-check-label" for="radio12">
        Theo giá tiền
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" id="radio23" name="radio" value="0" />
      <label class="form-check-label" for="radio23">
        Theo phần trăm
      </label>
    </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mức giảm</label>
    <input type="number" name="mucgiam" class="form-control" id="exampleInputexampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary" name="submit_add_phieu2">Thêm mã giảm giá</button>
</form>
<?php

if (isset($_POST["submit_add_phieu2"])) {
  $name = $_POST['name'];
  $timeup = $_POST['timeup'];
  $timeout = $_POST['timeout'];
  $status = $_POST['radio'];
  $id_kv = $_POST['id_khuvuc'];
  $mucgiam = $_POST['mucgiam'];
  $sql_magiam = "INSERT INTO mggkhuvuc VALUES (null,'$name','$mucgiam','$timeup','$timeout',$status,$id_kv,'$today')";
  $result_magiam = $conn->query($sql_magiam);
  if ($result_magiam) {
    echo '
                  <script>location.href="magiamgia.php"</script>
              ';
  }
}
?>
<form method="post" action="" class="m-4 form3" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Tên mã</label>
    <input type="text" name="name" class="form-control" id="exampleInputexampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Chọn Homestay</label>
    <select class="form-select form-control" name="id_homestay" aria-label="Default select example">
      <?php
      $sql_hs = "SELECT * FROM khachsan";
      $result_hs = $conn->query($sql_hs);
      if ($result_hs->num_rows > 0) {
        while ($row_hs = $result_hs->fetch_assoc()) {
          $id_hs = $row_hs['id'];
          $name_hs = $row_hs['name'];

          echo '<option value="' . $id_hs . '">' . $name_hs . '</option>';
        }
      }
      ?>
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Ngày bắt đầu</label>
    <input type="datetime-local" min="<?php echo $today?>" name="timeup" class="form-control" id="exampleInputexampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Ngày kết thúc</label>
    <input type="datetime-local" min="<?php echo $today?>" name="timeout" class="form-control" id="exampleInputexampleInputPassword1">
  </div>
  <div class="mb-3">
    <div class="form-check">
      <input class="form-check-input" type="radio" id="radio123" name="radio3" checked value="1" />
      <label class="form-check-label" for="radio123">
        Theo giá tiền
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" id="radio147" name="radio3" value="0" />
      <label class="form-check-label" for="radio147">
        Theo phần trăm
      </label>
    </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mức giảm</label>
    <input type="number" name="mucgiam" class="form-control" id="exampleInputexampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary" name="submit_add_phieu3">Thêm mã giảm giá</button>
</form>

<?php
if (isset($_POST["submit_add_phieu3"])) {
  $name = $_POST['name'];
  $timeup = $_POST['timeup'];
  $timeout = $_POST['timeout'];
  $status = $_POST['radio'];
  $id_hs = $_POST['id_homestay'];
  $mucgiam = $_POST['mucgiam'];
  $sql_magiam = "INSERT INTO phieugiamgia VALUES (null,'$name','$mucgiam','$status',$id_hs,'$timeup','$timeout','$today')";
  $result_magiam = $conn->query($sql_magiam);
  if ($result_magiam) {
    echo '
                  <script>location.href="magiamgia.php"</script>
              ';
  }
}


?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function () {
    $("#radio1").click(function (e) { 
      e.preventDefault();
      $("#radio1").addClass("btn btn-primary");
      $("#radio2").removeClass("btn btn-primary");
      $("#radio3").removeClass("btn btn-primary");
      $(".form1").addClass("d-block");
      $(".form2").addClass("d-none");
      $(".form3").addClass("d-none");
      $(".form2").removeClass("d-block");
      $(".form3").removeClass("d-block");
    });
    $("#radio2").click(function (e) { 
      e.preventDefault();
      $("#radio2").addClass("btn btn-primary");
      $("#radio1").removeClass("btn btn-primary");
      $("#radio3").removeClass("btn btn-primary");
      $(".form1").addClass("d-none");
      $(".form3").addClass("d-none");
      $(".form2").addClass("d-block");
      $(".form1").removeClass("d-block");
      $(".form3").removeClass("d-block");
    });
    $("#radio3").click(function (e) { 
      e.preventDefault();
      $("#radio3").addClass("btn btn-primary");
      $("#radio1").removeClass("btn btn-primary");
      $("#radio2").removeClass("btn btn-primary");
      $(".form3").addClass("d-block");
      $(".form1").addClass("d-none");
      $(".form2").addClass("d-none");
      $(".form2").removeClass("d-block");
      $(".form1").removeClass("d-block");
    });
  });
</script>
<?php
include 'footer.php';
?>