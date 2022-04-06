<?php

    require_once "./respon.php";
    require_once "./conn/conn.php";

    $sql = 'SELECT * FROM Shop_API';

    $stmt = $con->query($sql);
    $stmt->execute();
    $result = $stmt->fetchall(PDO::FETCH_ASSOC);

    if(count($result)){
    ?>
<div id="content">
    <div class="Categories my-5">
        <div class="container">
            <div id="brand" class="brand-bg">
                <h3>Store</h3>
                <div class="row">

                    <?php
    foreach($result as $row){
?>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <h4 class="text-center"><span class="nolmal"><?= $row['name'] ?></span></h4>
                        <div class="brand-box">
                            <i><img src="image/product/<?= $row['image']?>" /></i>
                            <h4>Price $<span class="nolmal"><?= $row['price'] ?></span></h4>
                        </div>
                        <button type="submit" class="buynow" onclick="location.href='#'">Buy now</button>
                    </div>

                    <?php
    }
    ?>
                </div>
            </div>
            <!-- end news brand -->
        </div>
    </div>

    <?php
    }else{
        Response::error('error',404);
    }

?>