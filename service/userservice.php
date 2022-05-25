<?php
require_once('database/dbconnect.php');
require_once('model/user.php');

class UserService extends User
{
    private $db;

    public function __construct()
    {
        $this->db = new dbconnect();
    }

    public function inputClear($data)
    {
        $data1 = trim($data);
        $data2 = stripslashes($data1);
        $data3 = htmlspecialchars($data2);
        return $data3;
    }

    public function insertUser()
    {
        $query = "INSERT INTO `user`(`username`, `email`, `dateOfBirth`, `telNo`, `gender`, `password`) VALUES ('" . $this->inputClear($this->getUsername()) . "','" . $this->inputClear($this->getEmail()) . "','" . $this->inputClear($this->getDateOfBirth()) . "','" . $this->inputClear($this->getTelNo()) . "','" . $this->inputClear($this->getGender()) . "','" . $this->inputClear($this->getPassword()) . "')";
        $this->db->insertIntoDb($query);
    }

    public function updateUser()
    {
        $query = "UPDATE `user` SET `username`='" . $this->inputClear($this->getUsername()) . "',`email`='" . $this->inputClear($this->getEmail()) . "',`dateOfBirth`='" . $this->inputClear($this->getDateOfBirth()) . "',`telNo`='" . $this->inputClear($this->getTelNo()) . "',`gender`='" . $this->inputClear($this->getGender()) . "',`password`='" . $this->inputClear($this->getPassword()) . "' WHERE `id`='" . $this->inputClear($this->getId()) . "'";
        $this->db->insertIntoDb($query);
    }

    public function deleteUser()
    {
        $query = "UPDATE `user` SET `status`=0 WHERE `id`='" . $this->inputClear($this->getId()) . "'";
        $this->db->insertIntoDb($query);
    }
}
