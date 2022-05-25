<?php
require_once('database/dbconnect.php');
require_once('model/post.php');

class PostService extends Post
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

    public function insertPost()
    {
        $query = "INSERT INTO `post`(`title`, `category_id`, `description`, `viewCount`, `postLocation`, `date`, `time`) VALUES ('" . $this->inputClear($this->getTitle()) . "','" . $this->inputClear($this->getCategoryId()) . "','" . $this->inputClear($this->getDescription()) . "','" . $this->inputClear($this->getViewCount()) . "','" . $this->inputClear($this->getPostLocation()) . "','" . $this->inputClear($this->getdate()) . "','" . $this->inputClear($this->getTime()) . "')";
        $this->db->insertIntoDb($query);
    }

    public function updatePost()
    {
        $query = "UPDATE `post` SET `title`='" . $this->inputClear($this->getTitle()) . "',`category_id`='" . $this->inputClear($this->getCategoryId()) . "',`description`='" . $this->inputClear($this->getDescription()) . "',`viewCount`='" . $this->inputClear($this->getViewCount()) . "',`postLocation`='" . $this->inputClear($this->getPostLocation()) . "',`date`='" . $this->inputClear($this->getDate()) . "',`time`='" . $this->inputClear($this->getTime()) . "' WHERE `id`='" . $this->inputClear($this->getId()) . "'";
        $this->db->insertIntoDb($query);
    }

    public function deletePost()
    {
        $query = "UPDATE `post` SET status=0 WHERE `id`='" . $this->inputClear($this->getId()) . "'";
        $this->db->insertIntoDb($query);
    }
}
