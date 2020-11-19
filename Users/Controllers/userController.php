<?php
    include_once '/xampp/htdocs/GymProject/Database/Database.php';
    $objectReadTable = new Database('localhost', 'root', 'gym');
    $userResults = $objectReadTable -> read('users');
    function findUser($userResults){
        
        $user = $_POST['user'];
        $password = $_POST['password'];
        for($index=0; $index<count($userResults); $index++){
            if($userResults[$index]['user'] === $user && $userResults[$index]['pass'] === $password){
                return'<h2>Welcome '.$user.'</h2>';
            } 
        }
        return'<h2>Invalid user/password, try again</h2>';
    }
        echo findUser($userResults);

/*
  * 
*/
?>
