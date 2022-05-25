<?php
require_once('database/dbconnect.php');
require_once('model/exchangeimage.php');

class ExchangeImageService extends ExchangeImage
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

    public function insertExhangeImage()
    {
        $query = "INSERT INTO `exchangeImage`(`offerExchange_id`, `imageName`) VALUES ('" . $this->inputClear($this->getOfferExchangeId()) . "','" . $this->inputClear($this->getImageName()) . "')";
        $this->db->insertIntoDb($query);
    }

    public function deleteExhangeImage()
    {
        $query = "UPDATE `exchangeImage` SET `status`=0 WHERE `offerExchange_id`='" . $this->inputClear($this->getOfferExchangeId()) . "' and `imageName`='" . $this->inputClear($this->getImageName()) . "'";
        $this->db->insertIntoDb($query);
    }
}
