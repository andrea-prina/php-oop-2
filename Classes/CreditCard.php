<?php 

    class CreditCard
    {
        protected $idNumber;
        protected $expirationDate;

        public function __construct($_idNumber, $_expirationDate)
        {
            $this->setIdNumber($_idNumber);
            $this->setExpirationDate($_expirationDate);
        }

        public function getIdNumber(){
            return $this->idNumber;
        }

        public function getExpirationDate(){
            return $this->expirationDate;
        }

        public function setIdNumber($_idNumber){
            $this->idNumber = $_idNumber;
        }

        public function setExpirationDate($_expirationDate){
            $this->expirationDate = $_expirationDate;
        }

        public function checkCardValidity(){
            
            $currentMonth = date('m');
            $currentYear = date('Y');

            if ((explode("/", $this->expirationDate)[0]) >= $currentMonth){
                if ((explode("/", $this->expirationDate)[1]) >= $currentYear){
                    echo "TRANSACTION ALLOWED";
                } else {
                    echo "TRANSACTION DENIED - Credit card expired";
                }
            } else {
                if ((explode("/", $this->expirationDate)[1]) <= $currentYear){
                    echo "TRANSACTION DENIED";
                } else {
                    echo "TRANSACTION DENIED - Credit card expired";
                }
            }
        }
    }

?>