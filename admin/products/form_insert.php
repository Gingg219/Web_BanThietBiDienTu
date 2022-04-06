<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add products</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <?php include'../menu.php'?>
    <div id="right">
    <div class="title">
                    <div class="title1">ADD PRODUCTS</div>
    </div>
    <div class="add_products">
        <form method="POST" >
            <table class="add">
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
                        <button type="submit">ADD</button>
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