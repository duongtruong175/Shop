<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <title>Đăng nhập</title>
  <link rel="stylesheet" href="../../public/css/reset.css" />
  <link rel="stylesheet" href="../../public/css/style.css" />
</head>

<body>
  <!-- Header đăng nhập-->
  <div class="header">
    <div style="display: flex;align-items: center;height: 100%;justify-content: space-between;">
      <div style="display: flex;align-items: center;">
        <a href="#" style="margin-left: 10px;"><img src="../../public/img/logo.png" alt=""></a>
        <div class="line"></div>
        <span style="padding-left: 20px;font-size: 24px;color: white;">
          Đăng nhập
        </span>
      </div>
      <a href="#" style="text-decoration: none; margin-right: 1rem;cursor: pointer;">
        <p>Cần hỗ trợ ?</p>
      </a>
    </div>
  </div>

  <!-- nội dung trang đăng nhập -->
  <div class="content">
    <div class="container-form">
      <div class="signup">
        <h1 class="signup-heading">Đăng nhập</h1>
        <form action="#" class="signup-form" autocomplete="off">
          <label for="username" class="signup-label">User name</label>
          <input type="text" id="username" class="signup-input" required placeholder="enter your username">
          <label for="password" class="signup-label">Password</label>
          <input type="password" id="password" class="signup-input" required placeholder="enter your password">
          <button class="signup-submit">Đăng nhập</button>
        </form>
        <p class="signup-already">
          <span>Bạn chưa có tài khoản ?</span>
          <a href="#" class="signup-login-link">Đăng ký</a>
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