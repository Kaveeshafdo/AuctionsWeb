<?php 
    class PostLike{
        private $userId;
        private $postId;

        /**
         * @param $userId
         * @param $postId
         */
        public function __construct($userId, $postId)
        {
            $this->userId = $userId;
            $this->postId = $postId;
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



    }
?>