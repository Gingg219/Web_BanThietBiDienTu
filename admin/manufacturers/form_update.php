<?php 
require '../check_super_admin_login.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/8c12853810.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<?php require_once '../menu.php'; ?>
            <div class="info">
                <?php require_once '../control.php';
                    $id=$_GET['up']; 
                    $result=(new data())->find_manuf($id);
                    $each=mysqli_fetch_array($result);
                    $categories=(new data())->se_categories();
                ?>
                <div class="form" >
                    <form method="POST" action="process_update.php">
                        <table>
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <tr>
                                <td>Name</td>
                                <td>
                                    <input type="text" name="name" value="<?php echo $each['name'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Category</td>
                                    <td>
                                    <select name="id_category">
                                <?php foreach($categories as $categories) : ?>
                                    <option value="<?php echo $categories['id'] ?>"
                                        <?php if($each['id_category']==$categories['id'])
                                            echo "selected"
                                        ?>
                                    >
                                        <?php echo $categories['name'] ?>
                                    </option>
                                <?php endforeach ?>
                                    </select>
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