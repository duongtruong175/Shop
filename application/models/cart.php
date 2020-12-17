<?php

class Cart extends Model
{
    // lấy danh sách sản phẩm trong giỏ hàng của người dùng
    public function getCartByAccountId($account_id)
    {
        $sql = "SELECT carts.*, products.* FROM carts,products WHERE carts.isDelete = 0 AND carts.account_id = $account_id AND products.id = carts.product_id;";
        // tạo câu sql chuẩn bị
        $this->prepareQuery($sql);
        // lấy ra danh sách categories
        $carts = $this->getAllResult();
        echo $carts;
        if ($carts) {
            return $carts;
        } else {
            return NULL;
        }
    }
}
