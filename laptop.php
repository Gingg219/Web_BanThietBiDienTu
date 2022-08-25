<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaptopsShop</title>
    <link rel="icon" href="./assets/img/Wstore.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/supplier.css">
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
                    Laptop
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
                        <div class="block-filter-subcate">
                            <div class="filter__block-list-subcate">
                                <div class="box-list-subcate">
                                    <div class="list-subcate">
                                        <a class="item-subcate" href="">
                                            <img class="icons-subcate" src="https://cellphones.com.vn/media/icons/brands/brand-macbook-2.svg" alt="">
                                        </a>
                                        <a class="item-subcate" href="">
                                            <img class="icons-subcate" src="https://cellphones.com.vn/media/icons/brands/brand-hp-2.svg" alt="">
                                        </a>
                                        <a class="item-subcate" href="">
                                            <img class="icons-subcate" src="https://cellphones.com.vn/media/icons/brands/brand-dell.svg" alt="">
                                        </a>
                                        <a class="item-subcate" href="">
                                            <img class="icons-subcate" src="https://cellphones.com.vn/media/icons/brands/brand-lenovo.svg" alt="">
                                        </a>
                                        <a class="item-subcate" href="">
                                            <img class="icons-subcate" src="https://cellphones.com.vn/media/icons/brands/brand-micosoftsurface.svg" alt="">
                                        </a>
                                        <a class="item-subcate" href="">
                                            <img class="icons-subcate" src="https://cellphones.com.vn/media/icons/brands/brand-asus.svg" alt="">
                                        </a>
                                        <a class="item-subcate" href="">
                                            <img class="icons-subcate" src="https://cellphones.com.vn/media/icons/brands/brand-acer.svg" alt="">
                                        </a>
                                        <a class="item-subcate" href="">
                                            <img class="icons-subcate" src="https://cellphones.com.vn/media/icons/brands/brand-lg.svg" alt="">
                                        </a>
                                        <a class="item-subcate" href="">
                                            <img class="icons-subcate" src="https://cellphones.com.vn/media/icons/brands/brand-msi.svg" alt="">
                                        </a>
                                        <a class="item-subcate" href="">
                                            <img class="icons-subcate" src="https://cellphones.com.vn/media/icons/brands/brand-gygabyte.svg" alt="">
                                        </a>
                                        <a class="item-subcate" href="">
                                            <img class="icons-subcate" src="https://cellphones.com.vn/media/icons/brands/brand-fujitsu.svg" alt="">
                                        </a>
                                        <a class="item-subcate" href="">
                                            Laptop Avita
                                        </a>
                                        <a class="item-subcate" href="">
                                            Huawei
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Swiper-block  -->
                    <?php
                        include('swiper_block.php');
                    ?>
                    
                    <!-- fillter_block -->
                    <?php
                        include('filter_block.php');
                    ?>

                    <div class="home-product" style="width: 100%">
                        <!-- grip -> row -> column -->
                        <div class="grid wide">
                            <div class="row sm-gutter">
                            <!-- product item -->
                            <?php
                                        $search='';
                                        if(isset($_GET['search'])){
                                            $search=$_GET['search'];
                                        }
                                        $page=1;
                                        if(isset($_GET['page'])){
                                            $page=$_GET['page'];
                                        }
                                        $check = '';
                                        if (isset($_POST['sale'])) {
                                            $check = $_POST['sale'];
                                        }
                                        $all_product=(new data)->count_paging_laptop1($search);
                                        $all_page=ceil($all_product/20);
                                        $skip_page=20*($page-1);
                                        switch ($check) {
                                            case '1':
                                                $sql = "SELECT products.*,
                                                        (products.price-products.price_sale) as sale
                                                        FROM products INNER JOIN manufacturers On
                                                        products.id_manufacturers=manufacturers.id
                                                        WHERE manufacturers.id_category=3 and manufacturers.name like '%$search%'
                                                        order by products.price_sale desc
                                                        limit 20 offset $skip_page";
                                                break;
                                            case '2':
                                                $sql = "SELECT products.*,
                                                        (products.price-products.price_sale) as sale
                                                        FROM products INNER JOIN manufacturers On
                                                        products.id_manufacturers=manufacturers.id
                                                        WHERE manufacturers.id_category=3 and manufacturers.name like '%$search%'
                                                        order by products.price_sale asc
                                                        limit 20 offset $skip_page";
                                                break;
                                            default:
                                                $sql = "SELECT products.*,
                                                        (products.price-products.price_sale) as sale
                                                        FROM products INNER JOIN manufacturers On
                                                        products.id_manufacturers=manufacturers.id
                                                        WHERE manufacturers.id_category=3 and manufacturers.name like '%$search%'
                                                        order by sale desc
                                                        limit 20 offset $skip_page";
                                        }
                                        $se_laptops = mysqli_query($conn, $sql);
                                        foreach($se_laptops as $each_laptop): ?>
                                <div class="col l-2-4 m-4 c-6">
                                    <a class="home-product-item" href="detail_products.php?id=<?php echo $each_laptop['id'] ?>">
                                        <div class="home-product-item__img" style="background-image: url(<?php echo $each_laptop['image'] ?>);"></div>
                                        <h4 class="home-product-item__name"><?php echo $each_laptop['name'] ?></h4>
                                        <div class="home-product-item__price">
                                            <span class="price-old"><?php echo number_format($each_laptop['price']) ?></span>
                                            <span class="price-current"><?php echo number_format($each_laptop['price_sale']); ?> đ</span>
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




