<?php
include 'header.php';
include 'connect.php';
?>
<h1 class="text-center py-5">Thêm homestay</h1>
<div class="ms-2">
    <a onclick="history.go(-1)" class="btn btn-outline-primary" style="margin-left: 23px;">Trở lại</a>
</div>
<form method="post" action="" class="m-4" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Tên homestay</label>
        <input type="text" required name="name" class="form-control" id="exampleInputexampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Giá</label>
        <input type="number" required name="price" min="1" class="form-control" id="exampleInputexampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Địa chỉ</label>
        <input type="text" required name="address" class="form-control" id="exampleInputexampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Số điện thoại</label>
        <input type="tel" required pattern="[0-9]{3}[0-9]{3}[0-9]{4}" name="phone" class="form-control" id="exampleInputexampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Số phòng ngủ</label>
        <input type="number" required min="1" name="sophong" class="form-control" id="exampleInputexampleInputPassword1">
    </div>
    <div class="mb-3">
        <select class="form-select" name="khuvuc" aria-label="Default select example">
            <option selected>Khu vực</option>
            <?php
            $sql_kv = "SELECT * FROM khuvuc";
            $result_kv = $conn->query($sql_kv);
            if ($result_kv->num_rows > 0) {
                while ($row_kv = $result_kv->fetch_assoc()) {
                    $id_kv = $row_kv['id'];
                    $name_kv = $row_kv['name'];
                    echo '
                            <option value="' . $id_kv . '">' . $name_kv . '</option>
                        ';
                }
            }

            ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Ảnh homestay</label>
        <label for="imgInp">
            <img class=""  width="100px" src="../public/image/taixuong.png" alt="" id="blah">
        </label>
        <input type="file" accept=".png, .jpg, .jpeg" name="image" id="imgInp" hidden>
    </div>
    <button type="submit" class="btn btn-primary" name="submit_add_hs">Thêm homestay</button>
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
if (isset($_POST["submit_add_hs"])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $sophong = $_POST['sophong'];
    $id_kv = $_POST['khuvuc'];
    $price = $_POST['price'];
    $phone = $_POST['phone'];
    if ($_FILES['image']['type'] == "image/jpeg" || $_FILES['image']['type'] == "image/png" || $_FILES['image']['type'] == "image/gif" || $_FILES['image']['type'] == "image/webp") {
        $image = $_FILES['image']['name'];

        // Lấy ra tên ảnh
        $tmp = $_FILES['image']['tmp_name'];
        // Khai báo biến lưu trữ đường dẫn
        move_uploaded_file($tmp, "../public/image/homestay/" . $image);
        
        $sql_hs = "INSERT INTO khachsan VALUES (null,$id_dt,'$name',$price,'$address','$phone',0,'$image',$sophong,$id_kv,'','$today')";
        $result_hs = $conn->query($sql_hs);
        
        if ($result_hs) {
            echo "<script>location.href='homestay.php'</script>";
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