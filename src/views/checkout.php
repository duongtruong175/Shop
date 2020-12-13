<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Thanh toán</title>
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

    <!-- nội dung trang thanh toán -->
    <div class="content">
        <div class="container-form">
            <div class="signup">
                <h1 class="signup-heading">Thông tin để thanh toán</h1>
                <form action="#" class="signup-form" autocomplete="off">
                    <label for="name" class="signup-label">Name</label>
                    <input type="text" id="name" class="signup-input" required placeholder="enter your receiver">
                    <label for="phone" class="signup-label">Phone</label>
                    <input type="tel" id="phone" name="phone" class="signup-input" required placeholder="ex: 0123456789" pattern="[0-9]{10}">
                    <label for="province" class="signup-label">Province</label>
                    <select class="select-info" id="province" name="province">
                        <option value="0">Vui lòng chọn tỉnh/thành phố</option>
                    </select>
                    <label for="district" class="signup-label">District</label>
                    <select class="select-info" id="district" name="district">
                        <option value="0">Vui lòng chọn quận/huyện</option>
                    </select>
                    <label for="ward" class="signup-label">Ward</label>
                    <select class="select-info" id="ward" name="ward">
                        <option value="0">Vui lòng chọn phường/xã</option>
                    </select>
                    <label for="method" class="signup-label">Payment Method</label>
                    <select class="select-info" id="method" name="method">
                        <option value="0">--Chọn--</option>
                        <option value="Thanh toan khi nhan hang">Thanh toán khi nhận hàng</option>
                    </select>
                    <button class="signup-submit">Thanh toán</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p class="copyright">&copy; 2020 Shop. All rights reserved</p>
    </div>

</body>

</html>