<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Bills</title>
    <script src="https://kit.fontawesome.com/8c12853810.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <?php require_once '../menu.php'; ?>
    <div class="info">
                    <div class="add_new">
                        <a href="form_insert.php">ADD NEW</a>
                        <span>Total:</span>
                    </div>
                    <table class="tb_views" style="width: 100%;">
                        <tr>
                            <th>ID</th>
                            <th>Customers</th>
                            <th>Phone_customer</th>
                            <th>Delivery address</th>
                            <th>Oder_ date</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        <?php
                            require_once '../control.php';
                            $result=(new data)->se_orders();
                            foreach($result as $each):
                        ?>
                        <tr>
                            <td><?php echo $each['id'] ?></td>
                            <td><?php echo $each['receiver_name'] ?></td>
                            <td><?php echo $each['receiver_phone'] ?></td>
                            <td><?php echo $each['receiver_address'] ?></td>
                            <td><?php echo $each['order_date'] ?></td>
                            <td><a href="#">View</a></td>
                            <td><a href="form_update.php">Confirm</a></td>
                            <td><a href="process_del.php?del=">Delete</a></td>
                        </tr>
                        <?php endforeach?>
                    </table>
        </div>
    </div>
</body>
</html>