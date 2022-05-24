<?php 
    class PostImage{
        private $postId;
        private $imageName;

        /**
         * @param $postId
         * @param $imageName
         */
        public function __construct($postId, $imageName)
        {
            $this->postId = $postId;
            $this->imageName = $imageName;
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
        public function getImageName()
        {
            return $this->imageName;
        }

        /**
         * @param mixed $imageName
         */
        public function setImageName($imageName)
        {
            $this->imageName = $imageName;
        }
        

    }
?>