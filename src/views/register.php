<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Đăng ký</title>
    <link rel="stylesheet" href="../../public/css/reset.css" />
    <link rel="stylesheet" href="../../public/css/style.css" />
</head>

<body>
    <!-- Header đăng ký-->
    <div class="header">
        <div style="display: flex;align-items: center;height: 100%;justify-content: space-between;">
            <div style="display: flex;align-items: center;">
                <a href="#" style="margin-left: 10px;"><img src="../../public/img/logo.png" alt=""></a>
                <div class="line"></div>
                <span style="padding-left: 20px;font-size: 24px;color: white;">
                    Đăng ký
                </span>
            </div>
            <a href="#" style="text-decoration: none; margin-right: 1rem;cursor: pointer;">
                <p>Cần hỗ trợ ?</p>
            </a>
        </div>
    </div>

    <!-- nội dung trang đăng ký -->
    <div class="content">
        <div class="container-form">
            <div class="signup">
                <h1 class="signup-heading">Đăng ký</h1>
                <form action="#" class="signup-form" autocomplete="off">
                    <label for="username" class="signup-label">User name</label>
                    <input type="text" id="username" name="username" class="signup-input" required placeholder="enter your username">
                    <label for="password" class="signup-label">Password</label>
                    <input type="password" id="password" name="password" class="signup-input" required placeholder="enter your password">
                    <label for="name" class="signup-label">Name</label>
                    <input type="text" id="name" name="name" class="signup-input" required placeholder="enter your name">
                    <label for="date" class="signup-label">Date</label>
                    <input type="date" id="date" name="date" class="signup-input" placeholder="dd/mm/yyyy">
                    <label for="phone" class="signup-label">Phone</label>
                    <input type="tel" id="phone" name="phone" class="signup-input" placeholder="ex: 0123456789" pattern="[0-9]{10}">
                    <label for="address" class="signup-label">Address</label>
                    <input type="text" id="address" name="address" class="signup-input" placeholder="enter your address">
                    <button class="signup-submit">Đăng ký</button>
                </form>
                <p class="signup-already">
                    <span>Bạn đã có tài khoản ?</span>
                    <a href="#" class="signup-login-link">Đăng nhập</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p class="copyright">&copy; 2020 Shop. All rights reserved</p>
    </div>

</body>

</html>