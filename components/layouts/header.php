<!DOCTYPE html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />

    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="../../public/css/base.css" />
    <link rel="stylesheet" href="../../public/css/style.css" />
    <link rel="stylesheet" href="../../public/css/room.css">
    <title>Booking</title>
</head>

<body>
    <div class="container">
        <header class="_header py-3 d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <div class="logo">
                    <svg>
                        <symbol id="s-text"><text text-anchor="middle" x="50%" y="80%">BOOKING</text></symbol>
                        <use class="logo-text" xlink:href="#s-text"></use>
                        <use class="logo-text" xlink:href="#s-text"></use>
                        <use class="logo-text" xlink:href="#s-text"></use>
                        <use class="logo-text" xlink:href="#s-text"></use>
                        <use class="logo-text" xlink:href="#s-text"></use>
                    </svg>
                </div>
                <form action="" method="get" class="ms-2 d-flex form-search">
                    <div class="position-relative me-2 border-end">
                        <input type="text" placeholder="Tìm kiếm" class="input-search" name="search" autocomplete="off">
                        <i class="fas fa-search position-absolute icon-search px-2 text-secondary"></i>
                    </div>
                    <input type="text" name="datefilter" placeholder="Ngày" class="input-date" autocomplete="off" />
                    <button type="submit" class="btn-search"><i class="text-white fs-6 fas fa-search"></i></button>
                </form>
            </div>
            <nav class="_menu">
                <ul class="m-0">
                    <li><a href="#">Đối tác</a></li>
                    <li><a href="#">Đăng ký</a></li>
                    <li><a href="#">Đăng nhập</a></li>
                </ul>
            </nav>
        </header>