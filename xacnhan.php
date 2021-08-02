
<?php
include "./middlewares/connect.php";
if (isset($_GET['mahoadon'])) {
    $mahoadon = $_GET['mahoadon'];
    $sql_hd = "SELECT * FROM donhang WHERE mahoadon = '$mahoadon'";
    $result_hd = $conn->query($sql_hd);
    if ($result_hd->num_rows > 0) {
        while ($row_hd = $result_hd->fetch_assoc()) {
            $name = $row_hd['name'];
            $time_up = $row_hd['checkin'];
            $time_out = $row_hd['checkout'];
            $id_hs = $row_hd['id_hs'];
            $sql_hs = "SELECT * FROM khachsan where id =$id_hs";
            $result_hs = $conn->query($sql_hs);
            $email = $row_hd['email'];
            if ($result_hs->num_rows > 0) {
                while ($row_hs = $result_hs->fetch_assoc()) {
                    $name_hs = $row_hs['name'];
                }
            }
            $id_hd = $row_hd['id'];
            $tongtien = $row_hd['tongtien'];
            $songay = (strtotime($time_out) - strtotime($time_up)) / 86400;
        }
        $sql = "UPDATE donhang SET trangthai=1 WHERE mahoadon='$mahoadon'";
        $result = $conn->query($sql);
        if ($result) {
            $to = $email;
            $subject = "Đăng ký thành công";
            $message = '<!DOCTYPE html>
            <html lang="en">
            
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            
            <body>
                <div
                    style="border-width: 0px 1px 1px; border-top-style: initial; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-top-color: initial; border-right-color: rgb(204, 204, 204); border-bottom-color: rgb(204, 204, 204); border-left-color: rgb(204, 204, 204); border-image: initial; overflow: hidden auto;">
                    <div class=" nicEdit-main " contenteditable="true" style=" margin: 4px; min-height: 625px; overflow: hidden;">
                        <table
                            style="margin: 0px auto; padding: 0px; width: 596px; color: rgb(102, 102, 102); font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif; font-size: 16px; background-color: rgb(235, 235, 235); min-height: 170px; display: flex;">
                            <tbody style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                <tr style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                    <td style="margin: 0px auto; padding: 0px; box-sizing: border-box;"><a
                                            href="https://api.luxstay.com/" target="_blank"
                                            data-saferedirecturl="https://www.google.com/url?q=https://api.luxstay.com&amp;source=gmail&amp;ust=1627895921447000&amp;usg=AFQjCNFLrA85caYKQvTevVr46DB1aShGmg"
                                            style="margin: 0px auto; padding: 0px; box-sizing: border-box; color: rgb(17, 85, 204); text-decoration-line: none;"><img
                                                src="https://ci4.googleusercontent.com/proxy/Qonyh7SGiugVCkOUcEl9Nri_rvJ1TEM4FJH846rwwNu2N6t3UCmmbzCdmES2TADenuXklmfpCdncrmE7dnMeqqKNUAigEg=s0-d-e1-ft#https://api.luxstay.com/images/emails/logo_dark.png"
                                                alt="Luxstay" class="CToWUd"
                                                style="margin: 0px auto; padding: 0px; box-sizing: border-box; max-width: 100%; height: auto;"></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table
                            style="margin: 0px auto; padding: 0px; width: 596px; color: rgb(102, 102, 102); font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif; font-size: 16px; background-color: rgb(235, 235, 235);">
                            <tbody style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                <tr style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                    <td style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                        <table class="m_6425257584780622054mobile-padding"
                                            style="margin: 0px auto; padding: 25px 25px 0px; width: 592px; background-color: rgb(255, 255, 255); border-top: 3px solid rgb(244, 87, 16);">
                                            <tbody style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                <tr style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                    <td style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                        <table class="m_6425257584780622054mobile-font-16"
                                                            style="margin: 0px auto; padding: 0px; width: 538px; font-size: 18px; line-height: 1.3;">
                                                            <tbody style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                                <tr class="m_6425257584780622054mobile-mb-10"
                                                                    style="margin: 0px auto 20px; padding: 0px; box-sizing: border-box; display: block;">
                                                                    <td
                                                                        style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                                        Xin chào&nbsp;&nbsp;<a
                                                                            href="https://mail.google.com/mail/u/2/#m_6425257584780622054_"
                                                                            style="margin: 0px auto; padding: 0px; box-sizing: border-box; color: rgb(244, 87, 16); text-decoration-line: none; font-weight: 600;">'
                . $name . '</a></td>
                                                                </tr>
                                                                <tr
                                                                    style="margin: 0px auto; padding: 0px; box-sizing: border-box; display: block;">
                                                                    <td
                                                                        style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                                        Bạn đã xác nhận đặt phòng. Bạn cần thanh toán trước khi đến
                                                                        nhận phòng.</td>
                                                                </tr>
                                                                <tr
                                                                    style="margin: 0px auto; padding: 0px; box-sizing: border-box; display: block; text-align: center;">
                                                                    <td
                                                                        style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                                        <h5>Thông tin đặt phòng</h5>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="m_6425257584780622054mobile-padding"
                                            style="margin: 0px auto; padding: 20px 25px 25px; width: 592px; background-color: rgb(255, 255, 255);">
                                            <tbody style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                <tr style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                    <td style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                        <table cellpadding="0" cellspacing="0"
                                                            style="margin: 0px auto; padding: 0px; width: 538px; border: 1px solid rgb(206, 206, 206);">
                                                            <tbody style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                                <tr style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                                    <td
                                                                        style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            style="margin: 0px auto; padding: 20px 15px 20px 20px; width: 536px;">
                                                                            <tbody
                                                                                style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                                                <tr
                                                                                    style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                                                    <td
                                                                                        style="margin: 0px auto; padding: 7px 0px; box-sizing: border-box; width: 200.391px;">
                                                                                        Tên căn hộ:</td>
                                                                                    <td
                                                                                        style="margin: 0px auto; padding: 7px 0px; box-sizing: border-box; width: 300.609px;">
                                                                                        <strong
                                                                                            style="margin: 0px auto; padding: 0px; box-sizing: border-box; color: rgb(244, 87, 16); line-height: 1.3;"><a
                                                                                                href="https://www.luxstay.com/rooms/68886"
                                                                                                target="_blank"
                                                                                                data-saferedirecturl="https://www.google.com/url?q=https://www.luxstay.com/rooms/68886&amp;source=gmail&amp;ust=1627895921447000&amp;usg=AFQjCNE-xg6XHKGavJAvoBL-Uy4MwHH5HA"
                                                                                                style="margin: 0px auto; padding: 0px; box-sizing: border-box; color: rgb(244, 87, 16); text-decoration-line: none; line-height: 1.3;">'
                . $name_hs . '</a></strong></td>
                                                                                </tr>
                                                                                <tr
                                                                                    style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                                                    <td colspan="2"
                                                                                        style="margin: 0px auto; padding: 30px 0px 10px; box-sizing: border-box;">
                                                                                        <span
                                                                                            style="margin: 0px auto; padding: 0px; box-sizing: border-box;">Mã
                                                                                            số đặt phòng: ' . $mahoadon .
                '</span><span
                                                                                            style="margin: 0px auto; padding: 0px; box-sizing: border-box; float: right;">Ngày
                                                                                            ' . date("d-m-Y", strtotime($date)) .
                '</span></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                        <table
                                                                            style="margin: 0px auto; padding: 20px 15px 20px 20px; width: 536px; border-top: 1px solid rgb(206, 206, 206);">
                                                                            <tbody
                                                                                style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                                                <tr
                                                                                    style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                                                    <td
                                                                                        style="margin: 0px auto; padding: 7px 0px; box-sizing: border-box; width: 198px;">
                                                                                        Tên khách hàng</td>
                                                                                    <td
                                                                                        style="margin: 0px auto; padding: 7px 0px; box-sizing: border-box; width: 297px;">
                                                                                        <strong
                                                                                            style="margin: 0px auto; padding: 0px; box-sizing: border-box; color: rgb(51, 51, 51);">'
                . $name . '</strong></td>
                                                                                </tr>
                                                                                <tr
                                                                                    style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                                                    <td
                                                                                        style="margin: 0px auto; padding: 7px 0px; box-sizing: border-box; width: 198px;">
                                                                                        Thời gian:</td>
                                                                                    <td
                                                                                        style="margin: 0px auto; padding: 7px 0px; box-sizing: border-box; width: 297px;">
                                                                                        <strong
                                                                                            style="margin: 0px auto; padding: 0px; box-sizing: border-box; color: rgb(51, 51, 51);">'
                . date("d-m-Y", strtotime($time_up)) . '
                                                                                            - ' . date(
                    "d-m-Y",
                    strtotime($time_out)
                ) . '</strong></td>
                                                                                </tr>
                                                                                <tr
                                                                                    style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                                                    <td
                                                                                        style="margin: 0px auto; padding: 7px 0px; box-sizing: border-box; width: 198px;">
                                                                                        Số đêm:</td>
                                                                                    <td
                                                                                        style="margin: 0px auto; padding: 7px 0px; box-sizing: border-box; width: 297px;">
                                                                                        <strong
                                                                                            style="margin: 0px auto; padding: 0px; box-sizing: border-box; color: rgb(51, 51, 51);">'
                . $songay . '</strong></td>
                                                                                </tr>
                                                                                <tr
                                                                                    style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                                                    <td
                                                                                        style="margin: 0px auto; padding: 7px 0px; box-sizing: border-box; width: 198px;">
                                                                                        Tổng tiền:</td>
                                                                                    <td
                                                                                        style="margin: 0px auto; padding: 7px 0px; box-sizing: border-box; width: 297px;">
                                                                                        <strong
                                                                                            style="margin: 0px auto; padding: 0px; box-sizing: border-box; color: rgb(51, 51, 51);">'
                . number_format($tongtien) . 'đ</strong>
                                                                                    </td>
                                                                                </tr>
            
                                                                                <tr style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                                                    <td
                                                                                        style="margin: 0px auto; padding: 7px 0px; box-sizing: border-box; width: 198px;">
                                                                                        Xem đơn đặt</td>
                                                                                    <td style="margin: 0px auto; padding: 7px 0px; box-sizing: border-box; width: 297px;">
                                                                                        <div id="qrcode">
                                                                                            <img style="width: 150px;height: 150px" src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http://localhost:81/duan1/order.php?mahoadon=' . $mahoadon . '&choe=UTF-8" title="http://localhost:81/duan1/order.php?mahoadon=' . $mahoadon . '" />
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                        <table
                                                                            style="margin: 0px auto; padding: 20px 15px 20px 20px; width: 536px; border-top: 1px solid rgb(206, 206, 206);">
                                                                            <tbody
                                                                                style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                                                <tr
                                                                                    style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                                                    <td
                                                                                        style="margin: 0px auto; padding: 7px 0px; box-sizing: border-box; width: 497px; font-size: 13px; color: rgb(153, 153, 153); text-align: center;">
                                                                                        <a href="http://localhost:81/duan1/xacnhan.php?mahoadon=' . $mahoadon . '"
                                                                                            target="_blank"
                                                                                            style="margin: 0px auto; padding: 0px 20px; box-sizing: border-box; color: rgb(255, 255, 255); text-decoration-line: none; display: block; line-height: 50px; width: 347.891px; min-height: 50px; border-radius: 4px; border: 0px; font-weight: bold; font-size: 18px; background-color: rgb(244, 87, 16);">Thanh
                                                                                            toán ngay</a>
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
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table
                            style="margin: 0px auto; padding: 0px; width: 596px; color: rgb(102, 102, 102); font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif; font-size: 16px; height: 30px;">
                        </table>
                        <table
                            style="margin: 0px auto; padding: 0px; width: 596px; color: rgb(102, 102, 102); font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif; font-size: 16px; background-color: rgb(235, 235, 235);">
                            <tbody style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                <tr style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                    <td style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                        <table class="m_6425257584780622054mobile-padding"
                                            style="margin: 0px auto; padding: 25px; width: 592px; background-color: rgb(255, 255, 255); text-align: center;">
                                            <tbody style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                <tr style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                    <td colspan="2"
                                                        style="margin: 0px auto; padding: 7px 0px; box-sizing: border-box; font-size: 14px; text-align: left; color: rgb(51, 51, 51); line-height: 1.3;">
                                                        <a href="https://www.luxstay.com/" target="_blank"
                                                            data-saferedirecturl="https://www.google.com/url?q=https://www.luxstay.com&amp;source=gmail&amp;ust=1627895921447000&amp;usg=AFQjCNGpRZEqWkIUDUBZB9s6dPSSPUmwpg"
                                                            style="margin: 0px auto; padding: 0px; box-sizing: border-box; color: rgb(244, 87, 16); text-decoration-line: none;">https://www.luxstay.com</a>-
                                                        Trang web đặt căn hộ dịch vụ và biệt thự nghỉ dưỡng đầu tiên tại Việt Nam
                                                    </td>
                                                </tr>
                                                <tr style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                    <td style="margin: 0px auto; padding: 0px; box-sizing: border-box;"><a
                                                            href="tel:labels.home.phone" class="m_6425257584780622054mobile-font-16"
                                                            target="_blank"
                                                            style="margin: 0px auto; padding: 0px; box-sizing: border-box; text-decoration-line: none; font-size: 18px;">
                                                            <div class="m_6425257584780622054mobile-block"
                                                                style="margin: 0px 15px 0px auto; padding: 10px 0px; box-sizing: border-box; display: inline-block; color: inherit; height: 50px; vertical-align: middle;">
                                                                <img src="https://ci6.googleusercontent.com/proxy/P0oa5RVd3Y2ueDZhu9J6h4GFT7pZH_eBCNaS2A0vS2IGq8fCucNNfUxgltGfQJiY8Eby0bhGlRVgLMqfr2GW-PK783dD11c=s0-d-e1-ft#https://api.luxstay.com/images/emails/icon-phone.png"
                                                                    class="CToWUd"
                                                                    style="margin: 0px auto; padding: 0px; box-sizing: border-box; max-width: 100%; height: auto;">
                                                            </div>18006586 (miễn phí)
                                                        </a></td>
                                                    <td style="margin: 0px auto; padding: 0px; box-sizing: border-box;"><a
                                                            href="mailto:info@luxstay.com"
                                                            class="m_6425257584780622054mobile-font-16" target="_blank"
                                                            style="margin: 0px auto; padding: 0px; box-sizing: border-box; text-decoration-line: none; font-size: 18px;">
                                                            <div class="m_6425257584780622054mobile-block"
                                                                style="margin: 0px 15px 0px auto; padding: 10px 0px; box-sizing: border-box; display: inline-block; color: inherit; height: 50px; vertical-align: middle;">
                                                                <img src="https://ci4.googleusercontent.com/proxy/GCuFK3GLzanK8qNbEllg4ZPJxa-ytL0DVHwXT3BLrB3p4VReWBmVPr7wak5kMO0E5osA6cBqAQ9_9_Yz-JNMAmyG5NxHK6Q=s0-d-e1-ft#https://api.luxstay.com/images/emails/icon-email.png"
                                                                    class="CToWUd"
                                                                    style="margin: 0px auto; padding: 0px; box-sizing: border-box; max-width: 100%; height: auto;">
                                                            </div>info@luxstay.com
                                                        </a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="m_6425257584780622054mobile-padding"
                                            style="margin: 0px auto; padding: 20px 25px 0px; width: 592px; text-align: center;">
                                            <tbody style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                <tr style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                    <td
                                                        style="margin: 0px auto; padding: 7px 0px; box-sizing: border-box; font-size: 13px;">
                                                        <span
                                                            style="margin: 0px auto; padding: 0px; box-sizing: border-box;">&nbsp;&nbsp;&nbsp;<a
                                                                href="https://mail.google.com/mail/u/2/#m_6425257584780622054_"
                                                                style="margin: 0px auto; padding: 0px; box-sizing: border-box; color: rgb(17, 85, 204); text-decoration-line: none;">About
                                                                us</a>&nbsp;&nbsp;&nbsp;</span>&nbsp;<span
                                                            style="margin: 0px auto; padding: 0px; box-sizing: border-box;">|</span>&nbsp;<span
                                                            style="margin: 0px auto; padding: 0px; box-sizing: border-box;">&nbsp;&nbsp;&nbsp;<a
                                                                href="https://mail.google.com/mail/u/2/#m_6425257584780622054_"
                                                                style="margin: 0px auto; padding: 0px; box-sizing: border-box; color: rgb(17, 85, 204); text-decoration-line: none;">Terms</a>&nbsp;&nbsp;&nbsp;</span>&nbsp;<span
                                                            style="margin: 0px auto; padding: 0px; box-sizing: border-box;">|</span>&nbsp;<span
                                                            style="margin: 0px auto; padding: 0px; box-sizing: border-box;">&nbsp;&nbsp;&nbsp;<a
                                                                href="https://mail.google.com/mail/u/2/#m_6425257584780622054_"
                                                                style="margin: 0px auto; padding: 0px; box-sizing: border-box; color: rgb(17, 85, 204); text-decoration-line: none;">Privacy</a>&nbsp;&nbsp;&nbsp;</span>&nbsp;<span
                                                            style="margin: 0px auto; padding: 0px; box-sizing: border-box;">|</span>&nbsp;<span
                                                            style="margin: 0px auto; padding: 0px; box-sizing: border-box;">&nbsp;&nbsp;&nbsp;<a
                                                                href="https://mail.google.com/mail/u/2/#m_6425257584780622054_"
                                                                style="margin: 0px auto; padding: 0px; box-sizing: border-box; color: rgb(17, 85, 204); text-decoration-line: none;">Help</a>&nbsp;&nbsp;&nbsp;</span>&nbsp;<span
                                                            style="margin: 0px auto; padding: 0px; box-sizing: border-box;">|</span>&nbsp;<span
                                                            style="margin: 0px auto; padding: 0px; box-sizing: border-box;">&nbsp;&nbsp;&nbsp;<a
                                                                href="https://mail.google.com/mail/u/2/#m_6425257584780622054_"
                                                                style="margin: 0px auto; padding: 0px; box-sizing: border-box; color: rgb(17, 85, 204); text-decoration-line: none;">Contact</a>&nbsp;&nbsp;&nbsp;</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="m_6425257584780622054mobile-padding"
                                            style="margin: 0px auto; padding: 0px 25px; width: 592px; text-align: center;">
                                            <tbody style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                <tr style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                    <td
                                                        style="margin: 0px auto; padding: 7px 0px; box-sizing: border-box; font-size: 13px;">
                                                        <span style="margin: 0px auto; padding: 0px; box-sizing: border-box;">Stay
                                                            up to date with our latest news &amp; features</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="m_6425257584780622054mobile-padding"
                                            style="margin: 0px auto; padding: 0px 25px; width: 592px; text-align: center;">
                                            <tbody style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                <tr style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                    <td
                                                        style="margin: 0px auto; padding: 0px; box-sizing: border-box; font-size: 13px;">
                                                        <span
                                                            style="margin: 0px auto; padding: 0px; box-sizing: border-box;">&nbsp;&nbsp;&nbsp;<a
                                                                href="https://www.facebook.com/luxstay/" target="_blank"
                                                                data-saferedirecturl="https://www.google.com/url?q=https://www.facebook.com/luxstay/&amp;source=gmail&amp;ust=1627895921447000&amp;usg=AFQjCNHYIJkGoD-f1jyPUAdE9dzyvH8OcQ"
                                                                style="margin: 0px auto; padding: 0px; box-sizing: border-box; color: rgb(17, 85, 204); text-decoration-line: none;">&nbsp;<img
                                                                    src="https://ci6.googleusercontent.com/proxy/oe4TtCe9yEEuQWMMLvXKHQnEz0k4Ie-0rHFjr7FjV_RVRRJtsv7cE7HKEtiddkz68QwrzIqwE4S3vDzzBCmdS1oZSRXR8SU18acpWg=s0-d-e1-ft#https://api.luxstay.com/images/emails/social-facebook.png"
                                                                    class="CToWUd"
                                                                    style="margin: 0px auto; padding: 0px; box-sizing: border-box; max-width: 100%; height: auto;"></a>&nbsp;&nbsp;&nbsp;</span>&nbsp;<span
                                                            style="margin: 0px auto; padding: 0px; box-sizing: border-box;">&nbsp;&nbsp;&nbsp;<a
                                                                href="https://twitter.com/luxstay" target="_blank"
                                                                data-saferedirecturl="https://www.google.com/url?q=https://twitter.com/luxstay&amp;source=gmail&amp;ust=1627895921447000&amp;usg=AFQjCNGhZVc8hwW9XD9pe4J5LD4GTaj0DQ"
                                                                style="margin: 0px auto; padding: 0px; box-sizing: border-box; color: rgb(17, 85, 204); text-decoration-line: none;">&nbsp;<img
                                                                    src="https://ci4.googleusercontent.com/proxy/QrLNtL-xSaYgI3BbzsZv-vSU0Bq6eSyVF_AKmENEudSDlU4zDOy5u0WZoLhFH2jChodwmtxGN_-r1rPbX7kCzatPQELTB3_slo_W=s0-d-e1-ft#https://api.luxstay.com/images/emails/social-twitter.png"
                                                                    class="CToWUd"
                                                                    style="margin: 0px auto; padding: 0px; box-sizing: border-box; max-width: 100%; height: auto;"></a>&nbsp;&nbsp;&nbsp;</span>&nbsp;<span
                                                            style="margin: 0px auto; padding: 0px; box-sizing: border-box;">&nbsp;&nbsp;&nbsp;<a
                                                                href="https://www.youtube.com/c/homestaytv" target="_blank"
                                                                data-saferedirecturl="https://www.google.com/url?q=https://www.youtube.com/c/homestaytv&amp;source=gmail&amp;ust=1627895921448000&amp;usg=AFQjCNEObcpuNJyj6-5CnHdGjg1FQrMDgQ"
                                                                style="margin: 0px auto; padding: 0px; box-sizing: border-box; color: rgb(17, 85, 204); text-decoration-line: none;">&nbsp;<img
                                                                    src="https://ci3.googleusercontent.com/proxy/7JqVgvJGxBG3Nl_6D9PPpotVOkCBErbczMOSsd3TODwIR918Fdyt5gDC49DE-mnpMgToddf6pmeozWNLToOUCvGY5fophFaMZ6nZ=s0-d-e1-ft#https://api.luxstay.com/images/emails/social-youtube.png"
                                                                    class="CToWUd"
                                                                    style="margin: 0px auto; padding: 0px; box-sizing: border-box; max-width: 100%; height: auto;"></a>&nbsp;&nbsp;&nbsp;</span>&nbsp;<span
                                                            style="margin: 0px auto; padding: 0px; box-sizing: border-box;">&nbsp;&nbsp;&nbsp;<a
                                                                href="https://www.instagram.com/luxstayofficial/" target="_blank"
                                                                data-saferedirecturl="https://www.google.com/url?q=https://www.instagram.com/luxstayofficial/&amp;source=gmail&amp;ust=1627895921448000&amp;usg=AFQjCNHInipEfCDKCxpiUxfqWekFIbC3iQ"
                                                                style="margin: 0px auto; padding: 0px; box-sizing: border-box; color: rgb(17, 85, 204); text-decoration-line: none;">&nbsp;<img
                                                                    src="https://ci5.googleusercontent.com/proxy/taKUnKcZjXPeme7wd8tmhqhJcj24WHtBrndb0_4Z0RQxr9ASad1PUsJXX70-VxjY_0YeAmU3Bkn7c3U-FB1LXZPiF6QdU0MqlUjkQ0Y=s0-d-e1-ft#https://api.luxstay.com/images/emails/social-instagram.png"
                                                                    class="CToWUd"
                                                                    style="margin: 0px auto; padding: 0px; box-sizing: border-box; max-width: 100%; height: auto;"></a>&nbsp;&nbsp;&nbsp;</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="m_6425257584780622054mobile-padding"
                                            style="margin: 0px auto; padding: 10px 25px 0px; width: 592px; text-align: center; font-size: 13px;">
                                            <tbody style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                <tr style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                    <td style="margin: 0px auto; padding: 0px 0px 5px; box-sizing: border-box;">
                                                        <span style="margin: 0px auto; padding: 0px; box-sizing: border-box;">Thư
                                                            này được gửi tự động bởi hệ thống. Vui lòng không trả lời</span></td>
                                                </tr>
                                                <tr style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                    <td style="margin: 0px auto; padding: 0px 0px 5px; box-sizing: border-box;">
                                                        <span
                                                            style="margin: 0px auto; padding: 0px; box-sizing: border-box;">Luxstay
                                                            Pte. Ltd.</span></td>
                                                </tr>
                                                <tr style="margin: 0px auto; padding: 0px; box-sizing: border-box;">
                                                    <td style="margin: 0px auto; padding: 0px 0px 5px; box-sizing: border-box;">
                                                        <span style="margin: 0px auto; padding: 0px; box-sizing: border-box;">10
                                                            Anson Road, #22-02 International Plaza, Singapore 079903</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </body>
            
            </html>
        ';
            $header = "From: dungtmph12934@fpt.edu.vn \r \n";
            $header .= "Content-Type: text/html; charset=utf-8 \r\n";
            if (mail($to, $subject, $message, $header) == true) {
                header("Location: order.php?mahoadon=$mahoadon");
            }
        }
    }
}
