<?php
include 'header.php';
?>

<div class="container">
    <p class="pt-2 pb-4"><b>Trước khi đặt phòng, hãy kiểm tra những địa điểm bị hạn chế du lịch trong thời gian này</b>. Sức khỏe và sự an toàn của cộng đồng luôn được đặt hàng đầu. Vì vậy, vui lòng làm theo chỉ thị của chính phủ bởi điều đó thực sự cần thiết.</p>
    <div class="d-flex justify-content-between align-items-center">
        <?php
        if (isset($_GET['id'])) {
            $id_kv = $_GET['id'];
            $sql_kv = "SELECT * FROM khuvuc where id='$id_kv'";
            $result_kv = $conn->query($sql_kv);
            if ($result_kv->num_rows > 0) {
                while ($row_kv = $result_kv->fetch_assoc()) {
                    $name = $row_kv['name'];
                    $sql_hs = "SELECT * FROM khachsan where id_khuvuc=$id_kv";
                    $result_hs = $conn->query($sql_hs);
                    if ($result_hs->num_rows > 0) {
                        $dem = 0;
                        while ($row_hs = $result_hs->fetch_assoc()) {
                            $dem++;
                        }
                    }
                    echo '<h3>' . $dem . ' homestay tại ' . $name . '</h3>';
                }
            }
        }
        ?>

        <select name="" id="" class="px-3 form-control d-flex" style="width: 200px;">
            <option value="Giá tăng dần">Giá tăng dần</option>
            <option value="Giá giảm dần">Giá giảm dần</option>
        </select>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="row my-4">
        <?php
        if (isset($_GET['id'])) {
            $sql_hs = "SELECT * FROM khachsan where id_khuvuc=$id_kv";
            $result_hs = $conn->query($sql_hs);
            if ($result_hs->num_rows > 0) {
                while ($row_hs = $result_hs->fetch_assoc()) {
                    $name = $row_hs['name'];
                    $id_hs = $row_hs['id'];
                    $price = number_format($row_hs['price']);
                    $sophong = $row_hs['sophong'];
                    $danhgia = $row_hs['danhgia'];
                    $image = $row_hs['image'];
                    $love = $row_hs['love'];
                    if ($love === "1") {
                        echo '<div class="col-6 col-md-2-4 product my-3">
                        <div class="box-shadow">';
                        if (isset($_COOKIE['user'])) {
                            echo '<input type="checkbox" checked hidden name="heart" class="check_heart" id="check_heart' . $id_hs . '">';
                        }
                        echo '<label for="check_heart' . $id_hs . '" class="heart">
                                <i class="far fa-heart"></i>
                            </label>
                            <a href="room.php?id=' . $id_hs . '">
                                <img src="./public/image/homestay/' . $image . '" alt="" width="263" height="174">
                            </a>
                            <div class="p-3">
                                <a href="room.php?id=' . $id_hs . '" class="d-block text-dark name-product fw-bold m-0">
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
                            echo '<input type="checkbox" hidden name="heart" class="check_heart" id="check_heart' . $id_hs . '">';
                        }
                        echo '<label for="check_heart' . $id_hs . '" class="heart">
                                <i class="far fa-heart"></i>
                            </label>
                            <a href="room.php?id=' . $id_hs . '">
                                <img src="./public/image/homestay/' . $image . '" alt="" width="263" height="174">
                            </a>
                            <div class="p-3">
                                <a href="room.php?id=' . $id_hs . '" class="d-block text-dark name-product fw-bold m-0">
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
                        $("#check_heart' . $id_hs . '").click(function (e) { 
                            $.ajax({
                                type: "post",
                                url: "heart.php",
                                data: "id="+' . $id_hs . ',
                                success: function (response) {
                                    alert(response);
                                }
                            });
                        });
                    });
            
                </script>';
                }
            }
        }
        ?>


    </div>

</div>

<?php
include 'footer.php';
?>