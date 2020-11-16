<?php
include_once 'C:\LibraryApps\XAMPP\htdocs\GymProject\Database\Database.php';

class ReadInvoice
{

    public  $objectConnection;

    public function __construct()
    {
        $this->objectConnection = new Database('localhost', 'root', 'gym');
    }

    public function getDateIssued()
    {
        function getDatePaymentData($objectConnection)
        {
            $result = $objectConnection->read('payments');
            $lenght = count($result);
            $last = (string)$result[$lenght - 1]["dateIssued"];
            return $last;
        }
        return (string)getDatePaymentData($this->objectConnection);
    }

    public function getInvoiceNumber()
    {
        function getIdPaymentData($objectConnection)
        {
            $result = $objectConnection->read('payments');
            $lenght = count($result);
            $last = (string)$result[$lenght - 1]["id"];
            return $last;
        }

        return (string) getIdPaymentData($this->objectConnection);
    }

    public function getPurchase()
    {
        function getDescription($objectConnection)
        {
            $result = $objectConnection->read('paymentsdetail');
            $lenght = count($result);
            $last = (string)$result[$lenght - 1]["description"];
            return $last;
        }

        return (string) getDescription($this->objectConnection);
    }

    public function getTotalPrice()
    {
        function getPrice($objectConnection)
        {
            $result = $objectConnection->read('paymentsdetail');
            $lenght = count($result);
            $last = (string)$result[$lenght - 1]["uniquePrice"];
            return $last;
        }

        return (string) getPrice($this->objectConnection);
    }

    public function getFullName()
    {
        function getName($objectConnection)
        {
            $result = $objectConnection->read('userpaymentdata');
            $lenght = count($result);
            $last = (string)$result[$lenght - 1]["fullName"];
            return $last;
        }

        return (string) getName($this->objectConnection);
    }
}
