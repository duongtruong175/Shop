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

    public function delete($id)
    {
        $result = $this->Cart->deleteCartbyId($id);
        if ($result == 1) {
            header("Location: ".BASEPATH."/carts/index");
        } else {
            echo "<script type='text/javascript'>alert('Xóa sản phẩm bị lỗi, xin thử lại !');</script>";
        }
    }

    function afterAction()
    {
    }
}
