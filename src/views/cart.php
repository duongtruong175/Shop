<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Giỏ hàng</title>
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
            <div style="display: flex;align-items: center;">
                <a href="#" style="margin-left: 10px;"><img src="../../public/img/logo.png" alt=""></a>
                <div class="line"></div>
                <span style="padding-left: 20px;font-size: 24px;color: white;">
                    Giỏ hàng
                </span>
            </div>
            <div class="search" style="margin: 0 150px;">
                <div class="search-input">
                    <form>
                        <input type="text" placeholder="Enter keyword here">
                    </form>
                </div>
                <button class="search-button"><img src="../../public/img/search.png"></button>
            </div>
        </div>
    </div>

    <!-- nội dung trang giỏ hàng -->
    <div class="content">
        <div class="container-cart">
            <table class="cart-detail">
                <thead>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="product-img">
                                <img id="img-product" src="../../public/upload/products/samsung_galaxy_note_10_plus_256gb.png">
                            </div>
                        </td>
                        <td>samsung_galaxy_note_10_plus_256gb</td>
                        <td>600.000</td>
                        <td><input style="width: 44px;" type="number" name="quantity" value="1" min="1"></td>
                        <td><button class="btn-delete"><img src="../../public/img/delete.png"></button></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="product-img">
                                <img id="img-product" src="../../public/upload/products/samsung_galaxy_note_10_plus_256gb.png">
                            </div>
                        </td>
                        <td>samsung_galaxy_note_10_plus_256gb</td>
                        <td>600.000</td>
                        <td><input style="width: 44px;" type="number" name="quantity" value="1" min="1"></td>
                        <td><button class="btn-delete"><img src="../../public/img/delete.png"></button></td>
                    </tr>
                </tbody>
            </table>
            <div class="checkout">
                <label>Tổng tiền hàng: </label><span>1.200.000</span>
                <button id="btn-checkout">Thanh toán</button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p class="copyright">&copy; 2020 Shop. All rights reserved</p>
    </div>

</body>

</html>