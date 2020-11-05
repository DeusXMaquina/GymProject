<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>template</title>
    <link rel="stylesheet" href="/GymProject/css/normalize.css">
    <link rel="stylesheet" href="/GymProject/css/basicTemplate.css" />
    <link rel="stylesheet" href="/GymProject/Payments/css/invoice.css">
</head>

<body>
    <header class="site-header">
        <nav class="navigation">
            <a href="#">
                <img style="height: 80px; width: 80px;" src="/GymProject/pictures/cedefiOf.png" alt="cedefiLogo" />
            </a>
            <a href="/GymProject/index.html">Home</a>
            <a href="">Users</a>
            <a href="">Slots</a>
            <a href="">Instructors</a>
            <a href="">Support</a></li>
        </nav>
    </header>

    <div class="conteiner">

        <img class="center" src="/GymProject/Payments/pictures/InvoiceHeaderCEDEFI.png" alt="InvoiceHeader">

        <div class="main-info">
            <div>
                <h2>CEDEFI</h2>
                <?php
                include_once 'C:\LibraryApps\XAMPP\htdocs\GymProject\Payments\Controllers\controllerReadInvoice.php';
                $objectReadInvoice = new ReadInvoice();
                $date = $objectReadInvoice->getDateIssued();
                echo "<label for='date'>Date Issued: " . $date . "</label> <br>";
                $invoiceNumber = $objectReadInvoice->getInvoiceNumber();
                echo "<label for='invoice'>Invoice Number: 00" . $invoiceNumber . "</label>";
                ?>
            </div>
            <div style="text-align: right;">
                <h3>Av. Tepeyac 4800,</h3>
                <h3>Univa, 45050 </h3>
                <h3>Zapopan, Jal.</h3>
            </div>

        </div>


        <div class="main-info">
            <table>
                <th>Description</th>
                <th>Subtotal</th>
                <tr>
                    <?php
                    $description = $objectReadInvoice->getPurchase();
                    echo "<td>" . $description . "</td>";
                    $uniquePrice = $objectReadInvoice->getTotalPrice();
                    echo "<td> $" . $uniquePrice . "</td>";
                    ?>
                </tr>
            </table>
        </div>
        <br><br><br>
        <div class="main-info">
            <table>
                <th>User Info</th>
                <th>Total</th>
                <tr>
                    <?php
                    $fullName = $objectReadInvoice->getFullName();
                    echo "<td>" . $fullName . "</td>";
                    echo "<td> $" . $uniquePrice . "</td>";
                    ?>
                </tr>
            </table>
        </div>
    </div>

    <footer class="site-footer section-footer">
        <div class="container container-footer">
            <nav id="footer-nav" class="navigation">
                <a href="#">
                    <!--<img style="height: 30px; width: 30px;" src="/pictures/cedefiOf.png" alt="cedefiLogo" />-->
                </a>
                <a href="/GymProject/index.html">Home</a>
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