<?php

class UsersController extends Controller
{

    function beforeAction()
    {
    }

    function profile()
    {
        $users = $this->User->getAllUser();
        foreach ($users as $user) {
            if ($user['id'] == $_SESSION['user_id']) {
                $this->set('username', $user['username']);
                $this->set('password', $user['password']);
                $this->set('name', $user['name']);
                $this->set('date', $user['date']);
                $this->set('phone', $user['phone']);
                $this->set('address', $user['address']);
            }
        }
        $words = $this->User->productModel->getAllNameProduct();
        $this->set('words',$words);
    }
    function updateinfor()
    {
        $users = $this->User->getAllUser();
        foreach ($users as $user) {
            if ($user['id'] == $_SESSION['user_id']) {
                $this->set('user', $user);
            }
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['updatephone'])) $updatephone = $this->test_input($_POST['updatephone']);
            if (isset($_POST['updatedate'])) $updatedate = $this->test_input($_POST['updatedate']);
            if (isset($_POST['updateaddress'])) $updateaddress = $this->test_input($_POST['updateaddress']);
            if (isset($_POST['updatename'])) {
                $updatename = $this->test_input($_POST['updatename']);
                $_SESSION['user_name'] = $updatename;
            }
            $state = 0;
            echo $updatephone;
            $users = $this->User->getAllUser();
            foreach ($users as $user) {
                if ($user['phone'] == $updatephone && $user['id'] != $_SESSION['user_id']) {
                    $this->set('dangerPhones', 'Số điện thoại đã được sử dụng!');
                    $state = 1;
                }
            }
            foreach ($users as $user) {
                if ($user['id'] == $_SESSION['user_id'] and $state == 0) {
                    if ($updatename == NULL) {
                        $updatename = $user['name'];
                        $_SESSION['user_name'] = $updatename;
                    }
                    if ($updatephone == NULL) $updatephone = $user['phone'];
                    if ($updatedate == NULL) $updatedate = $user['date'];
                    if ($updateaddress == NULL) $updateaddress = $user['address'];
                    $this->User->updateInfor($updatename, $updatedate, $updatephone, $updateaddress, $user['id']);
                    header("Location: " . BASEPATH . "/users/profile");
                }
            }
        }
        $words = $this->User->productModel->getAllNameProduct();
        $this->set('words',$words);
    }
    function updatepassword()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $users = $this->User->getAllUser();
            $state = 0;
            if (isset($_POST['oldpassword'])) $oldpassword = md5($this->test_input($_POST['oldpassword']));
            if (isset($_POST['updatepassword'])) $updatepassword = md5($this->test_input($_POST['updatepassword']));
            if (isset($_POST['confpassword'])) $confpassword = md5($this->test_input($_POST['confpassword']));
            if ($updatepassword != $confpassword) {
                $this->set('dangerPassword', 'Mật khẩu và Mật khẩu xác nhận không giống nhau');
                $state = 1;
            }

            foreach ($users as $user) {
                if ($user['id'] == $_SESSION['user_id']) {
                    if ($user['password'] != $oldpassword) {
                        $this->set('dangerOldPassword', 'Mật khẩu không đúng!');
                        $this->set('dangerPassword', NULL);
                        $state = 1;
                    }
                }
            }
            if ($state == 0) {
                $this->User->updatepassword($updatepassword, $_SESSION['user_id']);
                echo "<script type='text/javascript'>alert('Thay đổi mật khẩu thành công!');</script>";
            }
        }
        $words = $this->User->productModel->getAllNameProduct();
        $this->set('words',$words);
    }

    function afterAction()
    {
    }
}
