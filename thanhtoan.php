<?php 
	include 'header.php';
?>

    <div class="container-fluid">
        <div class="container" style="width: 1260px">
            <div class="row d-flex">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="login-instruction rounded p-4 mt-5">
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
                                        Đăng nhập ngay
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Login-instruction -->
                    <div class=" mt-5">
                        <h2 class="fw-bold">Thông tin đặt chỗ</h2>
                        <div class="mt-3">
                            <span class="text-danger fw-bold">*</span>
                            <span class="text-dark fw-bolder">Số khách</span>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                                <div class="p-3 bg-white is-shadow-box mt-2 " style="width: 100%; height: 55px;">
                                    1 khách
                                </div>
                            </div>
                            <div class="fw-bold mt-3">
                                <span>2 Đêm tại The Galaxy Home - 1 Phòng Ngủ, 60m2, View Thành Phố, Ban Công - Dịch
                                    Vọng</span>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                                <div class="p-3 bg-white is-shadow-box mt-2 " style="width: 100%; height: 120px;">
                                    <hr class="border-top border-4 border-success" style="width: 50%; ">
                                    <div class="">
                                        <span class="fs-5 text-secondary ">Nhận phòng</span>
                                        <h4>16/07/2021</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                                <div class="p-3 bg-white is-shadow-box mt-2 " style="width: 100%; height: 120px;">
                                    <hr class="border-top border-4 border-danger" style="width: 50%;">
                                    <div class="">
                                        <span class="fs-5 text-secondary ">Trả phòng</span>
                                        <h4>18/07/2021</h4>
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
                                    <input type="text" style="width: 100%;" class="mt-3" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                                <div class="mt-4 information">
                                    <span class="text-danger ">*</span>
                                    <span class="fw-bold">Số điện thoại</span>
                                    <p class="text-secondary">Mã điện thoại quốc gia</p>
                                    <input type="number" style="width: 100%;" class="mt-3" required>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                                <div class="mt-4 information">
                                    <span class="text-danger ">*</span>
                                    <span class="fw-bold">Email</span>
                                    <p class="text-secondary">VD: email@example.com</p>
                                    <input type="email" style="width: 100%;" class="mt-3" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                                <div class="mt-4 information">
                                    <span class="text-danger ">*</span>
                                    <span class="fw-bold">Quốc gia cư trú</span>
                                    <p class="text-secondary">Nội dung này sẽ được sử dụng cho vấn đề pháp lý và thuế.
                                    </p>
                                    <select class="form-select mt-2" aria-label="">
                                        <option selected>Open this select menu</option>
                                        <option value="1" selected>Việt Nam</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>



                                </div>
                            </div>

                            <div class="input-group input-group--checkbox checkbox-someone mt-4"><label
                                    class="input-group__label"><input type="checkbox" onclick="myFuntion()"> <span
                                        class="d-inline">Tôi đặt phòng cho người khác</span></label></div>

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
                                    <input type="text" style="width: 100%;" class="mt-3" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                                <div class="mt-4 information">
                                    <span class="text-danger ">*</span>
                                    <span class="fw-bold">Số điện thoại</span>
                                    <p class="text-secondary">Mã điện thoại quốc gia</p>
                                    <input type="number" style="width: 100%;" class="mt-3" required>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                                <div class="mt-4 information">
                                    <span class="text-danger ">*</span>
                                    <span class="fw-bold">Email</span>
                                    <p class="text-secondary">VD: email@example.com</p>
                                    <input type="email" style="width: 100%;" class="mt-3" required>
                                </div>
                            </div>
                        </div>




                    </div>
                    <!-- end phần đăng ký hộ khách hàng -->
                    <div class="add_infor mt-5">
                        <h2>Thông tin thêm</h2>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                                <div class="mt-4 information">
                                    <span class="text-danger ">*</span>
                                    <span class="fw-bold">Mục đích cho chuyến đi này</span>

                                    <select class="form-select mt-2" aria-label="">
                                        <option selected>Open this select menu</option>
                                        <option value="1" selected>Dành cho gia đình</option>
                                        <option value="2">Tổ chức tiệc</option>
                                        <option value="3">Công tác</option>
                                        <option value="4">Khác</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end phần thông tin thêm -->
                    <div class="add_infor mt-5 pb-5">
                        <h2>Mã khuyễn mại</h2>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                <div class="mt-4 information">
                                    <input type="text" style="width: 100%;" class="mt-3" required
                                        placeholder="Nhập mã khuyễn mại">
                                </div>
                            </div>
                            <div class="buttondangnhap pt-3 mb-4">
                                <button type="submit" class="text-light rounded border-1 fw-bold" style="width: 100px">
                                    Áp dụng
                                </button>
                            </div>

                            <div>
                                <div style="width: 304px; height: 78px;">
                                    <div><iframe title="reCAPTCHA"
                                            src="https://www.google.com/recaptcha/api2/anchor?ar=2&amp;k=6LdGZsQUAAAAAP2Vc235oVHp0kG4kJcf4Ij4ETba&amp;co=aHR0cHM6Ly93d3cubHV4c3RheS5jb206NDQz&amp;hl=vi&amp;v=TbD3vPFlUWKZD-9L4ZxB0HJI&amp;s...ad8amtz5"
                                            width="304" height="78" role="presentation" name="a-pphcv2g7fw9u"
                                            frameborder="0" scrolling="no"
                                            sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                    </div><textarea id="g-recaptcha-response-4" name="g-recaptcha-response"
                                        class="g-recaptcha-response"
                                        style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                </div><iframe style="display: none;"></iframe>
                            </div>
                            <div class="buttondangnhap mt-4 ">
                                <button type="submit" class="text-light rounded border-1 fw-bold" style="width: 200px">
                                    Thanh Toán >

                                </button>
                            </div>

                        </div>
                    </div>

                </div>


                <div class="col-lg-2 col-md-1"></div>
                <div class="col-md-5 col-lg-4 col-xs-12 d-none d-md-block">
                    <div class="mt-5">
                        <div class="title">
                            <h3 class="fw-bolder">Chi tiết đặt phòng</h3>
                            <div class="checkup mt-3 p-4 ">
                                <div class="title-header d-flex">
                                    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 ">
                                        <a href="" class="fw-bolder text-dark">The Galaxy Home - 1 Phòng Ngủ, 60m2, View
                                            Thành Phố, Ban
                                            Công - Dịch Vọng</a>
                                        <div class="checkup_add mt-2 t"><svg version="1.1" viewBox="0 0 24 24"
                                                class="mt--5 svg-icon svg-fill" style="width: 24px; height: 24px;">
                                                <g fill="none" fill-rule="evenodd">
                                                    <circle pid="0" cx="12" cy="12" r="12" fill="#000" fill-opacity=".2"
                                                        fill-rule="nonzero"></circle>
                                                    <path pid="1" fill="#FFF"
                                                        d="M11.92 6c2.87 0 5.218 2.335 5.218 5.205a5.112 5.112 0 01-1.055 3.137c-.97 1.252-3.77 3.461-3.882 3.56a.43.43 0 01-.282.098.43.43 0 01-.281-.098c-.113-.099-2.912-2.308-3.883-3.546a5.182 5.182 0 01-1.055-3.15C6.7 8.335 9.05 6 11.92 6zm0 7.203a2.104 2.104 0 000-4.207 2.104 2.104 0 000 4.206z">
                                                    </path>
                                                </g>
                                            </svg> <a href="" class="medium" style="width: calc(100% - 25px);">Cầu Giấy,
                                                Hà Nội, Vietnam</a></div>

                                    </div>


                                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                        <div class="img">
                                            <img src="https://cdn.luxstay.com/admins/12/2TR6G7u6ua140zR2NI4yUJdG.png"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="title-body">
                                    <div class="title-detail border-top mt-3 border-bottom ">
                                        <div class="title-checkin-checkout mt-3 mb-3 d-flex">
                                            <svg version="1.1" viewBox="0 0 24 24"
                                                class="icon--24 svg-icon svg-fill pe-3" style="width: 12%;">
                                                <g fill="none" fill-rule="evenodd">
                                                    <path pid="0" fill="#F65E39" fill-rule="nonzero"
                                                        d="M12 0c6.614 0 12 5.386 12 12s-5.386 12-12 12S0 18.614 0 12 5.386 0 12 0z">
                                                    </path>
                                                    <path pid="1" fill="#FFF"
                                                        d="M10 7h4a1 1 0 112 0h.5A1.5 1.5 0 0118 8.5v8a1.5 1.5 0 01-1.5 1.5h-9A1.5 1.5 0 016 16.5v-8A1.5 1.5 0 017.5 7H8a1 1 0 112 0zm4 7v2h2v-2h-2zm-3 0v2h2v-2h-2zm-3 0v2h2v-2H8zm3-3v2h2v-2h-2zm3 0v2h2v-2h-2zm-6 0v2h2v-2H8z">
                                                    </path>
                                                </g>
                                            </svg>
                                            <span class="fw-bolder pe-1">2 Đêm</span>
                                            <span class="pe-1"> ·</span>
                                            <span class="pe-1">16/07/2021</span>
                                            <span class="pe-1">-</span>
                                            <span class="pe-1">18/07/2021</span>
                                        </div>
                                        <div class="title-checkin-checkout mt-3 mb-3 d-flex">
                                            <svg version="1.1" viewBox="0 0 24 24"
                                                class="icon--24 svg-icon svg-fill pe-3" style="width: 12%;">
                                                <g fill="none">
                                                    <circle pid="0" cx="12" cy="12" r="12" fill="#F65E39"></circle>
                                                    <path pid="1" fill="#FFF"
                                                        d="M12.007 12c.844 0 1.807-.083 2.414-.747.518-.539.681-1.396.518-2.585C14.702 6.995 13.607 6 12.007 6c-1.599 0-2.695.995-2.946 2.668-.163 1.19 0 2.046.518 2.585.607.664 1.57.747 2.428.747zm-3.67 6h7.335c.411 0 .779-.16 1.029-.442.264-.309.367-.724.264-1.126C16.436 14.408 14.408 13 12.012 13c-2.41 0-4.439 1.408-4.968 3.432-.103.402 0 .817.264 1.126.25.281.618.442 1.03.442z">
                                                    </path>
                                                </g>
                                            </svg>
                                            <span class="fw-bolder pe-1">1 Người</span>

                                        </div>


                                    </div>
                                    <div class="title-detail mt-3 border-bottom ">
                                        <div class="title-checkin-checkout mt-3 mb-3 d-flex justify-content-between">
                                            <div class="">
                                                <span class="pe-2">Giá thuê: 2 Đêm </span>
                                            </div>

                                            <div class="price">
                                                <span>1,900,000đ</span>
                                            </div>
                                        </div>
                                        <div class="title-checkin-checkout mt-3 mb-3 d-flex justify-content-between">
                                            <div class="">
                                                <span class="pe-2">Phí dịch vụ</span>
                                            </div>
                                            <div class="price">
                                                <span>190,000đ</span>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="title-detail mt-3 border-bottom ">
                                        <div class="title-checkin-checkout mt-3 mb-3 d-flex justify-content-between">
                                            <div class="fw-bold">
                                                <span class="pe-2">Tổng tiền:</span>
                                            </div>

                                            <div class="price fw-bold">
                                                <span>2,090,000đ</span>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                                <div class="title_footer mt-3">
                                    <div class="input-group"><label
                                            class="input-group__label fw-bold is-block mb-3">Chính sách hủy
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
