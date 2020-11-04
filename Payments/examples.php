<?php

    include_once "Database.php";

    $objectReadTable = new Database("localhost", "root", "gym");

    #read method
    $result ='';
    $result = $objectReadTable -> read("userpaymentdata");

    #var_dump($result[0]['usuario']);
    
    #create method
    #$result = $objectReadTable -> create('users', array('usuario', 'pass'), array('usuarioPHP', 'desdePHP'));
    #var_dump($result);

    #update method
    #$result = $objectReadTable -> update('users',array('usuario','pass'),array('Arce','pastrami'),'usuario', 'Altamirano')

    #delete method
    #$result = $objectReadTable -> delete('userpaymentdata', 'idUser', '1');
    #var_dump($result);

    #$result = $objectReadTable -> create('userpaymentdata', array('idUser', 'fullName', 'cardNumber','cardExpDate','cvv'), array('1', 'Juan Perez', '123425453234', '2023/05/01', '332'));
    var_dump($result);
