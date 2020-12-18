<?php

class CartsController extends Controller
{

    function beforeAction()
    {
    }

    public function viewall()
    {
        if (isset($_SESSION['user_id'])) {
            $account_id = $_SESSION['user_id'];
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
            header("Location: ".BASEPATH."/carts/viewall");
        } else {
            $_SESSION['dangerous_delete_cart'] = 'Xóa sản phẩm thất bại, xin thử lại!';
            header("Location: ".BASEPATH."/carts/viewall");
        }
    }

    public function add()
    {
        
    }

    function afterAction()
    {
    }
}
