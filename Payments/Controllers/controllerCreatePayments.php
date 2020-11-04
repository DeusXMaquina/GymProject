<?php

include_once 'C:\LibraryApps\XAMPP\htdocs\GymProject\Payments\Controllers\controllerCreateUserPayment.php';
include_once 'C:\LibraryApps\XAMPP\htdocs\GymProject\Payments\Controllers\controllerCreatePaymentsGeneral.php';
include_once 'C:\LibraryApps\XAMPP\htdocs\GymProject\Payments\Controllers\controllerCreatePaymentsDetail.php';

$fullName = $_POST['fullName'];
$card = $_POST['cardNumber'];
$expDate = $_POST['year'] . '/' . $_POST['month'] . '/01';
$cvv = $_POST['cvv'];
$membership = $_POST['membership'];

$objectCreateUserPayment = new userPayment($fullName, $card, $expDate, $cvv);
$createUserPayment = $objectCreateUserPayment->createUserPayment();

$objectCreateGeneral = new paymentsGeneral($membership);
$createPaymentsGeneral = $objectCreateGeneral->createPaymentsGeneral();

$objectCreateDetail = new paymentsDetail($membership);
$createPaymentDetails = $objectCreateDetail->createPaymentsDetail();

var_dump($createUserPayment);
var_dump($createPaymentsGeneral);
var_dump($createPaymentDetails);
