<?php
class ATM {
    private $location;
    private $managedBy; // This should be a Bank object

    public function __construct($location, $managedBy) {
        $this->location = $location;
        $this->managedBy = $managedBy;
    }

    public function identifies() {
        // Implementation for identifying
    }

    public function transactions() {
        // Implementation for transactions
    }
}
?>
