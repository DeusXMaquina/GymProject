<?php

  include_once '/xampp/htdocs/GymProject/Database/Database.php';

  $DatabaseObject = new Database('localhost', 'root', 'gym');

  $result = $DatabaseObject -> delete('courses', 'id', $_COOKIE['id']);

  echo $result;
?>