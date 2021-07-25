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

    <title>Document</title>
</head>

<body>
    <div class="container header-fix">
        <div id="header">
            <header class="_header py-3 d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <a class="logo d-block" href="index.html">
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
                        
                        if(isset($_COOKIE['user'])){
                            $email = $_COOKIE['user'];
                            $sql = "SELECT * FROM user where email = '$email'";
                            $result = $conn->query($sql);
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    $name = $row['name'];
                                    $image = $row['avatar'];
                                    $phone = $row['phone'];
                                    $address = $row['address'];
                                    $password = $row['password'];
                                    echo '
                                        <span>'.$name.'</span>
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
        <div class="container" style="padding-bottom: 100px;">
            <div class="d-flex justify-content-between align-items-center py-3">
                <div class="justify-content-between tabcontent" id="in4">
                    <img width="48" height="48" class="rounded-circle" src="https://cdn.luxstay.com/users_avatar_default/default-avatar.png" alt="">
                    <div>
                        <span class="fs-5 information fw-500"><span class="name-account"><?php echo $name;?></span> · Thông tin tài khoản</span><br>
                        <span class="note-if">Cá nhân hóa tài khoản bằng việc cập nhật thông tin của bạn
                        </span>
                    </div>
                </div>
                <div class="justify-content-between tabcontent" id="change_password">
                    <img width="48" height="48" class="rounded-circle" src="https://cdn.luxstay.com/users_avatar_default/default-avatar.png" alt="">
                    <div>
                        <span class="fs-5 information fw-500"><span class="name-account"><?php echo $name;?></span> · Thay đổi mật khẩu</span><br>
                        <span class="note-if">Đổi mật khẩu ít nhất 6 tháng 1 lần để bảo vệ tài khoản của bạn
                        </span>
                    </div>
                </div>
                <div class="justify-content-between tabcontent" id="code_sale">
                    <img width="48" height="48" class="rounded-circle" src="https://cdn.luxstay.com/users_avatar_default/default-avatar.png" alt="">
                    <div>
                        <span class="fs-5 information fw-500"><span class="name-account"><?php echo $name;?></span> · Mã giảm giá</span><br>
                        <span class="note-if">Mã giảm giá
                        </span>
                    </div>
                </div>
                <a href="" class="d-block me-4">
                    <p class="m-0 tt fw-500">Trở thành chủ nhà</p>
                </a>
            </div>

            <div class="row">
                <ul class="col-xs-4 col-sm-4 col-md-4 col-lg-4 bg-white py-2 su myDIV" style="width:398px;height:180px;">
                    <li class="py-2 chucnang border-bottom mb-2 active" onclick="openEvent(event,'in4','in42')">Thông tin tài khoản</li>
                    <li class="py-2 chucnang border-bottom mb-2" onclick="openEvent(event,'code_sale','code_sale2')">Mã giảm giá</li>
                    <li class="py-2 chucnang border-bottom mb-2" onclick="openEvent(event,'change_password','change_password2')">Thay đổi mật khẩu</li>
                </ul>
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 ">
                    <form class="tabcontent2" id="in42" method="post" enctype="multipart/form-data">
                        <div class="d-flex align-items-center">
                            <?php 
                                echo '<img width="70" height="70" id="viewImage" style="object-fit: cover;" class="rounded-circle me-3" src="./public/image/user/'.$image.'" alt="">'
                            ?>
                            <label for="changeAVT" class="fw-500 changeAVT d-block">
                                Đổi ảnh đại diện
                            </label>
                            <input type="file" name="image" hidden id="changeAVT">
                        </div>
                        <div class="form_group ms-3">
                            <p class="m-1 fw-500 gray-500">Họ và tên</p>
                            <input type="text" name="name" value="<?php echo $name; ?>" style="width:100%" required>
                        </div>
                        <div class="form_group ms-3">
                            <p class="m-1 fw-500 gray-500">Email</p>
                            <input type="email" value="<?php echo $email; ?>" style="width:100%" disabled>
                        </div>
                        <div class="form_group ms-3">
                            <p class="m-1 fw-500 gray-500">Số điện thoại</p>
                            <input type="tel" name="phone" value="<?php echo $phone; ?>" style="width:100%" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
                        </div>
                        <div class="form_group ms-3">
                            <p class="m-1 fw-500 gray-500">Địa chỉ</p>
                            <input type="text" name="address" value="<?php 
                            if(isset($address)){
                                echo $address;
                                } ?>" style="width:100%">
                        </div>
                        <div class="form_group ms-3">
                            <p class="m-1 fw-500 gray-500">Ngày sinh</p>
                            <input type="date" name="birthday" style="width:100%" value="2021-07-17">
                        </div>
                        <div class="form_group ms-3">
                            <p class="m-1 fw-500 gray-500">Giới tính</p>
                            <div class="d-flex">
                                <div class="gender ms-1">
                                    <input id="male" type="radio" checked name="gender" id="" value="Nam">
                                    <label for="male" class="ms-2 fw-500">Nam</label>
                                </div>
                                <div class="gender ms-5">
                                    <input id="female" type="radio" name="gender" id="" value="Nữ">
                                    <label for="female" class="ms-2 fw-500">Nữ</label>
                                </div>
                                <div class="gender ms-5">
                                    <input id="other" type="radio" name="gender" id="" value="Khác">
                                    <label for="other" class="ms-2 fw-500">Khác</label>
                                </div>
                            </div>
                        </div>
                        <div class="form_group ms-3">
                            <p class="m-1 fw-500 gray-500">Giới thiệu bản thân</p>
                            <textarea name="introduction" id="" cols="30" rows="10" style="width:100%;height:107px"></textarea>
                        </div>
                        <input type="submit" name="update_user" value="Cập nhật" class="ms-3 text-white">
                    </form>
                    <?php 
                        if(isset($_POST['update_user'])){
                            $name = $_POST['name'];
                            $address = $_POST['address'];
                            $phone = $_POST['phone'];
                            if(empty($_FILES['image']['type'])){
                                $sql_update = "UPDATE user SET name = '$name', address = '$address', phone = '$phone' WHERE email = '$email'";
                                $result_update = $conn->query($sql_update);
                                if($result_update){
                                    echo "
                                        <script>alert('Cập nhật thành công')</script>
                                        <script>location.href='profile.php'</script>
                                    ";
                                }else{
                                    echo "
                                    <script>alert('Cập nhật thất bại')</script>
                                    
                                ";

                                }
                            }
                            if ($_FILES['image']['type'] == "image/jpeg" || $_FILES['image']['type'] == "image/png" || $_FILES['image']['type'] == "image/gif" || $_FILES['image']['type'] == "image/webp") {
                                $image = $_FILES['image']['name'];
                        
                                // Lấy ra tên ảnh
                                $tmp = $_FILES['image']['tmp_name'];
                                // Khai báo biến lưu trữ đường dẫn
                                move_uploaded_file($tmp, "./public/image/user/" . $image);
                                $sql_update = "UPDATE user SET name = '$name', avatar = '$image', address = '$address', phone = '$phone' WHERE email = '$email'";
                                $result_update = $conn->query($sql_update);
                                if($result_update){
                                    echo "
                                        <script>alert('Cập nhật thành công')</script>
                                        <script>location.href='profile.php'</script>
                                    ";
                                }else{
                                    echo "
                                    <script>alert('Cập nhật thất bại')</script>
                                    
                                ";

                                }
                            }else{
                                echo "
                                    <script>alert('Cập nhật thất bại')</script>
                                ";
                            }
                        }
                    ?>

                    <form class="tabcontent2" id="change_password2" method="post" enctype="multipart/form-data">
                        <div class="form_group ms-3">
                            <p class="m-1 fw-500 gray-500">Mật khẩu hiện tại</p>
                            <input type="password" name="password1" style="width:100%" required>
                        </div>
                        <div class="form_group ms-3">
                            <p class="m-1 fw-500 gray-500">Mật khẩu mới</p>
                            <input type="password" name="newpassword" style="width:100%" required>
                        </div>
                        <div class="form_group ms-3">
                            <p class="m-1 fw-500 gray-500">Xác nhận mật khẩu mới</p>
                            <input type="password" name="renewpassword" style="width:100%" required>
                        </div>
                        <input type="submit" name="doipass" value="Cập nhật" class="ms-3 text-white">
                    </form>
                    <?php 
                        if(isset($_POST['doipass'])){
                            $password1 = $_POST['password1'];
                            $newpassword = md5($_POST['newpassword']);
                            $renewpassword = md5($_POST['renewpassword']);
                            if($password === md5($password1)){
                                if($renewpassword === $newpassword){
                                    $sql_doipass = "UPDATE user SET password = '$newpassword' WHERE email = '$email'";
                                    $result_doipass = $conn->query($sql_doipass);
                                    if($result_doipass){
                                        echo "
                                    <script>alert('Đổi thành công')</script>
                                ";
                                    }
                                }else{
                                    echo "
                                    <script>alert('nhập lại mật khẩu sai')</script>
                                ";
                                }
                            }else{
                                echo "
                                    <script>alert('Sai mật khẩu cũ')</script>
                                ";
                            }
                        }
                    ?>
                    <div class="tabcontent2" id="code_sale2">
                        Không có dữ liệu
                    </div>
                </div>

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