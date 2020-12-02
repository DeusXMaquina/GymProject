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
      <a href="">Time Slots</a>
      <a href="">Support</a></li>
    </nav>
  </header>

  <!--Title-->
  <h1 style='text-align:center'>Edit or Remove Invoice</h1>

  <!--Table class-->
  <form method='post'>
    <table id='invoiceTable'>
      <tr>
        <th>Invoice Number</th>
        <th>Name</th>
        <th>Date Issued</th>
        <th>Total Payed</th>
      </tr>
      <?php
      include_once '/LibraryApps/XAMPP/htdocs/GymProject/Database/Database.php';

      $objectReadTable = new Database('localhost', 'root', 'gym');
      $userPaymentsResults = $objectReadTable->read('userpaymentdata');
      $paymentsResults = $objectReadTable->read('payments');

      function findUserName($userPaymentsArray, $id)
      {
        for ($index = 0; $index < count($userPaymentsArray); $index++) {
          if ($userPaymentsArray[$index]['id'] === $id) {
            return $userPaymentsArray[$index]['fullName'];
          }
        }
        return 'No Name found ';
      }

      function insertTableData($array, $paymentsUser, $id)
      {
        $userFlag = 0;
        echo '<tr>';
        foreach ($array as $val) {
          if ($userFlag === 1) {
            echo '<td id="name">' . findUserName($paymentsUser, $val) . '</td>';
            $userFlag++;
          } else {
            echo '<td>' . $val . '</td>';
            $userFlag++;
          }
        }
        echo '<td><button id=' . $id . ' class="removeUpdateButton" type="submit" formaction="/GymProject/Payments/Controllers/controllerUpdateInvoice.php">Update</button><button id=' . $id . ' class="removeUpdateButton" type="submit" formaction="/GymProject/Payments/Controllers/controllerDeleteInvoice.php">Remove</button></td></tr>';
      }
      for ($indexRow = 0; $indexRow < count($paymentsResults); $indexRow++) {
        insertTableData($paymentsResults[$indexRow], $userPaymentsResults, $paymentsResults[$indexRow]['id']);
      }
      ?>
    </table>
  </form>

  <a href="">Time Slots</a>
  <a href="">Support</a></li>
  </nav>
  <img style="height: 50px; width: 50px;" src="/GymProject/pictures/cedefiOf.png" alt="cedefiLogo" />
  <p class="copyright">Copyright &copy; Universidad del Valle de Atemajac </p>
  </div>
  </footer>
</body>
<script src='/GymProject/Payments/Controllers/editRemoveScript.js'></script>

</html>