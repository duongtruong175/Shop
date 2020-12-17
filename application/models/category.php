<?php

class Category extends Model
{

    // lay tat ca categories
    public function getAllCategory()
    {
        $sql = "SELECT * FROM categories WHERE isDelete = 0;";
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
