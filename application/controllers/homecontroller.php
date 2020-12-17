<?php

class HomeController extends Controller
{

    function beforeAction()
    {
    }

    public function index()
    {
        // lấy dữ liệu cần thiết cho trang home
        $categories = $this->Home->categoryModel->getAllCategory();
        $this->set('categories', $categories);
        $products = $this->Home->productModel->getAllProduct();
        $this->set('products', $products);
    }

    public function view($category_id)
    {
        $categories = $this->Home->categoryModel->getAllCategory();
        $this->set('categories', $categories);
        $products = $this->Home->productModel->getProductByCategoryId($category_id);
        $this->set('products',$products);

    }

    function afterAction()
    {
    }
}
