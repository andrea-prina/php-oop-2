<?php 

    class User
    {

        protected $firstName;
        protected $lastName;
        protected $shippingAddress;


        public function __construct($_firstName, $_lastName, $_shippingAddress)
        {
            $this->setFirstName($_firstName);
            $this->setLastName($_lastName);
            $this->setShippingAddress($_shippingAddress);
        }

        public function getFirstName(){
            return $this->firstName;
        }
        
        public function getLastName(){
            return $this->lastName;
        }

        public function getShippingAddress(){
            return $this->shippingAddress;
        }

        public function setFirstName($_firstName){
            $this->firstName = $_firstName;
        }

        public function setLastName($_lastName){
            $this->lastName = $_lastName;
        }

        public function setShippingAddress($_shippingAddress){
            $this->shippingAddress = $_shippingAddress;
        }

    }


?>