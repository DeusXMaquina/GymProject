<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>template</title>
    <link rel="stylesheet" href="/GymProject/css/normalize.css">
    <link rel="stylesheet" href="/GymProject/Users/css/users.css"/>
    <script> function myFunction(){ alert("Correct user"); } </script>
    <script> function myOtherFunction(){ alert("User not found"); } </script>
</head>

<body>
    <header class="site-header">
        <nav class="navigation">
            <a href="#">
                <img style="height: 80px; width: 80px;" src="/GymProject/pictures/cedefiOf.png" alt="cedefiLogo" />
            </a>
            <a href="index.html">Home</a>
            <a href="">Users</a>
            <a href="">Slots</a>
            <a href="">Instructors</a>
            <a href="/Users/">Payments</a></li>
        </nav>
    </header>
    
    <div>
    <img style="padding-bottom: 30px; width: 100%; height: auto;" src="/GymProject/Users/pictures/weights.jpg" alt="weights">
    </div>
      <div class="" style='text-align:center'>
            <h2>Please login to get classes availability</h2>
            <form action="/action_page.php">
                <label for="fname">User:</label><br>
                <input type="text" id="usuario" name="usuario" placeholder="usuario"><br>
                <label for="lname" style="text: bold;">Password:</label><br>
                <input type="text" id="pass" name="pass" placeholder="pass"><br><br>
                <input type="submit" value="Submit" onclick="myFunction()">
            </form>
        </div>

<!-----------------------------------  PHP STARTS ---------------------------------->

        <?php
            include_once '/xampp/htdocs/GymProject/Database/Database.php';

            $objectReadTable = new Database('localhost', 'root', 'gym');
            $userArray = $objectReadTable -> read('users');

            for ($index = 0; $index <= count($userArray); $index++) {
                if ($userArray[$index]['usuario'] === 'usuario' && $userArray[$index]['pass'] === 'pass'){
                    echo '<script>myfunction()</script>';
                    return $userArray[$index]['id'];
                } else{
                    echo '<script>myOtherfunction()</script>';
                }
            }

        ?>
<!---------------------------------  PHP ENDS -------------------------------------->

    <!--Gym calendar section-->
    <section class="gym-calendar" >
        <div class="gym-table">
            <table>
              <div>
                <tr>
                    <th colspan="8">Month</th>
                </tr>
                <tr>
                  <th colspan="8">Week #</th>
                </tr>
              </div>
              <div class="schedule-time">
                <tr class="week-days">
                    <th>Time:</th>
                    <th>Mon</th>
                    <th>Tu</th>
                    <th>Thu</th>
                    <th>Wed</th>
                    <th>Fri</th>
                    <th>Sat</th>
                    <th>Sun</th>
                </tr> 
              </div>
              <div class="activities">
                <tr>
                    <td>6:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>7:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>8:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>9:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>10:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>11:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>12:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>13:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>14:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>15:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>16:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>17:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>18:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>19:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>20:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>21:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>22:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
              </div>
                </table>
        </div>
    </section>
    <div>
    <a href="https://www.who.int/es/emergencies/diseases/novel-coronavirus-2019">
        <img astyle="width: 100%; margin-bottom: 0%; padding-bottom: 0px; height: auto;"
        src="/GymProject/Users/pictures/covid_banner.png" alt="covid-19 banner">
    </a>
    </div> 

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
