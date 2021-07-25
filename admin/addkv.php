<?php 
    include 'header.php';
    include 'connect.php';
?>
    <h1 class="text-center py-5">Thêm khu vực</h1>
    <div class="ms-2">
        <a onclick="history.go(-1)" class="btn btn-outline-primary" style="margin-left: 23px;">Trở lại</a>
    </div>
    <form method="post" action="" class="m-4" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Tên khu vực</label>
        <input type="text" name="name" class="form-control" id="exampleInputexampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Địa chỉ</label>
        <input type="text" name="address" class="form-control" id="exampleInputexampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Ảnh khu vực</label>
        <label for="imgInp">
            <img class="" width="100px" src="../public/image/taixuong.png" alt="" id="blah">
        </label>
        <input type="file" accept=".png, .jpg, .jpeg" name="image" id="imgInp" hidden>
    </div>
    <button type="submit" class="btn btn-primary" name="submit_add_kv">Thêm khu vực</button>
</form>
<script>
    imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
            blah.src = URL.createObjectURL(file)
        }
    }
</script>
<?php
if (isset($_POST["submit_add_kv"])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    if ($_FILES['image']['type'] == "image/jpeg" || $_FILES['image']['type'] == "image/png" || $_FILES['image']['type'] == "image/gif" || $_FILES['image']['type'] == "image/webp") {
        $image = $_FILES['image']['name'];

        // Lấy ra tên ảnh
        $tmp = $_FILES['image']['tmp_name'];
        // Khai báo biến lưu trữ đường dẫn
        move_uploaded_file($tmp, "../public/image/khuvuc/" . $image);
        $sql1 = "SELECT * FROM `khuvuc` WHERE `name` =  '$name'";
        $result1 = $conn->query($sql1);
        if ($result1->num_rows > 0) {
            echo '<div class="alert alert-danger" role="alert">
             Đã có thương hiệu, vui lòng nhập tên thương hiệu khác !!!
          </div>';
        } else {
            $sql = "INSERT INTO khuvuc VALUES (null,'$name','$image','$address','$today')";
            $result = $conn->query($sql);
            if ($result) {
                echo "<script>location.href='khuvuc.php'</script>";
            }
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">
          Vui lòng chọn đúng định dạng ảnh jpg/jpeg/png/webp/gif
        </div>';
    }
}
?>
<?php 
    include 'footer.php';
?>