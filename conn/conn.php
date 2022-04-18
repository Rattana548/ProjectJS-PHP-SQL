<?php

    $server = {host};
    $username = {user};
    $password = {password};
    $dbname = {db_name};

    try{
        $con = new PDO("mysql:host=$server;dbname=$dbname",$username,$password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $a){
        echo "Connection falied : ". $a->getMessage();
        exit();
    }

?>
