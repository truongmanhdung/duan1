<?php
    include './middlewares/connect.php';
    if(isset($_POST["date"])){
        $date = $_POST["date"];
        $check_in = substr($date, 0, -13);
        $check_out = substr($date, 13, 23);
        $giaphong = $_POST["giaphong"];
        $songay = (strtotime($check_out) - strtotime($check_in)) / 86400;
        $tongtien = $giaphong * $songay;
        $phidichvu = 100000 * $songay;
        $magiamgia = $_POST["magiamgia"];
        $loaigiamgia = $_POST["loaigiamgia"];
        if($loaigiamgia == "homestay"){
            $sql_ma = "SELECT * FROM phieugiamgia WHERE magiamgia = '$magiamgia'";
        }else if($loaigiamgia == "khuvuc"){
            $sql_ma = "SELECT * FROM mggkhuvuc WHERE magiamgia = '$magiamgia'";
        }else if($loaigiamgia == "user"){
            $sql_ma = "SELECT * FROM mgguser WHERE magiamgia = '$magiamgia'";
        }else if($loaigiam == "all"){
            $sql_ma = "SELECT * FROM maggall WHERE magiamgia = '$magiamgia'";
        }
        $result_ma = $conn->query($sql_ma);
        if($result_ma->num_rows > 0){
            while($row_ma = $result_ma->fetch_assoc()){
                $mucgiam = $row_ma['mucgiam'];
                $status = $row_ma['status'];
                $check_out_ma = $row_ma['time_out'];
            }
        }
        if($status == 1){
            $sotiengiam = $mucgiam;
        }else{
            $sotiengiam = $mucgiam*$tongtien/100;
        }
        echo '
            <input type="checkbox" hidden name="checkma123" id="checkma123" value="giamgia">
            <div class="border-bottom" style="width: 306px;">
                <div  class="d-flex my-3 justify-content-between align-items-center">
                    <p>Giá thuê '.$songay.' đêm</p>
                    <p>'.number_format($tongtien).'đ</p>
                </div>
                <div class="d-flex my-3 justify-content-between align-items-center">
                    <p>Phí dịch vụ</p>
                    <p>'.number_format($phidichvu).'đ</p>
                </div>
                <div class="d-flex my-3 justify-content-between align-items-center phi123">
                    <p>Mã khuyến mãi</p>
                    <p>-'.number_format($sotiengiam).'đ</p>
                </div>
            </div>
            <div style="width: 306px;" class="d-flex my-3 justify-content-between align-items-center check123789">
                <strong>Tổng tiền</strong>
                <strong class="tongtiencu">'.number_format($tongtien+$phidichvu).'đ</strong>
                <strong class="tongtienmoi">'.number_format($tongtien+$phidichvu-$sotiengiam).'đ</strong>
            </div>
            <div style="width: 306px;" class="d-flex my-3 justify-content-between align-items-center check123456">
                <div class="div">';
                    if($status==1){
                        echo '
                            <p>Giảm giá <strong class="text-danger">'.number_format($mucgiam).'đ</strong></p>
                            <p>Mã giảm giá: <strong class="text-danger">'.$magiamgia.'đ</strong></p>
                            <p>Ngày check-in: '.$check_out_ma.'</p>
                        ';
                    }
            echo '</div>
                
                <label for="checkma123" style="width: 72px;height: 38px; font-size: 10px; font-weight: bold; text-transform: uppercase" class="btn btn-primary apply">Áp dụng</label>
                <label for="checkma123" style="width: 72px;height: 38px; font-size: 10px; font-weight: bold; text-transform: uppercase" class="btn btn-danger cancel">Hủy</label>
            </div>
        ';
    }
?>
