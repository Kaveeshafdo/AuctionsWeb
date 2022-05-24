<?php
class Comment
{
    private $id;
    private $userId;
    private $postId;
    private $commentContent;

    /**
     * @param $id
     * @param $userId
     * @param $postId
     * @param $commentContent
     */
    public function __constructWithId($id, $userId, $postId, $commentContent)
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->postId = $postId;
        $this->commentContent = $commentContent;
    }
    
    /**
     * @param $userId
     * @param $postId
     * @param $commentContent
     */
    public function __constructWithoutId($userId, $postId, $commentContent)
    {
        $this->userId = $userId;
        $this->postId = $postId;
        $this->commentContent = $commentContent;
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
    public function getCommentContent()
    {
        return $this->commentContent;
    }

    /**
     * @param mixed $commentContent
     */
    public function setCommentContent($commentContent)
    {
        $this->commentContent = $commentContent;
    }
}
