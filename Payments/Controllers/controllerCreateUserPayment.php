<?php

include_once 'C:\LibraryApps\XAMPP\htdocs\GymProject\Database\Database.php';

class userPayment
{
    public $fullName;
    public $card;
    public $expDate;
    public $cvv;

    public function __construct($fullName, $card, $expDate, $cvv)
    {
        $this->fullName = $fullName;
        $this->card = $card;
        $this->expDate = $expDate;
        $this->cvv = $cvv;
    }

    public function createUserPayment()
    {
        $objectCreatePaymentData = new Database('localhost', 'root', 'gym');

        $result = $objectCreatePaymentData->create('userpaymentdata', array('idUser', 'fullName', 'cardNumber', 'cardExpDate', 'cvv'), array('1', $this->fullName, $this->card, $this->expDate, $this->cvv));
        return $result;
    }
}
