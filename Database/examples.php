<?php

    include_once "Database.php";

    $objectReadTable = new Database("localhost", "root", "gym");

    #read method
    #$result ='';
    #$result = $objectReadTable -> read("courses");

    #var_dump($result);
    
    #create method
    #$result = $objectReadTable -> create('payments', array('usuario', 'pass'), array('usuarioPHP', 'desdePHP'));

    #echo '<h3>'.$result.'<h3>';
    
    #update method
    #$result = $objectReadTable -> update('users',array('usuario'),array('12389gfbjasd'),'id', '1');

    #echo $result

    #delete method
    $result = $objectReadTable -> delete('users', 'id', '1');

    echo $result;


?>