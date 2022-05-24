<?php
   class Category{

    private $id;
    private $description;

    /**
     * @param $id
     * @param $description
     */
    public function __constructWithId($id, $description)
    {
        $this->id = $id;
        $this->description = $description;
    }

    /**
     * @param $description
     */
    public function __constructWithoutId($description)
    {
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

?>
















