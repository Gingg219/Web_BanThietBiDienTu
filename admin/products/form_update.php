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
                <div class="form">
                    <form method="POST" >
                        <table>
                            <tr>
                                <td>Producer</td>
                                <td>
                                    <select name="producer_id">
                                       
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
                                    <select name="color">
                                        <option>Black</option>
                                        <option>White</option>
                                        <option>Brown</option>
                                        <option>Pink</option>
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
                                <td>Image</td>
                                <td>
                                    <input type="text" name="image">
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