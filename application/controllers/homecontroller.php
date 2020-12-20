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
        $productsExpensive = $this->Home->productModel->getTopProductExpensive();
        $this->set('productsExpensive', $productsExpensive);
        $productsCheap = $this->Home->productModel->getTopProductCheap();
        $this->set('productsCheap', $productsCheap);
        $products = $this->Home->productModel->getAllProduct();
        $word = '';
        foreach($products as $product) {
            $word = $word .$product['name'].',' ;
        }
        $word = rtrim($word,",");
        $this->set('word',$word);
    }

    public function notfound()
    {
    }

    function afterAction()
    {
    }
}
