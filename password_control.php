
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
    <link rel="stylesheet" href="./assets/css/password_control.css">
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
                    <div class="password-control">
                        <div class="password-control__title">
                            <h2>Đổi mật khẩu</h2>
                            <p>Để bảo mật tài khoản, vui lòng không chia sẻ mật khẩu cho người khác</p>
                        </div>
                        <div class="password-control__change">
                            <form action="process_pass.php" method="POST">
                                <div class="info-shown__item">
                                    <div class="info-shown__item--left">Mật Khẩu Hiện Tại</div>
                                    <div class="info-shown__item--right">
                                        <input type="password" name="password" value="">
                                    </div>
                                </div>
                                <div class="info-shown__item">
                                    <div class="info-shown__item--left">Mật Khẩu Mới</div>
                                    <div class="info-shown__item--right">
                                        <input type="password" name="new_password" value="">
                                    </div>
                                </div>
                                <div class="info-shown__item">
                                    <div class="info-shown__item--left">Xác Nhận Mật Khẩu</div>
                                    <div class="info-shown__item--right">
                                        <input type="password" name="confirm_password" value="">
                                    </div>
                                </div>
                                <div class="info-shown__item">
                                    <button type="submit" class=" info-save-fixed-btn btn btn--primary">Xác nhận</button>
                                </div>
                            </form>
                            <div class="forgot-password ">
                                <a href="" class="text-decoration-none text-reset">Quên mật khẩu?</a>
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




