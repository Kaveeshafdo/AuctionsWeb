<?php 
    class OfferMoney{
        private $id;
        private $offerId;
        private $values;

        /**
         * @param $id
         * @param $offerId
         * @param $values
         */
        public function __constructWithId($id, $offerId, $values)
        {
            $this->id = $id;
            $this->offerId = $offerId;
            $this->values = $values;
        }


        /**
         * @param $offerId
         * @param $values
         */
        public function __constructWithoutId($offerId, $values)
        {
            $this->offerId = $offerId;
            $this->values = $values;
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
        public function getOfferId()
        {
            return $this->offerId;
        }

        /**
         * @param mixed $offerId
         */
        public function setOfferId($offerId)
        {
            $this->offerId = $offerId;
        }

        /**
         * @return mixed
         */
        public function getValues()
        {
            return $this->values;
        }

        /**
         * @param mixed $values
         */
        public function setValues($values)
        {
            $this->values = $values;
        }
        

        
    }
?>