<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>payments</title>
  <link rel="stylesheet" href="/GymProject/css/normalize.css">
  <link rel="stylesheet" href="/GymProject/css/basicTemplate.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="/GymProject/Payments/css/payments.css">
  <script src="/GymProject/Payments/JS/script.js"></script>
</head>

<body style='background-image: url("/GymProject/Admin-Slots/pictures/luis-vidal-FodEsaNZs48-unsplash.jpg");'>
  <header class="site-header">
    <nav class="navigation">
      <a href="#">
        <img style="height: 80px; width: 80px;" src="/GymProject/pictures/cedefiOf.png" alt="cedefiLogo" />
      </a>
      <a href="/index.html">Home</a>
      <a href="">Users</a>
      <a href="">Slots</a>
      <a href="">Instructors</a>
      <a href="">Support</a></li>
    </nav>
  </header>

  <div class="hero">
    <div class="container-hero">
      <!--Title-->
      <h1 style='text-align:center'>Payments</h1>
      <form action="/GymProject/Payments/Controllers/controllerCreatePayments.php" method="POST" class="payment">
        <!-- Membership-->
        <h3>Select your membership:</h3>
        <p>Gold Membership: all clases + Snack Bar & Shower access ONLY $99 USD</p>
        <p>Silver Membership: All classes FOR $65 USD</p>

        <select id="membership" onchange="selection()">
          <option value="Gold">Gold Membership</option>
          <option value="Silver">Silver Membership</option>
        </select>

        <p id="selection"></p>

        <!-- Full name -->
        <h3>Insert your credit or debit card full information: </h3>
        <input type="text" name="fullName" id="fullName" oninput="toCaps()" placeholder="Full name as shown on credit/debit card" style="width: 330px;" required />

        <!-- Card type-->
        <div class="card">
          <input type="radio" name="card" id="visa" value="visa" />
          <i class="fa fa-cc-visa" style="font-size: 36px; color: darkblue"></i>
          <input type="radio" name="card" id="mastercard" value="mastercard" />
          <i class="fa fa-cc-mastercard" style="font-size: 36px; color: orangered"></i>
          <input type="radio" name="card" id="amexcard" value="amexcard" />
          <i class="fa fa-cc-amex" style="font-size: 36px; color: lightskyblue"></i>
        </div>


        <br />
        <input type="text" name="cardNumber" id="cardNumber" onpaste="paste()" oninvalid="cardLength()" placeholder="Card Number" style="width: 330px;" pattern=".{16,}" required />
        <br />
        <br />
        <input type="number" name="month" id="month" placeholder="MM" style="width: 90px;" min="01" max="12" required />
        /
        <input type="number" name="year" id="year" placeholder="YYYY" style="width: 90px; margin-right: 20px;" min="2020" required />
        <input type="password" name="cvv" id="cvv" placeholder="CCV" style="width: 110px;" required />
        <br><br>
        <p id="terms" onclick="acceptTerms()">Click HERE to accept Terms and Conditions</p>
        <p id="accepted"></p>

        <input type="submit" value="Submit">
        <input type="button" value="Cancel">
        <br><br>
      </form>
    </div>

  </div>
  <footer class="site-footer section-footer">
    <div class="container container-footer">
      <nav id="footer-nav" class="navigation">
        <a href="#">
          <!--<img style="height: 30px; width: 30px;" src="/pictures/cedefiOf.png" alt="cedefiLogo" />-->
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