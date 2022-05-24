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

   }

?>
















