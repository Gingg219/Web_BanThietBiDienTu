<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update products</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <?php include'../menu.php'?>
    <div id="right">
    <div class="title">
                    <div class="title1">UPDATE PRODUCTS</div>
    </div>
    <div class="add_products">
        <form method="POST" action="process_update.php">
            <table class="add">
            <input type="hidden" name="id" value="">
                <tr>
                    <td>Producer_id</td>
                    <td>
                        <input type="number" name="producer_id" value="">
                    </td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>
                        <input type="text" name="name" value="">
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
                            <option selected="selected"></option>
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
                        <input type="number" name="price" value="">
                    </td>
                </tr>
                    <tr>
                    <td>Image</td>
                    <td>
                        <input type="text" name="image" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="sub">UPDATE</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    </div>
    </div>
    </div>
</body>
</html>