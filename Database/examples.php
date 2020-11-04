<?php

    include_once "Database.php";

    $objectReadTable = new Database("localhost", "root", "gym");

    #read method
    $result ='';
    $result = $objectReadTable -> read('userpaymentdata');
    $count = count($result);
    
    var_dump($result[$count-1]['id']);
    
    #create method
    #$result = $objectReadTable -> create('users', array('usuario', 'pass'), array('usuarioPHP', 'desdePHP'));
    
    #update method
    #$result = $objectReadTable -> update('users',array('usuario','pass'),array('Arce','pastrami'),'usuario', 'Altamirano')

    #delete method
    #$result = $objectReadTable -> delete('users', 'usuario', 'usuarioPHP')

?>