<?php 
require '../check_admin_login.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Bills</title>
    <link rel="icon" href="/assets/img/Wstore.png" type="image/x-icon" />
    <script src="https://kit.fontawesome.com/8c12853810.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <?php require_once '../menu.php'; ?>
    <div class="info">
                    <div class="add_new">
                        <span>Total:</span>
                    </div>
                    <table class="tb_views" style="width: 100%;">
                        <tr>
                            <th>ID</th>
                            <th>Receiver information</th>
                            <th>Order information</th>
                            <th>Oder_ date</th>
                            <th>Status</th>
                            <th>Total</th>
                            <th>View</th>
                            <th>Confirm</th>
                            <th>Cancel</th>
                        </tr>
                        <?php
                            require_once '../control.php';

                            $search='';

                            if(isset($_GET['search'])){
                                $search=$_GET['search'];
                            }
                            $page=1;
                            if(isset($_GET['page'])){
                                $page=$_GET['page'];
                            }
                            $all_product=(new data)->count_order($search);
                            $all_page=ceil($all_product/5);
                            $skip_page=5*($page-1);
                            $result=(new data)->search_orders($search,$skip_page);


                            foreach($result as $each):
                        ?>
                        <tr>
                            <td><?php echo $each['id'] ?></td>
                            <td>
                                Name: <?php echo $each['receiver_name'] ?><br>
                                Phone number: <?php echo '0'.$each['receiver_phone'] ?> <br>
                                Address: <?php echo $each['receiver_address'] ?><br>
                            </td>
                            <?php
                                $cus_data=(new data)->find_cus($each['id_customer']);
                                $cus=mysqli_fetch_array($cus_data);
                            ?>
                            <td>
                                Name: <?php echo $cus['name'] ?><br>
                                Phone number: <?php echo '0'.$cus['phone_number'] ?> <br>
                                Address: <?php echo $cus['address'] ?><br>
                            </td>
                            <td><?php echo $each['order_date'] ?></td>
                            <td>
                                <?php
                                switch ($each['status']) {
                                    case '0':
                                        echo '<label>Pending approval</label>';
                                        break;
                                    case '1':
                                        echo '<label style="color: #1adf20;">Approved</label>';
                                        break;
                                    case '2':
                                        echo '<label style="color: #8f4e58;">Cancelled</label>';
                                        break;
                                    }
                                ?>
                                
                            </td>
                            <td><?php echo number_format($each['total_current']).' đ' ?></td>
                            <td><a href="view.php?id=<?php echo $each['id'] ?>">View</a></td>
                            <?php 
                                if($each['status']==='0'){
                                    $status=$each['id'];
                                    echo <<<EOF
                                            <td><a href="process_confirm.php?id=$status">Confirm</a></td>
                                            <td><a href="process_cancel.php?id=$status">Cancel</a></td>
                                         EOF;
                                }
                            ?>
                            
                            <?php  ?>
                        </tr>
                        <?php endforeach?>
                    </table>
                    <?php 
                        
                        require_once '../paging.php'; 
                    ?>
        </div>
    </div>
</body>
</html>