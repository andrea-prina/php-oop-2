<?php 

    class Product
    {
        protected $productName;
        protected $productPrice;

        public function __construct($_productName, $_productPrice)
        {
            $this->setProductName($_productName);
            $this->setProductPrice($_productPrice);
        }


        public function getProductName(){
            return $this->productName;
        }

        public function getProductPrice(){
            return $this->productPrice;
        }

        public function setProductName($_productName){
            $this->productName = $_productName;
        }

        public function setProductPrice($_productPrice){
            $this->productPrice = $_productPrice;
        }

    }

?>