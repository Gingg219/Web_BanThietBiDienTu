<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List products</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body> 
<?php include'../menu.php'?>
            <div id="right">
                <div class="title">
                    <div class="title1">LIST OF PRODUCTS</div>
                    <div class="title2">
                        <div>
                            <a href="form_insert.php"><button>Add products</button></a>
                        </div>
                    </div>
                </div>
                <div class="list_product">
                    <table class="products">
                        <tr>
                            <th>ID</th>
                            <th>PICTURE</th>
                            <th>NAME</th>
                            <th>DESCRIPTION</th>
                            <th>COLOR</th>
                            <th>PRICE</th>
                            <th>UPDATE</th>
                            <th>DELETE</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><img src="https://image.cellphones.com.vn/358x/media/catalog/product/i/p/iphone_13-_pro-5_4_1.jpg"></td>
                            <td>iPhone 13 Pro Max 256GB</td>
                            <td>Hiệu năng vượt trội - Chip Apple A15 Bionic mạnh mẽ, hỗ trợ mạng 5G tốc độ cao
Không gian hiển thị sống động - Màn hình 6.7" Super Retina XDR độ sáng cao, sắc nét
Trải nghiệm điện ảnh đỉnh cao - Cụm 3 camera 12MP, hỗ trợ ổn định hình ảnh quang học
Tối ưu điện năng - Sạc nhanh 20 W, đầy 50% pin trong khoảng 30 phút</td>
                            <td>Xanh</td>
                            <td>100000</td>
                            <td><a href="form_update.php?up=<?php echo $se['ID'];?>">Update</a></td>
                            <td><a href="process_del.php?del=<?php echo $se['ID'];?>">Delete</a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><img src="https://image.cellphones.com.vn/358x/media/catalog/product/i/p/iphone_13-_pro-5_4_1.jpg"></td>
                            <td>iPhone 13 Pro Max 256GB</td>
                            <td>Hiệu năng vượt trội - Chip Apple A15 Bionic mạnh mẽ, hỗ trợ mạng 5G tốc độ cao
Không gian hiển thị sống động - Màn hình 6.7" Super Retina XDR độ sáng cao, sắc nét
Trải nghiệm điện ảnh đỉnh cao - Cụm 3 camera 12MP, hỗ trợ ổn định hình ảnh quang học
Tối ưu điện năng - Sạc nhanh 20 W, đầy 50% pin trong khoảng 30 phút</td>
                            <td>Xanh</td>
                            <td>100000</td>
                            <td><a href="form_update.php?up=<?php echo $se['ID'];?>">Update</a></td>
                            <td><a href="process_del.php?del=<?php echo $se['ID'];?>">Delete</a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><img src="https://image.cellphones.com.vn/358x/media/catalog/product/i/p/iphone_13-_pro-5_4_1.jpg"></td>
                            <td>iPhone 13 Pro Max 256GB</td>
                            <td>Hiệu năng vượt trội - Chip Apple A15 Bionic mạnh mẽ, hỗ trợ mạng 5G tốc độ cao
Không gian hiển thị sống động - Màn hình 6.7" Super Retina XDR độ sáng cao, sắc nét
Trải nghiệm điện ảnh đỉnh cao - Cụm 3 camera 12MP, hỗ trợ ổn định hình ảnh quang học
Tối ưu điện năng - Sạc nhanh 20 W, đầy 50% pin trong khoảng 30 phút</td>
                            <td>Xanh</td>
                            <td>100000</td>
                            <td><a href="form_update.php?up=<?php echo $se['ID'];?>">Update</a></td>
                            <td><a href="process_del.php?del=<?php echo $se['ID'];?>">Delete</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>