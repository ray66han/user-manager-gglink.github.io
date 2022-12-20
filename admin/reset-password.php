<!-- header link --> <?php
include 'header.php';
?> <div class="main-content">
    <div class="login-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-8 mx-auto">
                    <div class="form-wrapper">
                        <h4 class="logo-text mb-15">
                            <strong>Recover Account</strong>
                        </h4>
                        <form action="index.php" method="POST" class="cmn-form mt-30">
                            <input type="hidden" name="_token" value="37tYQikx58exj7OZ0gQG7r5WyM3JMKIDdyOMM4IY">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control b-radius--capsule" id="username" value="" placeholder="Enter your email">
                                <i class="las la-user input-icon"></i>
                            </div>
                            <div class="form-group d-flex justify-content-between align-items-center">
                                <a href="index.php" class="text-muted text--small">
                                    <i class="las la-lock"></i>Login Here </a>
                            </div>
                            <div class="form-group">
                                <a href="" title="log-in"><button type="submit" class="submit-btn btn-success mt-25 b-radius--capsule">Send Reset Code <i class="las la-sign-in-alt"></i>
                                </button> </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer link --> <?php
    include 'footer.php';
?>