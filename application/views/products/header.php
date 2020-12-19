<!DOCTYPE html>
<html lang="vn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
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
            <div class="logo">
                <a href="<?php echo BASEPATH ?>/home/index"><img src="<?php echo PATH_URL_IMG ?>logo.png" alt="shop logo"></a>
            </div>
            <div class="search">
                <div class="search-input">
                    <form action="<?php echo BASEPATH ?>/products/search" method="POST" id="search">
                        <input type="text" id="keyword" name="keyword" value="<?php if (isset($keyword)) {
                                                                                    echo $keyword;
                                                                                } ?>" placeholder="Enter keyword here">
                    </form>
                </div>
                <button class="search-button" form="search"><img src="<?php echo PATH_URL_IMG ?>search.png" alt="search logo"></button>
            </div>
            <div class="cart">
                <a href="<?php echo BASEPATH ?>/carts/viewall"><img src="<?php echo PATH_URL_IMG ?>cart.png" alt="cart logo"> </a>
            </div>
        </div>
    </div>