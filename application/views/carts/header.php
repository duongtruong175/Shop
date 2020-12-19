<!DOCTYPE html>
<html lang="vn">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Giỏ hàng</title>
    <link href="<?php echo BASEPATH ?>/public/css/reset.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo BASEPATH ?>/public/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Header -->
    <div class="header">
        <div class="header-top">
            <div class="navbar-link">
                <a href="#">Thông báo</a>
                <a href="#">Trợ giúp</a>
                <?php
                if (!isset($_SESSION['user_name'])) {
                    echo '<a href="' . BASEPATH . '/accounts/login">Đăng nhập</a>
                          <a href="' . BASEPATH . '/accounts/register">Đăng ký</a>';
                } else {
                    echo '<a href="' . BASEPATH . '/accounts/logout"><img class="logo-user" src="' . PATH_URL_IMG . 'user.png" alt="cart logo">' . $_SESSION['user_name'] . '</a>';
                }
                ?>
            </div>
        </div>
        <div class="header-content">
            <div style="display: flex;align-items: center;">
                <a href="<?php echo BASEPATH ?>/home/index" style="margin-left: 10px;"><img src="<?php echo PATH_URL_IMG ?>logo.png" alt="shop logo"></a>
                <div class="line"></div>
                <span style="padding-left: 20px;font-size: 24px;color: white;">
                    Giỏ hàng
                </span>
            </div>
            <div class="search" style="margin: 0 150px;">
                <div class="search-input">
                    <form action="<?php echo BASEPATH ?>/products/search" method="POST" id="search">
                        <input type="text" id="keyword" name="keyword" placeholder="Enter keyword here">
                    </form>
                </div>
                <button class="search-button" form="search"><img src="<?php echo PATH_URL_IMG ?>search.png" alt="search logo"></button>
            </div>
        </div>
    </div>