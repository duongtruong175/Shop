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
                    <?php
                    if ($categories) {
                        foreach ($categories as $category) {
                    ?>
                            <li>
                                <a href="#"><span><?php echo $category['name'] ?></span></a>
                            </li>
                    <?php
                        }
                    }
                    ?>
                </ul>
            </div>
            <!-- bên phải -->
            <div class="products">
                <div class="products-list">
                    <?php
                    if ($products) {
                        foreach ($products as $product) {
                    ?>
                            <div class="product">
                                <div class="product-view">
                                    <div class="product-img">
                                        <a href="#"><img id="img-product" src="<?php echo BASEPATH . $product['image'] ?>"></a>
                                    </div>
                                    <div class="product-info">
                                        <div id="name-product"><?php echo $product['name'] ?></div>
                                        <div id="price-product"><?php echo $product['price'] ?>$</div>
                                        <div id="btn-add-to-cart"><button>Add to cart</button></div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>