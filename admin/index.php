<?php
include "header.php";

?>

<!-- END MENU SIDEBAR-->


<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Thống kê</h2>

                    </div>
                </div>
            </div>
            <div class="row m-t-25">
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c1">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                                <div class="text">
                                    <?php
                                    include 'connect.php';
                                    $sql = "SELECT * FROM doitac";
                                    $doitac = $conn->query($sql);
                                    $sql2 = "SELECT * FROM user";
                                    $user = $conn->query($sql2);
                                    ?>
                                    <h2><?= $doitac->num_rows ?></h2>
                                    <span>Đối tác</span>
                                </div>
                            </div>
                            <div class="overview-chart">
                                <canvas id="widgetChart1"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c2">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                                <div class="text">
                                    <h2><?= $user->num_rows ?></h2>
                                    <span>Người dùng</span>
                                </div>
                            </div>


                            <div class="overview-chart">
                                <canvas id="widgetChart2"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c3">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-shopping-cart"></i>
                                </div>
                                <div class="text">
                                    <?php
                                    $sql3 = "SELECT SUM(tongtien) as total FROM history";
                                    $tt = $conn->query($sql3);
                                    $sql4 = "SELECT * FROM history";
                                    $tt2 = $conn->query($sql4);
                                    while ($total = $tt->fetch_assoc()) {
                                        echo '<h2>' . number_format($total['total'] * 15 / 100) . 'Đ</h2>';
                                    }
                                    ?>
                                    <span>Doanh thu</span>
                                </div>
                            </div>
                            <div class="overview-chart">
                                <canvas id="widgetChart3"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c4">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-money"></i>
                                </div>
                                <div class="text">
                                    <h2><?= $tt2->num_rows ?></h2>
                                    <span>Đơn hàng</span>
                                </div>
                            </div>
                            <div class="overview-chart">
                                <canvas id="widgetChart4"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="piechart_3d" style="width: 1010px; height: 500px;"></div>
                </div>

            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", {
        packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            <?php
            $sql_kv = "SELECT * FROM khuvuc";
            $result_kv = $conn->query($sql_kv);
            if ($result_kv->num_rows > 0) {
                $dem = 1;
                while ($row_kv = $result_kv->fetch_assoc()) {
                    $id = $row_kv['id'];
                    $sql_ks = "SELECT * FROM khachsan where id_khuvuc = '$id'";
                    $result_ks = $conn->query($sql_ks);
                    $dem1 = 0;
                    if ($result_ks->num_rows > 0) {
                        while ($row_ks = $result_ks->fetch_assoc()) {
                            $dem1++;
                        }
                    }
            ?>['<?= $row_kv['name'] ?>', <?= $dem1 ?>],

            <?php
                }
            }
            ?>
        ]);

        var options = {
            title: 'Thống kê Homestay theo Khu vực',
            is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
    }
</script>
</div>
<?php
include "footer.php";
?>