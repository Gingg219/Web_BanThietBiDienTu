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
                    <a href="index.php"><img src="./assets/img/logomain.png" alt="" class="header-logo__img"></a>
                </div>

                <ul class="header__menu-list">
                    <div class="user__moblie-info">
                        <img src="./assets/img/avatar.png" alt="" class="navbar__user-img">
                        <span class="navbar__user-name">Tượng Văn Trưng</span>
                    </div>
                    
                    <li class="header__menu-item">
                        <a href="">Tài khoản của tôi</a>
                    </li>
                    <li class="header__menu-item">
                        <a href="">Địa chỉ của tôi</a>
                    </li>
                    <li class="header__menu-item">
                        <a href="">Đơn mua</a>
                    </li>
                    <li class="header__menu-item">
                        <a href="">Đăng xuất</a>
                    </li>
                </ul>

                <div class="header-search hide-on-mobile">
                    <div class="search-box">
                       <div class="search-box__btn">
                            <i class="search-box__icon fa-solid fa-magnifying-glass"></i>
                       </div>
                       <form action="catalogsearch.php">
                            <input type="search" placeholder="Bạn cần tìm gì?" name="search" class="search-box__input" value="<?php if(isset($_GET['search']))
                            echo $_GET['search'] ; ?>">
                       </form>
                    </div>
                </div>
    
                <div class="header-about hide-on-mobile-tablet">
                    <a href="" class="about-item about-1">
                        <div class="about-item__icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="about-item__content">
                            <p class="">Gọi mua hàng<br /><span>1800.0000</span></p>
                        </div>
                    </a>
                    <a href="" class="about-item about-2">
                        <div class="about-item__icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="about-item__content">
                            <p class="">Cửa hàng <br />gần bạn</p>
                        </div>
                    </a>
                    <a href="" class="about-item about-3">
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
                            <span>1</span>
                        </div>
                        <div class="about-item__content">
                            <p class="">Giỏ<br />hàng</p>
                        </div>
                    </a>
                    <a href="" class="about-item about-5">
                        <div class="about-item__icon">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="about-item__content">Member</div>
                    </a>
                </div>
    
                <div class="header-cart">
                    <a class="box-cart" href="">
                    <div class="cart-box-icon">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <p>Giỏ hàng</p>
                    <span class="items-in-cart">1</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
<!-- End: Header  -->