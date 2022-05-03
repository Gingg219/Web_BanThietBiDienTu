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
            <?php
                    if(isset($_GET['success'])){
            ?>
                 echo "<script type='text/javascript'>alert(' <?php echo $_GET['success'] ?>');</script>";
            <?php } ?>
    <?php require_once '../menu.php'; ?>
    
    <div class="info">
        <?php
            require_once '../control.php';
            $result=(new data)->se_manuf();
        ?>
                    <div class="add_new">
                        <a href="form_insert.php">ADD NEW</a>
                        <span>Total:</span>
                    </div>
                    <table class="tb_views">
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>Category</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <?php foreach ($result as $each): ?>
                        <tr>
                            <td><?php echo $each['id']?></td>
                            <td><?php echo $each['name']?></td>
                            <td>
                                <?php
                                    switch($each['id_category']){
                                        case 1:
                                            echo "Smartphone";
                                            break;
                                        case 2:
                                            echo "Tablet";
                                            break;
                                        case 3:
                                            echo "Laptop";
                                            break;
                                    }
                                 ?>
                            </td>
                            <td><a href="form_update.php?up=<?php echo $each['id'];?>">Update</a></td>
                            <td><a href="process_del.php?del=<?php echo $each['id'];?>">Delete</a></td>
                        </tr>
                        <?php endforeach ?>
                    </table>
        </div>
    </div>
</body>
</html>