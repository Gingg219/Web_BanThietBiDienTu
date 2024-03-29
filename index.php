<?php
    session_start();
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
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.1.1-web/css/all.css">
</head>
<body>
    <?php
        include ('./components/header.php');
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
                            $manuf_headphones=(new data)->se_manuf_headphones();
                            $manuf_smartwatches=(new data)->se_manuf_smartwatch();
                            $manuf_smarthome=(new data)->se_manuf_smarthome();
                            $manuf_gadgets=(new data)->se_manuf_gadgets();
                            $manuf_tivi=(new data)->se_manuf_tivi();
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
                                                        <a class="item-menu__link" href="mobile.php?search=<?php echo $each_smartphone['name'] ?>">
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
                                                        <a class="item-menu__link" href="laptop.php?search=<?php echo $each_laptop['name'] ?>">
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
                                                        <a class="item-menu__link" href="tablet.php?search=<?php echo $each_tablet['name'] ?>">
                                                            <span><?php echo $each_tablet['name'] ?></span>
                                                        </a>
                                                    </li>
                                                    <?php endforeach?>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="item-menu">
                                            <a class="item-menu__link" href="headphone.php">
                                                <i class="item-menu__icon fa-solid fa-headphones"></i>
                                                <span>Âm thanh</span>
                                                <i class="item-menu__icon-sub fa-solid fa-angle-right"></i>
                                            </a>
                                            <div class="box-list-item box-child-list-item">
                                                <ul class="list-item">
                                                <?php foreach($manuf_headphones as $each_headphone): ?>
                                                    <li class="item-menu">
                                                        <a class="item-menu__link" href="headphone.php?search=<?php echo $each_headphone['name'] ?>">
                                                            <span><?php echo $each_headphone['name'] ?></span>
                                                        </a>
                                                    </li>
                                                    <?php endforeach?>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="item-menu">
                                            <a class="item-menu__link" href="smartwatch.php">
                                                <i class="item-menu__icon fa-solid fa-clock"></i>
                                                <span>Đồng hồ</span>
                                                <i class="item-menu__icon-sub fa-solid fa-angle-right"></i>
                                            </a>
                                            <div class="box-list-item box-child-list-item">
                                                <ul class="list-item">
                                                <?php foreach($manuf_smartwatches as $each_smartwatch): ?>
                                                    <li class="item-menu">
                                                        <a class="item-menu__link" href="smartwatch.php?search=<?php echo $each_smartwatch['name'] ?>">
                                                            <span><?php echo $each_smartwatch['name'] ?></span>
                                                        </a>
                                                    </li>
                                                    <?php endforeach?>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="item-menu">
                                            <a class="item-menu__link" href="smarthome.php">
                                                <i class="item-menu__icon fa-solid fa-house-signal"></i>
                                                <span>Nhà thông minh</span>
                                                <i class="item-menu__icon-sub fa-solid fa-angle-right"></i>
                                            </a>
                                            <div class="box-list-item box-child-list-item">
                                                <ul class="list-item">
                                                <?php foreach($manuf_smarthome as $each_smarthome): ?>
                                                    <li class="item-menu">
                                                        <a class="item-menu__link" href="smarthome.php?search=<?php echo $each_smarthome['name'] ?>">
                                                            <span><?php echo $each_smarthome['name'] ?></span>
                                                        </a>
                                                    </li>
                                                    <?php endforeach?>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="item-menu">
                                            <a class="item-menu__link" href="gadgets.php">
                                                <i class="item-menu__icon fa-solid fa-diagram-project"></i>
                                                <span>Phụ kiện</span>
                                                <i class="item-menu__icon-sub fa-solid fa-angle-right"></i>
                                            </a>
                                            <div class="box-list-item box-child-list-item">
                                                <ul class="list-item">
                                                <?php foreach($manuf_gadgets as $each_gadgets): ?>
                                                    <li class="item-menu">
                                                        <a class="item-menu__link" href="gadgets.php?search=<?php echo $each_gadgets['name'] ?>">
                                                            <span><?php echo $each_gadgets['name'] ?></span>
                                                        </a>
                                                    </li>
                                                    <?php endforeach?>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="item-menu">
                                            <a class="item-menu__link" href="tivi.php">
                                                <i class="item-menu__icon fa-solid fa-tv"></i>
                                                <span>Tivi</span>
                                                <i class="item-menu__icon-sub fa-solid fa-angle-right"></i>
                                            </a>
                                            <div class="box-list-item box-child-list-item">
                                                <ul class="list-item">
                                                <?php foreach($manuf_tivi as $each_tivi): ?>
                                                    <li class="item-menu">
                                                        <a class="item-menu__link" href="tivi.php?search=<?php echo $each_tivi['name'] ?>">
                                                            <span><?php echo $each_tivi['name'] ?></span>
                                                        </a>
                                                    </li>
                                                    <?php endforeach?>
                                                </ul>
                                            </div>
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
            <?php
                include('./components/swiper_block.php');
            ?>
            
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
                            <div class="mobile-tablet-category__name">Tivi</div>
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
                                    <a href="mobile.php?search=<?php echo $each_smartphone['name'] ?>"><?php echo $each_smartphone['name'] ?></a>
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
                                <a class="home-product-item" href="detail_products.php?id=<?php echo $each_smartphone_index['id']?>">
                                    <div class="home-product-item__img" style="background-image: url(<?php echo $each_smartphone_index['image']?>);"></div>
                                    <h4 class="home-product-item__name"><?php echo $each_smartphone_index['name']?></h4>
                                    <div class="home-product-item__price">
                                        <span class="price-old"><?php echo number_format($each_smartphone_index['price'])?> đ</span>
                                        <span class="price-current"><?php echo number_format($each_smartphone_index['price_sale']);?> đ</span>
                                    </div>
                                    <div class="home-product-item__action">
                                        <div class="home-product-item__rating">
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="home-product-item__sold"><?php echo number_format($each_smartphone_index['sold']);?> đã bán</span>
                                    </div>
                                        <?php if ($each_smartphone_index['sold'] > 9) { ?>
                                                <div class="home-product-item__favorite">
                                                <i class="fas fa-check"></i>
                                                <Span>Yêu thích</Span>
                                            </div>
                                            <?php } ?>
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
                                    <a href="tablet.php?search=<?php echo $each_tablet['name'] ?>"><?php echo $each_tablet['name'] ?></a>
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
                                <a class="home-product-item" href="detail_products.php?id=<?php echo $each_tablet_index['id']?>">
                                    <div class="home-product-item__img" style="background-image: url(<?php echo $each_tablet_index['image']?>);"></div>
                                    <h4 class="home-product-item__name"><?php echo $each_tablet_index['name']?></h4>
                                    <div class="home-product-item__price">
                                        <span class="price-old"><?php echo number_format($each_tablet_index['price'])?> đ</span>
                                        <span class="price-current"><?php echo number_format($each_tablet_index['price_sale']);?> đ</span>
                                    </div>
                                    <div class="home-product-item__action">
                                        <div class="home-product-item__rating">
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="home-product-item__sold"><?php echo number_format($each_tablet_index['sold']);?> đã bán</span>
                                    </div>
                                        <?php if ($each_tablet_index['sold'] > 9) { ?>
                                                <div class="home-product-item__favorite">
                                                <i class="fas fa-check"></i>
                                                <Span>Yêu thích</Span>
                                            </div>
                                            <?php } ?>
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
                                    <a href="laptop.php?search=<?php echo $each_laptop['name'] ?>"><?php echo $each_laptop['name'] ?></a>
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
                                <a class="home-product-item" href="detail_products.php?id=<?php echo $each_laptop_index['id']?>">
                                    <div class="home-product-item__img" style="background-image: url(<?php echo $each_laptop_index['image']?>);"></div>
                                    <h4 class="home-product-item__name"><?php echo $each_laptop_index['name']?></h4>
                                    <div class="home-product-item__price">
                                        <span class="price-old"><?php echo number_format($each_laptop_index['price'])?> đ</span>
                                        <span class="price-current"><?php echo number_format($each_laptop_index['price_sale'])?> đ</span>
                                    </div>
                                    <div class="home-product-item__action">
                                        <div class="home-product-item__rating">
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="home-product-item__sold"><?php echo number_format($each_laptop_index['sold']);?> đã bán</span>
                                    </div>
                                        <?php if ($each_laptop_index['sold'] > 9) { ?>
                                                <div class="home-product-item__favorite">
                                                <i class="fas fa-check"></i>
                                                <Span>Yêu thích</Span>
                                            </div>
                                            <?php } ?>
                                </a>
                            </div>
                            <?php endforeach?>
                        </div>         
                    </div>

                    <!-- headphone-item  -->
                    <div class="col l-12 m-12 c-12">
                        <!-- list-product -->
                        <div class="box-outstanding-title">
                            <a href="" class="box-outstanding-title__title text-decoration-none">
                                <h2>HeadPhone nổi bật</h2>
                            </a>
                            <div class="box-related-tag">
                                <div class="list-related-tag">
                                    <!-- <a class="item-related-tag" href="">Reno7</a> -->
                                <?php foreach($manuf_headphones as $each_headphone): ?>
                                    <a href="headphone.php?search=<?php echo $each_headphone['name'] ?>"><?php echo $each_headphone['name'] ?></a>
                                <?php endforeach?>
                                    <a class="item-related-tag" href="">Xem tất cả</a>
                                </div>   
                            </div>
                        </div>
                        
                        <div class="row sm-gutter product-item__wrap mb-3">
                            <!-- product item -->
                            <?php
                                $headphones_index=(new data)->se_products_headphones_index();
                                foreach($headphones_index as $each_headphone_index):
                            ?>
                            <div class="col l-2-4 m-4 c-6">
                                <a class="home-product-item" href="detail_products.php?id=<?php echo $each_headphone_index['id']?>">
                                    <div class="home-product-item__img" style="background-image: url(<?php echo $each_headphone_index['image']?>);"></div>
                                    <h4 class="home-product-item__name"><?php echo $each_headphone_index['name']?></h4>
                                    <div class="home-product-item__price">
                                        <span class="price-old"><?php echo number_format($each_headphone_index['price'])?> đ</span>
                                        <span class="price-current"><?php echo number_format($each_headphone_index['price_sale'])?> đ</span>
                                    </div>
                                    <div class="home-product-item__action">
                                        <div class="home-product-item__rating">
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="home-product-item__sold"><?php echo number_format($each_headphone_index['sold']);?> đã bán</span>
                                    </div>
                                        <?php if ($each_headphone_index['sold'] > 9) { ?>
                                                <div class="home-product-item__favorite">
                                                <i class="fas fa-check"></i>
                                                <Span>Yêu thích</Span>
                                            </div>
                                            <?php } ?>
                                </a>
                            </div>
                            <?php endforeach?>
                        </div>         
                    </div>

                    <!-- Smartwatch-item  -->
                    <div class="col l-12 m-12 c-12">
                        <!-- list-product -->
                        <div class="box-outstanding-title">
                            <a href="" class="box-outstanding-title__title text-decoration-none">
                                <h2>SmartWatch nổi bật</h2>
                            </a>
                            <div class="box-related-tag">
                                <div class="list-related-tag">
                                    <!-- <a class="item-related-tag" href="">Reno7</a> -->
                                <?php foreach($manuf_smartwatches as $each_smartwatch): ?>
                                    <a href="smartwatch.php?search=<?php echo $each_smartwatch['name'] ?>"><?php echo $each_smartwatch['name'] ?></a>
                                <?php endforeach?>
                                    <a class="item-related-tag" href="">Xem tất cả</a>
                                </div>   
                            </div>
                        </div>
                        
                        <div class="row sm-gutter product-item__wrap mb-3">
                            <!-- product item -->
                            <?php
                                $smartwatches_index=(new data)->se_products_smartwatches_index();
                                foreach($smartwatches_index as $each_smartwatch_index):
                            ?>
                            <div class="col l-2-4 m-4 c-6">
                                <a class="home-product-item" href="detail_products.php?id=<?php echo $each_smartwatch_index['id']?>">
                                    <div class="home-product-item__img" style="background-image: url(<?php echo $each_smartwatch_index['image']?>);"></div>
                                    <h4 class="home-product-item__name"><?php echo $each_smartwatch_index['name']?></h4>
                                    <div class="home-product-item__price">
                                        <span class="price-old"><?php echo number_format($each_smartwatch_index['price'])?> đ</span>
                                        <span class="price-current"><?php echo number_format($each_smartwatch_index['price_sale'])?> đ</span>
                                    </div>
                                    <div class="home-product-item__action">
                                        <div class="home-product-item__rating">
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="home-product-item__sold"><?php echo number_format($each_smartwatch_index['sold']);?> đã bán</span>
                                    </div>
                                        <?php if ($each_smartwatch_index['sold'] > 9) { ?>
                                                <div class="home-product-item__favorite">
                                                <i class="fas fa-check"></i>
                                                <Span>Yêu thích</Span>
                                            </div>
                                            <?php } ?>
                                </a>
                            </div>
                            <?php endforeach?>
                        </div>         
                    </div>
                    <div class="col l-12 m-12 c-12">
                        <!-- list-product -->
                        <div class="box-outstanding-title">
                            <a href="" class="box-outstanding-title__title text-decoration-none">
                                <h2>Tivi nổi bật</h2>
                            </a>
                            <div class="box-related-tag">
                                <div class="list-related-tag">
                                    <!-- <a class="item-related-tag" href="">Reno7</a> -->
                                <?php foreach($manuf_tivi as $each_smartwatch): ?>
                                    <a href="smartwatch.php?search=<?php echo $each_smartwatch['name'] ?>"><?php echo $each_smartwatch['name'] ?></a>
                                <?php endforeach?>
                                    <a class="item-related-tag" href="">Xem tất cả</a>
                                </div>   
                            </div>
                        </div>
                        
                        <div class="row sm-gutter product-item__wrap mb-3">
                            <!-- product item -->
                            <?php
                                $smartwatches_index=(new data)->se_products_tivi_index();
                                foreach($smartwatches_index as $each_smartwatch_index):
                            ?>
                            <div class="col l-2-4 m-4 c-6">
                                <a class="home-product-item" href="detail_products.php?id=<?php echo $each_smartwatch_index['id']?>">
                                    <div class="home-product-item__img" style="background-image: url(<?php echo $each_smartwatch_index['image']?>);"></div>
                                    <h4 class="home-product-item__name"><?php echo $each_smartwatch_index['name']?></h4>
                                    <div class="home-product-item__price">
                                        <span class="price-old"><?php echo number_format($each_smartwatch_index['price'])?> đ</span>
                                        <span class="price-current"><?php echo number_format($each_smartwatch_index['price_sale'])?> đ</span>
                                    </div>
                                    <div class="home-product-item__action">
                                        <div class="home-product-item__rating">
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="home-product-item__sold"><?php echo number_format($each_smartwatch_index['sold']);?> đã bán</span>
                                    </div>
                                        <?php if ($each_smartwatch_index['sold'] > 9) { ?>
                                                <div class="home-product-item__favorite">
                                                <i class="fas fa-check"></i>
                                                <Span>Yêu thích</Span>
                                            </div>
                                            <?php } ?>
                                </a>
                            </div>
                            <?php endforeach?>
                        </div>         
                    </div>
                    <div class="col l-12 m-12 c-12">
                        <!-- list-product -->
                        <div class="box-outstanding-title">
                            <a href="" class="box-outstanding-title__title text-decoration-none">
                                <h2>Phụ kiện nổi bật</h2>
                            </a>
                            <div class="box-related-tag">
                                <div class="list-related-tag">
                                    <!-- <a class="item-related-tag" href="">Reno7</a> -->
                                <?php foreach($manuf_gadgets as $each_smartwatch): ?>
                                    <a href="smartwatch.php?search=<?php echo $each_smartwatch['name'] ?>"><?php echo $each_smartwatch['name'] ?></a>
                                <?php endforeach?>
                                    <a class="item-related-tag" href="">Xem tất cả</a>
                                </div>   
                            </div>
                        </div>
                        
                        <div class="row sm-gutter product-item__wrap mb-3">
                            <!-- product item -->
                            <?php
                                $smartwatches_index=(new data)->se_products_gadgets_index();
                                foreach($smartwatches_index as $each_smartwatch_index):
                            ?>
                            <div class="col l-2-4 m-4 c-6">
                                <a class="home-product-item" href="detail_products.php?id=<?php echo $each_smartwatch_index['id']?>">
                                    <div class="home-product-item__img" style="background-image: url(<?php echo $each_smartwatch_index['image']?>);"></div>
                                    <h4 class="home-product-item__name"><?php echo $each_smartwatch_index['name']?></h4>
                                    <div class="home-product-item__price">
                                        <span class="price-old"><?php echo number_format($each_smartwatch_index['price'])?> đ</span>
                                        <span class="price-current"><?php echo number_format($each_smartwatch_index['price_sale'])?> đ</span>
                                    </div>
                                    <div class="home-product-item__action">
                                        <div class="home-product-item__rating">
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="home-product-item__sold"><?php echo number_format($each_smartwatch_index['sold']);?> đã bán</span>
                                    </div>
                                        <?php if ($each_smartwatch_index['sold'] > 9) { ?>
                                                <div class="home-product-item__favorite">
                                                <i class="fas fa-check"></i>
                                                <Span>Yêu thích</Span>
                                            </div>
                                            <?php } ?>
                                </a>
                            </div>
                            <?php endforeach?>
                        </div>         
                    </div>
                    <div class="col l-12 m-12 c-12">
                        <!-- list-product -->
                        <div class="box-outstanding-title">
                            <a href="" class="box-outstanding-title__title text-decoration-none">
                                <h2>Smart Home nổi bật</h2>
                            </a>
                            <div class="box-related-tag">
                                <div class="list-related-tag">
                                    <!-- <a class="item-related-tag" href="">Reno7</a> -->
                                <?php foreach($manuf_smarthome as $each_smartwatch): ?>
                                    <a href="smartwatch.php?search=<?php echo $each_smartwatch['name'] ?>"><?php echo $each_smartwatch['name'] ?></a>
                                <?php endforeach?>
                                    <a class="item-related-tag" href="">Xem tất cả</a>
                                </div>   
                            </div>
                        </div>
                        
                        <div class="row sm-gutter product-item__wrap mb-3">
                            <!-- product item -->
                            <?php
                                $smartwatches_index=(new data)->se_products_smarthome_index();
                                foreach($smartwatches_index as $each_smartwatch_index):
                            ?>
                            <div class="col l-2-4 m-4 c-6">
                                <a class="home-product-item" href="detail_products.php?id=<?php echo $each_smartwatch_index['id']?>">
                                    <div class="home-product-item__img" style="background-image: url(<?php echo $each_smartwatch_index['image']?>);"></div>
                                    <h4 class="home-product-item__name"><?php echo $each_smartwatch_index['name']?></h4>
                                    <div class="home-product-item__price">
                                        <span class="price-old"><?php echo number_format($each_smartwatch_index['price'])?> đ</span>
                                        <span class="price-current"><?php echo number_format($each_smartwatch_index['price_sale'])?> đ</span>
                                    </div>
                                    <div class="home-product-item__action">
                                        <div class="home-product-item__rating">
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="home-product-item__sold"><?php echo number_format($each_smartwatch_index['sold']);?> đã bán</span>
                                    </div>
                                        <?php if ($each_smartwatch_index['sold'] > 9) { ?>
                                                <div class="home-product-item__favorite">
                                                <i class="fas fa-check"></i>
                                                <Span>Yêu thích</Span>
                                            </div>
                                            <?php } ?>
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
        include ('./components/footer.php')
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