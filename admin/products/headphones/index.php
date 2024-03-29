<?php     
    $root = $_SERVER['DOCUMENT_ROOT']; 
    require_once ($root."/admin/check_admin_login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="icon" href="/assets/img/Wstore.png" type="image/x-icon" />
    <script src="https://kit.fontawesome.com/8c12853810.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="/admin/style.css">
</head>
<body>
    <?php 
    $root = $_SERVER['DOCUMENT_ROOT'];
    require_once ($root."/admin/check_admin_login.php");
    require_once ($root."/admin/menu.php"); 
    ?>
    <div class="info">
                <?php
                    require_once ($root."/admin/control.php");
                    $search='';
                    
                    if(isset($_GET['search'])){
                        $search=$_GET['search'];
                    }
                    $page=1;
                    if(isset($_GET['page'])){
                        $page=$_GET['page'];
                    }
                    $all_product=(new data)->count_paging_headphone($search);
                    $all_page=ceil($all_product/4);
                    $skip_page=4*($page-1);
                    $result=(new data)->search_paging_headphone($search,$skip_page);
                ?>
                    <div class="add_new">
                        <a href="form_insert.php">ADD NEW</a>
                        <span>Total:</span>
                    </div>
                    <div>
                        <table class="tb_views">
                            <tr>
                                <th>ID</th>
                                <th>PICTURE</th>
                                <th>NAME</th>
                                <th>DESCRIPTION</th>
                                <th>COLOR</th>
                                <th>PRICE_sale</th>
                                <th></th>
                                <th></th>
                            </tr>
                            <?php 
                                foreach($result as $each):
                            ?>
                            <tr>
                                <td><?php echo $each['id']?></td>
                                <td><img src="<?php echo $each['image']?>" alt=""></td>
                                <td><?php echo $each['name']?></td>
                                <td><?php echo $each['description']?></td>
                                <td>
                                <?php
                                    switch($each['id_color']){
                                        case 1:
                                            echo "white";
                                            break;
                                        case 2:
                                            echo "black";
                                            break;
                                        case 3:
                                            echo "brown";
                                            break;
                                        case 4:
                                            echo "brown";
                                            break;
                                        case 5:
                                            echo "brown";
                                            break;
                                        case 6:
                                            echo "brown";
                                            break;
                                    }
                                 ?>                                </td>
                                <td><?php echo $each['price_sale']?></td>
                                <td><a href="form_update.php?up=<?php echo $each['id']?>">Update</a></td>
                                <td><a href="process_del.php?del=<?php echo $each['id']?>">Delete</a></td>
                            </tr>
                            <?php endforeach?>
                        </table>
                    </div>
                    <?php require_once ($root."/admin/paging.php"); ?>
        </div>
    </div>
</body>
</html>