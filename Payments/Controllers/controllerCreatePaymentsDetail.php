<?php

include_once 'C:\LibraryApps\XAMPP\htdocs\GymProject\Database\Database.php';

class paymentsDetail
{
    public $membership;

    public function __construct($membership)
    {
        $this->membership = $membership;
    }

    public function createPaymentsDetail()
    {
        function getIdPayments($objectCreatePaymentData)
        {
            $result = $objectCreatePaymentData->read('payments');
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
        #create paymentDetail
        $id = (string)getIdPayments($objectCreatePaymentData);
        return $objectCreatePaymentData->create("paymentsdetail", array('idPayments', 'description', 'uniquePrice'), array($id, $this->membership, $total));
    }
}
