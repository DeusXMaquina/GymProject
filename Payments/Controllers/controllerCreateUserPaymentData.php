<?php

include_once '/xampp/htdocs/GymProject/Database/Database.php';

  $objectCreatePaymentData = new Database('localhost', 'root', 'gym');

  $result = $objectCreatePaymentData -> create('userpaymentpata', array('idUser'), array($_POST['course'], $idInstructor = $_POST['idInstructor'], $_POST['description']));

  echo '<h3>$result<h3>';

?>