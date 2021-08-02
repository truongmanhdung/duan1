<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"> -->
    <link rel="stylesheet" href="./public/css/style.css" />
    <link rel="stylesheet" href="./public/css/profile.css" />
    <link rel="stylesheet" href="./public/css/order.css" />

    <title>Document</title>
</head>

<body>
    <div class="container header-fix">
        <div id="header">
            <header class="_header py-3 d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <a class="logo d-block" href="index.php">
                        <svg>
                            <symbol id="s-text"><text text-anchor="middle" x="50%" y="80%">BOOKING</text></symbol>
                            <use class="logo-text" xlink:href="#s-text"></use>
                            <use class="logo-text" xlink:href="#s-text"></use>
                            <use class="logo-text" xlink:href="#s-text"></use>
                            <use class="logo-text" xlink:href="#s-text"></use>
                            <use class="logo-text" xlink:href="#s-text"></use>
                        </svg>
                    </a>
                </div>
                <nav class="_menu">
                    <?php
                    include "./middlewares/connect.php";
                    ?>
                    <ul class="m-0">
                        <li class="fs-14px cn">HÔM NAY <br><span><?php
                                                                    echo $date;
                                                                    ?></span>
                        </li>
                        <li class="fs-14px cn">TÀI KHOẢN CỦA TÔI <br>
                            <?php
                            if (isset($_COOKIE['user'])) {
                                $email = $_COOKIE['user'];
                                $sql = "SELECT * FROM user where email = '$email'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        $name = $row['name'];
                                        $image = $row['avatar'];
                                        $phone = $row['phone'];
                                        $address = $row['address'];
                                        $password = $row['password'];
                                        echo '
                                        <span>' . $name . '</span>
                                    ';
                                    }
                                }
                            }
                            ?>

                        </li>
                    </ul>
                </nav>
            </header>
        </div>
    </div>
    <div class="container-fluid" style="background-color: #F8F8F8;">
        <div class="container">
            <form action="" id="form-order" class="position-relative" style="margin-bottom: 50px;">
                <select name="status" id="select-order">
                    <option value="" class="fw-500">Tất cả đặt chỗ</option>
                    <option value="" class="fw-500">Chờ xác nhận</option>
                    <option value="" class="fw-500">Thanh toán</option>
                    <option value="" class="fw-500">Đã chấp nhận</option>
                    <option value="" class="fw-500">Từ chối</option>
                    <option value="" class="fw-500">Thành công</option>
                    <option value="" class="fw-500">Không thành công</option>
                </select>
                <p class="position-absolute">Tổng số: <span class="text-danger">8</span></p>
            </form>
        </div>
        <div class="container ">
            <div class="d-flex justify-content-between bg-white align-items-center view-order my-5">
                <?php 
                    if(isset($_GET['mahoadon'])){
                        $mahoadon = $_GET['mahoadon'];
                        $sql_hoadon = "SELECT * FROM donhang WHERE mahoadon= '$mahoadon'";
                        $result_hoadon = $conn->query($sql_hoadon);
                        if($result_hoadon->num_rows>0){
                            while ($row_hoadon = $result_hoadon->fetch_assoc()) {
                                $id_hs = $row_hoadon['id_hs'];
                                $sql_hs = "SELECT * FROM khachsan where id=$id_hs";
                                $result_hs = $conn->query($sql_hs);
                                if($result_hs->num_rows > 0){
                                    while ($row_hs = $result_hs->fetch_assoc()) {
                                        $name_hs = $row_hs['name'];
                                    }
                                }
                                
                                $name = $row_hoadon['name'];
                                $time_up = $row_hoadon["checkin"];
                                $time_out = $row_hoadon["checkout"];
                                $tongtien = $row_hoadon["tongtien"];
                                $trangthai = $row_hoadon["trangthai"];
                                $songay = (strtotime($time_out) - strtotime($time_up)) / 86400;
                                echo '<div class="name-homestay">
                                <p style="max-width: 292px;font-size: 24px;margin-bottom: 0;">
                                    '.$name_hs.'
                                </p>
                                <p style="margin-top: 5px;font-weight: 450;color:#999;font-size: 24px;">Homestay</p>
                                </div>
                                <div style="display:grid;grid-template-columns:repeat(3,131px);padding-right:50x">
                                    <div>
                                        <p style="margin: 0;color:#999">Mã đặt chỗ</p>
                                        <p class="fw-500 fs-5">'.$mahoadon.'</p>
                                    </div>
                                    <div>
                                        <p style="margin: 0;color:#999">Số khách</p>
                                        <p class="fw-500 fs-5">1</p>
                                    </div>
                                    <div>
                                        <p style="margin: 0;color:#999">Ngày đến</p>
                                        <p class="fw-500 fs-5">'.date("d-m-Y",strtotime($time_up)).'</p>
                                    </div>
                                    <div>
                                        <p style="margin: 0;color:#999">Số đêm</p>
                                        <p class="fw-500 fs-5">'.$songay.' đêm</p>
                                    </div>
                                    <div>
                                        <p style="margin: 0;color:#999">Tổng tiền</p>
                                        <p class="fw-500 fs-5">'.number_format($tongtien).'₫</p>
                                    </div>
                                    <div>
                                        <p style="margin: 0;color:#999">Ngày đi</p>
                                        <p class="fw-500 fs-5">'.date("d-m-Y",strtotime($time_out)).'</p>
                                    </div>
                                </div>';
                                if($trangthai == 0){
                                    echo ' <div class="px-5 thanhtoanngay">
                                    <a href="https://mail.google.com/"  class="mx-5 btn btn-danger">Xác nhận mail</a>
                                </div>';
                                }else if($trangthai == 1){
                                    echo ' <div class="px-5 thanhtoanngay">
                                    <a href=""  class="mx-5 btn btn-danger">Thanh toán</a>
                                </div>';
                                }else if($trangthai == 2){
                                    echo ' <div class="px-5 thanhtoanngay">
                                    <button disabled class="mx-5 btn btn-primary">Đến nhận phòng</button>
                                </div>';
                                }
                                else if($trangthai == 3){
                                    echo ' <div class="px-5 thanhtoanngay">
                                    <button disabled class="mx-5 btn btn-warning">Trả phòng</button>
                                </div>';
                                }
                                else if($trangthai == 4){
                                    echo ' <div class="px-5 thanhtoanngay">
                                    <button  disabled class="mx-5 btn btn-success">Thành công</button>
                                </div>';
                                }
                               
                            }
                        }
                    }
                ?>
                
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script> -->
    <script src="./public/js/preview_images.js"></script>
    <script src="./public/js/account.js"></script>

</body>

</html>