<?php
class OfferExchange
{
    private $id;
    private $categoryId;
    private $offerid;
    private $title;
    private $description;

    /**
     * @param $id
     * @param $categoryId
     * @param $offerid
     * @param $title
     * @param $description
     */
    public function __constructWithId($id, $categoryId, $offerid, $title, $description)
    {
        $this->id = $id;
        $this->categoryId = $categoryId;
        $this->offerid = $offerid;
        $this->title = $title;
        $this->description = $description;
    }
    /**
     * @param $categoryId
     * @param $offerid
     * @param $title
     * @param $description
     */
    public function __constructWithoutId($categoryId, $offerid, $title, $description)
    {
        $this->categoryId = $categoryId;
        $this->offerid = $offerid;
        $this->title = $title;
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param mixed $categoryId
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    /**
     * @return mixed
     */
    public function getOfferid()
    {
        return $this->offerid;
    }

    /**
     * @param mixed $offerid
     */
    public function setOfferid($offerid)
    {
        $this->offerid = $offerid;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
}
