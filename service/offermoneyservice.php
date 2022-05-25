<?php
require_once('database/dbconnect.php');
require_once('model/offermoney.php');

class OfferMoneyService extends OfferMoney
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

    public function insertOfferMoney()
    {
        $query = "INSERT INTO `offerMoney`(`offer_id`, `value`) VALUES ('" . $this->inputClear($this->getOfferId()) . "','" . $this->inputClear($this->getValues()) . "')";
        $this->db->insertIntoDb($query);
    }

    public function updateOfferMoney()
    {
        $query = "UPDATE `offerMoney` SET `offer_id`='" . $this->inputClear($this->getOfferId()) . "',`value`='" . $this->inputClear($this->getValues()) . "' WHERE `id`='" . $this->inputClear($this->getId()) . "'";
        $this->db->insertIntoDb($query);
    }

    public function deleteOfferMoney()
    {
        $query = "UPDATE `offerMoney` SET status=0 WHERE `id`='" . $this->inputClear($this->getId()) . "'";
        $this->db->insertIntoDb($query);
    }
}
