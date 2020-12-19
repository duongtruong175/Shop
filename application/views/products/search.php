    <!-- Nội dung trang home index -->
    <div class="content">
        <div class="container-flex">
            <div>Day la Ket qua tim kiem cho tu khoa <?php $keyword ?></div>
            <div class="products">
                <div class="products-list">
                    <?php
                    if (!empty($products)) {
                        foreach ($products as $product) {
                    ?>
                            <div class="product">
                                <div class="product-view">
                                    <div class="product-img">
                                        <a href="<?php echo BASEPATH ?>/products/view/<?php echo $product['id'] ?>"><img id="img-product" src="<?php echo BASEPATH . $product['image'] ?>"></a>
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