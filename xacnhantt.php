<?php
include 'header.php';
?>
<?php
if (isset($_GET["mahoadon"])) {
    $mahoadon = $_GET["mahoadon"];
    $sql_hd = "SELECT * FROM datphong WHERE madatphong='$mahoadon'";
    $result_hd = $conn->query($sql_hd);
    if ($result_hd->num_rows > 0) {
        while ($row_hd = $result_hd->fetch_assoc()) {
            $id_hs = $row_hd['id_hs'];
            $tongtien = $row_hd['tongtien'];
            $time_up = $row_hd['time_up'];
            $time_out = $row_hd['time_out'];
            $magiamgia = $row_hd['magiamgia'];
            $songay = (strtotime($time_out) - strtotime($time_up)) / 86400;
            $phidichvu = 100000 * $songay;
            $loaigiamgia = $row_hd['loaigiamgia'];
            $sql_hs = "SELECT * FROM khachsan where id=$id_hs";
            $result_hs = $conn->query($sql_hs);
            if ($result_hs->num_rows > 0) {
                while ($row_hs = $result_hs->fetch_assoc()) {
                    $name_hs = $row_hs['name'];
                    $address_hs = $row_hs['address'];
                    $phone_hs = $row_hs['phone'];
                    $image_hs = $row_hs['image'];
                    $price_hs = $row_hs['price'];
                    $sophong_hs = $row_hs['sophong'];
                }
            }

            if (!empty($loaigiamgia)) {
                if ($loaigiamgia == "homestay") {
                    $sql_ma = "SELECT * FROM phieugiamgia WHERE magiamgia = '$magiamgia'";
                } else if ($loaigiamgia == "all") {
                    $sql_ma = "SELECT * FROM maggall WHERE magiamgia = '$magiamgia'";
                } else if ($loaigiamgia == "user") {
                    $sql_ma = "SELECT * FROM mgguser WHERE magiamgia = '$magiamgia' and id_user = $id";
                } else if ($loaigiamgia == "khuvuc") {
                    $sql_ma = "SELECT * FROM mggkhuvuc WHERE magiamgia = '$magiamgia'";
                }
                $result_ma = $conn->query($sql_ma);
                if ($result_ma->num_rows > 0) {
                    while ($row_ma = $result_ma->fetch_assoc()) {
                        $mucgiam = $row_ma['mucgiam'];
                        $status = $row_ma['status'];
                    }
                }
                if ($status == 1) {
                    $tiengiam = $mucgiam;
                } else {
                    $tiengiam = $mucgiam * $songay * $price_hs / 100;
                }
            }
        }
    }
}
?>
<div class="container-fluid">
    <div class="container" style="width: 1260px">
        <div class="row d-flex">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="mb-3">
                    <h3 class="fs-3 fw-bold">Thanh toán</h3>
                    <p class="py-2">Vui lòng lựa chọn phương thức thanh toán</p>
                </div>
                <form action="">
                    <label for="phuongthuc1" class="d-flex align-items-center mb-4 py-3 inputs" style="background-color: #f4f4f4;">
                        <input type="radio" name="phuongthuc" id="phuongthuc1" class="ms-4 me-3" value="" style="cursor: pointer;" required>
                        <div>
                            <p class="fw-bold" style="width: 432px;">Thẻ Visa, Thẻ Master, Thẻ JCB hoặc Thẻ American Express</p>
                            <span style="font-size: 12px;">Ghi nhận qua cổng thanh toán OnePay.</span>
                        </div>
                        <div class="px-3">
                            <img src="https://cdn.luxstay.com/images/logos/payments/visa_master_jcb.svg" alt="" style="width:76px;height:14px">
                        </div>
                    </label>
                    <label for="phuongthuc2" class="d-flex align-items-center mb-4 py-3 inputs" style="background-color: #f4f4f4;">
                        <input type="radio" name="phuongthuc" id="phuongthuc2" class="ms-4 me-3" value="" style="cursor: pointer;">
                        <div>
                            <p class="fw-bold" style="width: 432px;">Thẻ Visa, Thẻ Master, thẻ JCB</p>
                            <span style="font-size: 12px;width: 432px;">Nhập thông tin thẻ hoặc lựa chọn thẻ đã lưu để tiến hành thanh toán qua Stripe.</span>
                        </div>
                        <div class="px-3">
                            <img src="https://cdn.luxstay.com/images/logos/payments/visa_master_jcb.svg" alt="" style="width:76px;height:14px">
                        </div>
                    </label>
                    <label for="phuongthuc3" class="d-flex align-items-center mb-4 py-3 inputs" style="background-color: #f4f4f4;">
                        <input type="radio" name="phuongthuc" id="phuongthuc3" class="ms-4 me-3" value="" style="cursor: pointer;">
                        <div>
                            <p class="fw-bold" style="width: 432px;">ATM</p>
                            <span style="font-size: 12px;">Sử dụng thẻ ATM thanh toán qua cổng VNPT EPAY.</span>
                        </div>
                        <div class="px-3">
                            <img src="https://cdn.luxstay.com/images/logos/payments/visa_master_jcb.svg" alt="" style="width:76px;height:14px">
                        </div>
                    </label>
                    <label for="phuongthuc4" class="d-flex align-items-center mb-4 py-3 inputs" style="background-color: #f4f4f4;">
                        <input type="radio" name="phuongthuc" id="phuongthuc4" class="ms-4 me-3" value="" style="cursor: pointer;">
                        <div>
                            <p class="fw-bold" style="width: 432px;">Chuyển khoản ngân hàng</p>
                            <span style="font-size: 12px;">Tiếp tục để nhận hướng dẫn thanh toán và thông tin ngân hàng từ Luxstay.</span>
                        </div>
                        <div class="px-3">
                            <img src="https://cdn.luxstay.com/images/logos/payments/acb_vcb.svg" alt="" style="width:76px;height:14px">
                        </div>
                    </label>
                    <label for="phuongthuc5" class="d-flex align-items-center mb-4 py-3 inputs" style="background-color: #f4f4f4;">
                        <input type="radio" name="phuongthuc" id="phuongthuc5" class="ms-4 me-3" value="" style="cursor: pointer;">
                        <div>
                            <p class="fw-bold" style="width: 432px;">AlePay</p>
                            <span style="font-size: 12px;">Sử dụng thẻ thanh toán quốc tế để thanh toán qua cổng AlePay.</span>
                        </div>
                        <div class="px-3">
                            <img src="https://cdn.luxstay.com/images/logos/payments/alepay.png" alt="" style="width:76px;height:30px">
                        </div>
                    </label>
                    <label for="phuongthuc6" class="d-flex align-items-center mb-4 py-3 inputs" style="background-color: #f4f4f4;">
                        <input type="radio" name="phuongthuc" id="phuongthuc6" class="ms-4 me-3" value="" style="cursor: pointer;">
                        <div>
                            <p class="fw-bold" style="width: 432px;">ZaloPay</p>
                            <span style="font-size: 12px;">Thanh toán bằng cổng thanh toán ZaloPay</span>
                        </div>
                        <div class="px-3">
                            <img src="https://cdn.luxstay.com/images/logos/payments/zalopay.png" alt="" style="width:76px;height:22px">
                        </div>
                    </label>
                    <label for="phuongthuc7" class="d-flex align-items-center mb-4 py-3 inputs" style="background-color: #f4f4f4;">
                        <input type="radio" name="phuongthuc" id="phuongthuc7" class="ms-4 me-3" value="" style="cursor: pointer;">
                        <div>
                            <p class="fw-bold" style="width: 432px;">MoMo</p>
                            <span style="font-size: 12px;">Thanh toán bằng ví điện tử MoMo.</span>
                        </div>
                        <div class="px-3">
                            <img src="https://cdn.luxstay.com/images/logos/payments/momo.png" alt="" style="width:35px;height:35px">
                        </div>
                    </label>
                    <button name="thanhtoanngay" type="submit" class="btn-thanhtoan" style="background-image: linear-gradient(90deg,#f65e38 0,#f68a39 51%,#f65e38);background-size: 500% auto;width:189px;height:56px;border:none;color:white;font-weight:bold;">Thanh toán ngay</button>
                </form>
            </div>
            <div class="col-lg-2 col-md-1"></div>
            <div class="col-md-5 col-lg-4 col-xs-12 d-none d-md-block">
                <div class="mt-5">
                    <div class="title">
                        <h3 class="fw-bolder">Chi tiết đặt phòng</h3>
                        <div class="checkup mt-3 p-4 ">
                            <div class="title-header d-flex">
                                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 ">
                                    <a href="" class="fw-bolder text-dark"><?php echo $name_hs ?> - <?php echo $sophong_hs ?>phòng ngủ</a>
                                    <div class="checkup_add mt-2 t"><svg version="1.1" viewBox="0 0 24 24" class="mt--5 svg-icon svg-fill" style="width: 24px; height: 24px;">
                                            <g fill="none" fill-rule="evenodd">
                                                <circle pid="0" cx="12" cy="12" r="12" fill="#000" fill-opacity=".2" fill-rule="nonzero"></circle>
                                                <path pid="1" fill="#FFF" d="M11.92 6c2.87 0 5.218 2.335 5.218 5.205a5.112 5.112 0 01-1.055 3.137c-.97 1.252-3.77 3.461-3.882 3.56a.43.43 0 01-.282.098.43.43 0 01-.281-.098c-.113-.099-2.912-2.308-3.883-3.546a5.182 5.182 0 01-1.055-3.15C6.7 8.335 9.05 6 11.92 6zm0 7.203a2.104 2.104 0 000-4.207 2.104 2.104 0 000 4.206z">
                                                </path>
                                            </g>
                                        </svg> <a href="" class="medium" style="width: calc(100% - 25px);"><?php echo $address_hs ?></a></div>

                                </div>


                                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                    <div class="img">
                                        <img src="./public/image/homestay/<?php echo $image_hs ?>" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="title-body">
                                <div class="title-detail border-top mt-3 border-bottom ">
                                    <div class="title-checkin-checkout mt-3 mb-3 d-flex">
                                        <svg version="1.1" viewBox="0 0 24 24" class="icon--24 svg-icon svg-fill pe-3" style="width: 12%;">
                                            <g fill="none" fill-rule="evenodd">
                                                <path pid="0" fill="#F65E39" fill-rule="nonzero" d="M12 0c6.614 0 12 5.386 12 12s-5.386 12-12 12S0 18.614 0 12 5.386 0 12 0z">
                                                </path>
                                                <path pid="1" fill="#FFF" d="M10 7h4a1 1 0 112 0h.5A1.5 1.5 0 0118 8.5v8a1.5 1.5 0 01-1.5 1.5h-9A1.5 1.5 0 016 16.5v-8A1.5 1.5 0 017.5 7H8a1 1 0 112 0zm4 7v2h2v-2h-2zm-3 0v2h2v-2h-2zm-3 0v2h2v-2H8zm3-3v2h2v-2h-2zm3 0v2h2v-2h-2zm-6 0v2h2v-2H8z">
                                                </path>
                                            </g>
                                        </svg>
                                        <span class="fw-bolder pe-1"><?php echo $songay ?> Đêm</span>
                                        <span class="pe-1"> ·</span>
                                        <span class="pe-1"><?php echo date("d-m-Y", strtotime($time_up)) ?></span>
                                        <span class="pe-1">đến</span>
                                        <span class="pe-1"><?php echo date("d-m-Y", strtotime($time_out)) ?></span>
                                    </div>


                                </div>
                                <div class="title-detail mt-3 border-bottom ">
                                    <div class="title-checkin-checkout mt-3 mb-3 d-flex justify-content-between">
                                        <div class="">
                                            <span class="pe-2">Giá thuê: <?php echo $songay ?> Đêm </span>
                                        </div>

                                        <div class="price">
                                            <span><?php echo number_format($songay * $price_hs) ?>đ</span>
                                        </div>
                                    </div>
                                    <div class="title-checkin-checkout mt-3 mb-3 d-flex justify-content-between">
                                        <div class="">
                                            <span class="pe-2">Phí dịch vụ</span>
                                        </div>
                                        <div class="price">
                                            <span><?php echo number_format($phidichvu) ?>đ</span>
                                        </div>
                                    </div>
                                    <?php
                                    if (!empty($magiamgia)) {
                                        echo '<div class="title-checkin-checkout mt-3 mb-3 d-flex justify-content-between">
                                            <div class="">
                                                <span class="pe-2">Khuyến mãi</span>
                                            </div>
                                            <div class="price">
                                                <span>' . number_format($tiengiam) . 'đ</span>
                                            </div>
                                        </div>';
                                    }
                                    ?>

                                </div>
                                <div class="title-detail mt-3 border-bottom ">
                                    <div class="title-checkin-checkout mt-3 mb-3 d-flex justify-content-between">
                                        <div class="fw-bold">
                                            <span class="pe-2">Tổng tiền:</span>
                                        </div>

                                        <div class="price fw-bold">
                                            <span><?php echo number_format($tongtien) ?>đ</span>
                                        </div>
                                    </div>



                                </div>
                            </div>
                            <div class="title_footer mt-3">
                                <div class="input-group"><label class="input-group__label fw-bold is-block mb-3">Chính sách hủy
                                        phòng</label> <span class="input-group__text"><b>Linh hoạt</b>
                                        : Miễn phí hủy phòng trong vòng 48h sau khi đặt phòng thành công và trước 1
                                        ngày so với thời gian check-in. Sau đó, hủy phòng trước 1 ngày so với thời
                                        gian check-in, được hoàn lại 100% tổng số tiền đã trả (trừ phí dịch vụ).
                                    </span> <a href="/vi/cancellation_policy" target="_blank" class="color-i">Chi
                                        tiết</a></div>
                            </div>

                        </div>
                    </div>
                    <!-- end title bên trái -->
                </div>

            </div>

        </div>
        <?php
        include 'footer.php';
        ?>