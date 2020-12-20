<?php

class AdminsController extends Controller
{
    function beforeAction()
    {
    }

    public function login()
    {
        $this->set('title', 'Đăng nhập');

        if (isset($_SESSION['admin_id'])) {
            // Đăng nhập rồi
            header("Location: " . BASEPATH . "/admins/index");
        } else {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $adminname = $_POST['username'];
                $password = md5($_POST['password']);
                $admins = $this->Admin->getAllAdmin();
                foreach ($admins as $admin) {
                    if ($admin['username'] == $adminname && $admin['password'] == $password) {
                        $_SESSION['admin_acc'] = $admin['username'];
                        $_SESSION['admin_id'] = $admin['id'];
                        header("Location: " . BASEPATH . "/admins/index");
                    }
                }
                $this->set('dangerous', 'Tài khoản hoặc mật khẩu không chính xác!');
            }
        }
    }
    public function index()
    {
        if (!isset($_SESSION['admin_id'])) {
            // Chưa đăng nhập
            header("Location: " . BASEPATH . "/admins/index");
        }
        $this->set('title', 'Tran quản trị');
    }
    public function viewAdmin()
    {
        if (!isset($_SESSION['admin_id'])) {
            // Chưa đăng nhập
            header("Location: " . BASEPATH . "/admins/login");
        } else {
            $this->set('title', 'Quản trị Admin');
            $admins = $this->Admin->getAllAdmin();
            $this->set('admins', $admins);
        }
    }
    public function addAdmin()
    {
        if (!isset($_SESSION['admin_id'])) {
            // Chưa nhập rồi
            header("Location: " . BASEPATH . "/admins/login");
        }
        $this->set('title', 'Quản trị Admin');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $name = $_POST['name'];
            $date = $_POST['date'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $admins = $this->Admin->getAllAdmin();
            $state = 0;
            foreach ($admins as $admin) {
                if ($admin['username'] == $username) {
                    $this->set('dangerous', 'Tài khoản đã tồn tại!');
                    $state = 1;
                }
            }
            if ($state == 0) {
                $this->Admin->addAdmin($username, $password, $name, $date, $phone, $address);
                echo "<script type='text/javascript'>alert('Đăng ký tài khoản thành công!');</script>";
                header("Location: " . BASEPATH . "/admins/viewAdmin");
            }
        }
    }
    public function editAdmin($id)
    {
        if (!isset($_SESSION['admin_id'])) {
            // Chưa nhập rồi
            header("Location: " . BASEPATH . "/admins/login");
        }
        $this->set('title', 'Quản trị admin');
        $eAdmin = $this->Admin->getDetailAdmin($id);
        $this->set('eAdmin', $eAdmin);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $name = $_POST['name'];
            $date = $_POST['date'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $admins = $this->Admin->getAllAdmin();
            foreach ($admins as $admin) {
                if ($admin['username'] == $username && $admin['id'] != $id) {
                    $this->set('dangerous', 'Tài khoản đã tồn tại!');
                    exit();
                }
            }
            $this->Admin->editAdmin($username, $password, $name, $date, $phone, $address, $id);
            echo "<script type='text/javascript'>alert('Thành công!');</script>";
            header("Location: " . BASEPATH . "/admins/viewAdmin");
        }
    }
    public function viewUser()
    {
        if (!isset($_SESSION['admin_id'])) {
            // Chưa nhập rồi
            header("Location: " . BASEPATH . "/admins/login");
            
        }
        $this->set('title', 'Quản trị User');
        $users = $this->Admin->getAllUser();
        $this->set('users', $users);
    }
    public function addUser()
    {
        if (!isset($_SESSION['admin_id'])) {
            // Chưa nhập rồi
            header("Location: " . BASEPATH . "/admins/login");
            
        }
        $this->set('title', 'Quản trị Admin');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $name = $_POST['name'];
            $date = $_POST['date'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $users = $this->Admin->getAllUser();
            $state = 0;
            foreach ($users as $user) {
                if ($user['username'] == $username) {
                    $this->set('dangerous', 'Tài khoản đã tồn tại!');
                    $state = 1;
                }
            }
            if ($state == 0) {
                $this->Admin->addUser($username, $password, $name, $date, $phone, $address);
                echo "<script type='text/javascript'>alert('Đăng ký tài khoản thành công!');</script>";
                header("Location: " . BASEPATH . "/admins/viewUser");
                
            }
        }
    }
    public function editUser($id)
    {
        if (!isset($_SESSION['admin_id'])) {
            // Chưa nhập rồi
            header("Location: " . BASEPATH . "/admins/login");
            
        }
        $this->set('title', 'Quản trị admin');
        $eUser = $this->Admin->getDetailUser($id);
        $this->set('eUser', $eUser);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $name = $_POST['name'];
            $date = $_POST['date'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $admins = $this->Admin->getAllUser();
            foreach ($admins as $admin) {
                if ($admin['username'] == $username && $admin['id'] != $id) {
                    $this->set('dangerous', 'Tài khoản đã tồn tại!');
                    exit();
                }
            }
            $this->Admin->editUser($username, $password, $name, $date, $phone, $address, $id);
            echo "<script type='text/javascript'>alert('Sửa thành công!');</script>";
            header("Location: " . BASEPATH . "/admins/viewUser");   
        }
    }
    public function viewCategory()
    {
        if (!isset($_SESSION['admin_id'])) {
            // Chưa nhập rồi
            header("Location: " . BASEPATH . "/admins/login");
        }
        $this->set('title', 'Quản trị User');
        $categories = $this->Admin->getAllCategory();
        $this->set('categories', $categories);
    }
    public function addCategory()
    {
        if (!isset($_SESSION['admin_id'])) {
            // Chưa nhập rồi
            header("Location: " . BASEPATH . "/admins/login");
            
        }
        $this->set('title', 'Quản trị Category');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $category = $_POST['category'];
            $cates = $this->Admin->getAllCategory();
            $state = 0;
            foreach ($cates as $cate) {
                if ($cate['catename'] == $category) {
                    $this->set('dangerUsername', 'Danh mục đã tồn tại!');
                    $state = 1;
                }
            }
            if ($state == 0) {
                $this->Admin->addCategory($category);
                echo "<script type='text/javascript'>alert('Thêm danh mục thành công!');</script>";
                header("Location: " . BASEPATH . "/admins/viewCategory");
            }
        }
    }
    public function viewProduct()
    {
        if (!isset($_SESSION['admin_id'])) {
            // Chưa nhập rồi
            header("Location: " . BASEPATH . "/admins/login");
        }
        $this->set('title', 'Quản trị');
        $products = $this->Admin->getActProduct();
        $this->set('products', $products);
    }
    public function addProduct()
    {
        if (!isset($_SESSION['admin_id'])) {
            // Chưa nhập rồi
            header("Location: " . BASEPATH . "/admins/login");
        }
        $this->set('title', 'Quản trị Product');
        $eProduct = $this->Admin->getAllProduct();
        $catpro = $this->Admin->getAllCategory();
        $this->set('catpro', $catpro);
        $this->set('title', 'Quản trị');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $category_id = $_POST['category'];
            $detail = $_POST['detail'];
            $price = $_POST['price'];
            $image = "/public/upload/products/";
            if ($_FILES["image"]["name"]) {
                $target_file = "C:/xampp/htdocs/Shop/public/upload/products/" . basename($_FILES["image"]["name"]);
                // Kiểm tra xem file tồn tại chưa
                if (!file_exists($target_file)) {
                    // di chuyển file đến thư mục chỉ định
                    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                }
                $image = "/public/upload/products/" . basename($_FILES["image"]["name"]);
            }
            foreach ($eProduct as $cate) {
                if ($cate['name'] == $name && $cate['isDelete'] == 0) {
                    $this->set('dangerous', 'Sản phẩm này đã tồn tại!');
                    exit();
                } else if ($cate['name'] == $name && $cate['isDelete'] == 1) {
                    $this->Admin->editProduct($name, $category_id, $image, $price, $detail, $cate['id']);
                    echo "<script type='text/javascript'>alert('Thành công!');</script>";
                    header("Location: " . BASEPATH . "/admins/viewProduct");
                }
            }
            $this->Admin->addProduct($name, $category_id, $image, $price, $detail);
            echo "<script type='text/javascript'>alert('Thành công!');</script>";
            header("Location: " . BASEPATH . "/admins/viewProduct");
        }
    }
    public function editProduct($id)
    {
        if (!isset($_SESSION['admin_id'])) {
            // Chưa nhập rồi
            header("Location: " . BASEPATH . "/admins/login");
        }
        $eProduct = $this->Admin->getDetailProduct($id);
        $this->set('title', 'Quản trị');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $category_id = $_POST['category'];
            $detail = $_POST['detail'];
            $price = $_POST['price'];
            if ($_FILES["image"]["name"]) {
                $target_file = "C:/xampp/htdocs/Shop/public/upload/products/" . basename($_FILES["image"]["name"]);
                // Kiểm tra xem file tồn tại chưa
                if (!file_exists($target_file)) {
                    // di chuyển file đến thư mục chỉ định
                    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                }
                $image = "/public/upload/products/" . basename($_FILES["image"]["name"]);
            } else {
                $image = $eProduct['image'];
            }
            if (!$detail) {
                $detail = $eProduct['detail'];
            }
            $this->Admin->editProduct($name, $category_id, $image, $price, $detail, $id);
            echo "<script type='text/javascript'>alert('Thành công!');</script>";
            header("Location: " . BASEPATH . "/admins/viewProduct");
        } else {

            $catpro = $this->Admin->getAllCategory();
            $this->set('catpro', $catpro);
            $this->set('eProduct', $eProduct);
        }
    }
    public function delProduct($id)
    {
        if (!isset($_SESSION['admin_id'])) {
            // Chưa nhập rồi
            header("Location: " . BASEPATH . "/admins/login");
        }
        $this->set('title', 'Quản trị');
        $this->Admin->deleteProduct($id);
        header("Location: " . BASEPATH . "/admins/viewProduct");
    }
    public function viewBill()
    {
        if (!isset($_SESSION['admin_id'])) {
            // Chưa nhập rồi
            header("Location: " . BASEPATH . "/admins/login");

        }
        $this->set('title', 'Quản trị');
        $bills = $this->Admin->getAllBill();
        foreach ($bills as $bill => $value) {
            $eAdmin = $this->Admin->getDetailAdmin($value['account_id']);
            $bills[$bill]['username'] = $eAdmin['username'];
        }
        $this->set('bills', $bills);
    }
    public function detailBill($id)
    {
        if (!isset($_SESSION['admin_id'])) {
            // Chưa nhập rồi
            header("Location: " . BASEPATH . "/admins/login");

        }
        $this->set('title', 'Quản trị');
        $debills = $this->Admin->getDetailBill($id);
        foreach ($debills as $bill => $value) {
            $eAdmin = $this->Admin->getDetailProduct($value['product_id']);
            $debills[$bill]['product'] = $eAdmin['name'];
            $debills[$bill]['image'] = $eAdmin['image'];
            $debills[$bill]['cost'] = $eAdmin['price'];
        }
        $this->set('debills', $debills);
    }
    public function logout() {
        unset($_SESSION['admin_id']);
        unset($_SESSION['admin_acc']);
        header("Location: " . BASEPATH . "/admins/login");
        
    }
    function afterAction()
    {
    }
}
