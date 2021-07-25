<?php
include "header.php";

?>
<div class="banner container pt-4">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://beta-api.luxstay.net/api/upload/file?storage=admins/12/LTO3WBl2KWqI5bwJre6PQ7do.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
            <div class="carousel-item">
                <img src="https://beta-api.luxstay.net/api/upload/file?storage=admins/12/qF7ukmI--Rwr2H5LwzVZwcXa.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
</div>
<div class="container">
    <div class="header_content my-5">
        <h3>Chào mừng đến với Luxstay!</h3>
        <p>
            Đặt chỗ ở, homestay, cho thuê xe, trải nghiệm và nhiều hơn
            nữa trên Luxstay
        </p>
        <p>
            <a href="">Đăng nhập</a> hoặc <a href="">Đăng ký</a> để trải
            nghiệm !
        </p>
    </div>
    <!-- end header_content -->


    <div class="slide_hot">
        <h5>Địa điểm nổi bật</h5>
        <p>
            Cùng Luxstay bắt đầu chuyến hành trình chinh phục thế giới
            của bạn
        </p>
        <div class="swiper-container my-4">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php
                $sql_kv = "SELECT * FROM khuvuc";
                $result_kv = $conn->query($sql_kv);
                if ($result_kv->num_rows > 0) {
                    while ($row_kv = $result_kv->fetch_assoc()) {
                        $name = $row_kv['name'];
                        $id_kv = $row_kv['id'];
                        $image = $row_kv['image'];
                        echo '<div class="swiper-slide">
                        <a href="product.php?id='.$id_kv.'">
                            <img class="border-radius-1"
                                src="./public/image/khuvuc/' . $image . '" alt="" />
                            <div class="text-position">
                                <h3 class="text-capitalize">' . $name . '</h3>';
                        $sql_hs = "SELECT * FROM khachsan where id_khuvuc=$id_kv";
                        $result_hs = $conn->query($sql_hs);
                        if ($result_hs->num_rows > 0) {
                            $dem = 0;
                            while ($row_hs = $result_hs->fetch_assoc()) {
                                $dem++;
                            }
                            echo '<p>
                            <strong class="mx-1">' . $dem . '</strong>chỗ ở
                        </p>';
                        }
                           
                        echo '</div>
                        </a>
                    </div>';            
                    }
                }
                ?>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
        </div>
    </div>
    <!-- slide_hot -->
    <div class="endow">
        <h5>Ưu đãi độc quyền</h5>
        <p class="d-flex justify-content-between align-items-center">
            <span>Chỉ có tại Luxstay, hấp dẫn và hữu hạn, book
                ngay!</span>
            <a href="" class="text-danger">Xem thêm</a>
        </p>

        <div class="row my-4">
            <div class="col-xs-6 col-6 my-3 col-sm-4 col-md-4 col-lg-4">
                <a href="">
                    <img class="border-radius-1" src="https://cdn.luxstay.com/home/event/event_1_1625103709.jpg" alt="" />
                </a>
            </div>
            <div class="col-xs-6 col-6 my-3 col-sm-4 col-md-4 col-lg-4">
                <a href="">
                    <img class="border-radius-1" src="https://cdn.luxstay.com/home/event/event_1_1614658965.jpg" alt="" />
                </a>
            </div>
            <div class="col-xs-6 col-6 my-3 col-sm-4 col-md-4 col-lg-4">
                <a href="">
                    <img class="border-radius-1" src="https://cdn.luxstay.com/home/event/event_1_1596604498.jpg" alt="" />
                </a>
            </div>
        </div>
    </div>
    <!-- end endow -->

    <div class="slide_hot">
        <h5>Gợi ý từ Luxstay</h5>
        <p>Những địa điểm thường đến mà Luxstay gợi ý dành cho bạn</p>
        <div class="swiper-container2 my-4">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <a href="">
                        <img class="border-radius-1" src="https://cdn.luxstay.com/home/apartment/apartment_2_1614588617.jpg" alt="" />
                        <div class="text_tranform my-2">
                            <h5>Vi vu Hà Nội</h5>
                            <p>
                                Trải nghiệm không gian thoáng đãng cho
                                chuyến đi ngay gần Hà Nội
                            </p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="">
                        <img class="border-radius-1" src="https://cdn.luxstay.com/home/apartment/apartment_1_1614588454.jpg" alt="" />
                        <div class="text_tranform my-2">
                            <h5>Vi vu Hà Nội</h5>
                            <p>
                                Trải nghiệm không gian thoáng đãng cho
                                chuyến đi ngay gần Hà Nội
                            </p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="">
                        <img class="border-radius-1" src="https://cdn.luxstay.com/home/apartment/apartment_1_1614588454.jpg" alt="" />
                        <div class="text_tranform my-2">
                            <h5>Vi vu Hà Nội</h5>
                            <p>
                                Trải nghiệm không gian thoáng đãng cho
                                chuyến đi ngay gần Hà Nội
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
        </div>
    </div>
    <!-- slide_hot -->
    <div class="slide_hot">
        <h5>Gợi ý khám phá</h5>
        <p>
            Để mỗi chuyến đi là một hành trình truyền cảm hứng, mỗi căn
            phòng là một khoảng trời an yên
        </p>
        <div class="swiper-container3 my-4">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <a href="">
                        <img class="border-radius-1" src="https://www.luxstay.com/blog/wp-content/uploads/2020/03/resort-hang-sang-o-Viet-Nam-4-1024x650.jpg" alt="" />
                        <div class="text-position">
                            <h5 class="text-capitalize">
                                5 resort hạng sang ở Việt Nam xuất hiện
                                trên tạp chí du lịch Anh
                            </h5>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="">
                        <img class="border-radius-1" src="https://www.luxstay.com/blog/wp-content/uploads/2020/03/du-lich-can-tho-8-824x1024.jpg" alt="" />
                        <div class="text-position">
                            <h5 class="text-capitalize">
                                Du lịch Cần Thơ nhất định phải ghé thăm
                                những địa điểm này
                            </h5>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="">
                        <img class="border-radius-1" src="https://www.luxstay.com/blog/wp-content/uploads/2020/03/tuan-le-toi-yeu-banh-my-sai-gon-3.jpg" alt="" />
                        <div class="text-position">
                            <h5 class="text-capitalize">
                                Tuần lễ “Tôi yêu bánh mì Sài Gòn” chính
                                thức diễn ra từ ngày 24/3
                            </h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
        </div>
    </div>
    <!-- slide_hot -->
    <div class="slide_hot">
        <h5>Hướng dẫn sử dụng</h5>
        <p>Đặt chỗ nhanh, thanh toán đơn giản, sử dụng dễ dàng</p>
        <div class="swiper-container4 my-4">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <a href="">
                        <img class="border-radius-1" src="https://cdn.luxstay.com/home/theme/theme_3_1583838065.jpg" alt="" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="">
                        <img class="border-radius-1" src="https://cdn.luxstay.com/home/theme/theme_4_1583838088.jpg" alt="" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="">
                        <img class="border-radius-1" src="https://cdn.luxstay.com/home/theme/theme_10_1583894021.jpg" alt="" />
                    </a>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
        </div>
    </div>
    <!-- slide_hot -->

    <div class="row my-5">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <svg class="font-600">
                <symbol id="s-text"><text text-anchor="middle" x="50%" y="80%">BOOKING</text></symbol>
                <use class="logo-text" xlink:href="#s-text"></use>
                <use class="logo-text" xlink:href="#s-text"></use>
                <use class="logo-text" xlink:href="#s-text"></use>
                <use class="logo-text" xlink:href="#s-text"></use>
                <use class="logo-text" xlink:href="#s-text"></use>
            </svg>
            <h1>TÌM KIẾM CHỖ Ở GIÁ TỐT NHẤT</h1>
            <p>
                Luxstay hiện là nền tảng đặt phòng trực tuyến #1 Việt
                Nam. Đồng hành cùng chúng tôi, bạn có những chuyến đi
                mang đầy trải nghiệm. Với Luxstay, việc đặt chỗ ở, biệt
                thự nghỉ dưỡng, khách sạn, nhà riêng, chung cư... trở
                nên nhanh chóng, thuận tiện và dễ dàng.
            </p>

            <div class="d-flex justify-content-between align-items-center my-4">
                <div class="flex-grow-1">
                    <div class="">
                        <img style="width: 200px;" src="./public/image/qrcode_890373_03a9782551bef0532c596d21e90756d6_.png" alt="">
                    </div>
                </div>

                <div class="flex-grow-1">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 my-4">
                            <img src="./public/image/apple-store.svg" alt="">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 my-4">
                            <img src="./public/image/google-play.svg" alt="">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <img src="./public/image/huawei.svg" alt="">
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <img src="https://www.luxstay.com/home/home-02.png" alt="" />
        </div>
    </div>
    <?php include "footer.php"; ?>