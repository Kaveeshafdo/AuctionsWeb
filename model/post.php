<?php
class Post
{
    private $id;
    private $title;
    private $categoryId;
    private $description;
    private $viewCount;
    private $postLocation;
    private $date;
    private $time;

    /**
     * @param $id
     * @param $title
     * @param $categoryId
     * @param $description
     * @param $viewCount
     * @param $postLocation
     * @param $date
     * @param $time
     */
    public function __constructWithId($id, $title, $categoryId, $description, $viewCount, $postLocation, $date, $time)
    {
        $this->id = $id;
        $this->title = $title;
        $this->categoryId = $categoryId;
        $this->description = $description;
        $this->viewCount = $viewCount;
        $this->postLocation = $postLocation;
        $this->date = $date;
        $this->time = $time;
    }

    /**
     * @param $title
     * @param $categoryId
     * @param $description
     * @param $viewCount
     * @param $postLocation
     * @param $date
     * @param $time
     */
    public function __constructWithoutId($title, $categoryId, $description, $viewCount, $postLocation, $date, $time)
    {
        $this->title = $title;
        $this->categoryId = $categoryId;
        $this->description = $description;
        $this->viewCount = $viewCount;
        $this->postLocation = $postLocation;
        $this->date = $date;
        $this->time = $time;
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
     /**
     * @return mixed
     */
    public function getViewCount()
    {
        return $this->viewCount;
    }

    /**
     * @param mixed $viewCount
     */
    public function setViewCount($viewCount)
    {
        $this->viewCount = $viewCount;
    }

    /**
     * @return mixed
     */
    public function getPostLocation()
    {
        return $this->postLocation;
    }

    /**
     * @param mixed $postLocation
     */
    public function setPostLocation($postLocation)
    {
        $this->postLocation = $postLocation;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }
    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }
}