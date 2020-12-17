<?php

class Cart extends Model
{
    public $productModel;

    public function __construct() {
        parent::__construct();
        $this->productModel = new Product;
    }

    // lấy danh sách sản phẩm trong giỏ hàng của người dùng
    public function getCartByAccountId($account_id)
    {
        $sql = "SELECT carts.*, products.name,products.image,products.price FROM carts,products WHERE carts.isDelete = 0 AND carts.account_id = $account_id AND products.id = carts.product_id;";
        // tạo câu sql chuẩn bị
        $this->prepareQuery($sql);
        // lấy ra danh sách sản phẩm trong giỏ hàng kèm theo tên giá
        $carts = $this->getAllResult();
        if ($carts) {
            return $carts;
        } else {
            return NULL;
        }
    }

    // xóa sản phẩm trong giỏ hàng theo id giỏ hàng
    public function deleteCartbyId($id)
    {
        // xóa bằng cách đổi giá trị cột isDelete
        $sql = "UPDATE carts SET isDelete = 1 WHERE id = $id;";
        // tạo câu sql chuẩn bị
        $this->prepareQuery($sql);
        $this->executeQuery();
        $result = $this->getRowCount();
        return $result; //trả về số bản ghi được thực hiện bằng câu lệnh sql
    }
}
