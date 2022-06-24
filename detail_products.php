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

    <!-- Block-breadcrumbs -->
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
    
    <!-- Block-detail-product -->
    <div class="block-detail-product">
        <div class="detail-product__box-name">
        <?php
            require_once 'admin/control.php';
            $id=$_GET['id'];
            $products=(new data)->find_products($id);
            $each_product=mysqli_fetch_array($products);
        ?>
            <div class="grid wide">
                <div class="box-name__box-product-name">
                    <h1><?php echo $each_product['name'] ?></h1>
                </div>
            </div>
        </div>
        <div class="box-detail-product grid wide mt-3 mb-3">
            <div class="row no-gutters">
                <div class="l-4 c-12 ">
                    <div class="detail-product__box-left mb-3">
                        <div class="slides-wrap">
                            <img class="mySlides" src="<?php echo $each_product['image'] ?>">
                            <img class="mySlides" src="<?php echo $each_product['image'] ?>">
                            <img class="mySlides" src="https://image.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-se-midnight-select-2022031.jpg">
                        </div>

                        <div class="swiper-wrapper">
                            <div class="thumb-wrap">
                              <img class="thumb-item" src="<?php echo $each_product['image'] ?>" onclick="currentDiv(1)">
                            </div>
                            <div class="thumb-wrap">
                              <img class="thumb-item" src="<?php echo $each_product['image'] ?>" onclick="currentDiv(2)">
                            </div>
                            <div class="thumb-wrap">
                              <img class="thumb-item" src="https://image.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-se-midnight-select-2022031.jpg" onclick="currentDiv(3)">
                            </div>
                          </div>
                    </div>
                </div>
                <div class="l-4 c-12">
                    <div class="detail-product__box-center mb-3">
                    <!-- Box-price -->
                    <div class="box-info mb-2">
                        <div class="box-info__box-price">
                            <p class="price-current"><?php echo number_format($each_product['price_sale']) ?> đ</p>
                            <p class="price-old"><?php echo $each_product['price'] ?> đ</p>
                        </div>
                    </div>
                    <!-- Box-version -->
                    <div class="box-version mb-2">
                        <div class="list-version">
                            <a class="version-item active" href="#">
                                <strong>256GB</strong>
                                <span><?php echo $each_product['price'] ?></span>
                            </a>
                            <a class="version-item" href="#">
                                <strong>128GB</strong>
                                <span>13.490.000</span>
                            </a>
                            <a class="version-item" href="#">
                                <strong>64GB</strong>
                                <span>12.490.000</span>
                            </a>
                        </div>
                    </div>
                    <!-- Box-Options -->
                    <div class="product-option mb-2">
                        <div class="box-product-option">
                            <div class="box-option-title">
                                <p class="box-title__title font-weight-both">
                                    Chọn màu để xem giá và chi nhánh có hàng
                                </p>
                            </div>
                            <div class="box-option-content">
                                <ul class="list-colors">
                                    <li class="item-color disable">
                                        <a href="#">
                                            <img src="https://image.cellphones.com.vn/25x/media/catalog/product/d/o/download_2__3_7.png" alt="">
                                        </a>
                                        <p>
                                            <strong>Green</strong>
                                            <span>12.490.000</span>
                                        </p>
                                    </li>
                                    <li class="item-color active">
                                        <a href="#">
                                            <img src="<?php echo $each_product['image'] ?>" alt="">
                                        </a>
                                        <p>
                                            <strong><?php echo $each_product['name_color'] ?></strong>
                                            <span><?php echo number_format($each_product['price_sale']) ?> đ</span>
                                        </p>
                                    </li>
                                    <li class="item-color disable">
                                        <a href="#">
                                            <img src="https://image.cellphones.com.vn/25x/media/catalog/product/d/o/download_1__6_7.png" alt="">
                                        </a>
                                        <p>
                                            <strong>Orange</strong>
                                            <span>12.490.000</span>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Box-promotion -->
                    <div class="box-promotion mb-2">
                        <div class="box-promotion-title">
                            <i class="promotion-title__icon fa-solid fa-gift"></i>
                            <p class="promotion-title__title">
                                Khuyến mại
                            </p>
                        </div>
                        <div class="box-promotion-content">
                            <ul class="list-promotions">
                                <li class="promotion-item">
                                    <a href="#" class="text-decoration-none">
                                        Nhập CPS500 - Giảm 0đ cho các sản phẩm từ 0 triệu khi thanh toán qua VNPAY tại cửa hàng 
                                        <span>(xem chi tiết)</span>
                                    </a>
                                </li>
                                <li class="promotion-item">
                                    <a href="#" class="text-decoration-none" >
                                        Giảm thêm đến 2.000.000đ khi thanh toán qua thẻ tín dụng Citibank 
                                        <span>(xem chi tiết)</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Button-Buy -->
                    <div class="box-action-botton">
                        <a href="add2cart.php?id=<?php echo $each_product['id'] ?>" class="action-botton">
                            <strong>MUA NGAY</strong>
                            <span>(Giao tận nơi hoặc lấy tại cửa hàng)</span>
                        </a>
                    </div>
                    <!-- Box-promotion-more -->
                    <div class="box-promotion-more">
                        <div class="promotion-more-title">
                            <p class="promotion-more__title">Ưu đãi thêm</p>
                        </div>
                        <div class="promotion-more__content">
                            <ul class="list-promotions">
                                <li class="promotion-item">
                                    <a href="" class="text-decoration-none">Giảm thêm tới 1% cho thành viên Smember (áp dụng tùy sản phẩm)</a>
                                </li>
                                <li class="promotion-item">
                                    <a href="" class="text-decoration-none">Giảm thêm 500.000đ khi thanh toán qua thẻ tín dụng VP Bank cho đơn hàng từ 10 triệu</a>
                                </li>
                                <li class="promotion-item">
                                    <a href="" class="text-decoration-none">Giảm thêm 500.000đ khi thanh toán qua thẻ tín dụng VP Bank cho đơn hàng từ 10 triệu</a>
                                </li>
                                <li class="promotion-item">
                                    <a href="" class="text-decoration-none">Giảm thêm 500.000đ khi thanh toán qua thẻ tín dụng VP Bank cho đơn hàng từ 10 triệu</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="l-4 c-12">
                    <div class="detail-product__box-right mb-3">
                        <div class="box-warranty-info">
                            <div class="box-title">
                                <p class="box-title__title">Thông tin sản phẩm</p>
                            </div>
                            <div class="box-warranty-content">
                                <div class="warranty-info">
                                    <div class="warranty-info-item">
                                        <div class="warranty-info-item__icon-wrap">
                                            <i class="warranty-info-item__icon fa-solid fa-mobile-screen-button"></i>
                                        </div>
                                        <p>
                                            Máy mới 100% , chính hãng tại Việt Nam.
                                            <br>
                                            CellphoneW hiện là đại lý bán lẻ uỷ quyền iPhone chính hãng VN/A
                                        </p>
                                    </div>
                                    <div class="warranty-info-item">
                                        <div class="warranty-info-item__icon-wrap">
                                            <i class="warranty-info-item__icon fa-solid fa-box-open"></i>
                                        </div>
                                        <p>
                                            Điện thoại, Cáp sạc
                                        </p>
                                    </div>
                                    <div class="warranty-info-item">
                                        <div class="warranty-info-item__icon-wrap">
                                            <i class="warranty-info-item__icon fa-solid fa-shield-halved"></i>
                                        </div>
                                        <p>
                                            1 ĐỔI 1 trong 30 ngày nếu có lỗi phần cứng nhà sản xuất. Bảo hành 12 tháng tại trung tâm bảo hành chính hãng Authorized Service Provider <a class="text-decoration-none text-primary-color" href="#">(Xem chi tiết)</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Block-infomation -->
    <div class="block-infomation-product">
        <div class="grid wide">
            <div class="row sm-gutter col">
                <div class="l-8">
                    <div class="box-information">
                        <div class="box-outstanding-features">
                            <div class="box-title">
                                <h2>ĐẶC ĐIỂM NỔI BẬT</h2>
                            </div>
                            <div class="box-content">
                                <ul>
                                    <li>Hiệu năng vượt trội với vi xử lý mới nhất - Chip tiên tiến nhất, cân mọi tác vụ</li>
                                    <li>Tận hưởng không gian hiển thị sắc nét - Màn hình Liquid Retina nhỏ gọn 4.7 inch tỷ lệ 16:9</li>
                                    <li>Giải trí trọn vẹn ngày dài - Viên pin có nhiều cải tiến giúp bạn không còn lo lắng khi sử dụng</li>
                                    <li>Camera ghi trọn mọi khoảnh khắc - Camera đơn 12 MP f/1.8 hỗ trợ công nghệ Deep Fusion</li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-content">
                            <p>
                                <span>
                                    <strong>
                                        Thông tin mới nhất về điện thoại
                                    </strong>
                                </span>
                            </p> 
                            <p>
                                Những thông tin mới nhất về các dòng vừa ra mắt luôn mang được sự mong chờ và nhiều sự háo hức của người hâm mộ. Có thể nói rằng chiếc điện thoại này là dòng smartphone kích thước nhỏ, mang đến sự cơ động nhưng sở hữu cấu hình mạnh mẽ. Song liệu thế hệ thứ 3 có những điểm nào nổi bật!<span id="dots">...</span>
                            </p>
                            <span id="more">
                                <?php echo nl2br($each_product['description']) ?>
                            </span>
                            <button onclick="myFunction()" id="showMoreInfo">Xem thêm</button>
                        </div>
                    </div> 
                </div>
                <div class="l-4">
                    <div class="box-technical-info">
                        <div class="box-technical-title">
                            <h2 class="technical-title__title">Thông số kỹ thuật</h2>
                        </div>
                        <div class="box-technical-content">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Kích thước màn hìnhKích thước màn hình</th>
                                        <th>6.7 inches</th>
                                    </tr>
                                    <tr>
                                        <th>Công nghệ màn hình</th>
                                        <th>OLED</th>
                                    </tr>
                                    <tr>
                                        <th>Camera sau</th>
                                        <th>Camera góc rộng: 12MP, ƒ/1.5 <br> Camera góc siêu rộng: 12MP, ƒ/1.8 <br> Camera tele : 12MP, /2.8 Camera tele : 12MP, /2.8</th>
                                    </tr>
                                    <tr>
                                        <th>Camera trước</th>
                                        <th>12MP, ƒ/2.2</th>
                                    </tr>
                                    <tr>
                                        <th>Chipset</th>
                                        <th>Banana A15</th>
                                    </tr>
                                    <tr>
                                        <th>Dung lượng RAM</th>
                                        <th>6 GB</th>
                                    </tr>
                                    <tr>
                                        <th>Bộ nhớ trong</th>
                                        <th>128 GB</th>
                                    </tr>
                                    <tr>
                                        <th>Pin</th>
                                        <th>4,325mAh</th>
                                    </tr>
                                    <tr>
                                        <th>Thẻ SIM</th>
                                        <th>2 SIM (nano‑SIM và eSIM)</th>
                                    </tr>
                                    <tr>
                                        <th>Hệ điều hành</th>
                                        <th>iOS15</th>
                                    </tr>
                                    <tr>
                                        <th>Độ phân giải màn hình</th>
                                        <th>2778 x 1284 pixel</th>
                                    </tr>
                                    <tr>
                                        <th>Trọng lượng</th>
                                        <th>240g</th>
                                    </tr>
                                    <tr>
                                        <th>Bluetooth</th>
                                        <th>v5.0</th>
                                    </tr>
                                </tbody>
                            </table>
                
                            <div class="box-btn-show-more">
                                <a href="#" class="btn-show-more" id="showTechnical">
                                    Xem cấu hình chi tiết
                                    <i class="btn-show-more__icon fa-solid fa-angle-down"></i>
                                </a>
                            </div>
                            <div class="modal modal-body__overlay modal-technical-more-info modal--hide" id="endShow">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Thông số kỹ thuật</h4>
                                            <botton type="botton" class="close" id="headerHideTechInfo">
                                                <i class="close-icon fa-solid fa-xmark"></i>
                                                Đóng
                                            </botton>
                                        </div>
                                        <div class="modal-body">
                                            <div class="box-table">
                                                <div class="box-table-item">
                                                    <div class="box-title">
                                                        <p class="box-title__title">Màn hình</p>
                                                    </div>
                                                    <div class="box-content">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <th>Kích thước màn hình</th>
                                                                    <th>4.7 inches</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Công nghệ màn hình</th>
                                                                    <th>Liquid Retina</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Độ phân giải màn hình</th>
                                                                    <th>1334 x 750 pixels (HD+)</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tính năng màn hình</th>
                                                                    <th>625 nits, Haptic Touch, True Tone</th>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="box-table-item">
                                                    <div class="box-title">
                                                        <p class="box-title__title">Màn hình</p>
                                                    </div>
                                                    <div class="box-content">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <th>Kích thước màn hình</th>
                                                                    <th>4.7 inches</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Công nghệ màn hình</th>
                                                                    <th>4K 2160p@24fps
                                                                        <br>
                                                                        4K 2160p@30fps
                                                                        <br>
                                                                        4K 2160p@24fps
                                                                        <br>
                                                                        4K 2160p@30fps
                                                                        <br>
                                                                        4K 2160p@24fps
                                                                        <br>
                                                                        4K 2160p@30fps
                                                                        <br>
                                                                    </th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Độ phân giải màn hình</th>
                                                                    <th>1334 x 750 pixels (HD+)</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tính năng màn hình</th>
                                                                    <th>625 nits, Haptic Touch, True Tone</th>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="box-table-item">
                                                    <div class="box-title">
                                                        <p class="box-title__title">Màn hình</p>
                                                    </div>
                                                    <div class="box-content">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <th>Kích thước màn hình</th>
                                                                    <th>4.7 inches</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Công nghệ màn hình</th>
                                                                    <th>Liquid Retina</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Độ phân giải màn hình</th>
                                                                    <th>1334 x 750 pixels (HD+)</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tính năng màn hình</th>
                                                                    <th>625 nits, Haptic Touch, True Tone</th>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="box-table-item">
                                                    <div class="box-title">
                                                        <p class="box-title__title">Màn hình</p>
                                                    </div>
                                                    <div class="box-content">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <th>Kích thước màn hình</th>
                                                                    <th>4.7 inches</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Công nghệ màn hình</th>
                                                                    <th>Liquid Retina</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Độ phân giải màn hình</th>
                                                                    <th>1334 x 750 pixels (HD+)</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tính năng màn hình</th>
                                                                    <th>625 nits, Haptic Touch, True Tone</th>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="box-table-item">
                                                    <div class="box-title">
                                                        <p class="box-title__title">Màn hình</p>
                                                    </div>
                                                    <div class="box-content">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <th>Kích thước màn hình</th>
                                                                    <th>4.7 inches</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Công nghệ màn hình</th>
                                                                    <th>Liquid Retina</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Độ phân giải màn hình</th>
                                                                    <th>1334 x 750 pixels (HD+)</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tính năng màn hình</th>
                                                                    <th>625 nits, Haptic Touch, True Tone</th>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="box-table-item">
                                                    <div class="box-title">
                                                        <p class="box-title__title">Màn hình</p>
                                                    </div>
                                                    <div class="box-content">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <th>Kích thước màn hình</th>
                                                                    <th>4.7 inches</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Công nghệ màn hình</th>
                                                                    <th>Liquid Retina</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Độ phân giải màn hình</th>
                                                                    <th>1334 x 750 pixels (HD+)</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tính năng màn hình</th>
                                                                    <th>625 nits, Haptic Touch, True Tone</th>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="box-table-item">
                                                    <div class="box-title">
                                                        <p class="box-title__title">Màn hình</p>
                                                    </div>
                                                    <div class="box-content">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <th>Kích thước màn hình</th>
                                                                    <th>4.7 inches</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Công nghệ màn hình</th>
                                                                    <th>Liquid Retina</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Độ phân giải màn hình</th>
                                                                    <th>1334 x 750 pixels (HD+)</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tính năng màn hình</th>
                                                                    <th>625 nits, Haptic Touch, True Tone</th>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="box-table-item">
                                                    <div class="box-title">
                                                        <p class="box-title__title">Màn hình</p>
                                                    </div>
                                                    <div class="box-content">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <th>Kích thước màn hình</th>
                                                                    <th>4.7 inches</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Công nghệ màn hình</th>
                                                                    <th>Liquid Retina</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Độ phân giải màn hình</th>
                                                                    <th>1334 x 750 pixels (HD+)</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tính năng màn hình</th>
                                                                    <th>625 nits, Haptic Touch, True Tone</th>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="box-table-item">
                                                    <div class="box-title">
                                                        <p class="box-title__title">Màn hình</p>
                                                    </div>
                                                    <div class="box-content">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <th>Kích thước màn hình</th>
                                                                    <th>4.7 inches</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Công nghệ màn hình</th>
                                                                    <th>Liquid Retina</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Độ phân giải màn hình</th>
                                                                    <th>1334 x 750 pixels (HD+)</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tính năng màn hình</th>
                                                                    <th>625 nits, Haptic Touch, True Tone</th>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="box-table-item">
                                                    <div class="box-title">
                                                        <p class="box-title__title">Màn hình</p>
                                                    </div>
                                                    <div class="box-content">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <th>Kích thước màn hình</th>
                                                                    <th>4.7 inches</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Công nghệ màn hình</th>
                                                                    <th>Liquid Retina</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Độ phân giải màn hình</th>
                                                                    <th>1334 x 750 pixels (HD+)</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Tính năng màn hình</th>
                                                                    <th>625 nits, Haptic Touch, True Tone</th>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="#" class="btn-close" id="hideTechnicalInfo">Đóng</a>
                                        </div>
                                    </div>
                                </div>
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

    <!-- Automatic Slideshow -->
    <script>
        var myIndex = 0;
        carousel();
        
        function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}    
          x[myIndex-1].style.display = "block";  
          setTimeout(carousel, 4000); // Change image every 2 seconds
        }
    </script>

    <!-- Images as Indicators -->
    <script>
        function currentDiv(n) {
            showDivs(slideIndex = n);
        }
        
        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            // var dots = document.getElementsByClassName("demo");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            // for (i = 0; i < dots.length; i++) {
            //     dots[i].className = dots[i].className.replace("opacity-off", "");
            // }
            x[slideIndex-1].style.display = "block";
            // dots[slideIndex-1].className += "opacity-off";
        }
    </script>

    <!-- Show Technical Info -->
    <script>
        const showTechnical = document.getElementById("showTechnical")
        const modalHide = document.querySelector(".modal--hide");
        const body = document.querySelector('body')
        const endShow = document.querySelector(".modal-body__overlay")
        const hideTechnicalInfo = document.getElementById("hideTechnicalInfo")
        const headerHideTechInfo = document.getElementById("headerHideTechInfo")

        if(showTechnical) {
            showTechnical.onclick = (e) => {
                e.preventDefault()
                if(modalHide) {
                    modalHide.classList.toggle("toggleHideShow")
                    body.style.overflow = "hidden"
                }
            }
        }
        if(hideTechnicalInfo) {
            hideTechnicalInfo.onclick = (e) => {
                e.preventDefault()
                if(modalHide) {
                    modalHide.classList.toggle("toggleHideShow")
                    body.style.overflow = "inherit"
                }
            }
        }
        if(headerHideTechInfo) {
            headerHideTechInfo.onclick = (e) => {
                e.preventDefault()
                if(modalHide) {
                    modalHide.classList.toggle("toggleHideShow")
                    body.style.overflow = "inherit"
                }
            }
        }

    </script>

    <!-- Show more describe, Show less describe btn -->
    <script>
        function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("showMoreInfo");
        
        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Xem thêm"; 
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Ẩn đi"; 
            moreText.style.display = "inline";
        }
        }
    </script>

    
</body>
</html>