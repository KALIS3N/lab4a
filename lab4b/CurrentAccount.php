<?php
require_once 'Account.php';

class CurrentAccount extends Account {

    public function __construct($number, $balance) {
        parent::__construct($number, $balance);
    }

    public function withdraw($amount) {
        return parent::withdraw($amount);
    }

    public function createTransaction($amount, $postBalance) {
        // Create and return a new ATMTransaction object
    }
}
?>
