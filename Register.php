<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <div class="row">
                <img src="./image/5.png" class="col-lg-6 d-none d-lg-block bg-register-image" alt="...">
            <div class="col-lg-6 p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Create an Account Member!</h1>
                </div>
                <form class="user" action="./Registers.php" method="post">
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3">
                            <input type="text" class="form-control form-control-user" name="fname" placeholder="First Name">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" name="lname" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <input type="email" class="form-control form-control-user" name="email" placeholder="Email Address">
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-sm-6 mb-3">
                            <input type="password" class="form-control form-control-user" name="pass" placeholder="Password">
                        </div>
                        <div class="col-sm-6">
                            <input type="password" class="form-control form-control-user"  name="pass2" placeholder="Repeat Password">
                        </div>
                    </div>
                    <hr>
                    <div class="text-center">
                    <button type="submit" class="btn btn-outline-primary mb-3">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>