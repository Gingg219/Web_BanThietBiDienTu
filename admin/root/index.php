<?php
require '../check_admin_login.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="/assets/img/Wstore.png" type="image/x-icon" />
    <script src="https://kit.fontawesome.com/8c12853810.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
</head>
<body>
    <?php
    require_once '../menu.php';
    require('../control.php');
    $max_date = 30;
    $sql = "SELECT DATE_FORMAT(order_date,'%e-%m') as 'date', sum(total_current) as 'total',COUNT(*) as 'count_order'
            FROM orders
            WHERE order_date >= CURDATE() - INTERVAL $max_date DAY
            group by DATE_FORMAT(order_date,'%e-%m')";
    $result = mysqli_query($conn, $sql);
    $arr=[]; 
    $today = date('d');
    if ($today < $max_date) {
        $day_last_month = $max_date - $today;
        $last_month = date('m', strtotime("-1 month"));
        $last_month_date = date('Y-m-d', strtotime("-1 month"));
        $total_day_last_month=(new DateTime($last_month_date))->format('t');
        $start_day_last_month=$total_day_last_month-$day_last_month;
        for($i=$start_day_last_month;$i<=$total_day_last_month;$i++){
            $key_arr=$i . '-' . $last_month;
            $value1=0;
            $value2=0;
            $arr[$key_arr]=array($value1=>$value2);
        }
        
        $start_day_current_month=1;
    }
    else{
        $start_day_current_month=$today-$max_date;
    }
    $current_month=date('m');
    for($i=$start_day_current_month;$i<=$today;$i++){
        $key_arr=$i . '-' . $current_month;
        $value1=0;
        $value2=0;
        $arr[$key_arr]=array($value1=>$value2);
    }
    foreach ($result as $each) {
        // $arr[$each['date']][(float)$each['total']] = (float)$each['count_order'];
        $arr[$each['date']]=array( (float)$each['total']=>(float)$each['count_order']);
        // $arr[$each['date']]=(float)$each['total'];
    }
    $a=[];
    $c=[];
    $b=[];
    foreach($arr as $value1=> $value2){
        $a[]=$value1;
        foreach($value2 as $value3 => $value4){
            $b[]=$value3;
            $c[]=$value4;
        }

    }
    $xAxis=array_keys($arr);
    $yAxis=$b;
    $yAxis2=$c;
    // echo json_encode($c);
    // echo json_encode($a);
    // echo json_encode($b);
    // echo "<br>";
    // echo json_encode($arr);
    // exit();
    ?>
    <div class="info" style="height: 100%;">
        <div class="statistical_chart">
            <figure class="highcharts-figure">
                <div id="container"></div>
            </figure>
        </div>
        <div class="statistical">
            <h1>Top sales</h1>
            <table class="rwd-table">
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Sold</th>
                </tr>
                <?php
                $products = (new data)->statistical_products1();
                foreach ($products as $each) :
                ?>
                    <tr>
                        <td data-th="Name"><?php echo $each['name'] ?></td>
                        <td data-th="Price"><?php echo number_format($each['price_sale']) ?> đ</td>
                        <td data-th="Sold"><?php echo $each['sold'] ?></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
        <div class="statistical">
            <h1>Count Orders</h1>
            </form>
            <table class="rwd-table">
                <form action="" method="POST">
                    <tr>
                        <th>Time</th>
                        <td><input type="date" name="time1"></td>
                        <td><button name="sub1" type="submit" style="margin: 0px;">Filter</button></button></td>
                    </tr>
                </form>
                <?php


                $result = '';
                if (isset($_POST['sub1'])) {
                    $result = (new data())->statistical_orders($_POST['time1']);
                }

                ?>
                <form method="POST">
                    <tr>
                        <th>week</th>
                        <td><input type="week" name="time2" value="<?php if (isset($_POST['time2'])){echo $_POST['time2'];} ?>"></td>
                        <td><button name="sub2" type="submit" style="margin: 0px;">Filter</button></td>
                    </tr>
                </form>
                <?php

                if (isset($_POST['sub2'])) {
                    $result = (new data())->statistical_orders1($_POST['time2']);
                }

                ?>
                <form method="POST">
                    <tr>
                        <th>month</th>
                        <td><input type="month" name="time3" value="<?php if (isset($_POST['time3'])){echo $_POST['time3'];} ?>"></td>
                        <td><button name="sub3" type="submit" style="margin: 0px;">Filter</button></td>
                    </tr>
                </form>
                <?php

                if (isset($_POST['sub3'])) {
                    $result = (new data())->statistical_orders2($_POST['time3']);
                }

                ?>
                <form method="POST">
                    <tr>
                        <th>year</th>
                        <td>
                            <select name="time4" id="">
                                <?php for ($i = date('Y'); $i >= 1970; $i--) { ?>
                                    <option>
                                        <?php echo $i ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </td>
                        <td><button name="sub4" type="submit" style="margin: 0px;">Filter</button></td>
                    </tr>
                </form>
                <?php

                if (isset($_POST['sub4'])) {
                    $result = (new data())->statistical_orders3($_POST['time4']);
                }

                ?>
                <tr>
                    <td colspan="3" style="text-align: center;">
                        <h2>
                            Result : <?php echo $result ?> orders
                        </h2>
                    </td>
                </tr>
            </table>
        </div>
        <div class="statistical">
            <h1>Products not selling well</h1>
            <table class="rwd-table">
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Sold</th>
                </tr>
                <?php
                $products = (new data)->statistical_products2();
                foreach ($products as $each) :
                ?>
                    <tr>
                        <td data-th="Name"><?php echo $each['name'] ?></td>
                        <td data-th="Price"><?php echo number_format($each['price_sale']) ?> đ</td>
                        <td data-th="Sold"><?php echo $each['sold'] ?></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
        <div class="statistical" style="float: top;">
            <h1>Turnover current</h1>
            <table class="rwd-table">
                <tr>
                    <th>Week</th>
                    <td>
                        <?php
                        $turnover = (new data)->statistical_turnover();
                        echo number_format($turnover);
                        ?> đ
                    </td>
                </tr>
                <tr>
                    <th>Month</th>
                    <td>
                        <?php
                        $turnover = (new data)->statistical_turnover1();
                        echo number_format($turnover);
                        ?> đ
                    </td>
                </tr>
                <tr>
                    <th>Year</th>
                    <td>
                        <?php
                        $turnover = (new data)->statistical_turnover2();
                        echo number_format($turnover);
                        ?> đ
                    </td>
                </tr>

            </table>
        </div>
        <div class="statistical">
            <h1>Potential customers</h1>
            <table class="rwd-table">
                <tr>
                    <th>Name</th>
                    <th>Paid</th>
                    <th>Total order</th>
                </tr>
                <?php
                $each = (new data)->statistical_cus();
                foreach ($each as $cus) :
                ?>
                    <tr>
                        <td><?php echo $cus['name'] ?></td>
                        <td><?php echo number_format($cus['total_paid']) ?> đ</td>
                        <td><?php echo $cus['total_order'] ?></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
    <script>
        Highcharts.chart('container', {

            title: {
            text: 'Revenue statistics for the last 30 days'
            },

            yAxis: {
            title: {
                text: 'Turnover'
            }
            },

            xAxis: {
                categories: <?php echo json_encode($xAxis) ?>
            },

            legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
            },

            plotOptions: {
            series: {
                label: {
                connectorAllowed: false
                },
            }
            },

            series: [{
            name: 'Turnover',
            data: <?php echo json_encode($yAxis) ?>
            }, 
            {
            name: 'Order',
            data: <?php echo json_encode($yAxis2) ?>
            }, 
            ],

            responsive: {
            rules: [{
                condition: {
                maxWidth: 500
                },
                chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
                }
            }]
            }

            });
    </script>
    </div>
</body>

</html>