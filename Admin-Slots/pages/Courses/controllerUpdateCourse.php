<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Slots Template</title>
  <link rel="stylesheet" href="/GymProject/Admin-Slots/css/normalize.css">
  <link rel="stylesheet" href="/GymProject/Admin-Slots/css/mainTemplate.css" />
  <link rel='stylesheet' href='/GymProject/Admin-Slots/css/courses/editremovecourses.css'>
</head>

<body>
  <header class="site-header">
    <nav class="navigation">
      <a href="#">
        <img style="height: 80px; width: 80px;" src="/GymProject/pictures/cedefiOf.png" alt="cedefiLogo" />
      </a>
      <a href="/GymProject/Admin-Slots/pages/mainSlots/mainSlots.html">Home</a>
      <div class='dropdown'>
        <a class='dropbtn'>Courses</a>
        <div class='dropdown-content'>
            <a href='/GymProject/Admin-Slots/pages/Courses/addCourses.php'>Add Course</a>
            <a href='/GymProject/Admin-Slots/pages/Courses/editRemoveCourses.php'>Edit/Remove Course</a>
            <a href='/GymProject/Admin-Slots/pages/Courses/viewCourses.php'>View Courses</a>
        </div>
      </div>
      <a href="">Time Slots</a>
      <a href="">Support</a></li>
    </nav>
  </header>

  <!--Title-->
  <h1 style='text-align:center'>Edit or Remove Courses</h1>


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


  echo '<h2 class="success-message">'.$result.'</h2>';
?>

<footer class="site-footer section-footer footer">
    <div class="container container-footer">
      <nav id="footer-nav" class="navigation">
        <a href="#"></a>
        <a href="mainTemplate.html">Home</a>
        <a href="">Courses</a>
        <a href="">Time Slots</a>
        <a href="">Support</a></li>
      </nav>
      <img style="height: 50px; width: 50px;" src="/GymProject/pictures/cedefiOf.png" alt="cedefiLogo" />
      <p class="copyright">Copyright &copy; Universidad del Valle de Atemajac </p>
    </div>
  </footer>
</body>
</html>