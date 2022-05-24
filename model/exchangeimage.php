<?php 
    class ExchangeImage{
        private $offerExchangeId;
        private $imageName;

        /**
         * @param $offerExchangeId
         * @param $imageName
         */
        public function __construct($offerExchangeId, $imageName)
        {
            $this->offerExchangeId = $offerExchangeId;
            $this->imageName = $imageName;
        }

        /**
         * @return mixed
         */
        public function getOfferExchangeId()
        {
            return $this->offerExchangeId;
        }

        /**
         * @param mixed $offerExchangeId
         */
        public function setOfferExchangeId($offerExchangeId)
        {
            $this->offerExchangeId = $offerExchangeId;
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