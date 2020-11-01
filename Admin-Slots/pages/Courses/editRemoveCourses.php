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
  <h1 style='text-align:center'>Show Courses</h1>

  <!--Table class-->
  <table>
    <tr>
      <th>Course</th>
      <th>Instructor</th>
      <th>Availability</th>
      <th>Time Slots</th>
    </tr>
    <tr>
      <td>Zumba</td>
      <td>Regina Madero</td>
      <td>2</td>
      <td>Tuesday and Wednesday</td>
    </tr>
    <tr>
      <td>Rumba</td>
      <td>Armando del Rio</td>
      <td>3</td>
      <td>Tuesday and Wednesday</td>
    </tr>
    <tr>
      <td>Goomba</td>
      <td>Ricardo Aguilera</td>
      <td>4</td>
      <td>Tuesday and Wednesday</td>
    </tr>
    <tr>
      <td>Boxeo</td>
      <td>Pablo Altamirano</td>
      <td>5</td>
      <td>Tuesday and Wednesday</td>
    </tr>
    <tr>
      <td>Crossfit</td>
      <td>Izuku Midoriya</td>
      <td>10</td>
      <td>Tuesday and Wednesday</td>
    </tr>
    <tr>
      <td>Ninjutsu</td>
      <td>Ibuki</td>
      <td>0</td>
      <td>Tuesday and Wednesday</td>
    </tr>
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