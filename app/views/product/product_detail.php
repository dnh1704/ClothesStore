<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../../public/css/root.css" />
    <link rel="stylesheet" href="../../../public/css/header.css" />
    <link rel="stylesheet" href="../../../public/css/footer.css" />
    <link rel="stylesheet" href="../../../public/css/body.css" />
    <link rel="stylesheet" href="../../../public/css/product/product_detail.css     " />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <!-- header -->
    <?php
    require '../components/header.php';
    ?>

    <!-- body -->

    <div class="card-wrapper">
        <div class="content-card col-12">
            <div class="box-card col-12">
                <div class="card">
                    <!-- card left -->
                    <div class="product-imgs">
                        <div class="img-display">
                            <div class="img-showcase">
                                <img src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_1.jpg" alt="shoe image">
                                <img src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_2.jpg" alt="shoe image">
                                <img src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_3.jpg" alt="shoe image">
                                <img src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_4.jpg" alt="shoe image">
                            </div>
                        </div>
                        <div class="img-select">
                            <div class="img-item">
                                <a href="#" data-id="1">
                                    <img src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_1.jpg" alt="shoe image">
                                </a>
                            </div>
                            <div class="img-item">
                                <a href="#" data-id="2">
                                    <img src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_2.jpg" alt="shoe image">
                                </a>
                            </div>
                            <div class="img-item">
                                <a href="#" data-id="3">
                                    <img src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_3.jpg" alt="shoe image">
                                </a>
                            </div>
                            <div class="img-item">
                                <a href="#" data-id="4">
                                    <img src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_4.jpg" alt="shoe image">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- card right -->
                    <div class="product-content">
                        <h2 class="product-title">Áo phông tay lỡ Hàn Quốc, áo phông màu trắng form rộng unisex, áo thun 1k, áo phông 1k TEE SHOP 35-70kg|| Mã ATU1s</h2>
                        <a href="#" class="product-link">visit nike store</a>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span>4.7(21)</span>
                        </div>

                        <div class="product-price">
                            <p class="last-price">Old Price: <span>257.000Đ</span></p>
                            <p class="new-price">New Price: <span>200.000Đ (5%)</span></p>
                        </div>

                        <div class="product-detail">
                            <h2>Thông tin sản phẩm: </h2>
                            <p>Sản phẩm với mẫu mã đa dạng, phù hợp với mọi lứa tuổi</p>
                            <p>Với những thông tin mới hoàn toàn phù hợp, đep mắt</p>
                            <ul>
                                <li> Màu sắc: <span>Đen</span></li>
                                <li>Trạng thái: <span>Còn hàng</span></li>
                                <li>Loại: <span>Giày</span></li>
                                <li>Vận Chuyển tới: <span> Số 10A, Tân Mai Hoàng Mai</span> </li>
                                <li>Phí Ship: <span>30k</span></li>
                            </ul>
                        </div>

                        <div class="purchase-info">
                            <input type="number" min="0" value="1">
                            <button type="button" class="btn">
                                Thêm vào giỏ hàng <i class="fas fa-shopping-cart"></i>
                            </button>
                            <button type="button" class="btn">Mua Hàng</button>
                        </div>

                        <div class="social-links">
                            <p>Share At: </p>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="body col-12">
        <div class="product-content col-10">
            <div class="bar-product-detail col-12">
                <p>SẢN PHẨM GỢI Ý</p>
            </div>
        </div>
    </div>





    <!-- footer -->
    <?php
    require '../components/footer.php';
    ?>
</body>

</html>