
<?php
        if(isset($_GET['success'])){
?>
        echo "<script type='text/javascript'>alert(' <?php echo $_GET['success'] ?>');</script>";
<?php } ?>

<!-- Begin: Header -->
    <div class="header">
        <div class="grid wide">
            <div class="header-container">
                <label for="header-mobile-menu" class="header__mobile-menu">
                    <i class="header__mobile-menu-icon fa-solid fa-bars"></i>
                </label>
                <input type="checkbox" hidden id="header-mobile-menu" class="header__menu-checkbox">
                <label for="header-mobile-menu" class="header-menu-overlay"></label>
                <label for="header-mobile-search" class="header__mobile-search">
                    <i class="header__mobile-search-icon fa-solid fa-magnifying-glass"></i>
                </label>
                <input type="checkbox" hidden id="header-mobile-search" class="header__search-checkbox">
                <label for="header-mobile-search" class="header-search-overlay"></label>

                <div class="header-logo ">
                    <a href="index.php"><img src="./assets/img/Wstore.png" alt="" class="header-logo__img"></a>
                </div>

                <ul class="header__menu-list">
                    <div class="user__moblie-info">
                        <img src="./assets/img/Wstore.png" alt="" class="navbar__user-img">
                        <span class="navbar__user-name">Tượng Văn Trưng</span>
                    </div>
                    
                    <li class="header__menu-item">
                        <a href="user_info.php">Tài khoản của tôi</a>
                    </li>
                    <li class="header__menu-item">
                        <a href="order_info.php">Đơn hàng</a>
                    </li>
                    <li class="header__menu-item">
                        <a href="password_control.php">Đổi mật khẩu</a>
                    </li>
                    <li class="header__menu-item">
                        <a href="process_signing.php">Đăng xuất</a>
                    </li>
                </ul>

                <div class="header-search hide-on-mobile">
                    <div class="search-box">
                       <div class="search-box__btn">
                            <i class="search-box__icon fa-solid fa-magnifying-glass"></i>
                       </div>
                       <form action="catalogsearch.php" style="Width: 100%">
                            <input type="search" placeholder="Bạn cần tìm gì?" name="search" class="search-box__input" value="<?php if(isset($_GET['search']))
                            echo $_GET['search'] ; ?>">
                       </form>
                    </div>
                </div>
    
                <div class="header-about hide-on-mobile-tablet">
                    <a href="#" class="about-item about-1" onclick="showSuccessToast()">
                        <div class="about-item__icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="about-item__content">
                            <p class="">Gọi mua hàng<br /><span>1800.0000</span></p>
                        </div>
                    </a>
                    <a href="#map" class="about-item about-2">
                        <div class="about-item__icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="about-item__content">
                            <p class="">Cửa hàng <br />gần bạn</p>
                        </div>
                    </a>
                    <a href="order_info.php" class="about-item about-3">
                        <div class="about-item__icon">
                            <i class="fa-solid fa-truck"></i>
                        </div>
                        <div class="about-item__content">
                            <p class="">Tra cứu<br />đơn hàng</p>
                        </div>
                    </a>
                    <a href="cart.php" class="about-item about-4">
                        <div class="about-item__icon">
                            <i class="fa-solid fa-bag-shopping"></i>
                            <span>
                                <?php
                                    // if(isset($_SESSION['cart'])){ 
                                    //     $cart=$_SESSION['name'];
                                    //     $a=0;
									// 	if(isset($_GET['id'])){$id=$_GET['id'];
                                    //     foreach($cart as $id => $each){
                                    //         $a++;
                                    //     }}
                                    //     echo $a;
                                    // }
                                 ?>
                            </span>
                        </div>
                        <div class="about-item__content">
                            <p class="">Giỏ<br />hàng</p>
                        </div>
                    </a>
                    
                    <a href="login_register.php" class="about-item about-5" id="loginForm" style="<?php if(isset($_SESSION['name'])){echo'display: none;';}?>">
                        <div class="about-item__icon">
                            <i class="fa-solid fa-user"></i>
                        </div>
                    </a>

                    <div class="about-item about-5" style="<?php if(!isset($_SESSION['name'])){echo'display: none;';}?>">
                        <div class="user-avatar"></div>
                        <span><?php echo $_SESSION['name']; ?></span>
                        <ul class="navbar__user-menu">
                            <li class="navbar__user-item">
                                <a href="user_info.php">Tài khoản của tôi</a>
                            </li>
                            <li class="navbar__user-item">
                                <a href="order_info.php">Đơn mua</a>
                            </li>
                            <li class="navbar__user-item navbar__user-item--separate">
                                <a href="process_sign_out.php">Đăng xuất</a>
                            </li>
                        </ul>
                    </div>
                    
                    
                    
                    <!-- <a href="process_sign_out.php" class="about-item about-5" id="loginForm">
                        <div class="about-item__icon">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        </div>
                        <div class="about-item__content"></div>
                    </a> -->
                </div>
    
                <div class="header-cart">
                    <a class="box-cart" href="">
                    <div class="cart-box-icon">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <p>Giỏ hàng</p>
                    <span class="items-in-cart"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="./Javascript/notify.js"></script>
<!-- End: Header  -->