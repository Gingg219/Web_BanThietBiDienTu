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
                    $id=$_GET['up'];
                    $result=(new data)->find_cus($id);
                    $each=mysqli_fetch_array($result);
                ?>
                <div class="form">
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
                                <td>Phone</td>
                                <td>
                                    <input type="number" name="phone" value="<?php echo $each['phone_number'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>
                                    <select name="gender">
                                        <option <?php if($each['gender']=='male') echo 'selected'; ?>>male</option>
                                        <option <?php if($each['gender']=='female') echo 'selected'; ?>>female</option>
                                        <option <?php if($each['gender']=='other') echo 'selected'; ?>>other</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Date</td>
                                <td>
                                    <input type="date" name="date" value="<?php echo $each['date'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>
                                    <input type="text" name="email" value="<?php echo $each['email'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>
                                    <input type="text" name="password" value="<?php echo $each['password'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>
                                    <input type="text" name="address" value="<?php echo $each['address'] ?>">
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