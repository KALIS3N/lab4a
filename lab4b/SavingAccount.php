<?php
require_once 'Account.php';

class SavingAccount extends Account {

    public function __construct($number, $balance) {
        parent::__construct($number, $balance);
    }

    public function createTransaction($amount, $postBalance) {
        // Create and return a new ATMTransaction object
    }
}
?>
