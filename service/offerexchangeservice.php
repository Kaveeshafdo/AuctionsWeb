<?php
require_once('database/dbconnect.php');
require_once('model/offerexchange.php');

class OfferExchangeService extends OfferExchange
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

    public function insertOfferExchange()
    {
        $query = "INSERT INTO `offerExchange`(`category_id`, `offer_id`, `title`, `description`) VALUES ('" . $this->inputClear($this->getCategoryId()) . "','" . $this->inputClear($this->getOfferid()) . "','" . $this->inputClear($this->getTitle()) . "','" . $this->inputClear($this->getDescription()) . "')";
        $this->db->insertIntoDb($query);
    }

    public function deleteOfferExchange()
    {
        $query = "UPDATE `offerExchange` SET status=0 WHERE `id`='" . $this->inputClear($this->getId()) . "'";
        $this->db->insertIntoDb($query);
    }
}

?>