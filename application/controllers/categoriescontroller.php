<?php

class CategoriesController extends Controller
{

    function beforeAction()
    {
    }

    public function viewall()
    {
        // lấy dữ liệu cần thiết cho trang categories
        $categories = $this->Category->getAllCategory();
        $this->set('categories', $categories);
        $products = $this->Category->productModel->getAllProduct();
        $this->set('products', $products);
        $words = $this->Category->productModel->getAllNameProduct();
        $this->set('words',$words);
    }

    public function view($category_id)
    {
        $categories = $this->Category->getAllCategory();
        $this->set('categories', $categories);
        $products = $this->Category->productModel->getProductByCategoryId($category_id);
        $this->set('products',$products);
        $this->set('category_selected', $category_id);
        $words = $this->Category->productModel->getAllNameProduct();
        $this->set('words',$words);
    }

    function afterAction()
    {
    }
}
