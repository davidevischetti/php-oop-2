<?php
    include_once  __DIR__ . '/user.php';
    include_once __DIR__ . '/products.php';
    class Leashes extends Product{
        private $size;
        private $material;
        private $hypoallergenic;

        function __construct($_price,$_discount, $_stock, $_size, $_material,$_hypoallergenic)
        {
            $this->price = $_price;
            $this->discount = $_discount;
            $this->stock = $_stock;
            $this->size = $_size;
            $this->material = $_material;
            $this->hypoallergenic = $_hypoallergenic;
        }
    }

    $product_leashes1 = new Leashes('17$', $user4->discount, 32, '5m', 'nylon', false);
    $product_leashes2 = new Leashes('45$', $user2->discount, 4, '2m', 'pelle', false);

    var_dump($product_leashes1);
    var_dump($product_leashes2);

?>