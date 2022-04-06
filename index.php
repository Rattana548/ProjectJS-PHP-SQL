<?php
    session_start();
    require_once "./conn/conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mini Mart KMUTNB</title>
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/csss/mystyle.css">
</head>
<body class="bg-Secondary">
    <div class="container">
        <?php 
        
        if(isset($_SESSION['fname'])&&$_SESSION['status'] == "admin"){
            ?>
            <nav>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-selected="true" onclick="location.href='index.php?page=index'">Home</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-selected="false" onclick="location.href='index.php?page=shops'">Shop</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-selected="false" onclick="location.href='index.php?page=profile'"><?= $_SESSION['fname']?></button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-selected="false">Status :: <?= $_SESSION['status']?></button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-selected="false" onclick="location.href='./login/logout.php'">Logout</button>
  </li>
</ul>

    <?php
        }else if(isset($_SESSION['fname'])&&$_SESSION['status'] != "admin"){
        ?>
         <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-selected="true" onclick="location.href='index.php?page=index'">Home</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-selected="false" onclick="location.href='index.php?page=shops'">Shop</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-selected="false" onclick="location.href='index.php?page=profile'"><?= $_SESSION['fname']?></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-selected="false" onclick="location.href='./login/logout.php'">Logout</button>
            </li>
        </ul>

        <?php
        
    }else{
            include_once ('./nev.php');
        }
        if (!empty($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 'index';
        }
    ?>
            <div class="container">
                <?php include_once ('./'.$page.'.php')?>
            </div>
                
    </div>





    <script src="css/js/bootstrap.min.js"></script>

</body>
</html>