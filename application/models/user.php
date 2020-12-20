<?php
class User extends Model
{

    public $productModel;

    public function __construct() {
        parent::__construct();
        $this->productModel = new Product;
    }

    // lay tat ca categories
    public function getAllUser()
    {
        $sql = "SELECT * FROM accounts WHERE role_id = 2;";
        // tạo câu sql chuẩn bị
        $this->prepareQuery($sql);
        // lấy ra danh sách users
        $users = $this->getAllResult();
        return $users;
    }
    public function updateInfor($name, $date, $phone, $address, $id)
    {
        $sql = "UPDATE accounts SET name=:name, date=:date, phone=:phone, address=:address WHERE id=:id;";
        $this->prepareQuery($sql);
        $this->bindData(':name', $name);
        $this->bindData(':date', $date);
        $this->bindData(':phone', $phone);
        $this->bindData(':address', $address);
        $this->bindData(':id', $id);
        $this->executeQuery();
        $result = $this->getRowCount();
        return $result;
    }
    public function updatePassword($password, $id)
    {
        $sql = "UPDATE accounts SET password=:password WHERE id=:id;";
        $this->prepareQuery($sql);
        $this->bindData(':password', $password);
        $this->bindData(':id', $id);
        $this->executeQuery();
        $result = $this->getRowCount();
        return $result;
    }
}
