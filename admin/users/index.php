<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Products</title>
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
                            <th>NAME</th>
                            <th>PHONE</th>
                            <th>GENDER</th>
                            <th>DATE</th>
                            <th>EMAIL</th>
                            <th>PASSWORD</th>
                            <th>ADDRESS</th>
                            <th>Level</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Tuan Ngo Van</td>
                            <td>0366484758</td>
                            <td>male</td>
                            <td>25/01/2077</td>
                            <td>tuan2501012001@gamil.com</td>
                            <td>123</td>
                            <td>Bac Giang</td>
                            <td>Administrator</td>
                            <td><a href="form_update.php?up=<?php echo $se['ID'];?>">Update</a></td>
                            <td><a href="process_del.php?del=<?php echo $se['ID'];?>">Delete</a></td>
                        </tr>
                    </table>
        </div>
    </div>
</body>
</html>