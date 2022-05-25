<?php
require_once('database/dbconnect.php');
require_once('model/postimage.php');

class PostLikeService extends postLike
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

    public function insertPostLike()
    {
        $query = "INSERT INTO `postLike`(`user_id`, `post_id`) VALUES ('" . $this->inputClear($this->getPostId()) . "','" . $this->inputClear($this->getPostId()) . "')";
        $this->db->insertIntoDb($query);
    }

    public function deleteUser()
    {
        $query = "DELETE FROM postLike WHERE user_id = '" . $this->inputClear($this->getPostId()) . "' , post_id = '" . $this->inputClear($this->getPostId()) . "';
        $this->db->insertIntoDb($query);
    }
}
