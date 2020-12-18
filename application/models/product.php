<?php

class Product extends Model
{

    // lấy tất cả sản phẩm
    public function getAllProduct()
    {
        $sql = "SELECT * FROM products WHERE isDelete = 0";
        // tạo câu sql chuẩn bị
        $this->prepareQuery($sql);
        // lấy ra danh sách product
        $products = $this->getAllResult();
        return $products;
    }

    // hàm lấy sản phẩm theo id danh muc
    public function getProductByCategoryId($category_id) {
        $sql = "SELECT * FROM products WHERE isDelete = 0 AND category_id = :category_id";
        $this->prepareQuery($sql);
        // gắn dữ liệu
        $this->bindData(':category_id', $category_id);
        // lấy ra danh sách kết quả product
        $products = $this->getAllResult();
        return $products;
    }

    // hàm xem chi tiết 1 sản phẩm
    public function getDetailProduct($id) {
        $sql = "SELECT * FROM products WHERE isDelete = 0 AND id = :id";
        $this->prepareQuery($sql);
        $this->bindData(':id', $id);
        $product = $this->getSingleResult();
        return $product;
    }
    
}
