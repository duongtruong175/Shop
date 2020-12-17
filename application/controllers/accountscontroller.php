<?php

class AccountsController extends Controller
{

    function beforeAction()
    {
    }

    function login()
    {
        $this->set('title', 'Đăng nhập');
        if ($_SERVER['REQUEST_METHOD'] == 'POST' )
        {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $users = $this->Account->getAllUser();
            foreach($users as $user){
                if($user['username'] == $username && $user['password'] == $password)
                {
                    session_start();
                    $_SESSION['user_name'] = $user['name'];
                    header("Location: ".BASEPATH."/home/index");
                    exit();
                } 
            } 
            $this->set('dangerous', 'Tài khoản hoặc mật khẩu không chính xác!');
        }
    }

    function register()
    {
        $this->set('title', 'Đăng ký');
        if ($_SERVER['REQUEST_METHOD'] == 'POST' )
        {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $name = $_POST['name'];
            $date = $_POST['date'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $users = $this->Account->getAllUser();
            $state = 0;
            foreach($users as $user){
                if($user['username'] == $username)
                {
                    $this->set('dangerUsername','Tài khoản đã tồn tại!');
                    $state = 1;
                } 
                if($user['phone'] == $phone)
                {
                    $this->set('dangerPhone', 'Số điện thoại đã được sử dụng!');
                    $state = 1;
                }
            } 
            if ($state == 0){
                $this->Account->addUser($username, $password, $name, $date, $phone, $address);
                echo "<script type='text/javascript'>alert('Đăng ký tài khoản thành công!');</script>";
            }

        }
    }

    function afterAction()
    {
    }
}
