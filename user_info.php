
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
                <?php
                    require 'admin/control.php';
                    $id=$_SESSION['id'];
                    $result=(new data)->find_cus($id);
                    $each=mysqli_fetch_array($result);
                ?>
                <div class="info-shown">
                    <div class="info-user-shown">
                        <div class="info-shown__header">
                            <h2>Hồ sơ của tôi</h2>
                            <div>Quản lý thông tin hồ sơ để bảo mật tài khoản</div>
                        </div>
                        <div class="info-shown__body">
                            <div class="info-shown__information">
                                <form action="process_update_cus.php" method="POST">
                                    <div class="info-shown__item">
                                        <div class="info-shown__item--left">Tên</div>
                                        <div class="info-shown__item--right">
                                            <input type="text" name="name" value="<?php echo $each['name']; ?>">
                                        </div>
                                    </div>
                                    <div class="info-shown__item">
                                        <div class="info-shown__item--left">Email</div>
                                        <div class="info-shown__item--right">
                                            <input type="email" name="email" value="<?php echo $each['email']; ?>">
                                        </div>
                                    </div>
                                    <div class="info-shown__item">
                                        <div class="info-shown__item--left">Số điện thoại</div>
                                        <div class="info-shown__item--right">
                                            <input type="text" name="phone_number" value="<?php echo '0'.$each['phone_number']; ?>">
                                        </div>
                                    </div>
                                    <div class="info-shown__item">
                                        <div class="info-shown__item--left">Địa chỉ</div>
                                        <div class="info-shown__item--right">
                                            <input type="text" name="address" value="<?php echo $each['address']; ?>">
                                        </div>
                                    </div>
                                    <div class="info-shown__item">
                                        <div class="info-shown__item--left">
                                            <label for="">Giới tính</label>
                                        </div>
                                        <div class="info-shown__item--right-gender">
                                            <input type="radio" name="gender" value="male" <?php if ($each['gender']=='male') echo 'checked'; ?>>Nam
                                            <input type="radio" name="gender" value="female"<?php if ($each['gender']=='female') echo 'checked'; ?>>Nữ
                                            <input type="radio" name="gender" value="other"<?php if ($each['gender']=='other') echo 'checked'; ?>>Khác
                                        </div>  
                                    </div>
                                    <div class="info-shown__item">
                                        <div class="info-shown__item--left">Ngày sinh</div>
                                        <div class="info-shown__item--right"><input type="date" name="date" value="<?php echo $each['date']; ?>"></div>
                                    </div>
                                    <div class="info-shown__item">
                                        <button type="submit" class=" info-save-fixed-btn btn btn--primary">Lưu</button>
                                    </div>
                                </form>
                            </div>
                            <div class="info-shown__avatar">
                                <div class="avatar-user"></div>
                                <input type="file">
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




