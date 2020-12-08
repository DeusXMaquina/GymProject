<?php

    include_once '/xampp/htdocs/GymProject/Database/Database.php';
    $objectReadTable = new Database('localhost', 'root', 'gym');
    $userResults = $objectReadTable -> read('users');
    (function ($table, $dataBase){

        $user = $_POST['user'];
        $password = $_POST['password'];
        $flag = false;

        for($index=0; $index<count($table); $index++){
            if($table[$index]['user'] === $user && $table[$index]['pass'] === $password){
                return true;
            }
        }

        if(!$flag){
            $fieldsArray = array("user", "pass");
            $valueContainer = array($user,  $password);
            $createUser = $dataBase -> create("users", $fieldsArray, $valueContainer);
            echo '<h1>'.$createUser.'</h1>';
        }
    })($userResults, $objectReadTable);
    
?>
