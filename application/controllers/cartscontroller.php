<?php

class CartsController extends Controller
{

    function beforeAction()
    {
    }

    public function index()
    {
        if (!isset($_SESSION['user_name'])) {
            //$account_id = $_SESSION['user_name'];
            $account_id = 2;
            $carts = $this->Cart->getCartByAccountId($account_id);
            $this->set('carts', $carts);
        } else { // nếu chưa đăng nhập thì chuyển đến đăng nhập
            header("Location: ".BASEPATH."/accounts/login");
        }
    }

    function afterAction()
    {
    }
}
