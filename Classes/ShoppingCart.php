<?php 

    class ShoppingCart
    {
        protected $items;
        protected $totalAmount = 0;
        

        public function addItem($_item){
            $this->items[] = $_item;
        }

        public function getItems(){
            return $this->items;
        }

        public function getTotalPrice(){
            foreach ($this->items as $item) {
                $this->totalAmount += $item->getProductPrice();
            }
            return $this->totalAmount;
        }
    }


?>