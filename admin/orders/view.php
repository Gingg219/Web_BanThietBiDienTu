<?php 
require '../check_admin_login.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bills</title>
    <script src="https://kit.fontawesome.com/8c12853810.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <?php require_once '../menu.php'; ?>
    <div class="info">
                    <div class="add_new">
                        <span>Total:</span>
                    </div>
                    <table class="" style="width: 100%;">
                        <tr>
                            <th>Picture</th>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                        <?php
                            require_once '../control.php';

                            $sum=0;
                            $id_order = $_GET['id'];
                            $result=(new data)->detail_orders($id_order);
                            foreach($result as $each):
                        ?>
                        <tr>
                            <td><img src="<?php echo $each['image'] ?>" alt=""></td>
                            <td><?php echo $each['name'] ?></td>
                            <td><?php echo number_format($each['price_sale']) ?> đ</td>
                            <td><?php echo $each['quantity'] ?></td>
                            <td>
                                <?php 
                                    $result = $each['price_sale'] * $each['quantity'];
                                    echo $result;
                                    $sum += $result;   
                                ?>
                            </td>
                        </tr>
                        <?php endforeach?>
                    </table>
                    
                   <h1 id="total"> Total current: <?php echo number_format($sum).' đ' ?></h1>
                            <?php
                                $result=(new data)->find_orders($id_order);
                                $each=mysqli_fetch_array($result);
                                if($each['status']==='0'){
                                    echo <<<EOF
                                            <div class="frame">
                                                <a href="process_confirm.php?id=$id_order"><button class="custom-btn btn-15">Confirm</button></a>
                                                <a href="process_cancel.php?id=$id_order"><button class="custom-btn btn-15">Cancel</button></a>
                                            </div>
                                         EOF;
                                }
                            ?>
                
        </div>
    </div>
</body>
</html>