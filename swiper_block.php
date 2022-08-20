<div class="grid wide">
    <div class="col">
        <div class="row">
            <nav class="box-products mb-3">
                <ul class="box-products__list list-unstyled">
                        <?php
                            require_once 'admin/control.php';
                            $products_sale=(new data)->se_products_sale();
                            foreach($products_sale as $each_sale):
                        ?>
                        <li class="box-products__item">
                            <a class="home-product-item" href="detail_products.php?id=<?php echo $each_sale['id'] ?>">
                                <div class="home-product-item__img" style="background-image: url(<?php echo $each_sale['image'] ?>);"></div>
                                <h4 class="home-product-item__name"><?php echo $each_sale['name'] ?></h4>
                                <div class="home-product-item__price">
                                    <span class="price-old"><?php echo number_format($each_sale['price']) ?> đ</span>
                                    <span class="price-current"><?php echo number_format($each_sale['price_sale']); ?> đ</span>
                                </div>
                                
                                <div class="home-product-item__favorite">
                                    <i class="fas fa-check"></i>
                                    <Span>Deal Shock</Span>
                                </div>
                            </a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </nav>
        </div>
    </div>
</div>