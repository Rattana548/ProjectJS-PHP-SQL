<?php

    session_start();
    require_once "./conn/conn.php";

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $status = $_POST['status'];
    $id = $_SESSION['id'];
    


    $sql = "UPDATE user SET fname=?, lname=?, email=? , password=?,status=? WHERE id=?";
    $stmt = $con->prepare($sql)->execute([$fname, $lname, $email, $password, $status, $id]);


    header('refresh:1;url=./index.php?page=profile');



?>