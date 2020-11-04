<?php

include_once 'C:\LibraryApps\XAMPP\htdocs\GymProject\Database\Database.php';

class paymentsGeneral
{
    public $membership;

    public function __construct($membership)
    {
        $this->membership = $membership;
    }

    public function createPaymentsGeneral()
    {
        function getIdPaymentData($objectCreatePaymentData)
        {
            $result = $objectCreatePaymentData->read('userpaymentdata');
            $lenght = count($result);
            $last = (int)$result[$lenght - 1]["id"];
            return $last;
        }

        $objectCreatePaymentData = new Database('localhost', 'root', 'gym');
        #Filter Membership type
        if ($this->membership = 'gold') {
            $total = '99.000';
        } else {
            $total = '65.00';
        }

        #create payments

        $id = (string)getIdPaymentData($objectCreatePaymentData);
        $getDate = (string)date("Y/m/d");
        return $objectCreatePaymentData->create('payments', array('idUserPaymentData', 'dateIssued', 'total'), array((string)$id, (string) $getDate, (string)$total));
    }
}
