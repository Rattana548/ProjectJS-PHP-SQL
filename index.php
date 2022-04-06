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

    <header>
        <div class="container">
            <?php 
        
        if(isset($_SESSION['fname'])&&$_SESSION['status'] == "admin"){
            ?>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link" type="button" onclick="location.href='index.php?page=index'">Home</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" type="button" onclick="location.href='index.php?page=shops'">Shop</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" type="button"
                        onclick="location.href='index.php?page=profile&?id=<?= $_SESSION['id']?>'"><?= $_SESSION['fname']?></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" type="button" onclick="location.href='index.php?page=Status'">Status ::
                        <?= $_SESSION['status']?></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" type="button" onclick="location.href='./login/logout.php'">Logout</button>
                </li>
            </ul>

            <?php
        }else if(isset($_SESSION['fname'])){
        ?>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link" type="button" onclick="location.href='index.php?page=index'">Home</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" type="button" onclick="location.href='index.php?page=shops'">Shop</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" type="button"
                        onclick="location.href='index.php?page=profile&?id=<?= $_SESSION['id']?>'"><?= $_SESSION['fname']?></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" type="button" onclick="location.href='./login/logout.php'">Logout</button>
                </li>
            </ul>

            <?php
        
     }else{ 
        ?>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="home-tab" type="button"
                        onclick="location.href='index.php?page=index'">Home</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="shop-tab" type="button"
                        onclick="location.href='index.php?page=shops'">Shop</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="login-tab" type="button"
                        onclick="location.href='index.php?page=login'">Login</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="register-tab" type="button"
                        onclick="location.href='index.php?page=Register'">Register</button>
                </li>
            </ul>
        </div>
    </header>


    <?php 
    }
    ?>

    <div class="container">
        <?php 
            $page = $_GET['page'];
            
            include_once ('./'.$page.'.php')
        ?>
    </div>




    <script src="css/js/bootstrap.min.js"></script>

</body>

</html>