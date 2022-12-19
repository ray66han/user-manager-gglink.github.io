<!-- header link -->
<?php
    include 'header.php';
    include 'navbar.php';
?>
<div class="login-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-8 mx-auto">
                <div class="card card-body">
                    <h1 itemprop="headline" class="text-center mb-3 heading">Login Your Account Now</h1>
                    <form id="submitForm" action="user/index.php" method="POST">
                        <input type="hidden" name="_token" value="5lpTfBgn3alUV7Mc3h63FAEwencgJKzcBNa88McZ">
                        <div class="form-group required">
                            <label for="username">Username <span class="required">*</span>
                            </label>
                            <input type="text" class="form-control text-lowercase" id="username" name="username" placeholder="Username" required="" value="">
                        </div>
                        <div class="form-group required">
                            <label for="password" class="d-flex flex-row align-items-center">Password <span class="required">*</span>
                            </label>
                            <input type="password" class="form-control" id="password" name="password" value="" placeholder="Password" required="">
                        </div>
                        <div class="form-group required"></div>
                        <div class="form-group pt-2 pb-3">
                            <button class="btn btn-success btn-block" type="submit">Login Now</button>
                        </div>
                    </form>
                    <div class="text-center mb-2">
                        <a itemprop="url" href="guest/reset-password.php">Forgot Password ?</a>
                    </div>
                    <div class="text-center">
                        <span itemprop="text" class="text-muted">Don't Have An Account ? </span>
                        <a itemprop="url" href="guest/register.php" title="Register Now">Register Now</a>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group pt-2 pb-3">
                                <a class="btn btn-block btn-primary" itemprop="url" href="https://skillstest.me/login/google">
                                    <i class="fab fa-google"></i> Login with Google </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group pt-2 pb-3">
                                <a class="btn btn-block btn-danger" itemprop="url" href="https://skillstest.me/login/facebook">
                                    <i class="fab fa-facebook-square"></i> Login with Facebook </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer link -->
<?php
    include 'footer.php';
?>