<?php
class Offer{
    private $id;
    private $userId;
    private $postId;
    private $specialNote;  
    private $offerType;  
    
    /**
     * @param $id
     * @param $userId
     * @param $postId
     * @param $specialNote
     * @param $offerType
     */

    public function __constructWithId($id, $userId, $postId, $specialNote, $offerType)
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->postId = $postId;
        $this->specialNote = $specialNote;
        $this->offerType = $offerType;
    }

    /**
     * @param $userId
     * @param $postId
     * @param $commentContent
     */
    public function __constructWithoutId($userId, $postId, $specialNote, $offerType)
    {
        $this->userId = $userId;
        $this->postId = $postId;
        $this->specialNote = $specialNote;
        $this->offerType = $offerType;
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
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
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
    public function getSpecialNote()
    {
        return $this->$specialNote;
    }

    /**
     * @param mixed $specialNote
     */
    public function setSpecialNote($specialNote)
    {
        $this->specialNote = $specialNote;
    }

    /**
     * @return mixed
     */
    public function getOfferType()
    {
        return $this->offerType;
    }

    /**
     * @param mixed $offerType
     */
    public function setOfferType($postId)
    {
        $this->offerType = $offerType;
    }
}
?>