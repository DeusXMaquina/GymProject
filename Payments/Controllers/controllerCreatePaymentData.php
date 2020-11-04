<?php

include_once 'C:\LibraryApps\XAMPP\htdocs\GymProject\Database\Database.php';

$objectCreatePaymentData = new Database('localhost', 'root', 'gym');

$result = $objectCreatePaymentData->create('userpaymentdata', array('idUser', 'fullName', 'cardNumber', 'cardExpDate', 'cvv'), array('1', $_POST['fullName'], $_POST['cardNumber'], $expDate = $_POST['year'] . '/' . $_POST['month'] . '/01', $_POST['cvv']));

echo '<h3>$result<h3>';
