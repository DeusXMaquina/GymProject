<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>template</title>
    <link rel="stylesheet" href="/GymProject/css/normalize.css">
    <link rel="stylesheet" href="/GymProject/Users/css/users.css"/>
    <script LANGUAGE="JavaScript" src="../js/jsActions.js"></script>
</head>

<body>
    <header class="site-header">
        <nav class="navigation">
            <a href="#">
                <img style="height: 80px; width: 80px;" src="/GymProject/pictures/cedefiOf.png" alt="cedefiLogo" />
            </a>
            <a href="/GymProject/index.html">Home</a>
            <a href="/GymProject/Users/pages/users.php">Users</a>
            <a href="">Slots</a>
            <a href="">Instructors</a>
            <a href="#">Payments</a></li>
            <a href="/GymProject/Users/pages/register.php">Register</a></li>
        </nav>
    </header>
    
    <div>
    <img style="padding-bottom: 30px; width: 100%; height: auto;" src="/GymProject/Users/pictures/weights.jpg" alt="weights">
    </div>
    <div class="" style="text-align:center; margin: 20px; padding-bottom: 10px;">
            <h2>Please login to get classes availability</h2>
            <form action="createUser.php" method="POST">
                <label for="fname">User:</label><br>
                <input type="text" id="user" name="user" placeholder="user"><br>
                <label for="lname" style="text: bold;">Password:</label><br>
                <input type="text" id="password" name="password" placeholder="password"><br><br>
                <input type="submit" value="Submit">
            </form>
    </div>

  <!--Table class-->
  <table style="width: 100%; padding-bottom: 20px; padding-top: 20px;  border: 1px solid black; margin-bottom: 20px;">
  <?php echo '<script>alert(Welcome '.$_SERVER['user'].');<script>'?>
    <tr>
      <th>Id</th>
      <th>Course</th>
      <th>Description</th>
      <th>Instructor</th>
    </tr>
    
    <?php

     include_once '/xampp/htdocs/GymProject/Database/Database.php';
     $objectReadTable = new Database('localhost', 'root', 'gym');

      $instructorResults = $objectReadTable -> read('instructors');
      $coursesResults = $objectReadTable -> read('courses');

      function findInstructorName ($instructorArray, $id) {
        for ($index = 0; $index < count($instructorArray); $index++) {
          if ($instructorArray[$index]['idInstructor'] === $id){
            return $instructorArray[$index]['name'];
          }
        }
        return 'No Instructor Assigned';
      }
  
      function insertTableData ($array, $instructor) {
        $instructorFlag = 0;
        foreach ($array as $val) {
          if($instructorFlag === 3){
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

    <a href="https://www.who.int/es/emergencies/diseases/novel-coronavirus-2019">
        <img astyle="width: 100%; margin-bottom: 0%; padding-bottom: auto; height: auto;" src="/GymProject/Users/pictures/covid_banner.png" alt="covid-19 banner">
    </a> 

    <footer class="site-footer section-footer">
        <div class="container container-footer">
            <nav id="footer-nav" class="navigation">
                <a href="#">
                    <img style="height: 30px; width: 30px;" src="/GymProject/pictures/cedefiOf.png" alt="cedefiLogo" />
                </a>
                <a href="index.html">Home</a>
                <a href="">Users</a>
                <a href="">Slots</a>
                <a href="">Instructors</a>
                <a href="">Support</a></li>
            </nav>
            <img style="height: 50px; width: 50px;" src="/GymProject/pictures/cedefiOf.png" alt="cedefiLogo" />
            <p class="copyright">Copyright &copy; Universidad del Valle de Atemajac </p>
        </div>
    </footer>
</body>

</html>
