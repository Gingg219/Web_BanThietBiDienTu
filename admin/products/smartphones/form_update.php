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
    require_once ($root."/admin/menu.php"); ?>
            <div class="info">
            <?php
                    require_once ($root."/admin/control.php");
                    $id=$_GET['up']; 
                    $result=(new data())->find_products($id);
                    $each=mysqli_fetch_array($result);
                    $manufacturers=(new data)->se_manuf_smartphones();
                    $colors=(new data)->se_colors();
                ?>
                <div class="form">
                    <form method="POST" action="process_update.php" >
                        <table>
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <tr>
                                <td>Manufacturers</td>
                                <td>
                                    <select name="id_manufacturers">
                                         <?php foreach($manufacturers as $manuf) : ?>
                                        <option value="<?php echo $manuf['id'] ?>" 
                                        <?php if($each['id_manufacturers']==$manuf['id'])
                                            echo "selected"
                                        ?>
                                        >
                                        <?php echo $manuf['name'] ?>
                                        </option>
                                        <?php endforeach?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>
                                    <input type="text" name="name"  value="<?php echo $each['name'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>
                                    <textarea name="des"><?php echo $each['description'] ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>Color</td>
                                <td>
                                <select name="id_color">
                                         <?php foreach($colors as $color) : ?>
                                        <option value="<?php echo $color['id'] ?>"
                                        <?php if($each['id_color']==$color['id'])
                                            echo "selected"
                                        ?>
                                        >
                                            <?php echo $color['name'] ?>
                                        </option>
                                        <?php endforeach?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td>
                                    <input type="number" name="price" value="<?php echo $each['price'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Price_sale</td>
                                <td>
                                    <input type="number" name="price_sale" value="<?php echo $each['price_sale'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Image</td>
                                <td>
                                    <input type="text" name="image" value="<?php echo $each['image'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Quantity</td>
                                <td>
                                    <input type="number" name="quantity" value="<?php echo $each['quantity'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="submit">UPDATE</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
    </div>
</body>
</html>
<div class="add_products">
    
</div>