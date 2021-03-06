<?php
ob_start();
include "./middlewares/connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="./public/css/style.css?v=<?php echo time() ?>" />
    <link rel="stylesheet" href="./public/css/base.css?v=<?php echo time() ?>" />
    <link rel="stylesheet" href="./public/css/profile.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="./public/css/product.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="./public/css/room.css?v=<?php echo time() ?>">
    <title>Booking</title>
</head>

<body>
    <div class="message">
        <a href="tel:0365727226">
            <div class="tele"></div>
            <div class="telephone"></div>
            <div class="icon-phone">
                <i class="fas fa-phone-alt"></i>
            </div>
        </a>
        <label for="check_message" class="message2">
            <i class="fas fa-comment-dots"></i>
        </label>
        <label for="checkbox_message" class="message2">
            <i class="fas iconmessage fa-comments"></i>
        </label>
        <input type="checkbox" hidden name="checkbox_message" class="checkbox_message" id="checkbox_message">

        <div class="message_hover bg-light">
            <div class="d-flex bg-primary text-white align-items-center justify-content-between p-3">
                <h5 class="m-0 ">Tin nh???n</h5>
                <label for="checkbox_message" class="fas fa-times"></label>
            </div>
            <?php
            if (isset($_COOKIE['user'])) {
                $email = $_COOKIE['user'];
                $sql_mess1 = "SELECT * FROM message WHERE email = '$email' ORDER BY time ASC";
                $result_mess1 = $conn->query($sql_mess1);
                if ($result_mess1->num_rows > 0) {
                    echo '<div class="show-message" id="message_cuon">';
                    while ($row_mess1 = $result_mess1->fetch_assoc()) {
                        $id_mess1 = $row_mess1['id'];
                        $message1 = $row_mess1['message'];
                        $status = $row_mess1['status'];
                        if ($status == 0) {
                            echo '
                            <div class="abc">
                                <p class="message_show">' . $message1 . '</p>
                            </div>
                            ';
                        } else {
                            echo '<div class="d-flex align-items-center ms-2 rep-message">
                            <img width="50px" height="50px" src="https://www.pikpng.com/pngl/b/75-756814_login-user-imagen-user-png-clipart.png" class="rounded-circle" alt="">
                            <p class="message_rep">' . $message1 . '</p>
                            </div>';
                        }
                    }
                    echo '</div>';
                } else {
                    echo '<div class="show-message" id="message_cuon">
                                <p class="text-center py-2">Ch??o b???n, ch??ng t??i c?? th??? gi??p g?? cho b???n...</p>
                            </div>
                       
                        ';
                }
            } else {
                echo '
                        <p class="text-center pt-5">H??y <a href="dangnhap.php">????ng nh???p</a> ho???c <a href="dangki.php">????ng k??</a> ????? chat v???i ch??ng t??i nh??</p>
                    ';
            }

            ?>

            <form action="" class="d-flex form-bot pt-3">
                <input type="text" name="message" placeholder="Nh???p tin nh???n" class="checkbox_message form-control" id="message_add">
                <button type="submit" class="btn btn-primary" id="submit_message">G???i</button>
            </form>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script>
            var element = document.getElementById("message_cuon");
            element.scrollTop = element.scrollHeight;

            $(document).ready(function() {
                $("#submit_message").click(function(e) {
                    e.preventDefault();
                    $.ajax({
                        type: "post",
                        url: "message.php",
                        data: "message=" + $("#message_add").val(),
                        success: function(data) {
                            $("#message_add").val('');
                            $(".show-message").html(data)
                            var settime = setInterval(() => {
                                var element = document.getElementById("message_cuon");
                                element.scrollTop = element.scrollHeight;
                            }, 100);
                            setInterval(() => {
                                clearInterval(settime);
                            }, 1000);
                        }
                    });
                });
            });
        </script>
    </div>
    <div class="container">
        <header class="_header py-3 d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <a class="logo" href="index.php">
                    <svg>
                        <symbol id="s-text"><text text-anchor="middle" x="50%" y="80%">BOOKING</text></symbol>
                        <use class="logo-text" xlink:href="#s-text"></use>
                        <use class="logo-text" xlink:href="#s-text"></use>
                        <use class="logo-text" xlink:href="#s-text"></use>
                        <use class="logo-text" xlink:href="#s-text"></use>
                        <use class="logo-text" xlink:href="#s-text"></use>
                    </svg>
                </a>
                <form action="" method="get" class="ms-2 d-flex form-search">
                    <div class="position-relative me-2 border-end">

                        <div class="frmSearch">
                            <?php
                            include 'search.php';
                            ?>
                        </div>
                    </div>
                    <input type="text" name="datefilter1" placeholder="Ng??y" class="input-date" autocomplete="off" />
                    <button type="submit" class="btn-search"><i class="text-white fs-6 fas fa-search"></i></button>
                </form>
            </div>
            <nav class="_menu">
                <ul class="m-0">
                    <?php
                    if (isset($_COOKIE['doitac'])) {
                        echo '<li class="_menu position-relative" >
                                <label class="user-login" for="hidden-list-item1">
                                    Qu???n tr??? ?????i t??c
                                </label>
                                <input type="checkbox"  name="" id="hidden-list-item1" hidden>
                                <ul style="position: absolute" class=" list-item1 bg-white" style="z-index: 1000;">
                                    <li class=""><a href="./doitac/index.php" class="w-100 "><i class="fal pe-3 fa-briefcase"></i>Qu???n tr???</a></li>
                                    <li><a href="logoutdoitac.php"><i class="fal pe-3 fa-power-off"></i>????ng xu???t</a></li>
                                </ul>
                            </li>';
                    } else {
                        echo '<li><a href="doitac.php">?????i t??c</a></li>';
                    }
                    ?>
                    <?php
                    if (isset($_COOKIE['user'])) {
                        $email = $_COOKIE['user'];
                        $sql_header = "SELECT * FROM user where email = '$email'";
                        $result_header = $conn->query($sql_header);
                        if ($result_header->num_rows > 0) {
                            while ($row_header = $result_header->fetch_assoc()) {
                                $user_name = $row_header['name'];
                                $id = $row_header['id'];
                                echo '
                                        <li class="_menu position-relative" >
                                            <label class="user-login" for="hidden-list-item">
                                                    ' . $user_name . '
                                            </label>
                                            <input type="checkbox" name="" id="hidden-list-item" hidden>
                                            <ul class="position-absolute list-item bg-white" style="z-index: 1000;">
                                                <li><a href="order.php"><i class="fal pe-3 fa-briefcase"></i>?????t ch??? c???a t??i</a></li>
                                                <li><a href=""><i class="fal pe-3 fa-envelope"></i>Tin nh???n</a></li>
                                                <li><a href="profile.php"><i class="fal pe-3 fa-briefcase"></i>C??i ?????t t??i kho???n</a></li>
                                                <li><a href="dangxuat.php"><i class="fal pe-3 fa-power-off"></i>????ng xu???t</a></li>
                                            </ul>
                                        </li>
                                    ';
                            }
                        }
                    } elseif (isset($_COOKIE['admin'])) {
                        echo '
                                <a href="./admin/index.php">Qu???n tr???</a>
                            ';
                    } else {
                        echo '<li><a href="dangky.php">????ng k??</a></li>
                            <li><a href="dangnhap.php">????ng nh???p</a></li>';
                    }
                    ?>

                </ul>
            </nav>
        </header>