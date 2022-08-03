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
                    <div class="info-control">
                        <div class="control-header">
                            <div class="header-avt">
                                <img class="user-avt" src="./assets/img/noAvatar.jpg" alt="">
                            </div>
                            <div class="header-info">
                                <div class="info-name">TuongVanTrung</div>
                                <div class="info-fix">
                                    <a href="">
                                        <i class="fa-solid fa-pen"></i>    
                                        sửa hồ sơ
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="control-body">
                            <div>
                                <a class="control-body__item" href="#">
                                    <div class="control-body__item--icon"><i class="fa-solid fa-user"></i></div>
                                    <div><span>Tài khoản của tôi</span></div>
                                </a>
                            </div>
                            <div>
                                <a class="control-body__item control-body__item--active" href="">
                                    <div class="control-body__item--icon"><i class="fa-solid fa-receipt"></i></div>
                                    <div>Đơn hàng</div>
                                </a>
                            </div>
                            <div>
                                <a class="control-body__item" href="">
                                    <div class="control-body__item--icon"><i class="fa-solid fa-bell"></i></div>
                                    <div>Thông báo</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info-shown">
                    <div class="info-order-shown">
                        <div class="shown-order__state">
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
                        </div>
                        <div class="shown-order__search">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <input type="text" placeholder="Tìm kiếm theo Tên Shop, ID đơn hàng hoặc Tên Sản phẩm">
                        </div>
                        <div class="shown-order__information">
                            <div class="shown-order__information-wrap">
                                <div class="shown-order__information-image"></div>
                                <div class="shown-order__information-text">Chưa có đơn hàng</div>
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




