<?php
require_once('database/dbconnect.php');
require_once('model/administrator.php');

class administratorService extends administrator{

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

    public function insertAdministrator(){
        $query = "INSERT INTO `administrator`(`username`, `email`, 'dateOfBirth', 'telNo', 'gender', 'password') VALUES ('" . $this->inputClear($this->getUserName()) . "','" . $this->inputClear($this->getEmail()) . "','" . $this->inputClear($this->getDateOfBirth()) . "','". $this->inputClear($this->getTelNo()) . "','" . $this->inputClear($this->getGender()) . "','" . $this->inputClear($this->getPassword()) ."')";
        $this->db->insertIntoDb($query);
    }

    public function updateAdministrator(){
        $query = "UPDATE `administrator` SET `username`='" . $this->inputClear($this->getUserName()) . "',`email`='" . $this->inputClear($this->getEmail()) . "',`dateOfBirth`='" . $this->inputClear($this->getDateOfBirth()) . "',`telNo`='" . $this->inputClear($this->getTelNo()) . "',`gender`='" . $this->inputClear($this->getGender()) . "',`password`='" . $this->inputClear($this->getPassword()) . "' WHERE `id`='" . $this->inputClear($this->getId()) . "'";
        $this->db->insertIntoDb($query);
    }

    public function deleteAdministrator(){
        $query = "UPDATE `administrator` SET `status`=0 WHERE `id`='" . $this->inputClear($this->getId()) . "'";
        $this->db->insertIntoDb($query);
    }

}

?>