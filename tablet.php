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
    <div class="container">
        <div class="grid wide">
            <div class="container__content container-mobile__content">
                <div class="row">
                    <div class="col">
                        <!-- Block-filter -->
                        <div class="block-filter">
                            <div class="filter__block-list-subcate">
                                <div class="box-list-subcate">
                                    <div class="list-subcate">
                                        <a class="item-subcate" href="">
                                            <img class="icons-subcate" src="https://cellphones.com.vn/media/icons/brands/brand-286.svg" alt="">
                                        </a>
                                        <a class="item-subcate" href="">
                                            <img class="icons-subcate" src="https://cellphones.com.vn/media/icons/brands/brand-211.svg" alt="">
                                        </a>
                                        <a class="item-subcate" href="">
                                            <img class="icons-subcate" src="https://cellphones.com.vn/media/icons/brands/brand-274.svg" alt="">
                                        </a>
                                        <a class="item-subcate" href="">
                                            <img class="icons-subcate" src="https://cellphones.com.vn/media/icons/brands/brand-769.svg" alt="">
                                        </a>
                                        <a class="item-subcate" href="">
                                            <img class="icons-subcate" src="https://cellphones.com.vn/media/icons/brands/brand-1214.svg" alt="">
                                        </a>
                                        <a class="item-subcate" href="">
                                            <img class="icons-subcate" src="https://cellphones.com.vn/media/icons/brands/brand-721.svg" alt="">
                                        </a>
                                        <a class="item-subcate" href="">
                                            <img class="icons-subcate" src="https://cellphones.com.vn/media/icons/brands/brand-vsmart.svg" alt="">
                                        </a>
                                        <a class="item-subcate" href="">
                                            <img class="icons-subcate" src="https://cellphones.com.vn/media/icons/brands/brand-1052.svg" alt="">
                                        </a>
                                        <a class="item-subcate" href="">
                                            <img class="icons-subcate" src="https://cellphones.com.vn/media/icons/brands/brand-vivo.svg" alt="">
                                        </a>
                                        <a class="item-subcate" href="">
                                            <img class="icons-subcate" src="https://cellphones.com.vn/media/icons/brands/brand-oneplus.svg" alt="">
                                        </a>
                                        <a class="item-subcate" href="">
                                            <img class="icons-subcate" src="https://cellphones.com.vn/media/icons/brands/brand-nubia.svg" alt="">
                                        </a>
                                        <a class="item-subcate" href="">
                                            Cat
                                        </a>
                                        <a class="item-subcate" href="">
                                            Điện thoại phổ thông
                                        </a>
                                        <a class="item-subcate" href="">
                                            Tin đồn - mới ra
                                        </a>
                                        <a class="item-subcate" href="">
                                            Tecno
                                        </a>
                                        <a class="item-subcate" href="">
                                            Hãng khác
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Swiper-block  -->
                    <div class="grid wide">
                        <div class="col">
                            <div class="row">
                                <nav class="box-products mb-3">
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
                    </div>
                    
                    <div class="col" style="width: 100%">
                        <div class="block-filter">
                            <div class="filter__block-list-sort">
                                <div class="box-title">
                                    <p class="box-title__title">Săp xếp theo</p>
                                </div>
                                <div class="box-list-filter">
                                    <div class="list-filter">
                                        <a class="item-filter" href="">
                                            <i class="fa-solid fa-arrow-up-wide-short"></i>Giá cao
                                        </a>
                                        <a class="item-filter" href="">
                                            <i class="fa-solid fa-arrow-down-short-wide"></i>Giá thấp
                                        </a>
                                        <a class="item-filter" href="">
                                            <i class="fa-solid fa-percent"></i>Khuyến mãi
                                        </a>
                                        <a class="item-filter" href="">
                                            <i class="fa-solid fa-percent"></i>Trả góp 0%
                                        </a>
                                        <a class="item-filter" href="">
                                            <i class="fa-solid fa-eye"></i>Xem nhiều
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="home-product" style="width: 100%">
                        <!-- grip -> row -> column -->
                        <div class="grid wide">
                            <div class="row sm-gutter">
                            <!-- product item -->
                            <?php
                                    require_once 'admin/control.php';
                                    $catalog='';
                                    if(isset($_GET['catalog'])){
                                        $catalog=$_GET['catalog'];
                                    }
                                    if($catalog==''){
                                        $search='';
                                        if(isset($_GET['search'])){
                                            $search=$_GET['search'];
                                        }
                                        $page=1;
                                        if(isset($_GET['page'])){
                                            $page=$_GET['page'];
                                        }
                                        $all_product=(new data)->count_paging_tablet($search);
                                        $all_page=ceil($all_product/20);
                                        $skip_page=20*($page-1);
                                        $se_tablets=(new data)->paging_tablet($skip_page);
                                    }
                                    else{
                                        $search='';
                                        if(isset($_GET['search'])){
                                            $search=$_GET['search'];
                                        }
                                        $page=1;
                                        if(isset($_GET['page'])){
                                            $page=$_GET['page'];
                                        }
                                        $all_product=(new data)->count_search_tablet($catalog);
                                        $all_page=ceil($all_product/2);
                                        $skip_page=2*($page-1);
                                        $se_tablets=(new data)->paging_search_tablet($catalog,$skip_page);
                                    }
                                ?>
                                <?php foreach($se_tablets as $each_tablet): ?>
                                <div class="col l-2-4 m-4 c-6">
                                    <a class="home-product-item" href="#">
                                        <div class="home-product-item__img" style="background-image: url(<?php echo $each_tablet['image'] ?>);"></div>
                                        <h4 class="home-product-item__name"><?php echo $each_tablet['name'] ?></h4>
                                        <div class="home-product-item__price">
                                            <span class="price-old"><?php echo $each_tablet['price'] ?></span>
                                            <span class="price-current"><?php echo $each_tablet['price_sale'] ?></span>
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
                    
                    <!-- Pagination -->
                    <?php require_once 'paging.php';?>
                </div>
            </div>
        </div>
    </div>
    
    <?php
        include('footer.php')
    ?>
</body>
</html>




