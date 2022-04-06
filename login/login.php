<?php
    session_start();
    require_once "../respon.php";
    require_once "../conn/conn.php";

    $res = array(
        'email' => $_GET['email'],
        'password' => $_GET['password']
    );
    $sql = 'SELECT * FROM user WHERE email=:email and password=:password';
    $stmt = $con->prepare($sql);
    $stmt->execute($res);
    $result = $stmt->fetchall(PDO::FETCH_ASSOC);

    if(count($result)){
        echo "Logged in!";
        foreach($result as $row){
            $_SESSION['id'] = $row['id'];
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['lname'] = $row['lname'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['status'] = $row['status'];
            header('refresh:1;url=../index.php?');
        }
    }else{
        Response::error('error',404);
    }

?>