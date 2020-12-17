<?php 

class ProductsController extends Controller {
    function beforeAction()
    {

    }

    public function view($id) {
        $product = $this->Product->getDetailProduct($id);
        $this->set('product', $product);
    }

    function afterAction()
    {

    }
}