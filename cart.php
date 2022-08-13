<?php
    require 'check_login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhonesShop</title>
    <link rel="icon" href="./assets/img/Wstore.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/cart.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="./assets/css/validation.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.1.1-web/css/all.css">
</head>
<body>
    <!-- Begin: Header -->
    <?php require_once 'header.php'; ?>
<!-- End: Header  -->
    
    <div class="app-container">
        <!-- Header-cart  -->
        <div class="cart-header">
            <div class="go-back">
                <i class="cart-header__icon fa-solid fa-angle-left"></i>
                <a href="index.php" class="cart-header__link">
                    <p>Trở về</p>
                </a>
            </div> 
            <p class="cart-title">Giỏ Hàng</p>
        </div>

        <!-- Notthing-in-cart  -->
        <?php
            if(empty($_SESSION['cart'])){
                echo '<div class="cart-container">
                <div class="nothing-in-cart">
                    <i class="nothing-in-cart__icon fa-solid fa-face-frown"></i>
                    <p>Không có sản phẩm nào trong giỏ hàng, vui lòng quay lại</p>
                    <a href="index.php" class="btn btn--primary" href="">Quay lại trang chủ</a>
                </div>
            </div>';
            exit;
            }
        require_once 'admin/control.php';
        $cart = $_SESSION['cart'];
        $sum = 0;
        ?>
        <?php foreach ($cart as $id => $each): ?>

        <!-- Cart container  -->
        <div class="cart-container">
            <div class="cart-product-item">
                <div class="cart-product-item__info">
                    <div class="cart-product-item__image">
                        <img src="<?php echo $each['image'] ?>" alt="">
                    </div>
                    <div class="product-item__info-detail">
                        <div class="product-name mb-2"><?php echo $each['name'] ?></div>
                        <div class="product-item__price mb-2">
                            <div class="price-old"><?php echo number_format($each['price']) ?> ₫</div>
                            <div class="price-current"><?php echo number_format($each['price_sale']) ?> ₫</div>
                            <!-- <span class="onsale">Giảm 35%</span> -->
                        </div>
                        <div class="item-action mb-2">
                            <div class="change-quantity">
                                <p>Chọn số lượng:</p>
                            </div>
                            <div class="number">
                                <a href="update_quantity_cart.php?id=<?php echo $id ?>&action=inc" type="button" style="text-decoration: none;" class="minus">-</a>
                                <input type="text" readonly="readonly" value="<?php echo $each['quantity'] ?>">
                                <a href="update_quantity_cart.php?id=<?php echo $id ?>&action=dec" type="button" style="text-decoration: none;" class="plus">+</a>
                               <?php $result = $each['price_sale'] * $each['quantity'];
                                $sum += $result;?>
                            </div>
                        </div>
                        <div class="promotion-pack mt-2">
                            <div class="promotion-pack-detail mb-2">
                                <div class="pack-detail">
                                    <p>- Chương trình khuyến mại:</p>
                                    <ul class="list-promotion-pack">
                                        <div>
                                            <li>
                                                <p>Thu cũ lên đời - Trợ giá 1 triệu</p>
                                            </li>
                                            <li>
                                                <p>Nhập mã CPS0NL500 - Giảm thêm 500k khi thanh toán qua VNPay trên website hoặc CPS500 qua QR Offline tại cửa hàng</p>
                                            </li>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="delete-cart"><a href="delete_product_from_cart.php?id=<?php echo $id ?>"><i class="delete-cart__icon fa-solid fa-xmark"></i></a></div>
            </div>  
        </div>
        <?php endforeach ?>

        <div class="main-form client-info-notlog">
            <div class="form-container client-info-notlog__container">
                <div class="form-header">
                    <strong style="font-size: 1.6rem; padding: 1rem 0">Thông tin khách hàng</strong>
                </div>

                <?php
                if(isset($_SESSION['id'])){
                    $id = $_SESSION['id'];
                    $result =(new data)->find_cus($id);
                    $each_cus = mysqli_fetch_array($result);}
                    ?>
                <div class="form-info-client">
        <form action="process_checkout.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="name" placeholder=" " class="form-input" value="<?php  echo $each_cus['name'];  ?>">
                            <label for="email" class="form-label">Name...</label>
                        </div>
                        <div class="form-group">
                            <input type="number" name="phone" placeholder=" " class="form-input" value="<?php  echo $each_cus['phone_number'];  ?>">
                            <label for="phone" class="form-label">Phone number...</label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="address" placeholder=" " class="form-input" value="<?php  echo $each_cus['address']; ?>">
                            <label for="address" class="form-label">Address...</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cart-bottom-bar">
                <div class="total-box">
                    <p class="title-temp">Tổng tiền tạm tính:</p>
                    <div class="price">
                        <p class="total"><?php echo number_format($sum) ?> ₫</p>
                    </div>
                </div>
                <div class="btn-submit mt-2">
                    <button type="submit" class="btn btn--primary btn--order">Tiến hành đặt hàng</button>
                    <a href="index.php" class="choose-more-products text-decoration-none mt-2">Chọn thêm sản phẩm khác</a>
                </div>
            </div>
            </div>
        </form>
</body>
</html>