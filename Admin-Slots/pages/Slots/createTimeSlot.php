<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Slots Template</title>
  <link rel="stylesheet" href="/GymProject/Admin-Slots/css/normalize.css">
  <link rel="stylesheet" href="/GymProject/Admin-Slots/css/mainTemplate.css" />
  <link rel='stylesheet' href='/GymProject/Admin-Slots/css/slots/slots.css'>
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
      <div class='dropdown'>
        <a class='dropbtn'>Time Slots</a>
        <div class='dropdown-content'>
          <a href='/GymProject/Admin-Slots/pages/Courses/addCourses.php'>Add Time Slot</a>
          <a href='/GymProject/Admin-Slots/pages/Courses/editRemoveCourses.php'>Edit/Remove TimeSlot</a>
          <a href='/GymProject/Admin-Slots/pages/Courses/viewCourses.php'>View TimeSlots</a>
        </div>
      </div>
      <a href="">Support</a></li>
    </nav>
  </header>

  <!--Title-->
  <h1 style='text-align:center'>Time Slot</h1>

  <!--Card class-->
  <div class='card'>
    <form class='slots' method='post' action='controllerAddTimeSlot.php'>
      <span>
        <div class='item-dropdown'>
          <select name='idCourse'>
            <option value='0'>Select Course</option>
            <?php
              include_once '/xampp/htdocs/GymProject/Database/Database.php';

              $objectReadTable = new Database("localhost", "root", "gym");

              $result = $objectReadTable -> read("courses");

              (function($array){
                for ($index = 0; $index < count($array); $index++){
                  echo '<option value="'.$array[$index]['id'].'">'.$array[$index]['name'].'</option>';
                }
              })($result)
            ?>
          </select>
        </div>
      </span>
      <div class='item-dropdown'>
        <select name='idTimeFrame'>
          <option value='0'>Select time frame</option>
          <?php

              $result = $objectReadTable -> read("timeSlots");

              (function($array){
                for ($index = 0; $index < count($array); $index++){
                  echo '<option value="'.$array[$index]['id'].'">'.$array[$index]['timeFrame'].'</option>';
                }
              })($result)
            ?>
      </select>
      </div>
        <br><br>
        <input style='padding:5px; margin:10px' type='submit' value='Add'>
      </form>
  </div>


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