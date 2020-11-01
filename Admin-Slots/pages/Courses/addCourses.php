<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Slots Template</title>
  <link rel="stylesheet" href="/GymProject/Admin-Slots/css/normalize.css">
  <link rel="stylesheet" href="/GymProject/Admin-Slots/css/mainTemplate.css" />
  <link rel='stylesheet' href='/GymProject/Admin-Slots/css/courses/courses.css'>
</head>

<body>
  <header class="site-header">
    <nav class="navigation">
      <a href="#">
        <img style="height: 80px; width: 80px;" src="/GymProject/pictures/cedefiOf.png" alt="cedefiLogo" />
      </a>
      <a href="/Admin-Slots/pages/mainSlots/mainSlots.html">Home</a>
      <div class='dropdown'>
        <a class='dropbtn'>Courses</a>
        <div class='dropdown-content'>
          <a href='/GymProject/Admin-Slots/pages/Courses/addCourses.html'>Add Course</a>
          <a href='/GymProject/Admin-Slots/pages/Courses/editRemoveCourses.html'>Edit/Remove Course</a>
          <a href='/GymProject/Admin-Slots/pages/Courses/viewCourses.html'>View Courses</a>
        </div>
      </div>
      <a href="">Time Slots</a>
      <a href="">Support</a></li>
    </nav>
  </header>

  <!--Title-->
  <h1 style='text-align:center'>Courses</h1>

  <!--Card class-->
  <div class='card'>
    <form class='slots' method='post' action='controllerCreateCourse.php'>
      <span>
        <br>
        <label class='label-slots'>Course Name</label> <br>
        <input class='input-slots' name='course'> <br><br>
      </span>
      <span>
        <label class='label-slots'>Brief Description and routine</label>
        <div>
          <textarea class='input-slots' cols='40' rows='10' name='description'> </textarea><br><br>
        </div>
      </span>
        <!--Dropdown class-->
        <div class='instructor-dropdown'>
          <select name='idInstructor'>
          <option value="0">Select instructor</option>
            <?php
              include_once '/xampp/htdocs/GymProject/Database/Database.php';

              $objectReadTable = new Database("localhost", "root", "gym");

              $result = $objectReadTable -> read("instructor");

              (function($array){
                for ($index = 0; $index < count($array); $index++){
                  $value = $index+1;
                  echo '<option value="'.$array[$index]['id'].'">'.$array[$index]['nombre'].'</option>';
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