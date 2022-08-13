<div class="info-control">
    <div class="control-header">
        <div class="header-avt">
            <img class="user-avt" src="./assets/img/noAvatar.jpg" alt="">
        </div>
        <div class="header-info">
            <div class="info-name"><?php echo $_SESSION['name']; ?></div>
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
            <a class="control-body__item control-body__item--active" href="user_info.php">
                <div class="control-body__item--icon"><i class="fa-solid fa-user"></i></div>
                <div><span>Tài khoản của tôi</span></div>
            </a>
        </div>
        <div>
            <a class="control-body__item" href="order_info.php">
                <div class="control-body__item--icon"><i class="fa-solid fa-receipt"></i></div>
                <div>Đơn hàng</div>
            </a>
        </div>
        <div>
            <a class="control-body__item" href="password_control.php">
                <div class="control-body__item--icon"><i class="fa-solid fa-question"></i></div>
                <div>Đổi mật khẩu</div>
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