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
            
            if(!empty($loaigiamgia)){
                if($loaigiamgia == "homestay"){
                    $sql_ma = "SELECT * FROM phieugiamgia WHERE magiamgia = '$magiamgia'";
                }else if($loaigiamgia == "all"){
                    $sql_ma = "SELECT * FROM maggall WHERE magiamgia = '$magiamgia'";
                }else if($loaigiamgia == "user"){
                    $sql_ma = "SELECT * FROM mgguser WHERE magiamgia = '$magiamgia' and id_user = $id";
                }else if($loaigiamgia == "khuvuc"){
                    $sql_ma = "SELECT * FROM mggkhuvuc WHERE magiamgia = '$magiamgia'";
                }
                $result_ma = $conn->query($sql_ma);
                if($result_ma->num_rows > 0){
                    while($row_ma = $result_ma->fetch_assoc()){
                        $mucgiam = $row_ma['mucgiam'];
                        $status = $row_ma['status'];
                    }
                }
                if($status == 1){
                    $tiengiam = $mucgiam;
                }else{
                    $tiengiam = $mucgiam*$songay*$price_hs/100;
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
                <?php
                $name_user = "";
                $phone_user = "";
                $address = "";
                $email = "";
                if (isset($_COOKIE['user'])) {
                    $email = $_COOKIE['user'];
                    $sql_user = "SELECT * FROM user where email = '$email'";
                    $result_user = $conn->query($sql_user);
                    if ($result_user->num_rows > 0) {
                        while ($row_user = $result_user->fetch_assoc()) {
                            $id_user = $row_user['id'];
                            $name_user = $row_user['name'];
                            $phone_user = $row_user['phone'];
                            $address = $row_user['address'];
                        }
                    }
                } else {
                    echo '<div class="login-instruction rounded p-4 mt-5">
                            <div class="row">
                                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <h4>Đăng nhập và tận hưởng quyền lợi của Thành viên!</h4>
                                    <div class="mt-2">
                                        <span class="text-gray">Đăng ký thành viên Booking, trải nghiệm đột phá - Đặt
                                            phòng nhanh hơn, ưu đãi nhiều hơn nữa.</span>
                                    </div>
                                    <div class="buttondangnhap pt-3 mt-3">
                                        <button type="submit" class="text-light rounded border-1 fw-bold"
                                            style="width: 200px">
                                            <a href="dangnhap.php" class="text-white">Đăng nhập ngay</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>';
                }
                ?>

                <!-- End Login-instruction -->
                <div class=" mt-5">
                    <h2 class="fw-bold">Thông tin đặt chỗ</h2>
                    <div class="row">
                        <div class="fw-bold mt-3">
                            <span class="fs-3"><?php echo $name_hs ?> - <?php echo $sophong_hs ?>phòng ngủ</span>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                            <div class="p-3 bg-white is-shadow-box mt-2 " style="width: 100%; height: 120px;">
                                <hr class="border-top border-4 border-success" style="width: 50%; ">
                                <div class="">
                                    <span class="fs-5 text-secondary ">Nhận phòng</span>
                                    <h4><?php echo date("d-m-Y", strtotime($time_up)) ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                            <div class="p-3 bg-white is-shadow-box mt-2 " style="width: 100%; height: 120px;">
                                <hr class="border-top border-4 border-danger" style="width: 50%;">
                                <div class="">
                                    <span class="fs-5 text-secondary ">Trả phòng</span>
                                    <h4><?php echo date("d-m-Y", strtotime($time_out)) ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5">
                            <h4>Trách nhiệm vật chất</h4>
                            <div class=" text-secondary mt-2">
                                <span> Khách hàng chịu mọi trách nhiệm thiệt hại về tài sản đã gây ra tại chỗ ở
                                    trong thời gian lưu trú.</span>
                            </div>
                        </div>
                        <div class="mt-5">
                            <h4>Nội quy chỗ ở</h4>
                            <div class=" text-secondary mt-2">
                                <span> Hạn chế làm ồn sau 10 giờ tối,Không hút thuốc ở khu vực chung.</span>
                            </div>
                        </div>


                    </div>

                </div>
                <form action="" method="post">
                    <div class="infor-user mt-5">
                        <div class="">
                            <h2>Thông tin của bạn</h2>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                <div class="mt-4 information">
                                    <span class="text-danger ">*</span>
                                    <span class="fw-bold">Tên khách hàng</span>
                                    <p class="text-secondary">Họ tên trên CMND/ Thẻ căn cước</p>
                                    <input name="namehd" value="<?php echo $name_user ?>" type="text" style="width: 100%;" class="mt-3" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                                <div class="mt-4 information">
                                    <span class="text-danger ">*</span>
                                    <span class="fw-bold">Số điện thoại</span>
                                    <p class="text-secondary">Mã điện thoại quốc gia</p>
                                    <input value="<?php echo $phone_user ?>" name="phonehd" type="text" required pattern="[0-9]{3}[0-9]{3}[0-9]{4}" style="width: 100%;" class="mt-3">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                                <div class="mt-4 information">
                                    <span class="text-danger ">*</span>
                                    <span class="fw-bold">Email</span>
                                    <p class="text-secondary">VD: email@example.com</p>
                                    <input value="<?php echo $email ?>" name="emailhd" type="email" style="width: 100%;" class="mt-3" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="mt-4 information">
                                <span class="text-danger ">*</span>
                                <span class="fw-bold">Địa chỉ</span>
                                <p class="text-secondary">VD: Số nhà * Đường * Quận * Thành phố *</p>
                                <input value="<?php echo $address ?>" name="addresshd" type="text" style="width: 100%;" class="mt-3" required>
                            </div>

                            <div class="input-group input-group--checkbox checkbox-someone mt-4">
                                <label class="input-group__label">
                                    <input type="checkbox" onclick="myFuntion()" name="chonguoikhac" value="chonguoikhac">
                                    <span class="d-inline">Tôi đặt phòng cho người khác</span>
                                </label>
                            </div>
                        </div>

                    </div>
                    <!-- end information -->
                    <div class="infor-khachhang mt-5" id="infor_khachhang" style="display: none;">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                <div class="mt-4 information">
                                    <span class="text-danger ">*</span>
                                    <span class="fw-bold">Tên khách hàng</span>
                                    <p class="text-secondary">Họ tên trên CMND/ Thẻ căn cước</p>
                                    <input type="text" name="namenew" style="width: 100%;" class="mt-3" >
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                                <div class="mt-4 information">
                                    <span class="text-danger ">*</span>
                                    <span class="fw-bold">Số điện thoại</span>
                                    <p class="text-secondary">Mã điện thoại quốc gia</p>
                                    <input type="tel" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" name="phonenew" style="width: 100%;" class="mt-3" >
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                                <div class="mt-4 information">
                                    <span class="text-danger ">*</span>
                                    <span class="fw-bold">Email</span>
                                    <p class="text-secondary">VD: email@example.com</p>
                                    <input type="email" name="emailnew" style="width: 100%;" class="mt-3" >
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="mt-4 information">
                                    <span class="text-danger ">*</span>
                                    <span class="fw-bold">Địa chỉ</span>
                                    <p class="text-secondary">VD: Số nhà * Đường * Quận * Thành phố *</p>
                                    <input type="text" name="addressnew" style="width: 100%;" class="mt-3" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end phần đăng ký hộ khách hàng -->
                    <!-- end phần thông tin thêm -->
                    <div class="add_infor mt-5 pb-5">

                        <div class="buttondangnhap mt-4 ">
                            <button type="submit" name="thanhtoansubmit" class="text-light rounded border-1 fw-bold" style="width: 200px">
                                Thanh Toán
                            </button>
                        </div>
                    </div>
                </form>
                <?php 
                    if(isset($_POST['thanhtoansubmit'])){
                        $name = $_POST['namehd'];
                        $email = $_POST['emailhd'];
                        $address = $_POST['addresshd'];
                        $phone = $_POST['phonehd'];
                        if(isset($_POST['chonguoikhac'])){
                            $name = $_POST["namenew"];
                            $email = $_POST["emailnew"];
                            $address = $_POST["addressnew"];
                            $phone = $_POST["phonenew"];
                        }
                        if(isset($_COOKIE['user'])){
                            
                        }else{
                            $id_user = null;
                        }
                        $sql_submit = "INSERT INTO donhang VALUES (null,$id_user,$id_hs,'$name','$email','$address','$phone','$mahoadon',0,$price_hs,$tongtien,'$time_up','$time_out','$today')";
                        $result_submit = $conn->query($sql_submit);
                        if($result_submit){
                            $delete_datphong = "DELETE FROM datphong WHERE madatphong='$mahoadon'";
                            $result_dele = $conn->query($delete_datphong);
                            if($result_dele){
                                echo "
                                        <script>alert('đặt hàng thành công')</script>
                                     ";
                            }
                            
                        }
                    }
                ?>
            </div>
            <?php 

            ?>

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
                                        </svg> <a href="" class="medium" style="width: calc(100% - 25px);"><?php echo $address_hs?></a></div>

                                </div>


                                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                    <div class="img">
                                        <img src="./public/image/homestay/<?php echo $image_hs?>" alt="">
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
                                        <span class="fw-bolder pe-1"><?php echo $songay?> Đêm</span>
                                        <span class="pe-1"> ·</span>
                                        <span class="pe-1"><?php echo date("d-m-Y", strtotime($time_up)) ?></span>
                                        <span class="pe-1">đến</span>
                                        <span class="pe-1"><?php echo date("d-m-Y", strtotime($time_out)) ?></span>
                                    </div>
                        

                                </div>
                                <div class="title-detail mt-3 border-bottom ">
                                    <div class="title-checkin-checkout mt-3 mb-3 d-flex justify-content-between">
                                        <div class="">
                                            <span class="pe-2">Giá thuê: <?php echo $songay?> Đêm </span>
                                        </div>

                                        <div class="price">
                                            <span><?php echo number_format($songay*$price_hs)?>đ</span>
                                        </div>
                                    </div>
                                    <div class="title-checkin-checkout mt-3 mb-3 d-flex justify-content-between">
                                        <div class="">
                                            <span class="pe-2">Phí dịch vụ</span>
                                        </div>
                                        <div class="price">
                                            <span><?php echo number_format($phidichvu)?></span>
                                        </div>
                                    </div>
                                    <?php 
                                        if(!empty($magiamgia)){
                                            echo '<div class="title-checkin-checkout mt-3 mb-3 d-flex justify-content-between">
                                            <div class="">
                                                <span class="pe-2">Khuyến mãi</span>
                                            </div>
                                            <div class="price">
                                                <span>'.number_format($tiengiam).'đ</span>
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
                                            <span><?php echo number_format($tongtien)?>đ</span>
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