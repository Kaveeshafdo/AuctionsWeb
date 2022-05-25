<?php
require_once('database/dbconnect.php');
require_once('model/offer.php');

class OfferService extends Offer
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

    public function insertOffer()
    {
        $query = "INSERT INTO `offer`(`user_id`, `post_id`, `specialNote`, `offerType`) VALUES ('" . $this->inputClear($this->getUserId()) . "','" . $this->inputClear($this->getPostId()) . "','" . $this->inputClear($this->getSpecialNote()) . "','" . $this->inputClear($this->getOfferType()) . "')";
        $this->db->insertIntoDb($query);
    }

    public function updateOffer()
    {
        $query = "UPDATE `offer` SET `user_id`='" . $this->inputClear($this->getUserId()) . "',`post_id`='" . $this->inputClear($this->getPostId()) . "',`specialNote`='" . $this->inputClear($this->getSpecialNote()) . "',`offerType`='" . $this->inputClear($this->getOfferType()) . "' WHERE `id`='" . $this->inputClear($this->getId()) . "'";
        $this->db->insertIntoDb($query);
    }

    public function deleteOffer()
    {
        $query = "UPDATE `offer` SET status=0 WHERE `id`='" . $this->inputClear($this->getId()) . "'";
        $this->db->insertIntoDb($query);
    }
}
