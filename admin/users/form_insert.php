<?php 
require '../check_super_admin_login.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="icon" href="/assets/img/Wstore.png" type="image/x-icon" />
    <script src="https://kit.fontawesome.com/8c12853810.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<?php require_once '../menu.php'; ?>
            <div class="info">
                <div class="form">
                    <form method="POST" action="process_insert.php" >
                        <table>
                            <tr>
                                <td>Name</td>
                                <td>
                                    <input type="text" name="name" >
                                </td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>
                                    <input type="number" name="phone" >
                                </td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>
                                <select name="gender">
                                        <option>male</option>
                                        <option>female</option>
                                        <option>other</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Date</td>
                                <td>
                                    <input type="date" name="date">
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>
                                    <input type="text" name="email">
                                </td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>
                                    <input type="text" name="password">
                                </td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>
                                    <input type="text" name="address" >
                                </td>
                            </tr>
                            <tr>
                                <td>Level</td>
                                <td>
                                <select name="level">
                                        <option value="0">Administrator</option>
                                    </select>
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