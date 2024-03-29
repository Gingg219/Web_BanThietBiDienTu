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
    <link rel="stylesheet" href="./assets/css/supplier.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.1.1-web/css/all.css">
</head>

<body>
    <?php
    include('components/header.php')
    ?>

    
    <?php
    include('components/block_breadcrumbs.php')
    ?>

    <!-- Container -->
    <div class="container">
        <div class="grid wide">
            <div class="container__content container-mobile__content">
                <div class="row">
                    <div class="col">
                        <!-- Block-filter -->
                        <?php
                        include('components/block_filter.php');
                        ?>
                    </div>

                    <!-- Swiper-block  -->
                    <?php
                    include('components/swiper_block.php');
                    ?>

                    <!-- filter_block -->
                    <?php
                    include('components/filter_block.php')
                    ?>

                    <div class="home-product" style="width: 100%">
                        <!-- grip -> row -> column -->
                        <div class="grid wide">
                            <div class="row sm-gutter">
                                <!-- product item -->
                                <?php
                                require_once 'admin/control.php';
                                $catalog = '';
                                $check = '';
                                if (isset($_GET['search'])) {
                                    $search = $_GET['search'];
                                }
                                if (isset($_POST['sale'])) {
                                    $check = $_POST['sale'];
                                }
                                $page = 1;
                                if (isset($_GET['page'])) {
                                    $page = $_GET['page'];
                                }
                                $all_product = (new data)->count_product($search);
                                $all_page = ceil($all_product / 10);
                                $skip_page = 10 * ($page - 1);
                                switch ($check) {
                                    case '1':
                                        $sql = "SELECT products.*,
                                                (products.price-products.price_sale) as sale 
                                                FROM products INNER JOIN manufacturers On
                                                products.id_manufacturers=manufacturers.id
                                                WHERE
                                                products.name like '%$search%' or  manufacturers.name like '%$search%'
                                                order by products.price_sale desc
                                                limit 10 offset $skip_page";
                                        break;
                                    case '2':
                                        $sql = "SELECT products.*,
                                                (products.price-products.price_sale) as sale 
                                                FROM products INNER JOIN manufacturers On
                                                products.id_manufacturers=manufacturers.id
                                                WHERE
                                                products.name like '%$search%' or  manufacturers.name like '%$search%'
                                                order by products.price_sale asc
                                                limit 10 offset $skip_page";
                                        break;
                                    default:
                                        $sql = "SELECT products.*,
                                                (products.price-products.price_sale) as sale 
                                                FROM products INNER JOIN manufacturers On
                                                products.id_manufacturers=manufacturers.id
                                                WHERE
                                                products.name like '%$search%' or  manufacturers.name like '%$search%'
                                                order by sale desc
                                                limit 10 offset $skip_page";
                                }

                                $se_products = mysqli_query($conn, $sql);
                                ?>
                                <?php foreach ($se_products as $each_product) : ?>
                                    <div class="col l-2-4 m-4 c-6">
                                        <a class="home-product-item" href="detail_products.php?id=<?php echo $each_product['id'] ?>">
                                            <div class="home-product-item__img" style="background-image: url(<?php echo $each_product['image'] ?>);"></div>
                                            <h4 class="home-product-item__name"><?php echo $each_product['name'] ?></h4>
                                            <div class="home-product-item__price">
                                                <span class="price-old"><?php echo number_format($each_product['price']) ?> đ</span>
                                                <span class="price-current"><?php echo number_format($each_product['price_sale']) ?> đ</span>
                                            </div>
                                            <div class="home-product-item__action">
                                                <div class="home-product-item__rating">
                                                    <i class="home-product-item__star--gold fas fa-star"></i>
                                                    <i class="home-product-item__star--gold fas fa-star"></i>
                                                    <i class="home-product-item__star--gold fas fa-star"></i>
                                                    <i class="home-product-item__star--gold fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <span class="home-product-item__sold"><?php echo number_format($each_product['sold']) ?> đã bán</span>
                                            </div>
                                            <?php if ($each_product['sold'] > 9) { ?>
                                                <div class="home-product-item__favorite">
                                                <i class="fas fa-check"></i>
                                                <Span>Yêu thích</Span>
                                            </div>
                                            <?php } ?>
                                        </a>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <?php require_once 'components/paging.php' ?>
                </div>
            </div>
        </div>
    </div>

    <?php
    include('components/footer.php')
    ?>

</body>

</html>