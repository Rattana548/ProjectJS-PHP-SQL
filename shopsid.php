<?php
    session_start();

    require_once "./respon.php";
    require_once "./conn/conn.php";

    $res = array(
        'name' => $_GET['name'],
        'password' => $_GET['password']
    );
    $sql = 'SELECT * FROM user WHERE name=:name and password=:password';
    $stmt = $con->prepare($sql);
    $stmt->execute($res);
    $result = $stmt->fetchall(PDO::FETCH_ASSOC);

    if(count($result)){
        Response::success($result,'success',200);
        
    }else{
        Response::error('error',404);
    }


?>