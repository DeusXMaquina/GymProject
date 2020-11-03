<?php

  error_reporting(E_ALL & ~E_NOTICE);

  include_once '/xampp/htdocs/GymProject/Database/Database.php';

  $DatabaseObject = new Database('localhost', 'root', 'gym');

  $instructorResults = $DatabaseObject -> read('instructor');

  function findInstructorId ($instructorArray, $nombre, $database) {
    for ($index = 0; $index < count($instructorArray); $index++) {
      if ($instructorArray[$index]['nombre'] === $nombre){
        return $instructorArray[$index]['id'];
      }
    }
    $database -> create('instructor', array('nombre'), array($nombre));
    findInstructorId($instructorArray, $nombre, $database);
  }
  
  $updateColumns = array();
  $updateValues = array();

  if ($_COOKIE['course']) {
    array_push($updateColumns, 'name');
    array_push($updateValues, $_COOKIE['course']);
  }

  if ($_COOKIE['instructor']) {
    $instructorId = findInstructorId($instructorResults, $_COOKIE['instructor'], $DatabaseObject);
    array_push($updateColumns, 'idInstructor');
    array_push($updateValues, $instructorId);
  }

  if ($_COOKIE['description']) {
    array_push($updateColumns, 'description');
    array_push($updateValues, $_COOKIE['description']);
  }

  $result = $DatabaseObject -> update('courses',$updateColumns,$updateValues,'id', $_COOKIE['id']);


  echo $result;
?>