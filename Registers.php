<?php

    require_once "./conn/conn.php";

    $password = $_POST['pass'];
    $checkpass = $_POST['pass2'];
    if(isset($password)){
        if($password == $checkpass) {
            $sql = "ALTER TABLE user auto_increment = 1";
            $stmt = $con->query($sql);
            $res = array(
                'fname' => $_POST['fname'],
                'lname' => $_POST['lname'],
                'password' => $_POST['pass'],
                'email' => $_POST['email']
            );
            $sql = "INSERT INTO user (fname,lname,password,email) VALUES (:fname,:lname,:password,:email)";
            $stmt = $con->prepare($sql);
            $stmt->execute($res);
            echo '<script>alert("Register is successful")</script>';
            header('refresh:1;url=./index.php');
        }else {
            echo '<script>alert("Incomplete information or the password is not the same")</script>';
            header('refresh:1;url=./index.php?page=Register');
        }
    }else{
        echo '<script>alert("Incomplete information must povice")</script>';
        header('refresh:1;url=./index.php?page=Register');
    }

?>