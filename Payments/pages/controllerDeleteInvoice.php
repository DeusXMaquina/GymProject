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
      <a href="/GymProject/index.html">Home</a>
      <a href="GymProject/Payments/pages/updateDeleteInvoice.php">Update-Delete Invoice</a></li>
    </nav>
  </header>

  <!--Title-->
  <h1 style='text-align:center'>Edit or Remove Invoice</h1>


  <?php

  include_once '/LibraryApps/XAMPP/htdocs/GymProject/Database/Database.php';

  $DatabaseObject = new Database('localhost', 'root', 'gym');
  $id = $_COOKIE['id'];

  $Firstresult = $DatabaseObject->delete('paymentsdetail', 'idPayments', $id);
  $result = $DatabaseObject->delete('payments', 'id', $id);

  echo '<h2 class="success-message">' . $result . '</h2>';
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