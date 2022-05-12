<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhonesShop</title>
    <link rel="icon" href="./assets/img/logomain.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/reponsive.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.1.1-web/css/all.css">
</head>
<body>
    <?php
        include ('header.php');
    ?>

    <!-- Container -->
    <div class="app-container">
        <div class="grid wide">
            <div class="col">
                <div class="row block-sliding-home">
                    <!-- Begin: list-item -->
                        <?php
                            require_once 'admin/control.php';
                            $manuf_smartphones=(new data)->se_manuf_smartphones();
                            $manuf_laptops=(new data)->se_manuf_laptops();
                            $manuf_tablets=(new data)->se_manuf_tablets();
                        ?>
                        <!-- Begin: block-sliding-home__left -->
                            <div class="block-sliding-home__left hide-on-mobile-tablet">
                                <div class="box-list-item">
                                    <ul class="list-item">
                                        <li class="item-menu">
                                            <a class="item-menu__link" href="mobile.php">
                                                <i class="item-menu__icon fa-solid fa-mobile-screen"></i>
                                                <span>Điện thoại</span>
                                                <i class="item-menu__icon-sub fa-solid fa-angle-right"></i>
                                            </a>

                                            <div class="box-list-item box-child-list-item">
                                                <ul class="list-item">
                                                <?php foreach($manuf_smartphones as $each_smartphone): ?>
                                                    <li class="item-menu">
                                                        <a class="item-menu__link" href="mobile.php?catalog=<?php echo $each_smartphone['name'] ?>">
                                                            <span><?php echo $each_smartphone['name'] ?></span>
                                                            <?php if($each_smartphone['name']=='Apple'){
                                                                echo '<i class="item-menu__icon-sub fa-solid fa-angle-right"></i>';
                                                            }?>
                                                        </a>
                                                        <?php if($each_smartphone['name']=='Apple'){
                                                            echo '<div class="box-list-item box-child-list-item">
                                                            <ul class="list-item">
                                                                <li class="item-menu">
                                                                    <a class="item-menu__link" href="">
                                                                        <span>Iphone 13 Series</span>
                                                                    </a>
                                                                </li>
                                                                <li class="item-menu">
                                                                    <a class="item-menu__link" href="">
                                                                        <span>Iphone 12 Series</span>
                                                                    </a>
                                                                </li>
                                                                <li class="item-menu">
                                                                    <a class="item-menu__link" href="">
                                                                        <span>Iphone 11 Series</span>
                                                                    </a>
                                                                </li>
                                                                <li class="item-menu">
                                                                    <a class="item-menu__link" href="">
                                                                        <span>Iphone SE</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>';
                                                        } ?>
                                                    </li>
                                                    <?php endforeach?>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="item-menu">
                                            <a class="item-menu__link" href="laptop.php">
                                                <i class="item-menu__icon fa-solid fa-tablet-screen-button"></i>
                                                <span>Laptop</span>
                                                <i class="item-menu__icon-sub fa-solid fa-angle-right"></i>
                                            </a>
                                            <div class="box-list-item box-child-list-item">
                                                <ul class="list-item">
                                                <?php foreach($manuf_laptops as $each_laptop): ?>
                                                    <li class="item-menu">
                                                        <a class="item-menu__link" href="laptop.php?catalog=<?php echo $each_laptop['name'] ?>">
                                                            <span><?php echo $each_laptop['name'] ?></span>
                                                        </a>
                                                    </li>
                                                    <?php endforeach?>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="item-menu">
                                            <a class="item-menu__link" href="tablet.php">
                                                <i class="item-menu__icon fa-solid fa-tablet-screen-button"></i>
                                                <span>Table</span>
                                                <i class="item-menu__icon-sub fa-solid fa-angle-right"></i>
                                            </a>
                                            <div class="box-list-item box-child-list-item">
                                                <ul class="list-item">
                                                <?php foreach($manuf_tablets as $each_tablet): ?>
                                                    <li class="item-menu">
                                                        <a class="item-menu__link" href="tablet.php?catalog=<?php echo $each_tablet['name'] ?>">
                                                            <span><?php echo $each_tablet['name'] ?></span>
                                                        </a>
                                                    </li>
                                                    <?php endforeach?>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="item-menu">
                                            <a class="item-menu__link" href="">
                                                <i class="item-menu__icon fa-solid fa-headphones"></i>
                                                <span>Âm thanh</span>
                                                <i class="item-menu__icon-sub fa-solid fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li class="item-menu">
                                            <a class="item-menu__link" href="">
                                                <i class="item-menu__icon fa-solid fa-clock"></i>
                                                <span>Đồng hồ</span>
                                                <i class="item-menu__icon-sub fa-solid fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li class="item-menu">
                                            <a class="item-menu__link" href="">
                                                <i class="item-menu__icon fa-solid fa-house-signal"></i>
                                                <span>Nhà thông minh</span>
                                                <i class="item-menu__icon-sub fa-solid fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li class="item-menu">
                                            <a class="item-menu__link" href="">
                                                <i class="item-menu__icon fa-solid fa-diagram-project"></i>
                                                <span>Phụ kiện</span>
                                                <i class="item-menu__icon-sub fa-solid fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li class="item-menu">
                                            <a class="item-menu__link" href="">
                                                <i class="item-menu__icon fa-solid fa-comments-dollar"></i>
                                                <span>Thu cũ</span>
                                                <i class="item-menu__icon-sub fa-solid fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li class="item-menu">
                                            <a class="item-menu__link" href="">
                                                <i class="item-menu__icon fa-solid fa-right-left"></i>
                                                <span>Hàng cũ</span>
                                                <i class="item-menu__icon-sub fa-solid fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li class="item-menu">
                                            <a class="item-menu__link" href="">
                                                <i class="item-menu__icon fa-solid fa-tv"></i>
                                                <span>Tivi</span>
                                            </a>
                                        </li>
                                        <li class="item-menu">
                                            <a class="item-menu__link" href="">
                                                <i class="item-menu__icon fa-solid fa-newspaper"></i>
                                                <span>Tin công nghệ</span>
                                            </a>
                                        </li>
                                        <li class="item-menu">
                                            <a class="item-menu__link" href="">
                                                <i class="item-menu__icon fa-solid fa-bullhorn"></i>
                                                <span>Khuyến mại</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        <!-- End: block-sliding-home__left -->

                        <!-- Begin: block-sliding-home__center -->
                            <div class="block-sliding-home__center">
                                <div class="silding-home__wrap">
                                    <img class="myHomeSlides" src="https://cdn.cellphones.com.vn/media/ltsoft/promotion/UX363.png" alt="">
                                    <img class="myHomeSlides" src="https://cdn.cellphones.com.vn/media/ltsoft/promotion/Sea_game.png" alt="">
                                    <img class="myHomeSlides" src="https://cdn.cellphones.com.vn/media/ltsoft/promotion/Nokia_G21.png" alt="">
                                    <img class="myHomeSlides" src="https://cdn.cellphones.com.vn/media/ltsoft/promotion/M_b_n_PC.png" alt="">

                                    <button class="btn-slide btn-slide__left" onclick="plusDivs(-1)"><i class="fa-solid fa-angle-left"></i></i></button>
                                    <button class="btn-slide btn-slide__right" onclick="plusDivs(1)"><i class="fa-solid fa-angle-right"></i></button>
                                </div>
                            </div>
                        <!-- End: block-sliding-home__center -->

                        <!-- Begin: block-sliding-home__right -->
                            <div class="block-sliding-home__right hide-on-mobile-tablet">
                                <a class="banner-right__item" href="">
                                    <img src="https://cdn.cellphones.com.vn/media/ltsoft/promotion/Galaxy_A23.png" alt="">
                                </a>
                                <a class="banner-right__item" href="">
                                    <img src="https://cdn.cellphones.com.vn/media/ltsoft/promotion/Right_banner_AW.png" alt="">
                                </a>
                                <a class="banner-right__item" href="">
                                    <img src="https://cdn.cellphones.com.vn/media/ltsoft/promotion/690-300-Right_dell.png" alt="">
                                </a>
                            </div>
                        <!-- End: block-sliding-home__right -->
                    <!-- End: list-item -->
                </div>
            </div>
            
            <!-- Swiper-block  -->
            <div class="col">
                <div class="row">
                    <nav class="box-products">
                        <ul class="box-products__list list-unstyled">
                            <li class="box-products__item">
                                <a class="home-product-item" href="detai-products.php">
                                    <div class="home-product-item__img" style="background-image: url(https://image.cellphones.com.vn/220x/media/catalog/product/i/p/iphone-se-red-select-20220322.jpg);"></div>
                                    <h4 class="home-product-item__name">iPhone SE 2022 | Chính hãng VN/A</h4>
                                    <div class="home-product-item__price">
                                        <span class="price-old">34.200.000đ</span>
                                        <span class="price-current">24.080.000đ</span>
                                    </div>
                                    
                                    <div class="home-product-item__favorite">
                                        <i class="fas fa-check"></i>
                                        <Span>Yêu thích</Span>
                                    </div>
                                </a>
                            </li>
                            <li class="box-products__item">
                                <a class="home-product-item" href="detai-products.php">
                                    <div class="home-product-item__img" style="background-image: url(https://image.cellphones.com.vn/220x/media/catalog/product/i/p/iphone-se-red-select-20220322.jpg);"></div>
                                    <h4 class="home-product-item__name">iPhone SE 2022 | Chính hãng VN/A</h4>
                                    <div class="home-product-item__price">
                                        <span class="price-old">34.200.000đ</span>
                                        <span class="price-current">24.080.000đ</span>
                                    </div>
                                    
                                    <div class="home-product-item__favorite">
                                        <i class="fas fa-check"></i>
                                        <Span>Yêu thích</Span>
                                    </div>
                                </a>
                            </li>
                            <li class="box-products__item">
                                <a class="home-product-item" href="detai-products.php">
                                    <div class="home-product-item__img" style="background-image: url(https://image.cellphones.com.vn/220x/media/catalog/product/i/p/iphone-se-red-select-20220322.jpg);"></div>
                                    <h4 class="home-product-item__name">iPhone SE 2022 | Chính hãng VN/A</h4>
                                    <div class="home-product-item__price">
                                        <span class="price-old">34.200.000đ</span>
                                        <span class="price-current">24.080.000đ</span>
                                    </div>
                                    
                                    <div class="home-product-item__favorite">
                                        <i class="fas fa-check"></i>
                                        <Span>Yêu thích</Span>
                                    </div>
                                </a>
                            </li>
                            <li class="box-products__item">
                                <a class="home-product-item" href="detai-products.php">
                                    <div class="home-product-item__img" style="background-image: url(https://image.cellphones.com.vn/220x/media/catalog/product/i/p/iphone-se-red-select-20220322.jpg);"></div>
                                    <h4 class="home-product-item__name">iPhone SE 2022 | Chính hãng VN/A</h4>
                                    <div class="home-product-item__price">
                                        <span class="price-old">34.200.000đ</span>
                                        <span class="price-current">24.080.000đ</span>
                                    </div>
                                    
                                    <div class="home-product-item__favorite">
                                        <i class="fas fa-check"></i>
                                        <Span>Yêu thích</Span>
                                    </div>
                                </a>
                            </li>
                            <li class="box-products__item">
                                <a class="home-product-item" href="detai-products.php">
                                    <div class="home-product-item__img" style="background-image: url(https://image.cellphones.com.vn/220x/media/catalog/product/i/p/iphone-se-red-select-20220322.jpg);"></div>
                                    <h4 class="home-product-item__name">iPhone SE 2022 | Chính hãng VN/A</h4>
                                    <div class="home-product-item__price">
                                        <span class="price-old">34.200.000đ</span>
                                        <span class="price-current">24.080.000đ</span>
                                    </div>
                                    
                                    <div class="home-product-item__favorite">
                                        <i class="fas fa-check"></i>
                                        <Span>Yêu thích</Span>
                                    </div>
                                </a>
                            </li>
                            <li class="box-products__item">
                                <a class="home-product-item" href="detai-products.php">
                                    <div class="home-product-item__img" style="background-image: url(https://image.cellphones.com.vn/220x/media/catalog/product/i/p/iphone-se-red-select-20220322.jpg);"></div>
                                    <h4 class="home-product-item__name">iPhone SE 2022 | Chính hãng VN/A</h4>
                                    <div class="home-product-item__price">
                                        <span class="price-old">34.200.000đ</span>
                                        <span class="price-current">24.080.000đ</span>
                                    </div>
                                    
                                    <div class="home-product-item__favorite">
                                        <i class="fas fa-check"></i>
                                        <Span>Yêu thích</Span>
                                    </div>
                                </a>
                            </li>
                            <li class="box-products__item">
                                <a class="home-product-item" href="detai-products.php">
                                    <div class="home-product-item__img" style="background-image: url(https://image.cellphones.com.vn/220x/media/catalog/product/i/p/iphone-se-red-select-20220322.jpg);"></div>
                                    <h4 class="home-product-item__name">iPhone SE 2022 | Chính hãng VN/A</h4>
                                    <div class="home-product-item__price">
                                        <span class="price-old">34.200.000đ</span>
                                        <span class="price-current">24.080.000đ</span>
                                    </div>
                                    
                                    <div class="home-product-item__favorite">
                                        <i class="fas fa-check"></i>
                                        <Span>Yêu thích</Span>
                                    </div>
                                </a>
                            </li>
                            <li class="box-products__item">
                                <a class="home-product-item" href="detai-products.php">
                                    <div class="home-product-item__img" style="background-image: url(https://image.cellphones.com.vn/220x/media/catalog/product/i/p/iphone-se-red-select-20220322.jpg);"></div>
                                    <h4 class="home-product-item__name">iPhone SE 2022 | Chính hãng VN/A</h4>
                                    <div class="home-product-item__price">
                                        <span class="price-old">34.200.000đ</span>
                                        <span class="price-current">24.080.000đ</span>
                                    </div>
                                    
                                    <div class="home-product-item__favorite">
                                        <i class="fas fa-check"></i>
                                        <Span>Yêu thích</Span>
                                    </div>
                                </a>
                            </li>
                            <li class="box-products__item">
                                <a class="home-product-item" href="detai-products.php">
                                    <div class="home-product-item__img" style="background-image: url(https://image.cellphones.com.vn/220x/media/catalog/product/i/p/iphone-se-red-select-20220322.jpg);"></div>
                                    <h4 class="home-product-item__name">iPhone SE 2022 | Chính hãng VN/A</h4>
                                    <div class="home-product-item__price">
                                        <span class="price-old">34.200.000đ</span>
                                        <span class="price-current">24.080.000đ</span>
                                    </div>
                                    
                                    <div class="home-product-item__favorite">
                                        <i class="fas fa-check"></i>
                                        <Span>Yêu thích</Span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            
            <!-- Mobile-tablet-category -->
            <nav class="mobile-tablet-category">
                <ul class="mobile-tablet-category__list">
                    <li class="mobile-tablet-category__item">
                        <a href="mobile.php" class="mobile-tablet-category__link">
                            <div class="mobile-tablet-category__name">Điện thoại</div>
                        </a>
                    </li>
                    <li class="mobile-tablet-category__item">
                        <a href="laptop.php" class="mobile-tablet-category__link">
                            <div class="mobile-tablet-category__name">Lap top</div>
                        </a>
                    </li>
                    <li class="mobile-tablet-category__item">
                        <a href="tablet.php" class="mobile-tablet-category__link">
                            <div class="mobile-tablet-category__name">Tablet</div>
                        </a>
                    </li>
                    <li class="mobile-tablet-category__item">
                        <a href="" class="mobile-tablet-category__link">
                            <div class="mobile-tablet-category__name">Âm thanh</div>
                        </a>
                    </li>
                    <li class="mobile-tablet-category__item">
                        <a href="" class="mobile-tablet-category__link">
                            <div class="mobile-tablet-category__name">Đồng hồ</div>
                        </a>
                    </li>
                    <li class="mobile-tablet-category__item">
                        <a href="" class="mobile-tablet-category__link">
                            <div class="mobile-tablet-category__name">Nhà thông minh</div>
                        </a>
                    </li>
                    <li class="mobile-tablet-category__item">
                        <a href="" class="mobile-tablet-category__link">
                            <div class="mobile-tablet-category__name">Phụ kiện</div>
                        </a>
                    </li>
                    <li class="mobile-tablet-category__item">
                        <a href="" class="mobile-tablet-category__link">
                            <div class="mobile-tablet-category__name">Thu cũ</div>
                        </a>
                    </li>
                    <li class="mobile-tablet-category__item">
                        <a href="" class="mobile-tablet-category__link">
                            <div class="mobile-tablet-category__name">Hàng cũ</div>
                        </a>
                    </li>
                    <li class="mobile-tablet-category__item">
                        <a href="" class="mobile-tablet-category__link">
                            <div class="mobile-tablet-category__name">Tivi</div>
                        </a>
                    </li>
                    <li class="mobile-tablet-category__item">
                        <a href="" class="mobile-tablet-category__link">
                            <div class="mobile-tablet-category__name">Tin công nghệ</div>
                        </a>
                    </li>
                    <li class="mobile-tablet-category__item">
                        <a href="" class="mobile-tablet-category__link">
                            <div class="mobile-tablet-category__name">Khuyến mại</div>
                        </a>
                    </li>
                </ul>
            </nav>
            
            <!-- Home-Product  -->
            <div class="home-product">
                <div class="row sm-gutter">
                    <!-- grip -> row -> column -->

                    <!-- mobile-item -->
                    <div class="col l-12 m-12 c-12">
                        <!-- list-product -->
                        <div class="box-outstanding-title">
                            <a href="" class="box-outstanding-title__title text-decoration-none">
                                <h2>Điện thoại nổi bật</h2>
                            </a>
                            <div class="box-related-tag">
                                <div class="list-related-tag">
                                    <!-- <a class="item-related-tag" href="">Reno7</a> -->
                                <?php foreach($manuf_smartphones as $each_smartphone): ?>
                                    <a href="mobile.php?phone=<?php echo $each_smartphone['name'] ?>"><?php echo $each_smartphone['name'] ?></a>
                                <?php endforeach?>
                                    <a class="item-related-tag" href="">Xem tất cả</a>
                                </div>   
                            </div>
                        </div>
                        
                        <div class="row sm-gutter product-item__wrap mb-3 ">
                            <!-- product item -->
                            <?php
                                $smartphones_index=(new data)->se_products_smartphones_index();
                                foreach($smartphones_index as $each_smartphone_index):
                            ?>
                            <div class="col l-2-4 m-4 c-6">
                                <a class="home-product-item" href="detai-products.php">
                                    <div class="home-product-item__img" style="background-image: url(<?php echo $each_smartphone_index['image']?>);"></div>
                                    <h4 class="home-product-item__name"><?php echo $each_smartphone_index['name']?></h4>
                                    <div class="home-product-item__price">
                                        <span class="price-old"><?php echo $each_smartphone_index['price']?> đ</span>
                                        <span class="price-current"><?php echo $each_smartphone_index['price_sale']?> đ</span>
                                    </div>
                                    <div class="home-product-item__action">
                                        <div class="home-product-item__rating">
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="home-product-item__sold">88 đã bán</span>
                                    </div>
                                    <div class="home-product-item__favorite">
                                        <i class="fas fa-check"></i>
                                        <Span>Yêu thích</Span>
                                    </div>
                                </a>
                            </div>
                            <?php endforeach?>
                        </div>         
                    </div>

                    <!-- Laptop-item  -->
                    <div class="col l-12 m-12 c-12">
                        <!-- list-product -->
                        <div class="box-outstanding-title">
                            <a href="" class="box-outstanding-title__title text-decoration-none">
                                <h2>Tablet nổi bật</h2>
                            </a>
                            <div class="box-related-tag">
                                <div class="list-related-tag">
                                    <!-- <a class="item-related-tag" href="">Reno7</a> -->
                                <?php foreach($manuf_tablets as $each_tablet): ?>
                                    <a href="tablet.php?tablet=<?php echo $each_tablet['name'] ?>"><?php echo $each_tablet['name'] ?></a>
                                <?php endforeach?>
                                    <a class="item-related-tag" href="">Xem tất cả</a>
                                </div>   
                            </div>
                        </div>
                        
                        <div class="row sm-gutter product-item__wrap mb-3">
                            <!-- product item -->
                            <?php
                                $tablets_index=(new data)->se_products_tablets_index();
                                foreach($tablets_index as $each_tablet_index):
                            ?>
                            <div class="col l-2-4 m-4 c-6">
                                <a class="home-product-item" href="detai-products.php">
                                    <div class="home-product-item__img" style="background-image: url(<?php echo $each_tablet_index['image']?>);"></div>
                                    <h4 class="home-product-item__name"><?php echo $each_tablet_index['name']?></h4>
                                    <div class="home-product-item__price">
                                        <span class="price-old"><?php echo $each_tablet_index['price']?> đ</span>
                                        <span class="price-current"><?php echo $each_tablet_index['price_sale']?> đ</span>
                                    </div>
                                    <div class="home-product-item__action">
                                        <div class="home-product-item__rating">
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="home-product-item__sold">88 đã bán</span>
                                    </div>
                                    <div class="home-product-item__favorite">
                                        <i class="fas fa-check"></i>
                                        <Span>Yêu thích</Span>
                                    </div>
                                </a>
                            </div>
                            <?php endforeach?>
                        </div>         
                    </div>

                    <!-- tablet-item  -->
                    <div class="col l-12 m-12 c-12">
                        <!-- list-product -->
                        <div class="box-outstanding-title">
                            <a href="" class="box-outstanding-title__title text-decoration-none">
                                <h2>Laptop nổi bật</h2>
                            </a>
                            <div class="box-related-tag">
                                <div class="list-related-tag">
                                    <!-- <a class="item-related-tag" href="">Reno7</a> -->
                                <?php foreach($manuf_laptops as $each_laptop): ?>
                                    <a href="laptop.php?catalog=<?php echo $each_laptop['name'] ?>"><?php echo $each_laptop['name'] ?></a>
                                <?php endforeach?>
                                    <a class="item-related-tag" href="">Xem tất cả</a>
                                </div>   
                            </div>
                        </div>
                        
                        <div class="row sm-gutter product-item__wrap mb-3">
                            <!-- product item -->
                            <?php
                                $laptops_index=(new data)->se_products_laptops_index();
                                foreach($laptops_index as $each_laptop_index):
                            ?>
                            <div class="col l-2-4 m-4 c-6">
                                <a class="home-product-item" href="detai-products.php">
                                    <div class="home-product-item__img" style="background-image: url(<?php echo $each_laptop_index['image']?>);"></div>
                                    <h4 class="home-product-item__name"><?php echo $each_laptop_index['name']?></h4>
                                    <div class="home-product-item__price">
                                        <span class="price-old"><?php echo $each_laptop_index['price']?> đ</span>
                                        <span class="price-current"><?php echo $each_laptop_index['price_sale']?> đ</span>
                                    </div>
                                    <div class="home-product-item__action">
                                        <div class="home-product-item__rating">
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="home-product-item__sold">88 đã bán</span>
                                    </div>
                                    <div class="home-product-item__favorite">
                                        <i class="fas fa-check"></i>
                                        <Span>Yêu thích</Span>
                                    </div>
                                </a>
                            </div>
                            <?php endforeach?>
                        </div>         
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
        include ('footer.php')
    ?>

    <?php 
        include('login-register.php')
    ?>

    <!-- home-slide -->
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);
        
        function plusDivs(n) {
          showDivs(slideIndex += n);
        }
        
        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("myHomeSlides");
          if (n > x.length) {slideIndex = 1}
          if (n < 1) {slideIndex = x.length}
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          x[slideIndex-1].style.display = "block";  
        }
    </script>

    <script>
        var myIndex = 0;
        carousel();
        
        function carousel() {
          var i;
          var x = document.getElementsByClassName("myHomeSlides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}    
          x[myIndex-1].style.display = "block";  
          setTimeout(carousel, 4000); // Change image every 2 seconds
        }
    </script>
</body>
</html>