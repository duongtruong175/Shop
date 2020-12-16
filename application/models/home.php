<?php

class Home extends Model
{
    public $categoryModel;
    public $productModel;

    public function __construct() {
        parent::__construct();
        $this->categoryModel = new Category;
        $this->productModel = new Product;
    }
}
