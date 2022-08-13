
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
    <link rel="stylesheet" href="./assets/css/user_order_info.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.1.1-web/css/all.css">
</head>
<body>
    <?php
        include('header.php')
    ?>

    <!-- Block-breadcrums  -->
    <div class="block-breadcrumbs">
        <div class="grid wide">
            <ul class="list-unstyled">
                <li>
                    <a href="index.php">
                        <i class="breadcrumbs__home-icon fa-solid fa-house"></i>
                        Trang chủ
                    </a>
                    <i class="fa-solid fa-angle-right"></i>
                </li>
                <li>
                    Điện thoại
                </li>
            </ul>
        </div>
    </div>

    <!-- Container -->
    <div class="container container-user-info">
        <div class="grid wide">
            <div class="row container-wrap">
                <div class="col">
                    <?php
                        include('info_control.php')
                    ?>
                </div>
                <div class="info-shown">
                    <div class="info-order-shown">
                        <!-- <div class="shown-order__state">
                            <a class="order-state__link order-state__link--active" href="">
                                <span>Tất cả</span>
                            </a>
                            <a class="order-state__link" href="">
                                <span>Chờ xác nhận</span>
                            </a>
                            <a class="order-state__link" href="">
                                <span>Chờ lấy hàng</span>
                            </a>
                            <a class="order-state__link" href="">
                                <span>Đang giao</span>
                            </a>
                            <a class="order-state__link" href="">
                                <span>Đã giao</span>
                            </a>
                            <a class="order-state__link" href="">
                                <span>Đã Hủy</span>
                            </a>
                        </div> -->
                        <div class="shown-order__search">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <input type="text" placeholder="Tìm kiếm theo Tên Shop, ID đơn hàng hoặc Tên Sản phẩm">
                        </div>

                        <div class="shown-order__information">
                            <div class="shown-order__information-wrap">

                                <!-- Nothing in orders -->
                                <!-- <div class="nothing-in-orders">
                                    <div class="shown-order__information-image"></div>
                                    <div class="shown-order__information-text">Chưa có đơn hàng</div>
                                </div> -->

                                <!-- Have orders -->
                                <div class="have-order-in-orders">
                                    <div class="order-state-wrap">
                                        <span>
                                            Trạng thái đơn hàng: 
                                        </span>
                                        <span class="order-state">
                                            Đã giao
                                        </span>
                                    </div>
                                    <div class="order-information-container">
                                        <div class="order-details">
                                            <div class="order-information">
                                                <div class="order-information-wrap">
                                                    <div class="order-information__img"></div>
                                                    <div class="order-information-wrap__wrap">
                                                        <h4 class="order-information__name">Xiaomi 11T</h4>
                                                        <span>Phân loại hàng: 256 GB</span>
                                                        <div class="order-information__amount">
                                                            <i class="fa-solid fa-xmark"></i>
                                                            <span>1</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="order-price">
                                                <span class="price-old">1.900.000 ₫</span>
                                                <span class="price-current">1.880.000 ₫</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-information-container">
                                        <div class="order-details">
                                            <div class="order-information">
                                                <div class="order-information-wrap">
                                                    <div class="order-information__img"></div>
                                                    <div class="order-information-wrap__wrap">
                                                        <h4 class="order-information__name">Xiaomi 11T</h4>
                                                        <span>Phân loại hàng: 256 GB</span>
                                                        <div class="order-information__amount">
                                                            <i class="fa-solid fa-xmark"></i>
                                                            <span>1</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="order-price">
                                                <span class="price-old">90.000 ₫</span>
                                                <span class="price-current">80.000 ₫</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-information-container">
                                        <div class="order-details">
                                            <div class="order-information">
                                                <div class="order-information-wrap">
                                                    <div class="order-information__img"></div>
                                                    <div class="order-information-wrap__wrap">
                                                        <h4 class="order-information__name">Xiaomi 11T</h4>
                                                        <span>Phân loại hàng: 256 GB</span>
                                                        <div class="order-information__amount">
                                                            <i class="fa-solid fa-xmark"></i>
                                                            <span>1</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="order-price">
                                                <span class="price-old">90.000 ₫</span>
                                                <span class="price-current">80.000 ₫</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-footer">
                                        <div class="order-footer-wrap">
                                            <div class="total-payment">
                                                <div>
                                                    <img src="././assets/img/Wstore.png">Tổng số tiền:
                                                </div>
                                                <span>200.000 ₫</span></div>
                                            <p>Tên khách hàng: <span>TuongVanTrung</span></p>
                                            <p>Số điện thoại: <span>023912321</span></p>
                                            <p>Địa chỉ: <span>Hà nội</span></p>
                                        </div>
                                    </div>
                                    <div class="re-order">
                                        <div class="btn btn--primary">
                                            Mua lại
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php
        include('footer.php')
    ?>
</body>
</html>




