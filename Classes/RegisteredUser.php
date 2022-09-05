<?php 

    require_once __DIR__ . "./User.php";

    class RegisteredUser extends User
    {
        protected $email;
        protected $password;
        protected $discountPercentage;

        public function __construct($_firstName, $_lastName, $_shippingAddress, $_email, $_password, $_discountPercentage)
        {
            parent::__construct($_firstName, $_lastName, $_shippingAddress);
            $this->setEmail($_email);
            $this->setPassword($_password);
            $this->setDiscountPercentage($_discountPercentage);

        }

        public function getEmail(){
            return $this->email;
        }
        
        public function getPassword(){
            return $this->password;
        }

        public function getDiscountPercentage(){
            return $this->discountPercentage;
        }

        public function setEmail($_email){
            $this->email = $_email;
        }

        public function setPassword($_password){
            $this->password = $_password;
        }

        public function setDiscountPercentage($_discountPercentage){
            $this->discountPercentage = $_discountPercentage;
        }

    }

?>