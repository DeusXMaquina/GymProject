<?php

    include_once '/xampp/htdocs/GymProject/Database/Database.php';
    $objectReadTable = new Database('localhost', 'root', 'gym');
    $userResults = $objectReadTable -> read('users');
    (function ($table, $dataBase){

        $user = $_POST['user'];
        $password = $_POST['password'];
        $Nuser = $_POST['Nuser'];
        $Npassword = $_POST['Npassword'];
        $flag = false;
        $value = -1;

        for($index=0; $index<count($table); $index++){
            if($table[$index]['user'] === $user && $table[$index]['pass'] === $password){
                $value = $table[$index]['id'];
                $flag = true;
            }
        }

        /**
         * method to update info from table, table, colunmName and findValue must be strings, updateFields and updateValues must be an array
         * public function update($table, $updateFields, $updateValues, $columnName, $findValue) {
         */

        if($flag){
            $fieldsArray = array("user", "pass"); #COLUMNAS DE DB
            $valueContainer = array($Nuser,  $Npassword); #new data
            $modifyUser = $dataBase ->update('users', $fieldsArray, $valueContainer, 'id', $value);
            echo '<h1>'.$modifyUser.'</h1>';
        }
    })($userResults, $objectReadTable);
    
?>
