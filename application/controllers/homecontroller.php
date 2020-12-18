<?php

class HomeController extends Controller
{

    function beforeAction()
    {
    }

    public function index()
    {
        // lấy dữ liệu cần thiết cho trang home
        $products = $this->Home->productModel->getAllProduct();
        $this->set('products', $products);
    }

    function afterAction()
    {
    }
}
