<?php
include_once 'C:\LibraryApps\XAMPP\htdocs\GymProject\Database\Database.php';

$objectCreatePaymentData = new Database('localhost', 'root', 'gym');

function getIdPayments($objectCreatePaymentData)
{
    $result = $objectCreatePaymentData->read('payments');
    $lenght = count($result);
    $last = $result[$lenght - 1];
    return $last["id"];
}

#Filter Membership type
$membership = $_POST['membership'];

if ($membership = 'gold') {
    $total = '99.000';
} else {
    $total = '65.00';
}

#create paymentDetail
$id = getIdPayments($objectCreatePaymentData);
$paymentDetail = $objectCreatePaymentData->create("paymentsdetail", array('idPayments', 'description', 'uniquePrice'), array($id, $_POST['membership'], $total));
echo "<h3>" . $paymentDetail . "<h3>";
