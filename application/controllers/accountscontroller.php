<?php

class AccountsController extends Controller
{

    function beforeAction()
    {
    }

    function login()
    {
        $this->set('title', 'Đăng nhập');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $users = $this->Account->getAllUser();
            foreach ($users as $user) {
                if ($user['username'] == $username && $user['password'] == $password) {
                    $_SESSION['user_name'] = $user['name'];
                    $_SESSION['user_id'] = $user['id'];
                    header("Location: " . BASEPATH . "/home/index");
                }
            }
            $this->set('dangerous', 'Tài khoản hoặc mật khẩu không chính xác!');
        }
    }

    function register()
    {
        $this->set('title', 'Đăng ký');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $name = $_POST['name'];
            $date = $_POST['date'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $users = $this->Account->getAllUser();
            $state = 0;
            foreach ($users as $user) {
                if ($user['username'] == $username) {
                    $this->set('dangerUsername', 'Tài khoản đã tồn tại!');
                    $state = 1;
                }
                if ($user['phone'] == $phone) {
                    $this->set('dangerPhone', 'Số điện thoại đã được sử dụng!');
                    $state = 1;
                }
            }
            if ($state == 0) {
                $result = $this->Account->addUser($username, $password, $name, $date, $phone, $address);
                if ($result == 1) {
                    echo "<script type='text/javascript'>alert('Đăng ký tài khoản thành công!');</script>";
                }
                else {
                    echo "<script type='text/javascript'>alert('Đăng ký tài khoản thất bại, xin thử lại!');</script>";
                }
            }
        }
    }

    function logout() {
        unset($_SESSION['user_name']);
        unset($_SESSION['user_id']);
        header("Location: " . BASEPATH . "/accounts/login");
    }

    function afterAction()
    {
    }
}
