<?php
require_once('database/dbconnect.php');
require_once('model/comment.php');

class CommentService extends Comment
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

    public function insertComment()
    {
        $query = "INSERT INTO `comment`(`user_id`, `post_id`, `commentContent`) VALUES ('" . $this->inputClear($this->getUserId()) . "','" . $this->inputClear($this->getPostId()) . "','" . $this->inputClear($this->getCommentContent()) . "')";
        $this->db->insertIntoDb($query);
    }

    public function updateComment()
    {
        $query = "UPDATE `comment` SET `user_id`='" . $this->inputClear($this->getUserId()) . "',`post_id`='" . $this->inputClear($this->getPostId()) . "',`commentContent`='" . $this->inputClear($this->getCommentContent()) . "' WHERE `id`='" . $this->inputClear($this->getId()) . "'";
        $this->db->insertIntoDb($query);
    }

    public function deleteComment()
    {
        $query = "UPDATE `comment` SET status=0 WHERE `id`='" . $this->inputClear($this->getId()) . "'";
        $this->db->insertIntoDb($query);
    }
}

?>