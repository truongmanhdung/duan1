<?php
include './middlewares/connect.php';
if (isset($_POST['sort']) && isset($_POST['email'])) {
    $sort = $_POST['sort'];
    $email = $_POST['email'];
    $sql_user = "SELECT * FROM user where email = '$email'";
    $result_user = $conn->query($sql_user);
    if ($result_user->num_rows > 0) {
        while ($row_user = $result_user->fetch_assoc()) {
            $id_user = $row_user['id'];
            if($sort == "all"){
                $sql_dh = "SELECT * FROM donhang WHERE id_user = $id_user ORDER BY time DESC";
            }else{
                $sql_dh = "SELECT * FROM donhang WHERE id_user = $id_user and trangthai = $sort  ORDER BY time DESC";
            }
            
            $result_hoadon = $conn->query($sql_dh);
            $name = $row_user['name'];
                while ($row_hoadon = $result_hoadon->fetch_assoc()) {
                    echo '<div class="d-flex justify-content-between bg-white align-items-center view-order my-5">';
                    $id_hs = $row_hoadon['id_hs'];
                    $sql_hs = "SELECT * FROM khachsan where id=$id_hs";
                    $result_hs = $conn->query($sql_hs);

                    if ($result_hs->num_rows > 0) {
                        while ($row_hs = $result_hs->fetch_assoc()) {
                            $name_hs = $row_hs['name'];
                        }
                    }
                    $mahoadon = $row_hoadon['mahoadon'];
                    $name = $row_hoadon['name'];
                    $time_up = $row_hoadon["checkin"];
                    $time_out = $row_hoadon["checkout"];
                    $tongtien = $row_hoadon["tongtien"];
                    $trangthai = $row_hoadon["trangthai"];
                    $songay = (strtotime($time_out) - strtotime($time_up)) / 86400;
                    echo '
                        
                        <div class="name-homestay">
                            <p style="max-width: 292px;font-size: 24px;margin-bottom: 0;">
                                ' . $name_hs . '
                            </p>
                            <p style="margin-top: 5px;font-weight: 450;color:#999;font-size: 24px;">Homestay</p>
                            </div>
                            <div style="display:grid;grid-template-columns:repeat(3,131px);padding-right:50x">
                                <div>
                                    <p style="margin: 0;color:#999">Mã đặt chỗ</p>
                                    <p class="fw-500 fs-5">' . $mahoadon . '</p>
                                </div>
                                <div>
                                    <p style="margin: 0;color:#999">Số khách</p>
                                    <p class="fw-500 fs-5">1</p>
                                </div>
                                <div>
                                    <p style="margin: 0;color:#999">Ngày đến</p>
                                    <p class="fw-500 fs-5">' . date("d-m-Y", strtotime($time_up)) . '</p>
                                </div>
                                <div>
                                    <p style="margin: 0;color:#999">Số đêm</p>
                                    <p class="fw-500 fs-5">' . $songay . ' đêm</p>
                                </div>
                                <div>
                                    <p style="margin: 0;color:#999">Tổng tiền</p>
                                    <p class="fw-500 fs-5">' . number_format($tongtien) . '₫</p>
                                </div>
                                <div>
                                    <p style="margin: 0;color:#999">Ngày đi</p>
                                    <p class="fw-500 fs-5">' . date("d-m-Y", strtotime($time_out)) . '</p>
                                </div>
                                
                            </div>';
                    if ($trangthai == 0) {
                        echo ' <div class="px-5 thanhtoanngay">
                                <a href="https://mail.google.com/"  class=" btn btn-danger">Xác nhận mail</a>
                                <a href="huydatphong.php?mahoadon=' . $mahoadon . '" onclick="return confirm(\'Bạn có muốn hủy đặt phòng không?\')"  class="mx-5 btn btn-danger">Hủy đặt phòng</a>
                            </div>';
                    } else if ($trangthai == 1) {
                        echo ' <div class="px-5 thanhtoanngay">
                                <a href="" class=" btn btn-danger">Thanh toán</a>
                                <a href="huydatphong.php?mahoadon=' . $mahoadon . '" onclick="return confirm(\'Bạn có muốn hủy đặt phòng không?\')"  class="mx-5 btn btn-danger">Hủy đặt phòng</a>
                            </div>';
                    } else if ($trangthai == 2) {
                        echo ' <div class="px-5 thanhtoanngay">
                                <button disabled class="mx-5 btn btn-primary">Đến nhận phòng</button>
                            </div>';
                    } else if ($trangthai == 3) {
                        echo ' <div class="px-5 thanhtoanngay">
                                <button disabled class="mx-5 btn btn-warning">Trả phòng</button>
                            </div>';
                    } else if ($trangthai == 4) {
                        echo ' <div class="px-5 thanhtoanngay">
                                <button  disabled class="mx-5 btn btn-success">Thành công</button>
                            </div>';
                    }
                    echo '</div>';
                }
            }
        }
    }
