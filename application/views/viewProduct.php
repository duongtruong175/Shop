<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Shop</title>
    <link rel="stylesheet" href="../../public/css/reset.css" />
    <link rel="stylesheet" href="../../public/css/style.css" />
</head>

<body>
    <!-- Header -->
    <div class="header">
        <div class="header-top">
            <div class="navbar-link">
                <a href="#">Thông báo</a>
                <a href="#">Trợ giúp</a>
                <a href="#">Đăng nhập</a>
                <a href="#">Đăng ký</a>
            </div>
        </div>
        <div class="header-content">
            <div class="logo">
                <a href="index.php"><img src="../../public/img/logo.png" alt=""></a>
            </div>
            <div class="search">
                <div class="search-input">
                    <form>
                        <input type="text" placeholder="Enter keyword here">
                    </form>
                </div>
                <button class="search-button"><img src="../../public/img/search.png"></button>
            </div>
            <div class="cart">
                <a href="#"><img src="../../public/img/cart.png" alt=""> </a>
            </div>
        </div>
    </div>

    <!-- nội dung trang xem chi tiết sản phẩm -->
    <div class="content">
        <div class="container-product">
            <div class="left">
                <div class="product-img">
                    <img id="img-product" src="../../public/upload/products/samsung_galaxy_note_10_plus_256gb.png">
                </div>
            </div>
            <div class="right">
                <div class="product-detail">
                    <h3>Tên sản phẩm:</h3><span>samsung_galaxy_note_10_plus_256gb</span>
                </div>
                <div class="product-detail">
                    <h3>Giá sản phẩm:</h3><span>600$</span>
                </div>
                <div class="product-detail">
                    <h3>Chi tiết sản phẩm:</h3>
                    <p>
                        Màn hình: 6.4", Full HD+
                        Chip: MediaTek MT6768 8 nhân (Helio P65)
                        RAM: 6 GB, Bộ nhớ trong: 128 GB
                        Camera sau: Chính 48 MP & Phụ 8 MP, 5 MP, 5 MP
                        Camera trước: 20 MP
                        Pin: 5000 mAh, có sạc nhanh
                    </p>
                </div>
                <div class="product-detail">
                    <label>Số lượng: </label><input style="width: 44px;" type="number" name="quantity" value="1" min="1">
                </div>
                <div class="product-detail">
                    <div id="btn-add-to-cart"><button>Add to cart</button></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p class="copyright">&copy; 2020 Shop. All rights reserved</p>
    </div>

</body>

</html>