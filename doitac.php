<?php
ob_start();
include 'header.php';
include "./middlewares/connect.php";
?>
<!-- end header -->

<div class="container-fuild" style="background: linear-gradient( 90deg, #f65e38 0, #f68a39 51%, #f65e38);">
    <div class="container  pt-5 pb-5" style="width: 1260px;">
        <h4 class="text-light fw-bold">Đăng ký đối tác BOOKING - Cùng booking kết nối bốn phương</h4>
        <span class="text-light pt-1">Lợi nhận liền tay, an toàn và hiệu quả. Liên kết khắp cả nước...</span>
    </div>


</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-xs-12 last-xs first-md mt-5">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 pb-5">
                    <div class="media ">
                        <img src="./public/image/coins@2x.png" width="65" height="70">
                        <h3 class="pt-4">Tích điểm nhanh chóng</h3>
                        <p class="">Tích điểm đối với mỗi lượt đặt chỗ thành công. Quy đổi thành Lux Credit để du lịch
                            nhiều hơn nữa.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="media"><img src="./public/image/top-sales@2x.png" width="55" height="70">
                        <h3 class="pt-4">Tiện ích thông minh</h3>
                        <p class="">Check-in và kiểm tra hóa đơn thanh toán kể cả khi không có kết nối mạng. Hoàn tiền
                            nhanh gọn. Đổi lịch dễ dàng.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class=""><img src="./public/image/wallet@2x.png" width="60" height="70">
                        <h3 class="pt-4">Thanh toán đơn giản</h3>
                        <p class="">Phương thức thanh toán tiện lợi, an toàn. Tích hợp chức năng lưu thẻ để đặt phòng
                            lần sau.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class=""><img src="./public/image/backpack@2x.png" width="55" height="70">
                        <h3 class="pt-4">Ưu đãi mỗi ngày</h3>
                        <p class="">Nhận thông báo ưu đãi từ Luxstay khi có kế hoạch du lịch để lựa chọn và đặt ngay cho
                            mình một chỗ ở phù hợp, tiện nghi với giá tốt nhất.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 ">
            <div class="account">
                <form class="account2 p-4  rounded-3 " method="post" style="background-color: #fff;">
                    <h3 class="account__title fw-bold fs-3">Đăng ký trở thành đối tác</h3>
                    <div class=" inputdangnhap pb-1 mt-4">
                        <div class="pb-2">
                            <span class="fw-bolder ">Địa chỉ Email</span>
                        </div>

                        <input type="email" name="email" placeholder=" Nhập địa chỉ Email" required class="rounded-pill border-1 " style="outline: none; padding: 10px">
                        <i class="far fa-envelope"></i>
                    </div>
                    <div class="inputdangnhap select pb-1 mt-3">
                        <div class="pb-2">
                            <span class="fw-bolder ">Số điện thoại</span>
                        </div>
                        <input type="tel" placeholder="Nhập số điện thoại" name="phone" required class="rounded-pill border-1 " style="outline: none; padding: 10px">
                        <i class="fas fa-phone"></i>

                    </div>
                    
                    <div class="inputdangnhap select pb-1 mt-3">
                        <div class="pb-2">
                            <span class="fw-bolder ">Họ và Tên</span>
                        </div>
                        <input type="text" placeholder="Vui lòng nhập tên" name="name" required class="rounded-pill border-1 " style="outline: none; padding: 10px">
                    </div>
                    <div class="inputdangnhap select pb-1 mt-3">
                        <div class="pb-2">
                            <span class="fw-bolder ">Chứng minh thư</span>
                        </div>
                        <input type="text" placeholder="Vui lòng nhập CMND" name="cmnd" required class="rounded-pill border-1 " style="outline: none; padding: 10px">
                    </div>
                    <div class="inputdangnhap select pb-1 mt-3">
                        <div class="pb-2">
                            <span class="fw-bolder ">Địa chỉ</span>
                        </div>
                        <input type="text" placeholder="Vui lòng nhập địa chỉ" name="address" required class="rounded-pill border-1 " style="outline: none; padding: 10px">
                    </div>
                    <div class="inputdangnhap select pb-1 mt-3">
                        <div class="pb-2">
                            <span class="fw-bolder ">Mật khẩu</span>
                        </div>
                        <input type="password" placeholder="Mật khẩu" name="password" required class="rounded-pill border-1 " style="outline: none; padding: 10px">

                        <i class="fas fa-lock"></i>

                    </div>
                    <div class="inputdangnhap select pb-1 mt-3">
                        <div class="pb-2">
                            <span class="fw-bolder ">Nhập lại mật khẩu</span>
                        </div>
                        <input type="password" name="repassword" placeholder="Nhập lại mật khẩu" required class="rounded-pill border-1 " style="outline: none; padding: 10px">

                        <i class="fas fa-lock"></i>

                    </div>
                    <div class="buttondangnhap pt-3">
                        <button type="submit" name="add_user" class="text-light rounded-pill border-1 fw-bold">Đăng
                            ký</button>
                    </div>
                </form>
                <?php
                if (isset($_POST['add_user'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $password = $_POST['password'];
                    $address = $_POST['address'];
                    $cmnd = $_POST['cmnd'];
                    $repassword = $_POST['repassword'];
                    if ($password === $repassword) {
                        $password = md5($password);
                        $sql = "INSERT INTO `doitac`( `name`, `email`, `phone`, `cmnd`, `address`, `password`, `time`) VALUES ('$name', '$email','$phone','$cmnd','$address','$password','$today')";
                        $result = $conn->query($sql);
                        if ($result) {
                            setcookie('doitac', $email, time() + (86400 * 30), "/");  
                            $to = $email;
                            $subject = "Đăng ký thành công";
                            $message = 
                            '<head>
                                <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <style type="text/css">
                                    body {
                                        margin: 0;
                                        background: #FEFEFE;
                                        color: #585858;
                                    }
                                    
                                    table {
                                        font-size: 15px;
                                        line-height: 23px;
                                        max-width: 500px;
                                        min-width: 460px;
                                        text-align: center;
                                    }
                                    
                                    .table_inner {
                                        min-width: 100% !important;
                                    }
                                    
                                    td {
                                        font-family: -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
                                        vertical-align: top;
                                    }
                                    
                                    .carpool_logo {
                                        margin: 30px auto;
                                    }
                                    
                                    .dummy_row {
                                        padding-top: 20px !important;
                                    }
                                    
                                    .section,
                                    .sectionlike {
                                        background: #C9F9E9;
                                    }
                                    
                                    .section {
                                        padding: 0 20px;
                                    }
                                    
                                    .sectionlike {
                                        padding-bottom: 10px;
                                    }
                                    
                                    .section_content {
                                        width: 100%;
                                        background: #fff;
                                    }
                                    
                                    .section_content_padded {
                                        padding: 0 35px 40px;
                                    }
                                    
                                    .section_zag {
                                        background: #F4FBF9;
                                    }
                                    
                                    .imageless_section {
                                        padding-bottom: 20px;
                                    }
                                    
                                    img {
                                        display: block;
                                        margin: 0 auto;
                                    }
                                    
                                    .img_section {
                                        width: 100%;
                                        max-width: 500px;
                                    }
                                    
                                    .img_section_side_table {
                                        width: 100% !important;
                                    }
                                    
                                    h1 {
                                        font-size: 20px;
                                        font-weight: 500;
                                        margin-top: 40px;
                                        margin-bottom: 0;
                                    }
                                    
                                    .near_title {
                                        margin-top: 10px;
                                    }
                                    
                                    .last {
                                        margin-bottom: 0;
                                    }
                                    
                                    a {
                                        color: #63D3CD;
                                        font-weight: 500;
                                        word-break: break-word;
                                        /* Footer has long unsubscribe link */
                                    }
                                    
                                    .button {
                                        display: block;
                                        width: 100%;
                                        max-width: 300px;
                                        background: #20DA9C;
                                        border-radius: 8px;
                                        color: #fff;
                                        font-size: 18px;
                                        font-weight: normal;
                                        /* Resetting from a */
                                        padding: 12px 0;
                                        margin: 30px auto 0;
                                        text-decoration: none;
                                    }
                                    
                                    small {
                                        display: block;
                                        width: 100%;
                                        max-width: 330px;
                                        margin: 14px auto 0;
                                        font-size: 14px;
                                    }
                                    
                                    .signature {
                                        padding: 20px;
                                    }
                                    
                                    .footer,
                                    .footer_like {
                                        background: #1FD99A;
                                    }
                                    
                                    .footer {
                                        padding: 0 20px 30px;
                                    }
                                    
                                    .footer_content {
                                        width: 100%;
                                        text-align: center;
                                        font-size: 12px;
                                        line-height: initial;
                                        color: #005750;
                                    }
                                    
                                    .footer_content a {
                                        color: #005750;
                                    }
                                    
                                    .footer_item_image {
                                        margin: 0 auto 10px;
                                    }
                                    
                                    .footer_item_caption {
                                        margin: 0 auto;
                                    }
                                    
                                    .footer_legal {
                                        padding: 20px 0 40px;
                                        margin: 0;
                                        font-size: 12px;
                                        color: #A5A5A5;
                                        line-height: 1.5;
                                    }
                                    
                                    .text_left {
                                        text-align: left;
                                    }
                                    
                                    .text_right {
                                        text-align: right;
                                    }
                                    
                                    .va {
                                        vertical-align: middle;
                                    }
                                    
                                    .stats {
                                        min-width: auto !important;
                                        max-width: 370px;
                                        margin: 30px auto 0;
                                    }
                                    
                                    .counter {
                                        font-size: 22px;
                                    }
                                    
                                    .stats_counter {
                                        width: 23%;
                                    }
                                    
                                    .stats_image {
                                        width: 18%;
                                        padding: 0 10px;
                                    }
                                    
                                    .stats_meta {
                                        width: 59%;
                                    }
                                    
                                    .stats_spaced {
                                        padding-top: 16px;
                                    }
                                    
                                    .walkthrough_spaced {
                                        padding-top: 24px;
                                    }
                                    
                                    .walkthrough {
                                        max-width: none;
                                    }
                                    
                                    .walkthrough_meta {
                                        padding-left: 20px;
                                    }
                                    
                                    .table_checkmark {
                                        padding-top: 30px;
                                    }
                                    
                                    .table_checkmark_item {
                                        font-size: 15px;
                                    }
                                    
                                    .td_checkmark {
                                        width: 24px;
                                        padding: 7px 12px 0 0;
                                    }
                                    
                                    .padded_bottom {
                                        padding-bottom: 40px;
                                    }
                                    
                                    .marginless {
                                        margin: 0;
                                    }
                                    /* Restricting responsive for iOS Mail app only as Inbox/Gmail have render bugs */
                                    
                                    @media only screen and (max-width: 480px) and (-webkit-min-device-pixel-ratio: 2) {
                                        table {
                                            min-width: auto !important;
                                        }
                                        .section_content_padded {
                                            padding-right: 25px !important;
                                            padding-left: 25px !important;
                                        }
                                        .counter {
                                            font-size: 18px !important;
                                        }
                                    }
                                </style>
                            </head>
                            
                            <body style="	margin: 0;
                              background: #FEFEFE;
                              color: #585858;
                            ">
                                <!-- Preivew text -->
                                <span class="preheader" style="display: none !important; visibility: hidden; opacity: 0; color: transparent; height: 0; width: 0;border-collapse: collapse;border: 0px;"></span>
                                <!-- Carpool logo -->
                                <table align="center" border="0" cellspacing="0" cellpadding="0" style="	font-size: 15px;
                              line-height: 23px;
                              max-width: 500px;
                              min-width: 460px;
                              text-align: center;
                            ">
                                    <tbody>
                                        <tr>
                                            <td style="	font-family: -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
                              vertical-align: top;
                                border: none !important;
                            ">
                                                <img src="https://carpool-email-assets.s3.amazonaws.com/shared/carpool-logo@2x.png" class="carpool_logo" width="232" style="	display: block;
                              margin: 0 auto;
                            margin: 30px auto;">
                                            </td>
                                        </tr>
                                        <!-- Header -->
                                        <tr>
                                            <td class="sectionlike imageless_section" style="	font-family: -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
                              vertical-align: top;
                                border: none !important;
                              background: #C9F9E9;
                              padding-bottom: 10px;
                            padding-bottom: 20px;"></td>
                                        </tr>
                                        <!-- Content -->
                                        <tr>
                                            <td class="section" style="	font-family: -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
                              vertical-align: top;
                                border: none !important;
                              background: #C9F9E9;
                              padding: 0 20px;
                            ">
                                                <table border="0" cellspacing="0" cellpadding="0" class="section_content" style="	font-size: 15px;line-height: 23px;max-width: 500px;min-width: 460px;text-align: center;width: 100%;background: #fff;
                            ">
                                                    <tbody>
                                                        <tr>
                                                            <td class="section_content_padded" style="	font-family: -apple-system, BlinkMacSystemFont, Roboto, sans-serif;vertical-align: top;border: none !important;
                            padding: 0 35px 40px;">
                                                                <h1 style="	font-size: 20px;font-weight: 500;margin-top: 40px;margin-bottom: 0;
                            ">Chào Trương Mạnh Dũng,</h1>
                                                                <p class="near_title last" style="margin-top: 10px;margin-bottom: 0;">Cảm ơn bạn đã đăng kí tài khoản, để hoàn tất quá trình đăng kí, vui lòng bấm vào nút bên dưới để xác nhận</p>
                                                                <a href="#" style="	display: block;width: 100%;max-width: 300px;background: #20DA9C;border-radius: 8px;color: #fff;font-size: 18px;padding: 12px 0;margin: 30px auto 0;text-decoration: none;
                            " target="_blank">Xác nhận</a>
                                                                <small style="	display: block;width: 100%;max-width: 330px;margin: 14px auto 0;font-size: 14px;
                            ">Bạn có thể hủy đăng kí hoặc thay đổi thông tin bất cứ lúc nào</small>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <!-- Signature -->
                                        <tr>
                                            <td class="section" style="	font-family: -apple-system, BlinkMacSystemFont, Roboto, sans-serif;vertical-align: top;border: none !important;background: #C9F9E9;padding: 0 20px;
                            ">
                                                <table border="0" cellspacing="0" cellpadding="0" class="section_content section_zag" style="	font-size: 15px;line-height: 23px;max-width: 500px;min-width: 460px;text-align: center;width: 100%;background: #fff;background: #F4FBF9;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="signature" style="	font-family: -apple-system, BlinkMacSystemFont, Roboto, sans-serif;vertical-align: top;border: none !important;padding: 20px;">
                                                                <p class="marginless" style="margin: 0;">Thân ái, <br>Booking Hotel</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <!-- Footer -->
                                        <tr>
                                            <td class="section dummy_row" style="	font-family: -apple-system, BlinkMacSystemFont, Roboto, sans-serif;vertical-align: top;border: none !important;background: #C9F9E9;padding: 0 20px;
                            padding-top: 20px !important;"></td>
                                        </tr>
                                        <tr>
                                            <td style="	font-family: -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
                              vertical-align: top;
                                border: none !important;">
                                                <table border="0" cellspacing="0" cellpadding="0" class="section_content" style="	font-size: 15px;line-height: 23px;max-width: 500px;min-width: 460px;text-align: center;width: 100%;background: #fff;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="footer_like" style="	font-family: -apple-system, BlinkMacSystemFont, Roboto, sans-serif;vertical-align: top;border: none !important;background: #1FD99A; "><img src="https://carpool-email-assets.s3.amazonaws.com/shared/footer@2x.png" alt="" width="500" class="img_section" style="	display: block;margin: 0 auto;width: 100%;max-width: 500px;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="footer" style="	font-family: -apple-system, BlinkMacSystemFont, Roboto, sans-serif;vertical-align: top;border: none !important;padding: 0 20px 30px;background: #1FD99A;">
                                                                <table border="0" cellspacing="0" cellpadding="0" class="footer_content" style="	font-size: 15px;line-height: 23px;max-width: 500px;min-width: 460px;text-align: center;width: 100%;font-size: 12px;line-height: initial;color: #005750;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td width="33%" style="	font-family: -apple-system, BlinkMacSystemFont, Roboto, sans-serif;vertical-align: top;border: none !important;">
                                                                                <img src="https://carpool-email-assets.s3.amazonaws.com/shared/footer-learn@2x.png" width="24" class="footer_item_image" style="	display: block;margin: 0 auto;
                            margin: 0 auto 10px;">
                                                                                <p class="footer_item_caption" style="margin: 0 auto;">More about <br><a href="http://waze.com/carpool/index.html" style="	color: #005750;
                            " target="_blank">Waze Carpool</a></p>
                                                                            </td>
                                                                            <td width="33%" style="	font-family: -apple-system, BlinkMacSystemFont, Roboto, sans-serif;vertical-align: top;border: none !important;
                            ">
                                                                                <img src="https://carpool-email-assets.s3.amazonaws.com/shared/footer-support@2x.png" width="24" class="footer_item_image" style="	display: block;margin: 0 auto;
                            margin: 0 auto 10px;">
                                                                                <p class="footer_item_caption" style="margin: 0 auto;">Questions? <br><a href="https://support.google.com/waze/carpool" style="	color: #005750;
                            " target="_blank">Were here</a>
                                                                                </p>
                                                                            </td>
                                                                            <td width="33%" style="	font-family: -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
                              vertical-align: top;
                                border: none !important;
                            ">
                                                                                <img src="https://carpool-email-assets.s3.amazonaws.com/shared/footer-fb@2x.png" width="24" class="footer_item_image" style="	display: block;
                              margin: 0 auto;
                            margin: 0 auto 10px;">
                                                                                <p class="footer_item_caption" style="margin: 0 auto;">Join the community <br><a href="https://www.facebook.com/groups/wazecarpoolers" style="	color: #005750;
                            " target="_blank">on Facebook</a></p>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <!-- Legal footer -->
                                        <tr>
                                            <td style="	font-family: -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
                              vertical-align: top;
                                border: none !important;
                            ">
                                                <p class="footer_legal" style="	padding: 20px 0 40px;
                              margin: 0;
                              font-size: 12px;
                              color: #A5A5A5;
                              line-height: 1.5;
                            ">
                                                    If you did not enter this email address when signing up for Waze Carpool service, disregard this message.<br><br> © 2017 Google Inc. 1600 Amphitheatre Parkway, Mountain View, CA 94043
                                                    <br><br> This is a mandatory service email from Waze Carpool.
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            
                            </body>';
                            $header = "From: dungtmph12934@fpt.edu.vn \r \n";
                            $header .= "Content-Type: text/html; charset=utf-8 \r\n";
                            if (mail($to, $subject, $message, $header) == true) {
                                header("location: index.php");
                            } else {
                                echo '<script>
                                    alert("Email không tồn tại");
                                </script>';
                            }
                        }
                    }else{
                        echo "
                        <script>
                            alert('mật khẩu nhập lại không đúng, vui lòng nhập lại');
                        </script>
                    ";
                    }

                    
                }
                ?>
                <div class="center-xs p-4  repass">
                    <div class="text-center fw-normal">
                        <span>Quên mật khẩu?</span>
                        <a href="" class="fw-bold text-decoration-none">
                            Nhấn vào đây
                        </a>
                    </div>
                    <div class="repass mt-4">
                        <span>Bạn đã có tài khoản Luxstay?</span>
                        <a href="" class="fw-bold text-decoration-none">
                            Đăng nhập
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
                                <path pid="0" fill="#557EBF" d="M15.85 8.2c0-.55-.05-1.1-.15-1.65H8.15v3.1h4.3c-.2 1-.75 1.85-1.6 2.4v2h2.6c1.5-1.4 2.4-3.45 2.4-5.85z">
                                </path>
                                <path pid="1" fill="#36A852" d="M8.15 16c2.15 0 3.95-.7 5.3-1.95l-2.6-2c-.7.5-1.65.75-2.7.75-2.1 0-3.85-1.4-4.5-3.3H1v2.05C2.35 14.2 5.05 16 8.15 16z">
                                </path>
                                <path pid="2" fill="#F9BC15" d="M3.7 9.5c-.15-.5-.25-1-.25-1.5s.1-1.05.25-1.5V4.4H1C.45 5.5.15 6.7.15 8c0 1.3.3 2.5.85 3.6l2.7-2.1z">
                                </path>
                                <path pid="3" fill="#EA4535" d="M8.15 3.2c1.15 0 2.25.4 3.05 1.2l2.3-2.3C12.15.8 10.3 0 8.15 0 5.05 0 2.35 1.8 1 4.4l2.7 2.1c.6-1.9 2.4-3.3 4.45-3.3z">
                                </path>
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
<!-- end footer --> -->