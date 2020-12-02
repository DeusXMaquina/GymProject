<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Slots Template</title>
  <link rel="stylesheet" href="/GymProject/Admin-Slots/css/normalize.css">
  <link rel="stylesheet" href="/GymProject/Admin-Slots/css/mainTemplate.css" />
  <link rel='stylesheet' href='/GymProject/Admin-Slots/css/courses/viewcourses.css'>
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
          <a href='/GymProject/Admin-Slots/pages/Slots/createTimeSlot.php'>Add Time Slot</a>
          <a href='/GymProject/Admin-Slots/pages/Slots/removeTimeSlots.php'>Edit/Remove TimeSlot</a>
          <a href='/GymProject/Admin-Slots/pages/Slots/viewTimeCourses.php'>View TimeSlots</a>
        </div>
      </div>
    </nav>
  </header>

  <!--Title-->
  <h1 style='text-align:center'>Show Courses</h1>

  <!--Table class-->
  <table>
    <tr>
      <th>Id</th>
      <th>Course</th>
      <th>Instructor</th>
      <th>Description</th>
    </tr>
    <?php
      include_once '/xampp/htdocs/GymProject/Database/Database.php';

      $objectReadTable = new Database('localhost', 'root', 'gym');
      $instructorResults = $objectReadTable -> read('instructor');
      $coursesResults = $objectReadTable -> read('courses');

      function findInstructorName ($instructorArray, $id) {
        for ($index = 0; $index < count($instructorArray); $index++) {
          if ($instructorArray[$index]['id'] === $id){
            return $instructorArray[$index]['name'];
          }
        }
        return 'No Instructor Assigned';
      }

      function insertTableData ($array, $instructor) {
        $instructorFlag = 0;
        foreach ($array as $val) {
          if($instructorFlag === 2){
            echo '<td>'.findInstructorName($instructor, $val).'</td>';
            $instructorFlag++;
          } else {
            echo '<td>'.$val.'</td>';
            $instructorFlag++;
          }
         }
       }

       for ($indexRow = 0; $indexRow < count($coursesResults); $indexRow ++) {
         echo '<tr>'.insertTableData($coursesResults[$indexRow], $instructorResults).'</tr>';
       }
    ?>
  </table>
  

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