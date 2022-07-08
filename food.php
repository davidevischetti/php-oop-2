<?php
    include_once  __DIR__ . '/user.php';
    include_once __DIR__ . '/products.php';
    class Food extends Product{
        private $type;
        private $animal;

        function __construct($_price,$_discount, $_stock, $_type, $_animal)
        {
            $this->price = $_price;
            $this->discount = $_discount;
            $this->stock = $_stock;
            $this->type = $_type;
            $this->animal = $_animal;
        }
    }

    $product_food1 = new Food('10$', $user1->discount, 10, 'carne in scatola', 'cane');
    $product_food2 = new Food('15$', $user3->discount, 6, 'croccantini', 'gatto');

    var_dump($product_food1);
    var_dump($product_food2);

?>