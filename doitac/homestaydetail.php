<?php
include 'header.php';
include 'connect.php';
if (isset($_GET['id'])) {
    $id_hs = $_GET['id'];
    $sql_hs2 = "SELECT * FROM khachsan where id = $id_hs";
    $result_hs2 = $conn->query($sql_hs2);
    while ($row_hs2 = $result_hs2->fetch_assoc()) {
?>
        <h1 class="text-center py-3"><?= $row_hs2['name'] ?></h1>

<?php
    }
}
?>


<?php
if ($_COOKIE['doitac']) {
    if (isset($_GET['id'])) {
        $id_hs = $_GET['id'];
        $sql_hs = "SELECT * FROM chitietkhachsan where id_khachsan = $id_hs";
        $result_hs = $conn->query($sql_hs);
        if ($result_hs->num_rows > 0) {
            echo '<a href="edithomestaydetail.php?id=' . $id_hs . '" class="btn btn-primary my-3">Sửa</a>
            <a href="" onclick="return confirm(\'Bạn có muốn xóa không\')" class="btn btn-danger my-3">Xóa</a>';
            while ($row_hs = $result_hs->fetch_assoc()) {
                $chitiet = $row_hs['chitiet'];
                $gioithieu = $row_hs['gioithieu'];
                $tiennghi = $row_hs['tiennghi'];
                $danhgia = $row_hs['danhgia'];
                $chinhsach = $row_hs['chinhsach'];
                $tienich = $row_hs['tienich'];
                $time = $row_hs['time'];
                echo '
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Danh Mục</th>
                                <th>Nội dung</th>
                            </tr>
                        </thead>
                          <tbody>
                                <tr>
                                    <th class="text-center" style="width:150px;vertical-align:middle;" scope="col">Chi tiết</th>
                                    <td>' . $chitiet . '</td>
                                </tr>
                                <tr>
                                    <th class="text-center" style="width:150px;vertical-align:middle;" scope="col">Giới thiệu</th>
                                    <td>' . $gioithieu . '</td>
                                </tr>
                                <tr>
                                    <th class="text-center" style="width:150px;vertical-align:middle;" scope="col">Tiện nghi</th>
                                    <td>' . $tiennghi . '</td>
                                </tr>
                                <tr>
                                    <th class="text-center" style="width:150px;vertical-align:middle;" scope="col">Đánh giá</th>
                                    <td>' . $danhgia . '</td>
                                </tr>
                                <tr>
                                    <th class="text-center" style="width:150px;vertical-align:middle;" scope="col">Chính sách</th>
                                    <td>' . $chinhsach . '</td>
                                </tr>
                                <tr>
                                    <th class="text-center" style="width:150px;vertical-align:middle;" scope="col">Tiện ích</th>
                                    <td>' . $tienich . '</td>
                                </tr>
                                <tr>
                                    <th class="text-center" style="width:150px;vertical-align:middle;" scope="col">Ngày thêm</th>
                                    <td>' . $time . '</td>
                                </tr>';
                $sql_showimage = "SELECT * FROM imagechitietkhachsan WHERE id_chitiet = $id_hs";
                $result_showimage = $conn->query($sql_showimage);
                if ($result_showimage->num_rows > 0) {
                    echo '<tr>
                                                    <th class="text-center" style="width:150px;vertical-align:middle;" scope="col">Thêm ảnh</th>
                                                    <td class="text-center">';
                    while ($row_showimage = $result_showimage->fetch_assoc()) {
                        $image = $row_showimage['image'];

                        echo '
                                                        <img src="../public/image/homestay/homestaydetail/' . $image . '" alt="" width="100px" height="100px" style="object-fit: cover">
                                                    ';
                    }
                    echo '</td></tr>';
                } else {
                    echo '<tr>
                            <th class="text-center" style="width:150px;vertical-align:middle;" scope="col">Thêm ảnh</th>
                            <td class="text-center">
                                <a href="uploadimage.php?id=' . $id_hs . '" class="btn btn-primary">Thêm ảnh</a>
                            </td>
                        </tr>';
                }

                echo '<tr>
                        <th class="text-center" style="width:150px;vertical-align:middle;" scope="col">Chức năng</th>
                        <td class="text-center">
                            <a href="homestaydetail.php?id=' . $row_hs['id'] . '" class="btn btn-primary">Xem chi tiết</a>
                        </td>
                        </tr>
                        ';
            }
        } else {
            echo '<a href="addhomestaydetail.php?id=' . $id_hs . '" class="btn btn-primary my-3">Thêm chi tiết</a>';
        }
    }
}
?>


</tbody>
</table>

<?php
include 'footer.php';
?>