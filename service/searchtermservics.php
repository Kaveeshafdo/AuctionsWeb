<?php
require_once('database/dbconnect.php');
require_once('model/serachterm.php');

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

    public function insertSerachTerm()
    {
        $query = "INSERT INTO `searchTerm`(`post_id`, `searchTerm`) VALUES ('" . $this->inputClear($this->getPostId()) . "','" . $this->inputClear($this->getSearchTerm()) . "')";
        $this->db->insertIntoDb($query);
    }

    public function updateSerachTerm()
    {
        $query = "UPDATE `searchTerm` SET `post_id`='" . $this->inputClear($this->getPostId()) . "',`searchTerm`='" . $this->inputClear($this->getSearchTerm()) . "' WHERE `id`='" . $this->inputClear($this->getId()) . "'";
        $this->db->insertIntoDb($query);
    }

    public function deleteSerachTerm()
    {
        $query = "UPDATE `searchTerm` SET status=0 WHERE `id`='" . $this->inputClear($this->getId()) . "'";
        $this->db->insertIntoDb($query);
    }
}

?>