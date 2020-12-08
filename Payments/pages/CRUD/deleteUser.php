<?php

    include_once '/xampp/htdocs/GymProject/Database/Database.php';
    $objectReadTable = new Database('localhost', 'root', 'gym');
    $userResults = $objectReadTable -> read('users');

    (function ($table, $dataBase){

        $user = $_POST['user'];
        $password = $_POST['password'];
        $flag = false;
        $value = -1;

        for($index=0; $index<count($table); $index++){
            if($table[$index]['user'] === $user && $table[$index]['pass'] === $password){
                $value = $table[$index]['id'];
                $flag = true; 
            }
        }

        if($flag){
            $createUser = $dataBase -> delete("users", 'id', $value);
            echo '<h1>'.$createUser.'</h1>';
        }#FROM 'users' WHERE x = y
    })($userResults, $objectReadTable);
    
?>
