<?php 
    include 'header.php';
    include 'connect.php';
?>
    <h3 class="text-center my-3">Quản lý chi tiết đơn đặt phòng</h3>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">STT</th>
          <th scope="col">Tên khách</th>
          <th scope="col">SĐT</th>
          <th scope="col">Email</th>
          <th scope="col">Địa chỉ</th>
          <th scope="col">Mã đặt phòng</th>
          <th scope="col">Ngày bắt đầu</th>
          <th scope="col">Ngày kết thúc</th>
          <th scope="col">Tổng tiền</th>
          <th scope="col">Trạng thái</th>
        </tr>
      </thead>
      <tbody>
        <?php 
            if(isset($_GET['id'])){
                $id_hs = $_GET['id'];
                $sql_dh = "SELECT * FROM donhang WHERE id_hs = $id_hs";
                $result_dh = $conn->query($sql_dh);
                if($result_dh->num_rows > 0){
                    $dem=0;
                    while ($row_dh = $result_dh->fetch_assoc()){
                        $dem++;
                        $id_dh = $row_dh['id'];
                        $name = $row_dh['name'];
                        $email = $row_dh['email'];
                        $phone = $row_dh['phone'];
                        $address = $row_dh['address'];
                        $mahoadon = $row_dh['mahoadon'];
                        $trangthai = $row_dh['trangthai'];
                        $checkin = $row_dh['checkin'];
                        $tongtien = $row_dh['tongtien'];
                        $checkout = $row_dh['checkout'];
                        echo'
                        
                        <tr>
                            <th scope="row">'.$dem.'</th>
                            <td>'.$name.'</td>
                            <td>0'.$phone.'</td>
                            <td>'.$email.'</td>
                            <td>'.$address.'</td>
                            <td>'.$mahoadon.'</td>
                            <td>'.$checkin.'</td>
                            <td>'.$checkout.'</td>
                            <td>'.number_format($tongtien).'đ</td>';
                            if($trangthai==0){
                                echo '<td>
                                        <button class="btn btn-primary" disabled>
                                            <a class="text-white mx-2">Chưa xác nhận</a>
                                        </button>
                                        <button class="btn btn-danger my-2">
                                            <a class="text-white mx-2" onclick="return confirm(\'Bạn có muốn xóa đơn đặt phòng này không ?\')" href="deletephong.php?id='.$id_dh.'&&id_hs='.$id_hs.'">Hủy đặt phòng</a>
                                        </button>
                                    </td>';
                            }
                            else if($trangthai==1){
                                echo '<td>
                                        <button class="btn btn-success" disabled>
                                            <a class="text-white mx-2" >Đã xác nhận</a>
                                        </button>
                                        <button class="btn btn-primary my-2">
                                            <a class="text-white mx-2" onclick="return confirm(\'Xác nhận đã thanh toán ?\')" href="update_trangthai.php?id='.$id_dh.'&&id_hs='.$id_hs.'">Chưa thanh toán</a>
                                        </button>
                                        <button class="btn btn-danger">
                                            <a class="text-white mx-2" onclick="return confirm(\'Bạn có muốn xóa đơn đặt phòng này không ?\')" href="deletephong.php?id='.$id_dh.'&&id_hs='.$id_hs.'">Hủy đặt phòng</a>
                                        </button>
                                    </td>';
                            }else if($trangthai==2){
                                echo '
                                    <td>
                                        <button class="btn btn-success" disabled>
                                            <a class="text-white mx-2" >Đã thanh toán</a>
                                        </button>
                                        <button class="btn btn-primary my-2">
                                            <a class="text-white mx-2" onclick="return confirm(\'Xác nhận đã nhận phòng ?\')" href="update_trangthai.php?id='.$id_dh.'&&id_hs='.$id_hs.'">Chưa nhận phòng</a>
                                        </button>
                                    </td>
                                ';
                            }
                            else if($trangthai==3){
                                echo '
                                    <td>
                                        <button class="btn btn-success" disabled>
                                            <a class="text-white " >Đã nhận phòng</a>
                                        </button>
                                        <button class="btn btn-primary my-2">
                                            <a class="text-white mx-2" onclick="return confirm(\'Xác nhận đã trả phòng ?\')" href="update_trangthai.php?id='.$id_dh.'&&id_hs='.$id_hs.'">Chưa trả phòng</a>
                                        </button>
                                    </td>
                                ';
                            }else if($trangthai==4){
                                echo '
                                    <td>
                                        <button class="btn btn-success my-2">
                                            <a class="text-white mx-2" onclick="return confirm(\'Xác nhận hoàn thành ?\')" href="update_trangthai.php?id='.$id_dh.'&&id_hs='.$id_hs.'">Hoàn thành</a>
                                        </button>
                                    </td>
                                ';
                            }
                        echo '</tr>
                        ';
                    }
                }
            }
        ?>
        
      </tbody>
    </table>
<?php 
    include 'footer.php';
?>