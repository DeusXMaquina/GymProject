<?php

    include_once '/xampp/htdocs/GymProject/Database/Database.php';
    $objectReadTable = new Database('localhost', 'root', 'gym');
    $userResults = $objectReadTable -> read('users');

    function findUser($userResults){
        
        $user = $_POST['user'];
        $password = $_POST['password'];
        for($index=0; $index<count($userResults); $index++){
            if($userResults[$index]['user'] === $user && $userResults[$index]['pass'] === $password){
                // 301 Moved Permanently
                header("Location: http://localhost/GymProject/Users/pages/users.php?user=$user", true, 301);
                echo '<script>alert("Welcome back $user!");</script>';
            } 
        }
        header("Location: http://localhost/GymProject/Users/pages/users.php", false, 301);
        echo '<script>alert("Welcome back!");</script>';        
<<<<<<< HEAD:Users/Controllers/userController.php
    }
        
    

=======
    }    
>>>>>>> a44a1ca670d638dd7d5ed3ea2d40b057a9773232:Payments/Controllers/userController.php
?>
