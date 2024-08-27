<?php
class ATMTransactions {
    private $transactionId;
    private $date;
    private $amount;
    private $postBalance;

    public function __construct($transactionId, $date, $amount, $postBalance) {
        $this->transactionId = $transactionId;
        $this->date = $date;
        $this->amount = $amount;
        $this->postBalance = $postBalance;
    }

    public function modifies() {
        // Implementation for modifying
    }
}
?>
