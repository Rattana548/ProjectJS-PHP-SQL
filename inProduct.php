<?php
    require_once "./conn/conn.php";

    $res = array(
        'name' => $_POST['name'],
        'price' => $_POST['price'],
    );
    $sql = "ALTER TABLE Shop_API auto_increment = 1";
    $stmt = $con->query($sql);
    $sql = "INSERT INTO Shop_API (name, price) VALUES (:name, :price)";
    $stmt = $con->prepare($sql)->execute($res);
    
    header('refresh:1;url=index.php');

?>