<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
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
            <div class="logo">
                <a href="index.php"><img src="<?php echo PATH_URL_IMG ?>logo.png" alt=""></a>
            </div>
            <div class="search">
                <div class="search-input">
                    <form>
                        <input type="text" placeholder="Enter keyword here">
                    </form>
                </div>
                <button class="search-button"><img src="<?php echo PATH_URL_IMG ?>search.png"></button>
            </div>
            <div class="cart">
                <a href="#"><img src="<?php echo PATH_URL_IMG ?>cart.png" alt=""> </a>
            </div>
        </div>
    </div>

    <!-- Nội dung trang home index -->
    <div class="content">
        <div class="container-flex">
            <!-- bên trái -->
            <div class="catagories">
                <div class="catagories-header">
                    <img src="<?php echo PATH_URL_IMG ?>list.png">
                    <span>Tất cả danh mục</span>
                </div>
                <ul class="catagories-list">
                    <li>
                        <a href="#"><span>Samsung</span></a>
                    </li>
                    <li>
                        <a href="#"><span>Iphone</span></a>
                    </li>
                    <li>
                        <a href="#"><span>Oppo</span></a>
                    </li>
                    <li>
                        <a href="#"><span>Nokia</span></a>
                    </li>
                </ul>
            </div>
            <!-- bên phải -->
            <div class="products">
                <div class="products-list">
                    <div class="product">
                        <div class="product-view">
                            <div class="product-img">
                                <a href="#"><img id="img-product" src="<?php echo PATH_URL_IMG_PRODUCT ?>samsung_galaxy_note_10_plus_256gb.png"></a>
                            </div>
                            <div class="product-info">
                                <div id="name-product">Samsung Note 9</div>
                                <div id="price-product">600.000</div>
                                <div id="btn-add-to-cart"><button>Add to cart</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-view">
                            <div class="product-img">
                                <a href="#"><img id="img-product" src="<?php echo PATH_URL_IMG_PRODUCT ?>samsung_galaxy_note_10_plus_256gb.png"></a>
                            </div>
                            <div class="product-info">
                                <div id="name-product">Samsung Note 9</div>
                                <div id="price-product">600.000</div>
                                <div id="btn-add-to-cart"><button>Add to cart</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-view">
                            <div class="product-img">
                                <a href="#"><img id="img-product" src="<?php echo PATH_URL_IMG_PRODUCT ?>samsung_galaxy_note_10_plus_256gb.png"></a>
                            </div>
                            <div class="product-info">
                                <div id="name-product">Samsung Note 9</div>
                                <div id="price-product">600.000</div>
                                <div id="btn-add-to-cart"><button>Add to cart</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-view">
                            <div class="product-img">
                                <a href="#"><img id="img-product" src="<?php echo PATH_URL_IMG_PRODUCT ?>samsung_galaxy_note_10_plus_256gb.png"></a>
                            </div>
                            <div class="product-info">
                                <div id="name-product">Samsung Note 9</div>
                                <div id="price-product">600.000</div>
                                <div id="btn-add-to-cart"><button>Add to cart</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-view">
                            <div class="product-img">
                                <a href="#"><img id="img-product" src="<?php echo PATH_URL_IMG_PRODUCT ?>samsung_galaxy_note_10_plus_256gb.png"></a>
                            </div>
                            <div class="product-info">
                                <div id="name-product">Samsung Note 9</div>
                                <div id="price-product">600.000</div>
                                <div id="btn-add-to-cart"><button>Add to cart</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-view">
                            <div class="product-img">
                                <a href="#"><img id="img-product" src="<?php echo PATH_URL_IMG_PRODUCT ?>samsung_galaxy_note_10_plus_256gb.png"></a>
                            </div>
                            <div class="product-info">
                                <div id="name-product">Samsung Note 9</div>
                                <div id="price-product">600.000</div>
                                <div id="btn-add-to-cart"><button>Add to cart</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-view">
                            <div class="product-img">
                                <a href="#"><img id="img-product" src="<?php echo PATH_URL_IMG_PRODUCT ?>samsung_galaxy_note_10_plus_256gb.png"></a>
                            </div>
                            <div class="product-info">
                                <div id="name-product">Samsung Note 9</div>
                                <div id="price-product">600.000</div>
                                <div id="btn-add-to-cart"><button>Add to cart</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-view">
                            <div class="product-img">
                                <a href="#"><img id="img-product" src="<?php echo PATH_URL_IMG_PRODUCT ?>samsung_galaxy_note_10_plus_256gb.png"></a>
                            </div>
                            <div class="product-info">
                                <div id="name-product">Samsung Note 9</div>
                                <div id="price-product">600.000</div>
                                <div id="btn-add-to-cart"><button>Add to cart</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-view">
                            <div class="product-img">
                                <a href="#"><img id="img-product" src="<?php echo PATH_URL_IMG_PRODUCT ?>samsung_galaxy_note_10_plus_256gb.png"></a>
                            </div>
                            <div class="product-info">
                                <div id="name-product">Samsung Note 9</div>
                                <div id="price-product">600.000</div>
                                <div id="btn-add-to-cart"><button>Add to cart</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-view">
                            <div class="product-img">
                                <a href="#"><img id="img-product" src="<?php echo PATH_URL_IMG_PRODUCT ?>samsung_galaxy_note_10_plus_256gb.png"></a>
                            </div>
                            <div class="product-info">
                                <div id="name-product">Samsung Note 9</div>
                                <div id="price-product">600.000</div>
                                <div id="btn-add-to-cart"><button>Add to cart</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-view">
                            <div class="product-img">
                                <a href="#"><img id="img-product" src="<?php echo PATH_URL_IMG_PRODUCT ?>samsung_galaxy_note_10_plus_256gb.png"></a>
                            </div>
                            <div class="product-info">
                                <div id="name-product">Samsung Note 9</div>
                                <div id="price-product">600.000</div>
                                <div id="btn-add-to-cart"><button>Add to cart</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-view">
                            <div class="product-img">
                                <a href="#"><img id="img-product" src="<?php echo PATH_URL_IMG_PRODUCT ?>samsung_galaxy_note_10_plus_256gb.png"></a>
                            </div>
                            <div class="product-info">
                                <div id="name-product">Samsung Note 9</div>
                                <div id="price-product">600.000</div>
                                <div id="btn-add-to-cart"><button>Add to cart</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-view">
                            <div class="product-img">
                                <a href="#"><img id="img-product" src="<?php echo PATH_URL_IMG_PRODUCT ?>samsung_galaxy_note_10_plus_256gb.png"></a>
                            </div>
                            <div class="product-info">
                                <div id="name-product">Samsung Note 9</div>
                                <div id="price-product">600.000</div>
                                <div id="btn-add-to-cart"><button>Add to cart</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-view">
                            <div class="product-img">
                                <a href="#"><img id="img-product" src="<?php echo PATH_URL_IMG_PRODUCT ?>samsung_galaxy_note_10_plus_256gb.png"></a>
                            </div>
                            <div class="product-info">
                                <div id="name-product">Samsung Note 9</div>
                                <div id="price-product">600.000</div>
                                <div id="btn-add-to-cart"><button>Add to cart</button></div>
                            </div>
                        </div>
                    </div>
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