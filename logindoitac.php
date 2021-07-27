<?php
ob_start();
include "header.php";
include "./middlewares/connect.php"
?>
<div class="container-fuild" style="background: linear-gradient( 90deg, #f65e38 0, #f68a39 51%, #f65e38);">
    <div class="container  pt-5 pb-5" style="width: 1260px;">
        <h4 class="text-light fw-bold">Đăng nhập đối tác BOOKING - Cùng nhau thu lợi nhuận nào</h4>
        <span class="text-light pt-1">Nhanh chóng, tiện lợi và an toàn. Mức ưu đãi hậu hĩnh.</span>
    </div>


</div>

<div class="container ">
    <div class="row">
        <div class="col-md-8 col-xs-12 last-xs first-md mt-5">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 pb-5">
                    <div class="media ">
                        <img src="./public/image/coins@2x.png" width="65" height="70">
                        <h3 class="pt-4">Hệ thống khắp cả nước</h3>
                        <p class="">Booking có ở khắp mọi nơi trên cả nước, kết nối tất cả các homestay nghỉ dưỡng cho thuê toàn quốc.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="media"><img src="./public/image/top-sales@2x.png" width="55" height="70">
                        <h3 class="pt-4">Tiện ích thông minh</h3>
                        <p class="">Check-in và kiểm tra hóa đơn thanh toán kể cả khi không có kết nối mạng. Hoàn tiền nhanh gọn. Đổi lịch dễ dàng.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class=""><img src="./public/image/wallet@2x.png" width="60" height="70">
                        <h3 class="pt-4">Thanh toán đơn giản</h3>
                        <p class="">Phương thức thanh toán tiện lợi, an toàn. Tích hợp chức năng lưu thẻ để đặt phòng lần sau.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class=""><img src="./public/image/backpack@2x.png" width="55" height="70">
                        <h3 class="pt-4">Ưu đãi mỗi ngày</h3>
                        <p class="">Nhận thông báo ưu đãi từ Luxstay khi có kế hoạch du lịch để lựa chọn và đặt ngay cho mình một chỗ ở phù hợp, tiện nghi với giá tốt nhất.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 ">
            <div class="account">
                <div class="account2 p-4  rounded-3 " style="background-color: #fff;">
                    <h3 class="account__title fw-bold fs-3">Đăng nhập đối tác</h3>
                    <div class="input-group"><label class="input-group__label bold is-block fw-bolder pb-3 mt-3">Đăng
                            nhập để vào quản trị khách sạn của bạn</label></div>

                    <form action="" method="post">
                        <div class=" inputdangnhap pb-3 mt-3">

                            <input type="email" name="email" placeholder="Nhập địa chỉ Email" required class="rounded-pill border-1 " style="outline: none; padding: 10px">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="inputdangnhap select pb-3 mt-3">
                            <input type="password" name="password" placeholder="Mật khẩu" required class="rounded-pill border-1 " style="outline: none; padding: 10px">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="buttondangnhap pt-3">
                            <button type="submit" name="submit_login" class="text-light rounded-pill border-1 fw-bold">Đăng
                                nhập</button>
                        </div>
                    </form>

                    <?php 
                        if(isset($_POST['submit_login'])){
                            $email = $_POST['email'];
                            $password = $_POST['password'];
                            $sql_user = "SELECT * FROM doitac";
                            $result_user = $conn->query($sql_user);
                            if($result_user->num_rows > 0){
                                while($row_user = $result_user->fetch_assoc()){
                                    if($email === $row_user['email']){
                                        if($row_user['password'] === md5($password)){
                                            setcookie("doitac",$email,time() + (86400*30),"/");
                                            header("Location: index.php");
                                        }else{
                                            echo '
                                            <script>
                                                alert("Password không đúng!!!");
                                            </script>
                                        ';
                                        }
                                    }else{
                                        echo '
                                            <script>
                                                alert("Email không đúng!!!");
                                            </script>
                                        ';
                                    }
                                }
                            }
                        }
                        
                    ?>
                </div>

                <div class="center-xs p-4  repass">
                    <div class="text-center fw-normal">
                        <span>Quên mật khẩu?</span>
                        <a href="" class="fw-bold text-decoration-none">
                            Nhấn vào đây
                        </a>
                    </div>
                    <div class="repass mt-4">
                        <span>Bạn chưa có tài khoản Luxstay?</span>
                        <a href="doitac.php" class="fw-bold text-decoration-none">
                            Đăng ký
                        </a>
                    </div>
                    <div class="text-center mt-4">
                        <span>
                            Hoặc
                        </span>
                    </div>
                    <div class="login-gmail mt-4 border rounded-pill ">
                        <a href="">Đăng nhập với Gmail</a>
                        <svg version="1.1" viewBox="0 0 16 16" class="is-absolute svg-icon svg-login">
                            <g fill="none">
                                <path pid="0" fill="#557EBF" d="M15.85 8.2c0-.55-.05-1.1-.15-1.65H8.15v3.1h4.3c-.2 1-.75 1.85-1.6 2.4v2h2.6c1.5-1.4 2.4-3.45 2.4-5.85z"></path>
                                <path pid="1" fill="#36A852" d="M8.15 16c2.15 0 3.95-.7 5.3-1.95l-2.6-2c-.7.5-1.65.75-2.7.75-2.1 0-3.85-1.4-4.5-3.3H1v2.05C2.35 14.2 5.05 16 8.15 16z"></path>
                                <path pid="2" fill="#F9BC15" d="M3.7 9.5c-.15-.5-.25-1-.25-1.5s.1-1.05.25-1.5V4.4H1C.45 5.5.15 6.7.15 8c0 1.3.3 2.5.85 3.6l2.7-2.1z"></path>
                                <path pid="3" fill="#EA4535" d="M8.15 3.2c1.15 0 2.25.4 3.05 1.2l2.3-2.3C12.15.8 10.3 0 8.15 0 5.05 0 2.35 1.8 1 4.4l2.7 2.1c.6-1.9 2.4-3.3 4.45-3.3z"></path>
                            </g>
                        </svg>


                    </div>


                    <div class="login-facebook mt-4 border rounded-pill ">
                        <a href="">Đăng nhập với Facebook</a>


                        <svg class="svg-facebook" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 216 216" width="25" height="25">
                            <g fill="#3b5998">
                                <path fill="" d="
                                      M204.1 0H11.9C5.3 0 0 5.3 0 11.9v192.2c0 6.6 5.3 11.9 11.9
                                      11.9h103.5v-83.6H87.2V99.8h28.1v-24c0-27.9 17-43.1 41.9-43.1
                                      11.9 0 22.2.9 25.2 1.3v29.2h-17.3c-13.5 0-16.2 6.4-16.2
                                      15.9v20.8h32.3l-4.2 32.6h-28V216h55c6.6 0 11.9-5.3
                                      11.9-11.9V11.9C216 5.3 210.7 0 204.1 0z">
                                </path>
                            </g>
                        </svg>
                    </div>


                </div>
                </form>


            </div>
        </div>

    </div>
</div>

<?php
include 'footer.php';
?>