<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Invoice</title>
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
  <h1 style='text-align:center'>Edit or Remove Invoice</h1>



  <?php

  error_reporting(E_ALL & ~E_NOTICE);

  include_once '/LibraryApps/XAMPP/htdocs/GymProject/Database/Database.php';

  $DatabaseObject = new Database('localhost', 'root', 'gym');

  $userPaymentsResults = $DatabaseObject->read('userpaymentdata');
  $paymentsResutls = $DatabaseObject->read('payments');
  $id = $_COOKIE['id'];

  function findUserPaymentId($paymentsArray, $paymentsId, $fullName, $database)
  {
    for ($index = 0; $index < count($paymentsArray); $index++) {
      if ($index = $paymentsId) {
        return $paymentsArray[$index]['idUserPaymentData'];
      }
    }

    $database->create('userpaymentdata', array('fullName'), array($fullName));
    findUserPaymentId($paymentsArray, $paymentsId, $fullName, $database);
  }

  $updateColumns = array();
  $updateValues = array();




  if ($_COOKIE['name']) {
    $userNameId = findUserPaymentId($paymentsArray, $id, $_COOKIE['name'], $DatabaseObject);

    array_push($updateColumns, 'fullName');
    array_push($updateValues, $_COOKIE('name'));

    $nameresult = $DatabaseObject->update('userpaymentdata', $updateColumns, $updateValues, 'id', $userNameId);
  }

  if ($_COOKIE['date']) {
    array_push($updatePaymentColumns, 'dateIssued');
    array_push($updatePaymentValues, $_COOKIE['date']);
  }

  if ($_COOKIE['total']) {
    array_push($updateColumns, 'total');
    array_push($updateValues, $_COOKIE['total']);
  }

  $result = $DatabaseObject->update('payments', $updatePaymentColumns, $updatePaymentValues, 'id', (string)$id);



  echo '<h2 class="success-message">' . $nameresult . 'and ' . $result . '</h2>';
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