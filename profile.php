<?php

    require_once "./conn/conn.php";

    $id = $_SESSION['id'];

    $sql = "SELECT * FROM user WHERE id = '$id'";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();

    if($result){
?>
<div class="container px-4 my-5">
    <div class="row gx-5">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Profile</h1>
        </div>
        <div class="col">


            <?php
    foreach ($result as $user){

        

?>

            <div class="form-group row">
                <div class="col-sm-6 mb-3">
                    <input type="text" class="form-control form-control-user" placeholder="<?= $user['fname']?>"
                        readonly>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" placeholder="<?= $user['lname']?>"
                        readonly>
                </div>
            </div>
            <div class="form-group mb-3">
                <input type="email" class="form-control form-control-user" placeholder="<?= $user['email']?>" readonly>
            </div>
            <div class="form-group row mb-3">
                <div class="col-sm-6 mb-3">
                    <input type="password" class="form-control form-control-user" placeholder="<?= $user['password']?>"
                        readonly>
                </div>
                <div class="col-sm-6 mb-3">
                    <input type="text" class="form-control form-control-user" placeholder="<?= $user['status']?>"
                        readonly>
                </div>
            </div>
            <hr>
        </div>



        <div class="col">
            <form class="user" action="./editprofile.php?id=<?= $_SESSION['id']?>" method="post">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3">
                        <input type="text" class="form-control form-control-user" name="fname"
                            value="<?= $user['fname']?>">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" name="lname"
                            value="<?= $user['lname']?>">
                    </div>
                </div>
                <div class="form-group mb-3">
                    <input type="email" class="form-control form-control-user" name="email"
                        value="<?= $user['email']?>">
                </div>
                <div class="form-group row mb-3">
                    <div class="col-sm-6 mb-3">
                        <input type="password" class="form-control form-control-user" name="pass"
                            value="<?= $user['password']?>">
                    </div>
                    <div class="col-sm-6 mb-3">
                        <?php
                        if($user['status'] == "admin") {
            ?>
                        <input type="text" class="form-control form-control-user" value="<?= $user['status']?>"
                            name="status">
                        <?php
            }else{
            ?>
                        <input type="text" class="form-control form-control-user" value="<?= $user['status']?>"
                            name="status" readonly>
                        <?php } ?>
                    </div>
                </div>
                <hr>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-outline-primary mb-3">Edit</button>
                </div>
            </form>
        </div>


        <?php
    }
?>

    </div>
</div>
<?php
}
?>