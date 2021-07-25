<?php
include 'header.php';
include 'connect.php';

if (isset($_GET['id'])) {
    $id_hs = $_GET['id'];
}
?>
<h1 class="text-center py-5">Thêm chi tiết</h1>
<div class="ms-2">
    <a onclick="history.go(-1)" class="btn btn-outline-primary" style="margin-left: 23px;">Trở lại</a>
</div>
<form method="post" action="" class="m-4" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Chi tiết</label>
        <textarea type="text" name="chitiet" class="form-control" id="exampleInputexampleInputPassword1"></textarea>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Giới thiệu</label>
        <textarea type="text" name="gioithieu" class="form-control" id="exampleInputexampleInputPassword1"></textarea>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Tiện nghi</label>
        <textarea type="text" name="tiennghi" class="form-control" id="exampleInputexampleInputPassword1"></textarea>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Chính sách</label>
        <textarea type="text" name="chinhsach" class="form-control" id="exampleInputexampleInputPassword1"></textarea>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Tiện ích</label>
        <textarea type="text" name="tienich" class="form-control" id="exampleInputexampleInputPassword1"></textarea>
    </div>

    <button type="submit" class="btn btn-primary" name="submit_adddetail_hs">Thêm chi tiet homestay</button>
</form>
<?php
if (isset($_POST["submit_adddetail_hs"])) {
    $chitiet = $_POST["chitiet"];
    $gioithieu = $_POST["gioithieu"];
    $tiennghi = $_POST["tiennghi"];
    $chinhsach = $_POST["chinhsach"];
    $tienich = $_POST["tienich"];
    $sql_hsdetail = "INSERT INTO chitietkhachsan VALUES (null,$id_hs,'$chitiet','$gioithieu','$tiennghi','','$chinhsach','$tienich','$today')";
    $result_hsdetail = $conn->query($sql_hsdetail);
    if ($result_hsdetail) {
        echo "<script>location.href='homestaydetail.php?id='$id_hs'</script>";
    }
}
?>
<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">
    bkLib.onDomLoaded(nicEditors.allTextAreas);
</script>

<?php
include 'footer.php';
?>