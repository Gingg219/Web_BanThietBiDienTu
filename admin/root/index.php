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
</head>
<body>
<?php require_once '../menu.php'; ?>
        <div class="info" style="height: 100%;">
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
                            
                            require ('../control.php');
                            $result='';
                            if(isset($_POST['sub1'])){
                                $result=(new data())->statistical_orders($_POST['time1']);
                            }
                            
                        ?>
                    <form>
                    <tr>
                        <th>week</th>
                        <td><input type="week" name="time2"></td>
                        <td><button name="sub2" type="submit" style="margin: 0px;">Filter</button></td>
                    </tr>
                    </form>
                    <?php
                            
                            if(isset($_POST['sub2'])){
                                $result=(new data())->statistical_orders1($_POST['time2']);
                            }
                            
                        ?>
                    <form  method="POST">
                    <tr>
                        <th>month</th>
                        <td><input type="month" name="time3"></td>
                        <td><button name="sub3" type="submit" style="margin: 0px;">Filter</button></td>
                    </tr>
                    </form>
                    <?php
                            
                            if(isset($_POST['sub3'])){
                                $result=(new data())->statistical_orders2($_POST['time3']);
                            }
                            
                        ?>
                    <form method="POST">
                    <tr>
                        <th>year</th>
                        <td>
                            <select name="time4" id="">
                                <?php for($i=date('Y');$i>=1970;$i--){ ?>
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
                            
                            if(isset($_POST['sub4'])){
                                $result=(new data())->statistical_orders3($_POST['time4']);
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
                <h1>Turnover current</h1>
                <table class="rwd-table">
                <tr>
                    <th>Week</th>
                    <td>
                        <?php
                            $turnover=(new data)->statistical_turnover();
                            echo number_format($turnover);
                        ?> đ
                    </td>
                </tr>
                <tr>
                    <th>Month</th>
                    <td>
                        <?php
                            $turnover=(new data)->statistical_turnover1();
                            echo number_format($turnover);
                        ?> đ
                    </td>
                </tr>
                <tr>
                    <th>Year</th>
                    <td>
                        <?php
                            $turnover=(new data)->statistical_turnover2();
                            echo number_format($turnover);
                        ?> đ
                    </td>
                </tr>
                
                </table>
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
                    $products=(new data)->statistical_products1();
                    foreach($products as $each):
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
                <h1>Products not selling well</h1>
                <table class="rwd-table">
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Sold</th>
                </tr>
                <?php
                    $products=(new data)->statistical_products2();
                    foreach($products as $each):
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
                <h1>Potential customers</h1>
                <table class="rwd-table">
                <tr>
                    <th>Name</th>
                    <th>Paid</th>
                    <th>Total order</th>
                </tr>
                <?php
                    $each=(new data)->statistical_cus();
                    foreach($each as $cus):
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
    </div>
</body>
</html>