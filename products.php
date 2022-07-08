<?php

    include_once  __DIR__ . '/user.php';
    class Product {
        protected $price;
        protected $discount;
        protected int $stock;

        function __construct($_price,$_discount, $_stock)
        {
            $this->price = $_price;
            $this->discount = $_discount;
            $this->stock = $_stock;
        }

    }

    $product1 = new Product('100$', $user1->discount , 5);

?>