<?php
    include_once  __DIR__ . '/user.php';
    class CreditCards {
        private $holder;
        public $expiration_date;

        function __construct($_holder, $_expiration_date)
        {
            $this->holder = $_holder;
            $this->expiration_date = $_expiration_date;
        }

        public function checkCard() {
            $now_time = strtotime("now");
            $expiration_time = strtotime($this->expiration_date);
            if ($now_time < $expiration_time) {
                return 'carta accettata';
            } else {
                return ' carta rifiutata';
            }

        }
    }

    $card1 = new CreditCards($user1, '08/24');
    $card2 = new CreditCards($user2, '03/22');

    $card1_check = $card1->checkCard();
    $card2_check = $card2->checkCard();

    var_dump($card1_check);
    var_dump($card2_check);
?>