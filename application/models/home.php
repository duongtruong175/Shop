<?php

class Home extends Model
{
    public $productModel;

    public function __construct() {
        parent::__construct();
        $this->productModel = new Product;
    }
}
