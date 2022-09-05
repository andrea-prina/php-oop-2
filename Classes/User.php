<?php 

    class User
    {

        protected $firstName;
        protected $lastName;

        public function __construct($_firstName, $_lastName)
        {
            $this->setFirstName($_firstName);
            $this->setLastName($_lastName);
        }


        public function getFirstName(){
            return $this->firstName;
        }
        
        public function getLastName(){
            return $this->lastName;
        }

        public function setFirstName($_firstName){
            $this->firstName = $_firstName;
        }

        public function setLastName($_lastName){
            $this->lastName = $_lastName;
        }

    }


?>