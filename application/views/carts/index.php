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
                    <?php
                    if($carts) {
                        foreach($carts as $cart){
                            echo   '<tr>
                                        <td>
                                            <div class="product-img">
                                                <img id="img-product" src="'.BASEPATH.$cart['image'].'">
                                            </div>
                                        </td>
                                        <td>'.$cart['name'].'</td>
                                        <td>'.$cart['price'].'</td>
                                        <td><input style="width: 44px;" type="number" name="quantity" value="1" min="1"></td>
                                        <td><button class="btn-delete"><img src="'.PATH_URL_IMG.'delete.png"></button></td>
                                    </tr>';
                        }
                    }
                    ?>
                </tbody>
            </table>
            <div class="checkout">
                <label>Tổng tiền hàng: </label><span></span>
                <button id="btn-checkout">Thanh toán</button>
            </div>
        </div>
    </div>