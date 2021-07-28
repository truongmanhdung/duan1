<?php
include 'header.php';
include 'connect.php';
?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên khách hàng</th>
            <th scope="col">Email</th>
            <th scope="col">SĐT</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Ngày bắt đầu</th>
            <th scope="col">Ngày kết thúc</th>
            <th scope="col">Mã hóa đơn</th>
            <th scope="col">Tổng tiền</th>
            <th scope="col">Trạng thái</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (isset($_GET['id'])) {
            $id_hs = $_GET['id'];
            $sql_dh = "SELECT * FROM donhang WHERE id_hs = $id_hs";
            $result_dh = $conn->query($sql_dh);
            if ($result_dh->num_rows > 0) {
                $dem = 0;
                while ($row_dh = $result_dh->fetch_assoc()) {
                    $dem++;
                    $name = $row_dh['name'];
                    $email = $row_dh['email'];
                    $phone = $row_dh['phone'];
                    $address = $row_dh['address'];
                    $check_in = $row_dh['checkin'];
                    $check_out = $row_dh['checkout'];
                    $tongtien = $row_dh['tongtien'];
                    $status = $row_dh['trangthai'];
                    $mahoadon = $row_dh['mahoadon'];
                    if ($status == 0) {
                        $trangthai1 = "Chưa xác nhận";
                        $trangthai2 = null;
                    } else if ($status == 1) {
                        $trangthai1 = "Đã xác nhận";
                        $trangthai2 = "Chưa thanh toán";
                    } else if ($status == 2) {
                        $trangthai1 = "Đã thanh toán";
                        $trangthai2 = "Chưa nhận phòng";
                    } else if ($status == 3) {
                        $trangthai1 = "Đã nhận phòng";
                        $trangthai2 = "Chưa trả phòng";
                    } else if ($status == 4) {
                        $trangthai1 = "Đã trả phòng";
                        $trangthai2 = "Xác nhận thành công";
                    }

                    echo '
                            <tr>
                                <th scope="row">' . $dem . '</th>
                                <td>' . $name . '</td>
                                <td>' . $email . '</td>
                                <td>' . $phone . '</td>
                                <td>' . $address . '</td>
                                <td>' . $check_in . '</td>
                                <td>' . $check_out . '</td>
                                <td>' . $mahoadon . '</td>
                                <td>' . $tongtien . '</td>
                                <td>';

                    if ($status != 0) {
                        echo '<button class="btn btn-success" disabled>' . $trangthai1 . '</button>
                                <button class="btn btn-danger my-2" disabled>
                                ' . $trangthai2 . '
                            </button>';
                    } else {
                        echo '<button class="btn btn-secondary" disabled>' . $trangthai1 . '</button>';
                    }
                    echo '</td>
                            </tr>
                        ';
                }
            }
        }
        ?>

    </tbody>
</table>


<?php
include 'footer.php';
?>