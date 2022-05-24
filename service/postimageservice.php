<?php
require_once('database/dbconnect.php');
require_once('model/postimage.php');

class PostImageService extends PostImage
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
        $query = "INSERT INTO `postImage`(`post_id`, `imageName`) VALUES ('" . $this->inputClear($this->getPostId()) . "','" . $this->inputClear($this->getImageName()) . "')";
        $this->db->insertIntoDb($query);
    }

    public function deleteUser()
    {
        $query = "UPDATE `postImage` SET `status`=0 WHERE `post_id`='" . $this->inputClear($this->getPostId()) . "' and `imageName`='" . $this->inputClear($this->getImageName()) . "'";
        $this->db->insertIntoDb($query);
    }
}
