<!DOCTYPE html>
<html lang="en">

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
                <a href="#">Đăng nhập</a>
                <a href="#">Đăng ký</a>
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
                    <form>
                        <input type="text" placeholder="Enter keyword here">
                    </form>
                </div>
                <button class="search-button"><img src="<?php echo PATH_URL_IMG ?>search.png" alt="search logo"></button>
            </div>
        </div>
    </div>