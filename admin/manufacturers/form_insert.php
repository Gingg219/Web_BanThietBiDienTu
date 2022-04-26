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
                <?php 
                    require_once '../control.php';
                    $result=(new data())->se_categories();
                ?>
                <div class="form">
                    <form method="POST" action="process_insert.php">
                        <table>
                            <tr>
                                <td>Name</td>
                                <td>
                                    <input type="text" name="name" >
                                </td>
                            </tr>
                            <tr>
                                <td>Category</td>
                                <td>
                                <select name="id_category">
                            <?php foreach($result as $se) : ?>
                                <option value="<?php echo $se['id'] ?>">
                                    <?php echo $se['name'] ?>
                                </option>
                            <?php endforeach ?>
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