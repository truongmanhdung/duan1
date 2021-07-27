<?php
include './middlewares/connect.php';
if (!empty($_POST['keyword'])) {
    $search =  $_POST['keyword'];
    $query = "SELECT * FROM khachsan WHERE name like '%$search%' LIMIT 5";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '
            <div class="" style="padding:10px 0 5px 20px;">
                <a href="room.php?id=' . $row['id'] . '">
                    <div class="product_search_item d-flex align-items-center">
                        <img style="width:46px;height:46px;object-fit:cover;border-radius:5px;margin-right: 10px;" src="./public/image/homestay/' . $row['image'] . '" alt="">
                        <div>
                            <p title="' . $row['name'] . '" class="fw-500" style="color:#000;display:block; width: 400px;white-space: nowrap;overflow: hidden;text-overflow: Ellipsis;">' . $row['name'] . '</p>
                            <p style="font-size: 14px;font-weight:300;color:#000";>' . $row['address'] . '</p>
                        </div>
                    </div>
                </a>
            </div>
            ';
        }
    }
    $query2 = "SELECT * FROM khuvuc WHERE name like '%$search%' LIMIT 5";
    $result2 = $conn->query($query2);
    if ($result2->num_rows > 0) {
        while ($row2 = $result2->fetch_assoc()) {
            $sql = "SELECT * FROM khachsan WHERE id_khuvuc = {$row2['id']}";
            $result_ks = $conn->query($sql);
            $dem1 = 0;
            if ($result_ks->num_rows > 0) {
                while ($row_ks = $result_ks->fetch_assoc()) {
                    $dem1++;
                }
            }
            echo '
            <div class="" style="padding:10px 0 5px 20px;">
                <a href="product.php?id=' . $row2['id'] . '">
                    <div class="product_search_item d-flex align-items-center">
                        <img style="width:46px;height:46px;object-fit:cover;border-radius:5px;margin-right: 10px;" src="https://i.ibb.co/Xx8dxjV/Untitled.png" alt="">
                        <div>
                            <p title="' . $row2['name'] . '" class="fw-500" style="color:#000;display:block; width: 400px;white-space: nowrap;overflow: hidden;text-overflow: Ellipsis;">' . $row2['name'] . '</p>
                            <p style="font-size: 14px;font-weight:300;color:#000";>' . $dem1 . ' Chỗ ở</p>
                        </div>
                    </div>
                </a>
            </div>
            ';
        }
    }
}