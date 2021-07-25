<?php 
    include 'header.php';
    include 'connect.php';
?>
    <h1 class="text-center py-5">User</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">STT</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Address</th>
          <th scope="col">Phone</th>
          <th scope="col">Avatar</th>
          <th scope="col">Time</th>
        </tr>
      </thead>
      <tbody>
        <?php 
            if($_COOKIE['admin']){
                $sql_user = "SELECT * FROM user";
                $result_user = $conn -> query($sql_user);
                if($result_user->num_rows > 0){
                    $dem = 1;
                    while($row_user = $result_user->fetch_assoc()){
                        echo '
                            <tr class="align-items-center">
                                <th scope="row">'.$dem.'</th>
                                <td>'.$row_user['name'].'</td>
                                <td>'.$row_user['email'].'</td>
                                <td>'.$row_user['address'].'</td>
                                <td>'.$row_user['phone'].'</td>
                                <td><img src="../public/image/user/'.$row_user['avatar'].'" style="width: 100px; height: 100px; object-fit: cover" alt=""></td>
                                <td>'.$row_user['time'].'</td>
                            </tr>
                        ';
                        $dem++;
                    }
                }
            }
        ?>
        
        
      </tbody>
    </table>

<?php 
    include 'footer.php';
?>