<?php
abstract class Account {
    protected $number;
    protected $balance;

    public function __construct($number, $balance) {
        $this->number = $number;
        $this->balance = $balance;
    }

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }

    abstract public function createTransaction($amount, $postBalance);
}
?>
