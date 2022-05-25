<?php
require_once('database/dbconnect.php');
require_once('model/category.php');

class CategoryService extends Category{

    private $db;

    public function __construct(){
        $this->db = new dbconnect();
    }

    public function inputClear($data)
    {
        $data1 = trim($data);
        $data2 = stripslashes($data1);
        $data3 = htmlspecialchars($data2);
        return $data3;
    }

    public function insertCategory(){
        $query = "INSERT INTO `category`(`description`) VALUES ('" . $this->inputClear($this->getDescription()) . "')";
        $this->db->insertIntoDb($query);
    }

    public function updateCategory(){
        $query = "UPDATE `category` SET `description`='" . $this->inputClear($this->getDescription()) . "'";
        $this->db->insertIntoDb($query);
    }

    public function deleteCategory(){
        $query = "UPDATE `category` SET `status`=0 WHERE `id`='" . $this->inputClear($this->getId()) . "'";
        $this->db->insertIntoDb($query);
    }

}

?>