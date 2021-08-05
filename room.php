<?php
include 'header.php';
?>

<div class="position-relative">
    <div class="wrapper variable-width container-fluid p-0 bg-dark">
        <?php
        if (isset($_GET['id'])) {
            $id_hs = $_GET['id'];
            $sql_image = "SELECT * FROM imagechitietkhachsan where id_chitiet = $id_hs";
            $result_image = $conn->query($sql_image);
            if ($result_image->num_rows > 0) {
                while ($row_image = $result_image->fetch_assoc()) {
                    $image_show = $row_image['image'];
                    echo '<div>
                            <img height="420px" class="slide-hover" src="./public/image/homestay/homestaydetail/' . $image_show . '" alt="">
                        </div>';
                }
            }
        }
        ?>

    </div>
    <p class="prev-slide position-absolute">
        <i class="fas fa-chevron-left"></i>
    </p>
    <p class="next-slide position-absolute">
        <i class="fas fa-chevron-right"></i>
    </p>
</div>
<?php

$sql_kv = "SELECT * FROM khachsan where id=$id_hs";
$result_kv = $conn->query($sql_kv);
if ($result_kv->num_rows > 0) {
    while ($row_kv = $result_kv->fetch_assoc()) {
        $name_hs = $row_kv['name'];
        $id_khuvuc = $row_kv['id_khuvuc'];
        $sophong = $row_kv['sophong'];
        $diachiphong = $row_kv['address'];
        $diachiphong = $row_kv['address'];
        $giaphong = $row_kv['price'];
    }
}

?>
<div class="w-1189 row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 p-0">
        <ul class="my-3">
            <li class="d-inline-block pe-2">
                <a href="" class="item_location">Booking</a>
            </li>
            <li class="d-inline-block pe-2">
                <a href="" class="item_location">Vietnam</a>
            </li>
            <li class="d-inline-block pe-2">
                <a href="" class="item_location">Ba Ria Vung Tau</a>
            </li class="d-inline-block pe-2">
            <li class="d-inline-block pe-2">
                <a href="" class="item_location">Vung Tau</a>
            </li>
            <li class="d-inline-block pe-2">
                <a href="" class="item_location">Phuong 2</a>
            </li>
        </ul>
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
            <h3 class="p-0 fw-bold my-4"><?php echo $name_hs ?></h3>
            <div class="d-flex mb-2">
                <img width="24" src="./public/image/location.svg" alt="">
                <span class="ps-2" style="font-weight: 500;"><?= $diachiphong ?></span>
            </div>
            <div class="d-flex">
                <img width="24" src="./public/image/khac.svg" alt="">
                <span class="ps-2" style="font-weight: 500;">Khác <span style="font-weight:normal">· 35 m<sup>2</sup></span></span>
            </div>
            <div class="my-3">
                <p><span>Ở ghép · </span> <span>1 Phòng tắm · </span> <span>4 giường · </span> <span>1 phòng ngủ · </span> <span>8 khách (tối đa 10 khách)</span></p>
            </div>

            <?php

            if (isset($_COOKIE['user'])) {
                $sql_time3 = "SELECT * FROM mgguser WHERE id_user = $id ORDER BY time DESC LIMIT 1";
                $result_time3 = $conn->query($sql_time3);
                $sql_time = "SELECT * FROM phieugiamgia WHERE id_khachsan = $id_hs ORDER BY time DESC LIMIT 1";
                $sql_time2 = "SELECT * FROM mggkhuvuc WHERE id_khuvuc = $id_khuvuc ORDER BY time DESC LIMIT 1";
                $result_time = $conn->query($sql_time);
                $result_time2 = $conn->query($sql_time2);
                $sql_timeall = "SELECT * FROM maggall ORDER BY time DESC LIMIT 1";
                $result_timeall = $conn->query($sql_timeall);
                $sql_ok = '';
                $loaigiamgia = '';


                if ($result_timeall->num_rows > 0) {
                    while ($row_time = $result_timeall->fetch_assoc()) {
                        $time_out = $row_time['time_out'];
                        if (strtotime($time_out) - strtotime($today) > 0) {
                            $loaigiamgia = "all";
                            $sql_ok =  $sql_timeall;
                        }
                    }
                }
                if ($result_time3->num_rows > 0) {
                    while ($row_time = $result_time3->fetch_assoc()) {
                        $time_out = $row_time['time_out'];
                        if (strtotime($time_out) - strtotime($today) > 0) {
                            $sql_ok =  $sql_time3;
                            $loaigiamgia = "user";
                        }
                    }
                }

                if ($result_time2->num_rows > 0) {
                    while ($row_time = $result_time2->fetch_assoc()) {
                        $time_out = $row_time['time_out'];
                        if (strtotime($time_out) - strtotime($today) > 0) {
                            $sql_ok =  $sql_time2;
                            $loaigiamgia = "khuvuc";
                        }
                    }
                }
                if ($result_time->num_rows > 0) {
                    while ($row_time = $result_time->fetch_assoc()) {
                        $time_out = $row_time['time_out'];
                        if (strtotime($time_out) - strtotime($today) > 0) {
                            $sql_ok =  $sql_time;
                            $loaigiamgia = "homestay";
                        }
                    }
                }

                $result123 = $conn->query($sql_ok);
                if ($result123->num_rows > 0) {
                    while ($row_time = $result123->fetch_assoc()) {
                        $time_out = $row_time['time_out'];
                        $magiamgia = $row_time['magiamgia'];
                        $status = $row_time['status'];
                        $mucgiam = $row_time['mucgiam'];
                    }
                    echo '<div class="discount">
                        <div class="discount_title d-flex justify-content-between">
                            <p class="mb-0 bold">
                                FLASH SALE
                            </p>
                            <div class="countdown bold"><span id="days" class="dd">20</span> ngày
                                <span class="hh" id="hours">00</span>:
                                <span class="mm" id="minutes">16</span>:
                                <span class="ss" id="seconds">07</span>
                            </div>
                        </div>';
                    echo '<script>
                        (function() {
                            const second = 1000,
                            minute = second * 60,
                            hour = minute * 60,
                            day = hour * 24;
                        
                            let birthday = "' . $time_out . '",
                                countDown = new Date(birthday).getTime(),
                                x = setInterval(function() {
                                    let now = new Date().getTime(),
                                    distance = countDown - now;
                                    document.getElementById("days").innerText = `0${Math.floor(distance / (day))}`.slice(-2),
                                    document.getElementById("hours").innerText = `0${Math.floor((distance % (day)) / (hour))}`.slice(-2),
                                    document.getElementById("minutes").innerText =  `0${Math.floor((distance % (hour)) / (minute))}`.slice(-2),
                                    document.getElementById("seconds").innerText = `0${Math.floor((distance % (minute)) / (second))}`.slice(-2);
                        
                                    if (distance < 0) {
                                        if (distance < 0) {
                                            document.querySelector(".discount").remove();         
                                            document.querySelector("#show_intro").classList.remove("mt-5");        
                                            window.clearTimeout(x);
                                    }
                                    }
                                    //seconds
                                }, 0)
                        }());
                        </script>
                        <div class="discount_content d-flex justify-content-between" style="font-size: 14px;">
                        <div class="discount_description">
                            <div class="discount_detail">Giảm giá <strong>
                                    <font color="#FF0037">';
                    if ($status == 1) {
                        echo number_format($mucgiam) . 'đ';
                    } else {
                        echo $mucgiam . '%';
                    }
            ?></font>
                    </strong> - Mã: <strong style="color: #FF0037;">
                        <font color="#FF0037" id="code_copy4"><?= $magiamgia ?></font>
                    </strong><br>Ngày check-in: <strong><?= $time_out ?></strong>
        </div>
        <div class="copy-txt"></div>
    </div>
    <div class="position-relative">
        <button onclick="copy('#code_copy4')" class="btn-copy"><img src="./public/image/copy.svg" width="24" alt=""></button>
        <span class="copied position-absolute">copied</span>
    </div>
</div>
</div>
<?php
                }
            }

?>
<?php
$sql_chitiet = "SELECT * FROM chitietkhachsan where id_khachsan = $id_hs";
$result_chitiet = $conn->query($sql_chitiet);
if ($result_chitiet->num_rows > 0) {
    while ($row_chitiet = $result_chitiet->fetch_assoc()) {
        $chitiet = $row_chitiet['chitiet'];
        $gioithieu = $row_chitiet['gioithieu'];
        $tiennghi = $row_chitiet['tiennghi'];
        $chinhsach = $row_chitiet['chinhsach'];
        $tienich = $row_chitiet['tienich'];
    }
}
?>
<div class="detail">
    <div id="show_intro" class="mt-5" style="font-size: 16px;">
        <?php echo $chitiet ?>
    </div>
    <div id="show_intro" class="mt-5" style="font-size: 16px;">
        <?php echo $gioithieu ?>
    </div>
</div>
<h3 class="mt-3" style="font-size: 28px;">Tiện nghi chỗ ở</h3>

<div>
    <?php
    echo $tiennghi ?>
</div>
<h3 style="font-size: 28px;">Giá phòng</h3>
<p class="mt-2 mb-3">Giá có thể tăng vào cuối tuần hoặc ngày lễ</p>
<div class="price_room odd d-flex justify-content-between">
    <span class="">Thứ hai - Thứ năm</span>
    <span class="fw-bold text-right">650,000₫</span>
</div>
<div class="price_room d-flex justify-content-between">
    <span class="">Thứ sáu - Chủ nhật</span>
    <span class="fw-bold text-right">1,000,000₫</span>
</div>
<div class="price_room odd d-flex justify-content-between">
    <span class="">Phí khách tăng thêm</span>
    <span class="fw-bold text-right">80,000₫ (sau 8 khách)</span>
</div>
<div class="price_room d-flex justify-content-between">
    <span class="">Thuê theo tháng</span>
    <span class="fw-bold text-right">-14.92 %</span>
</div>
<div class="price_room odd d-flex justify-content-between">
    <span class="">Số đêm tối thiểu</span>
    <span class="fw-bold text-right">1 đêm</span>
</div>
<div class="price_room d-flex justify-content-between">
    <span class="">Số đêm tối đa</span>
    <span class="fw-bold text-right">90 đêm</span>
</div>
<div class="comment">
    <h3 style="font-size: 28px; margin: 20px 0">Bình luận</h3>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="comment-123 pb-5">
        <?php 
            $sql_comment = "SELECT * FROM comment WHERE id_khachsan = $id_hs";
            $result_comment = $conn->query($sql_comment);
            if($result_comment->num_rows > 0){
                while($row_commnent = $result_comment->fetch_assoc()){
                    $id_user = $row_commnent['id_user'];
                    $sql_user = "SELECT * FROM user WHERE id=$id_user";
                    $result_user = $conn->query($sql_user);
                    if($result_user->num_rows > 0){
                        while($row_user = $result_user->fetch_assoc()){
                            $name_user = $row_user['name'];
                            $avatar = $row_user['avatar'];
                        }
                    }
                    $id_comment = $row_commnent['id'];
                    $comment = $row_commnent['comment'];
                    $time = $row_commnent['time'];
                    $love = $row_commnent['love'];
                    $solike = $row_commnent['solike']
                    ?>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 my-4">
                        <div class="d-flex align-items-center comment-show my-3">
                            <img src="./public/image/user/<?= $avatar ?>" width="48" height="48" style="object-fit: cover" class="rounded-circle">
                            <div class=" mx-2 border-comment comment-show bg-light">
                                <strong><?= $name_user ?></strong>
                                <p><?=  $comment ?></p>

                                <?php 
                                    if($solike>0){
                                        echo '<div class="like bg-light">
                                        <i class="fas fa-thumbs-up"></i><span id="solikecomment'.$id_comment.'">'.$solike.'</span>
                                    </div>';
                                    }else{
                                        echo '<div class="like bg-light">
                                        <i class="fas fa-thumbs-up"></i><span id="solikecomment'.$id_comment.'">'.$solike.'</span>
                                    </div>';
                                    }
                                ?>
                            </div>
                            <div class="ms-2 comment-icon">
                                <span class="d-none lovecheckoke<?=$id_comment?>"><?=$love?></span>
                                <input type="checkbox" <?php 
                                            if($love==1){
                                                echo 'checked';
                                            }
                                        ?> hidden id="likecomment<?=$id_comment?>" class="likecheck">
                                <label for="likecomment<?=$id_comment?>" class="likecomment<?=$id_comment?> like_up" style="font-size: 13.28px;">Thích</label>
                                <i class="fas fa-circle" style="font-size: 6px"></i>
                                <label for="show-rep<?=$id_comment?>" style="font-size: 13.28px;">Phản hồi</label>
                                <i class="fas fa-circle" style="font-size: 6px"></i>
                                <span style="font-size: 13.28px;"><?= $time ?></span>
                                <script>
                                    $(document).ready(function () {
                                        $(".likecomment<?=$id_comment?>").click(function (e) { 
                                            $.ajax({
                                                type: "POST",
                                                url: "like.php",
                                                data: "love="+Number($(".lovecheckoke<?=$id_comment?>").html())+"&&solike="+Number($("#solikecomment<?=$id_comment?>").html())+"&&id_comment="+<?=$id_comment?>,
                                                success: function (response) {
                                                    const data = response.split("/");
                                                    $(".lovecheckoke<?=$id_comment?>").html(data[1]);
                                                    $("#solikecomment<?=$id_comment?>").html(data[0])
                                                }
                                            });
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                        <input hidden type="checkbox" class="show-rep" id="show-rep<?=$id_comment?>">
                        <div class="repcomment my-4">
                            <form action="" method="post">
                                <input type="text" name="repcomment<?=$id_comment?>" class="form-control" placeholder="trả lời <?= $name_user ?>">
                                <button type="submit" name="repcomment_submit<?=$id_comment?>" class="btn btn-primary my-2">Trả lời</button>
                                <label for="show-rep<?=$id_comment?>" class="btn btn-danger my-2">Hủy</label>
                            </form>
                            <?php 
                                if(isset($_POST['repcomment_submit'.$id_comment.''])){
                                    $repcomment123 = $_POST['repcomment'.$id_comment.''];
                                    $sqlrepcomment123 = "INSERT INTO repcomment VALUES (null,$id_comment,$id,$id_hs,'$repcomment123',0,0,'$today')";
                                    $resultrepcomment123 = $conn->query($sqlrepcomment123);
                                    if($resultrepcomment123){
                                        echo '
                                                <script>alert("Đã trả lời thành công")</script>
                                                <script>location.href="room.php?id=' . $id_hs . '"</script>
                                            ';
                                    }
                                }
                            ?>
                        </div>
                    <?php
                    $sql_repcomment = "SELECT * FROM repcomment WHERE id_comment=$id_comment";
                    $result_repcomment = $conn->query($sql_repcomment);
                    if($result_repcomment->num_rows > 0){
                        while ($row_repcom = $result_repcomment->fetch_assoc()){
                            $id_user_rep = $row_repcom['id_user'];
                            $id_rep_rep = $row_repcom['id'];
                            $id_hs = $row_repcom['id_khachsan'];
                            $repcomment = $row_repcom['repcomment'];
                            $time_rep = $row_repcom['time'];
                            $love_rep = $row_repcom['love'];
                            $like_rep = $row_repcom['solike'];
                            $sql_user_rep = "SELECT * FROM user WHERE id = $id_user_rep";
                            $result_user_rep = $conn->query($sql_user_rep);
                            if($result_user_rep->num_rows > 0){
                                while($row_user_rep = $result_user_rep->fetch_assoc()){
                                    $name_user_rep = $row_user_rep['name'];
                                    $avatar_rep = $row_user_rep['avatar'];
                                }
                            }
                            ?>
                                <div class="d-flex align-items-center comment-show ms-5 mt-4">
                                <img src="./public/image/user/<?= $avatar_rep ?>" width="48" height="48" style="object-fit: cover" class="rounded-circle">
                                    <div class=" mx-2 border-comment comment-show bg-light">
                                        <strong><?= $name_user_rep ?></strong>
                                        <p><?= $repcomment ?></p>
                                        <?php 
                                            if($like_rep>0){
                                                echo '<div class="like bg-light">
                                                <i class="fas fa-thumbs-up"></i><span id="rep_likeoke'.$id_rep_rep.'">'.$like_rep.'</span>
                                            </div>';
                                            }else if($like_rep==0){
                                                echo '<div class="like bg-light">
                                                <i class="fas fa-thumbs-up"></i><span id="rep_likeoke'.$id_rep_rep.'">0</span>
                                            </div>';
                                            }
                                        ?>
                                    </div>
                                    <div class="ms-2 comment-icon">
                                        <span class="d-none rep_love12<?= $id_rep_rep?>"><?= $love_rep ?></span>
                                        <input type="checkbox" hidden id="likerepcheck<?= $id_rep_rep?>" <?php 
                                            if($love_rep==1){
                                                echo 'checked';
                                            }
                                        ?> class="likerepcheck">
                                        <label for="likerepcheck<?= $id_rep_rep?>" class="like_out like_rep<?= $id_rep_rep?>" style="font-size: 13.28px;">Thích</label>
                                        <i class="fas fa-circle" style="font-size: 6px"></i>
                                        <span style="font-size: 13.28px;"><?= $time_rep ?></span>
                                        <script>
                                            $(document).ready(function () {
                                                $(".like_rep<?= $id_rep_rep?>").click(function (e) { 
                                                    $.ajax({
                                                        type: "POST",
                                                        url: "likerep.php",
                                                        data: "love="+Number($(".rep_love12<?= $id_rep_rep?>").html())+"&&solike="+Number($("#rep_likeoke<?=$id_rep_rep?>").html())+"&&id_rep="+<?=$id_rep_rep?>,
                                                        success: function (response) {
                                                            const data = response.split("/");
                                                            $(".rep_love12<?= $id_rep_rep?>").html(data[1]);
                                                            $("#rep_likeoke<?= $id_rep_rep?>").html(data[0])
                                                        }
                                                    });
                                                });
                                            });
                                        </script>
                                    </div>
                                </div>
                            <?php
                        }
                    }
                    ?>
                    </div>
                    <?php
                }
            }
        ?>
        
    </div>


    <?php
    if (isset($_COOKIE['user'])) {
        echo '<div class="commnet_add my-5">
                <h3 class="form-label my-3" for="text-index">Nhập bình luận của bạn</h3>
                <form action="" method="post">
                    <input type="text" name="comment1" id="text-index" class="form-control">
                    <button type="submit" name="submit_comment" class="btn btn-primary my-2">Bình luận</button>
                </form>
            </div>';
        if (isset($_POST['submit_comment'])) {
            $comment1 = $_POST['comment1'];
            $sql_comment1 = "INSERT INTO comment VALUES (null,$id,$id_hs,'$comment1',0,0,'$today')";
            $result_comment1 = $conn->query($sql_comment1);
            if ($result_comment1) {
                echo '
                        <script>alert("Đã comment thành công")</script>
                        <script>location.href="room.php?id=' . $id_hs . '"</script>
                    ';
            }
        }
    } else {
        echo '<h5>Hãy đăng nhập để bình luận</h5>';
    }

    ?>
</div>
<h3 style="font-size: 28px;" class="my-3">Nội quy và chính sách về chỗ ở</h3>
<h4 style="font-size: 23px;" class="my-3">
    Chính sách hủy phòng
</h4>
<p style="font-size: 15px;" class="mb-3">
    Miễn phí hủy phòng trong vòng 48h sau khi đặt phòng thành công và trước 5 ngày so với thời gian check-in. Sau đó, hủy phòng trước 5 ngày so với thời gian check-in, được hoàn lại 100% tổng số tiền đã trả (trừ phí dịch vụ). <a href="" style="color:#ffb025">Chi tiết</a>
</p>
<div class="cancelroom">
    <img src="https://i.ibb.co/BqwJGkn/Untitled.png" alt="">
</div>
<h4 class="my-3">Lưu ý</h4>
<p><?php echo $chinhsach ?></p>
<h4 style="font-size: 23px;">
    Thời gian nhận phòng
</h4>
<div class="price_room odd d-flex justify-content-between">
    <span class="">Nhận phòng
    </span>
    <span class="fw-bold text-right">00:00 pm
    </span>
</div>
<div class="price_room d-flex justify-content-between">
    <span class="">Trả phòng</span>
    <span class="fw-bold text-right">00:00 pm
    </span>
</div>
</div>

<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
    <img class="rounded-circle" width="56px" src="https://cdn.luxstay.com/users_avatar_default/default-avatar.png" alt="">
</div>

</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
    <div class="text-end">
        <label for="share">Chia sẻ <i class="ps-3 fal fa-arrow-from-bottom my-3"></i></label>
    </div>

    <form class="p-3 border form_datngay" method="post">
        <p><b style="font-size: 28px;"><?= number_format($giaphong) ?>₫ </b><small>/đêm</small></p>

        <div class="d-flex">
            <input type="text" name="datefilter2" id="datefilter23" placeholder="Ngày" class="input-date" autocomplete="off" />
            <script>
                $(function() {
                    var today = new Date();
                    var a = [];
                    var b = [];
                    var giaphong = <?= $giaphong ?>;
                    var magiamgia = "<?php echo $magiamgia ?>";
                    var loaigiamgia = "<?php echo $loaigiamgia ?>";
                    <?php
                    $sql_hoadon = "SELECT * FROM donhang WHERE id_hs=$id_hs";
                    $result_hoadon = $conn->query($sql_hoadon);
                    if ($result_hoadon->num_rows > 0) {
                        while ($row_hoadon = $result_hoadon->fetch_assoc()) {
                            $check_inhd = $row_hoadon['checkin'];
                            $check_outhd = $row_hoadon['checkout'];
                    ?>
                            a.push(moment("<?= $check_inhd ?>"));
                            b.push(moment("<?= $check_outhd ?>"));
                    <?php
                        }
                    }
                    ?>
                    $('input[name="datefilter2"]').daterangepicker({
                        autoUpdateInput: false,
                        minDate: today,
                        locale: {
                            cancelLabel: 'Xóa',
                            applyLabel: 'Chọn',

                        },
                        isInvalidDate: function(date) {
                            var k = false;
                            for (var i = 0; i < a.length; i++) {
                                if (date >= a[i] && date <= b[i]) {
                                    k = true;
                                }
                            }
                            return k;

                        }
                    });
                    // console.log(giaphong)

                    $('input[name="datefilter2"]').on('apply.daterangepicker', function(ev, picker) {
                        $(this).val(picker.startDate.format('YYYY-MM-DD') + ' - ' + picker.endDate.format('YYYY-MM-DD'));
                        $.ajax({
                            type: "POST",
                            url: "tinhtoan.php",
                            data: "date=" + $(this).val() + "&&giaphong=" + giaphong + "&&magiamgia=" + magiamgia + "&&loaigiamgia=" + loaigiamgia,
                            success: function(response) {
                                $(".showmagiamgia").html(response)
                            }
                        });
                    });

                    $('input[name="datefilter2"]').on('cancel.daterangepicker', function(ev, picker) {
                        $(this).val('');
                    });
                });
            </script>

        </div>
        <div class="showmagiamgia">

        </div>
        <button class="datngay" type="submit" name="datngay">Đặt ngay</button>
    </form>
    <?php
    if (isset($_POST['datngay'])) {

        $check = $_POST['datefilter2'];
        $check_in = substr($check, 0, -13);
        $check_out = substr($check, 13, 23);
        $songay = (strtotime($check_out) - strtotime($check_in)) / 86400;
        $phidichvu = 100000 * $songay;
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $mahoadon =  substr(str_shuffle($permitted_chars), 0, 10);
        $tongtien = $giaphong * $songay + $phidichvu;
        if (isset($_POST['checkma123'])) {
            $checkma123 = $_POST['checkma123'];
            if ($status == 1) {
                $tongtien = $giaphong * $songay + $phidichvu - $mucgiam;
            } else {
                $tongtien = $giaphong * $songay + $phidichvu - $mucgiam * $giaphong * $songay / 100;
            }
            $sql_donhang = "INSERT INTO datphong VALUES (null,$id_hs,'$mahoadon',$tongtien,'$check_in','$check_out','$today','$magiamgia','$loaigiamgia')";

            $result_donhang = $conn->query($sql_donhang);
            if ($result_donhang) {
                header("location: thanhtoan.php?mahoadon=$mahoadon");
            }
        } else {
            $sql_donhang = "INSERT INTO datphong VALUES (null,$id_hs,'$mahoadon',$tongtien,'$check_in','$check_out','$today','','')";

            $result_donhang = $conn->query($sql_donhang);
            if ($result_donhang) {
                header("location: thanhtoan.php?mahoadon=$mahoadon");
            }
        }
    }
    ?>
    <form class="p-3 border form_tuvan my-3">
        <h6 class="my-3">Tư vấn từ Booking</h6>
        <input type="text" class="mb-3" name="" placeholder="Tên khách hàng" id="">
        <input type="tel" name="" placeholder="Số điện thoại" id="">
        <button class="tuvan">Nhận tư vấn miễn phí</button>
    </form>
    <img class="mb-3" src="https://www.designbold.com/academy/wp-content/uploads/2018/07/poster-qu%E1%BA%A3ng-c%C3%A1o-%E1%...-7.png" alt="">
    <img class="mb-3" src="https://wcomvn.s3.ap-southeast-1.amazonaws.com/image/2018/05/30090707/poster-quang-cao-thoi-trang.jpg" alt="">
    <img src="https://img.lovepik.com/desgin_photo/40103/8784_detail.jpg!detail808" alt="">
</div>
<input type="checkbox" name="" hidden id="share">
<div class="modal2">
    <div class="d-flex justify-content-between pt-0 fs-4 mb-3">
        <span class="d-block fw-500">Chia sẻ</span>
        <label for="share" class="d-block fal fa-times-circle"></label>
    </div>
    <p class="d-block share-facebook" style="cursor: pointer;"><i class="fab p-3 fa-facebook"></i>Chia sẻ facebook</p>
    <p href="" class="d-block sendEmailDefault" style="cursor: pointer;"><i class="fas p-3 fa-envelope"></i>Chia sẻ email</p>
    <p class="d-block clipboard" style="cursor: pointer;"><i class="fas p-3 fa-copy"></i><span>Sao chép đường dẫn</span></p>
</div>
<label class="overlay" for="share">

</label>
<div id="map" class="p-0">
    <img src="https://i.ibb.co/nLw6QBN/Untitled.png" alt="">
    <p class="mt-2">Bạn sẽ nhận được địa chỉ chính xác của chỗ ở sau khi hoàn tất đơn đặt phòng.
    </p>
</div>
<h3 style="font-size: 28px;" class="p-0 my-3">Chỗ ở tương tự</h3>
<div class="d-flex p-0">
    <?php
    $sql_hss = "SELECT * FROM khachsan where id_khuvuc=$id_khuvuc and sophong=$sophong and NOT(id=$id_hs) LIMIT 5 ";
    $result_hss = $conn->query($sql_hss);
    if ($result_hss->num_rows > 0) {
        while ($row_hss = $result_hss->fetch_assoc()) {
            $name = $row_hss['name'];
            $id_hss = $row_hss['id'];
            $price = number_format($row_hss['price']);
            $sophong = $row_hss['sophong'];
            $danhgia = $row_hss['danhgia'];
            $image = $row_hss['image'];
            $love = $row_hss['love'];
            if ($love === "1") {
                echo '<div class="col-6 col-md-2-4 product my-3">
                        <div class="box-shadow">';
                if (isset($_COOKIE['user'])) {
                    echo '<input type="checkbox" checked hidden name="heart" class="check_heart" id="check_heart' . $id_hss . '">';
                }
                echo '<label for="check_heart' . $id_hss . '" class="heart">
                                <i class="far fa-heart"></i>
                            </label>
                            <a href="room.php?id=' . $id_hss . '">
                                <img src="./public/image/homestay/' . $image . '" alt="" width="263" height="174">
                            </a>
                            <div class="p-3">
                                <a href="room.php?id=' . $id_hss . '" class="d-block text-dark name-product fw-bold m-0">
                                    ' . $name . '
                                </a>
                                <span class="detail-product">' . $sophong . ' phòng ngủ</span>
                                <p class="fw-bold m-0 p-0">' . $price . '₫/đêm</p>
                                <p class="m-0">
                                    <i class="fas fa-star star1 "></i>
                                    <i class="fas fa-star star1 "></i>
                                    <i class="fas fa-star star1 "></i>
                                    <i class="fas fa-star star2 "></i>
                                    <i class="fas fa-star star2 "></i>
                                </p>
                            </div>
                        </div>
                    </div>';
            } else {
                echo '<div class="col-6 col-md-2-4 product my-3">
                        <div class="box-shadow">';
                if (isset($_COOKIE['user'])) {
                    echo '<input type="checkbox" hidden name="heart" class="check_heart" id="check_heart' . $id_hss . '">';
                }
                echo '<label for="check_heart' . $id_hss . '" class="heart">
                                <i class="far fa-heart"></i>
                            </label>
                            <a href="room.php?id=' . $id_hss . '">
                                <img src="./public/image/homestay/' . $image . '" alt="" width="263" height="174">
                            </a>
                            <div class="p-3">
                                <a href="room.php?id=' . $id_hss . '" class="d-block text-dark name-product fw-bold m-0">
                                    ' . $name . '
                                </a>
                                <span class="detail-product">' . $sophong . ' phòng ngủ</span>
                                <p class="fw-bold m-0 p-0">' . $price . '₫/đêm</p>
                                <p class="m-0">
                                    <i class="fas fa-star star1 "></i>
                                    <i class="fas fa-star star1 "></i>
                                    <i class="fas fa-star star1 "></i>
                                    <i class="fas fa-star star2 "></i>
                                    <i class="fas fa-star star2 "></i>
                                </p>
                            </div>
                        </div>
                    </div>';
            }

            echo '<script>
                    $(document).ready(function () {
                        $("#check_heart' . $id_hss . '").click(function (e) { 
                            $.ajax({
                                type: "post",
                                url: "heart.php",
                                data: "id="+' . $id_hss . ',
                                success: function (response) {
                                    alert(response);
                                }
                            });
                        });
                    });
            
                </script>';
        }
    }

    ?>

</div>
</div>

<?php
include 'footer.php';
?>