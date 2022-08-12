<?php 
require '../check_admin_login.php'; 
?>
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
                    $all_product=(new data)->count_users($search);
                    $all_page=ceil($all_product/4);
                    $skip_page=4*($page-1);
                    $result=(new data)->se_users($search,$skip_page);
                ?>
                    <div class="add_new">
                        <a href="form_insert.php">ADD NEW</a>
                        <span>Total:</span>
                    </div>
                    <table class="tb_views" style="width: 100%;">
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>PHONE</th>
                            <th>GENDER</th>
                            <th>DATE</th>
                            <th>ADDRESS</th>
                            <th>EMAIL</th>
                            <th>PASSWORD</th>
                            <th>level</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <?php foreach($result as $each):?>
                        <tr>
                            <td><?php echo $each['id']?></td>
                            <td><?php echo $each['name']?></td>
                            <td><?php echo $each['phone_number']?></td>
                            <td><?php echo $each['gender']?></td>
                            <td><?php echo $each['date']?></td>
                            <td><?php echo $each['address']?></td>
                            <td><?php echo $each['email']?></td>
                            <td><?php echo $each['password']?></td>
                            <td>
                                <?php 
                                    switch($each['level']){
                                    case 0:
                                        echo "Administrator";
                                        break;
                                    case 2:
                                        echo "Super_Administrator";
                                        break;
                                    }
                                ?>
                            </td>
                            <td><a href="form_update.php?up=<?php echo $each['id'];?>">Update</a></td>
                            <td><a href="process_del.php?del=<?php echo $each['id'];?>">Delete</a></td>
                        </tr>
                        <?php endforeach?>
                    </table>
                    <?php require_once '../paging.php'; ?>
        </div>
    </div>
</body>
</html>