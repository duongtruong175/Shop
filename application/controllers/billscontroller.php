<?php

class BillsController extends Controller
{

    function beforeAction()
    {
    }

    public function index()
    {
        $provinces = $this->Bill->provinceModel->getAllProvince();
        $this->set('provinces', $provinces);
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $account_id = $_SESSION['user_id'];
            $carts = $this->Cart->getCartByAccountId($account_id);
            $cost = 0;
            foreach ($carts as $cart) {
                $cost += $cart['price'] * $cart['quantity'];
            }
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $province = $_POST['province'];
            if (empty($province)) {
                echo "<script type='text/javascript'>alert('Bạn chưa chọn địa chỉ, xin thử lại!');</script>";
            } else {
                $district = $_POST['district'];
                $ward = $_POST['ward'];
                $street = $_POST['street'];
                $payment = $_POST['payment'];
                $address = $street . ', ' . $ward . ', ' . $district . ', ' . $province;
                $result = $this->Bill->addBill($account_id, $name, $phone, $address, $payment, $cost);
                if ($result == 1) {
                    echo "<script type='text/javascript'>alert('Bạn đã đặt hàng thành công!');</script>";
                    header("Location: " . BASEPATH . "/home/index");
                } else {
                    echo "<script type='text/javascript'>alert('Đặt hàng thất bại, xin thử lại!');</script>";
                }
            }
        }
    }

    public function district($province_name)
    {
        $districts = $this->Bill->districtModel->getDistrictByProvinceName($province_name);
        if (!empty($districts)) {
            foreach ($districts as $district) {
                echo '<option value="' . $district['name'] . '">' . $district['name'] . '</option>';
            }
        }
    }

    public function ward($district_name)
    {
        $wards = $this->Bill->wardModel->getWardByDistrictName($district_name);
        if (!empty($wards)) {
            foreach ($wards as $ward) {
                echo '<option value="' . $ward['name'] . '">' . $ward['name'] . '</option>';
            }
        }
    }

    function afterAction()
    {
    }
}
