<?php
include 'header.php';
include 'connect.php';

if (isset($_GET['id'])) {
    $id_hs = $_GET['id'];
    $sql_hs = "SELECT * FROM chitietkhachsan where id_khachsan = $id_hs";
    $result_hs = $conn->query($sql_hs);
    while ($row_hs = $result_hs->fetch_assoc()) {
        $chitiet = $row_hs['chitiet'];
        $gioithieu = $row_hs['gioithieu'];
        $tiennghi = $row_hs['tiennghi'];
        $danhgia = $row_hs['danhgia'];
        $chinhsach = $row_hs['chinhsach'];
        $tienich = $row_hs['tienich'];
        $time = $row_hs['time'];
    }
}
?>
<h1 class="text-center py-5">Sửa chi tiết</h1>

<div class="ms-2">
    <a onclick="history.go(-1)" class="btn btn-outline-primary" style="margin-left: 23px;">Trở lại</a>
</div>
<form method="post" action="" class="m-4" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Chi tiết</label>
        <textarea type="text" name="chitiet" class="form-control" id="exampleInputexampleInputPassword1">
            <?= $chitiet ?>
        </textarea>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Giới thiệu</label>
        <textarea type="text" name="gioithieu" class="form-control" id="exampleInputexampleInputPassword1">
            <?= $gioithieu ?>
        </textarea>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Tiện nghi</label>
        <textarea type="text" name="tiennghi" class="form-control" id="exampleInputexampleInputPassword1">
            <?= $tiennghi ?>
        </textarea>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Chính sách</label>
        <textarea type="text" name="chinhsach" class="form-control" id="exampleInputexampleInputPassword1">
            <?= $chinhsach ?>
        </textarea>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Tiện ích</label>
        <textarea type="text" name="tienich" class="form-control" id="exampleInputexampleInputPassword1">
            <?= $tienich ?>
        </textarea>
    </div>

    <button type="submit" class="btn btn-primary" name="submit_adddetail_hs">Sửa </button>
</form>
<?php
if (isset($_POST["submit_adddetail_hs"])) {
    $chitiet = $_POST["chitiet"];
    $gioithieu = $_POST["gioithieu"];
    $tiennghi = $_POST["tiennghi"];
    $chinhsach = $_POST["chinhsach"];
    $tienich = $_POST["tienich"];
    $sql_hsdetail = "UPDATE chitietkhachsan SET chitiet='$chitiet',gioithieu='$gioithieu',tiennghi='$tiennghi',chinhsach='$chinhsach',tienich='$tienich',time='$today' WHERE  id_khachsan = $id_hs";
    $result_hsdetail = $conn->query($sql_hsdetail);
    echo "<script>location.href='homestaydetail.php?id=$id_hs'</script>";
}
?>
<?php
include 'footer.php';
?>
<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">
    bkLib.onDomLoaded(nicEditors.allTextAreas);
</script>