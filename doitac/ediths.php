<?php
include 'header.php';
include 'connect.php';
?>
<h1 class="text-center py-5">Sửa thông tin homestay</h1>
<div class="ms-2">
    <a onclick="history.go(-1)" class="btn btn-outline-primary" style="margin-left: 23px;">Trở lại</a>
</div>
<?php 
    if(isset($_GET['id'])){
        $id_hs = $_GET['id'];
        $sql_hs = "SELECT * FROM khachsan where id = '$id_hs'";
        $result_hs = $conn->query($sql_hs);
        if($result_hs->num_rows > 0){
            while($row_hs = $result_hs->fetch_assoc()){
                $name = $row_hs['name'];
                $address = $row_hs['address'];
                $phone = $row_hs['phone'];
                $sophong = $row_hs['sophong'];
                $price = $row_hs['price'];
                $image = $row_hs['image'];
                echo '<form method="post" action="" class="m-4" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tên homestay</label>
                    <input type="text" value="'.$name.'" name="name" class="form-control" id="exampleInputexampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tên homestay</label>
                    <input type="number" min="1" value="'.$price.'" name="price" class="form-control" id="exampleInputexampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Địa chỉ</label>
                    <input type="text" value="'.$address.'" name="address" class="form-control" id="exampleInputexampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Số điện thoại</label>
                    <input type="tel" value="'.$phone.'" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" name="phone" class="form-control" id="exampleInputexampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Số phòng ngủ</label>
                    <input type="number" min="1" value="'.$sophong.'" name="sophong" class="form-control" id="exampleInputexampleInputPassword1">
                </div>
                <div class="mb-3">
                    <select class="form-select" name="khuvuc" aria-label="Default select example">
                        <option selected>Khu vực</option>';
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
                    echo '</select>
                </div>
            
                <div class="mb-3">
                    <img src="../public/image/homestay/'.$image.'" alt="" width="100px" >
                    <img src="https://img.icons8.com/plasticine/2x/arrow.png" alt="">
                    <label for="imgInp">
                        <img class="" width="100px" src="../public/image/taixuong.png" alt="" id="blah">
                    </label>
                    <input type="file" accept=".png, .jpg, .jpeg" name="image" id="imgInp" hidden>
                </div>
                <button type="submit" class="btn btn-primary" name="submit_edit_hs">Sửa homestay</button>
            </form>';
            }
        }
    }

?>


<script>
    imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
            blah.src = URL.createObjectURL(file)
        }
    }
</script>
<?php
if (isset($_POST["submit_edit_hs"])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $sophong = $_POST['sophong'];
    $id_kv = $_POST['khuvuc'];
    $price = $_POST['price'];
    $phone = $_POST['phone'];
    if(empty($_FILES['image']['type'])){
        $sql_update = "UPDATE khachsan SET name = '$name',price='$price', address = '$address', phone = '$phone', sophong = $sophong, id_kv = $id_kv, id_dt = $id_dt WHERE id=$id_hs";
        $result_update = $conn->query($sql_update);
        if($result_update){
            echo "
                <script>alert('Cập nhật thành công')</script>
                <script>location.href='homestay.php'</script>
            ";
        }else{
            echo "
            <script>alert('Cập nhật thất bại')</script>
            
        ";
        }
    }
    if ($_FILES['image']['type'] == "image/jpeg" || $_FILES['image']['type'] == "image/png" || $_FILES['image']['type'] == "image/gif" || $_FILES['image']['type'] == "image/webp") {
        $image = $_FILES['image']['name'];

        // Lấy ra tên ảnh
        $tmp = $_FILES['image']['tmp_name'];
        // Khai báo biến lưu trữ đường dẫn
        move_uploaded_file($tmp, "../public/image/homestay/" . $image);
        $sql_update = "UPDATE khachsan SET name = '$name', address = '$address', image = '$image', phone = '$phone', sophong = $sophong, id_khuvuc = $id_kv, id_doitac = $id_dt WHERE id=$id_hs";
        var_dump($sql_update);
        $result_update = $conn->query($sql_update);
        if($result_update){
            echo "
                <script>alert('Cập nhật thành công')</script>
                <script>location.href='homestay.php'</script>
            ";
        }else{
            echo "
            <script>alert('Cập nhật thất bại')</script>
            
        ";

        }
    }else{
        echo "
            <script>alert('Cập nhật thất bại')</script>
        ";
    }
}
?>
<?php
include 'footer.php';
?>