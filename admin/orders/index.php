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
                    <table class="tb_views">
                        <tr>
                            <th>ID</th>
                            <th>Customers</th>
                            <th>Phone_customer</th>
                            <th>Delivery address</th>
                            <th>Oder_ date</th>
                            <th>NOTE</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Tuan NGo Van</td>
                            <td>0366484758</td>
                            <td>Bac GIang</td>
                            <td>25/01/2077</td>
                            <td>Note</td>
                            <td><a href="#">View</a></td>
                            <td><a href="form_update.php">Confirm</a></td>
                            <td><a href="process_del.php?del=<?php echo $se['ID'];?>">Delete</a></td>
                        </tr>
                    </table>
        </div>
    </div>
</body>
</html>