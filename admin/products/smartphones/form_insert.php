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
                    $result=(new data)->se_manuf_smartphones();
                    $colors=(new data)->se_colors();
                ?>
                <div class="form">
                    <form method="POST" action="process_insert.php" >
                        <table>
                            <tr>
                                <td>Manufacturers</td>
                                <td>
                                    <select name="id_manufacturers">
                                         <?php foreach($result as $each) : ?>
                                        <option value="<?php echo $each['id'] ?>">
                                            <?php echo $each['name'] ?>
                                        </option>
                                        <?php endforeach?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>
                                    <input type="text" name="name" >
                                </td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>
                                    <textarea name="des"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>Color</td>
                                <td>
                                <select name="id_color">
                                         <?php foreach($colors as $color) : ?>
                                        <option value="<?php echo $color['id'] ?>">
                                            <?php echo $color['name'] ?>
                                        </option>
                                        <?php endforeach?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td>
                                    <input type="number" name="price">
                                </td>
                            </tr>
                            <tr>
                                <td>Price_sale</td>
                                <td>
                                    <input type="number" name="price_sale">
                                </td>
                            </tr>
                            <tr>
                                <td>Image</td>
                                <td>
                                    <input type="text" name="image">
                                </td>
                            </tr>
                            <tr>
                                <td>Quantity</td>
                                <td>
                                    <input type="number" name="quantity">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="submit">ADD</button>
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