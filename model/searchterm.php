<?php
class SearchTerm
{
    private $id;
    private $postId;
    private $searchTerm;

    /**
     * @param $id
     * @param $postId
     * @param $searchTerm
     */
    public function __constructWithId($id, $postId, $searchTerm)
    {
        $this->id = $id;
        $this->postId = $postId;
        $this->searchTerm = $searchTerm;
    }
    
    /**
     * @param $postId
     * @param $searchTerm
     */
    public function __constructWithoutId($postId, $searchTerm)
    {
        $this->postId = $postId;
        $this->searchTerm = $searchTerm;
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
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * @param mixed $postId
     */
    public function setPostId($postId)
    {
        $this->postId = $postId;
    }

    /**
     * @return mixed
     */
    public function getSearchTerm()
    {
        return $this->searchTerm;
    }

    /**
     * @param mixed $searchTerm
     */
    public function setSearchTerm($searchTerm)
    {
        $this->searchTerm = $searchTerm;
    }

}
