<?php

class Bill extends Model
{

    // thêm đơn hàng
    public function addBill($account_id, $name, $phone, $address, $payment, $cost)
    {
        $sql = "INSET INTO bills() value * FROM categories WHERE isDelete = 0;";
        // tạo câu sql chuẩn bị
        $this->prepareQuery($sql);
        // lấy ra danh sách categories
        $categories = $this->getAllResult();
        if ($categories) {
            return $categories;
        } else {
            return NULL;
        }
    }

}
