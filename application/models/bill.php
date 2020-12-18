<?php

class Bill extends Model
{

    public $cartModel;
    public $provinceModel;
    public $districtModel;
    public $wardModel;

    public function __construct() {
        parent::__construct();
        $this->cartModel = new Cart;
        $this->provinceModel= new Province;
        $this->districtModel = new District;
        $this->wardModel = new Ward;
    }
    
    // thêm đơn hàng
    public function addBill($account_id, $name, $phone, $address, $payment, $cost)
    {
        $sql = "INSERT INTO bills (account_id, name, phone, address, payment, cost, order_time) VALUES (:account_id, :name, :phone, :address, :payment, :cost, NOW());";
        $this->prepareQuery($sql);
        $this->bindData(':account_id', $account_id);
        $this->bindData(':name', $name);
        $this->bindData(':phone', $phone);
        $this->bindData(':address', $address);
        $this->bindData(':payment', $payment);
        $this->bindData(':cost', $cost);
        $this->executeQuery();
        $result = $this->getRowCount();
        return $result;
    }
}
