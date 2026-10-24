<?php

class BankAccount {
    protected $balance;

    public function __construct($balance) {
        $this->balance = $balance;
    }

    public function deposit($amount) {
        $this->balance += $amount; 
    }

    public function getBalance() {
        return $this->balance; 
    }
}

class SavingAccount extends BankAccount {
    public $interestRate;

    public function __construct($balance, $interestRate) {
        parent::__construct($balance);
        $this->interestRate = $interestRate;
    }

    public function addInterest() {
        $interest = $this->balance * $this->interestRate;
        $this->balance += $interest;
    }

    public function display() {
        echo "Your balance: {$this->getBalance()} and Interest Rate: {$this->interestRate}\n";
    }
}

// التجربة
$bank = new SavingAccount(1000, 0.05); 
$bank->addInterest();                 
echo "الرصيد النهائي: " . $bank->getBalance(); 

?>