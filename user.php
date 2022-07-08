<?php
    class User {
        public $name;
        public $registration;
        public $discunt;

        function __construct($_name, $_registration)
        {
            $this->name = $_name;
            $this->registration = $_registration;
        }

        public function setDiscount($newDiscount) {
                if($newDiscount == true) {
                    $this->discount = 20;
                } else {
                    $this->discount = 0;
                }
        }

        public function getDiscount() {
            if($this->discount == 20) {
                return '-20%';
            } else {
                return '0';
            }
        }

    }

    $user1 = new User('Dario', true);
    $user2 = new User('Mario', true);
    $user3 = new User('Gianni', false);
    $user4 = new User('Ciccio', false);

    $user1 -> setDiscount($user1 -> registration);
    $user2 -> setDiscount($user2 -> registration);
    $user3 -> setDiscount($user3 -> registration);
    $user4 -> setDiscount($user4 -> registration);

    $user1->discount = $user1 -> getDiscount();
    $user2->discount = $user1 -> getDiscount();
    $user3->discount = $user1 -> getDiscount();
    $user4->discount = $user1 -> getDiscount();

?>