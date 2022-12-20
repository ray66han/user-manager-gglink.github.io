<div class="login-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-8 mx-auto">
                <div class="form-wrapper">
                    <h4 class="logo-text mb-15">Welcome to <strong>User-manager(GG)</strong>
                    </h4>
                    <p>Admin Login to User-manager dashboard</p>
                    <form action="dashboard.php" method="POST" class="cmn-form mt-30">
                        <input type="hidden" name="_token" value="37tYQikx58exj7OZ0gQG7r5WyM3JMKIDdyOMM4IY">
                        <div class="form-group">
                            <label for="email">Username</label>
                            <input type="text" name="username" class="form-control b-radius--capsule" id="username" value="" placeholder="Enter your username">
                            <i class="las la-user input-icon"></i>
                        </div>
                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" name="password" class="form-control b-radius--capsule" id="pass" placeholder="Enter your password">
                            <i class="las la-lock input-icon"></i>
                        </div>
                        <div class="form-group d-flex justify-content-between align-items-center">
                            <a href="reset-password.php" class="text-muted text--small">
                                <i class="las la-lock"></i>Forgot password? </a>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="submit-btn btn-success mt-25 b-radius--capsule">Login <i class="las la-sign-in-alt"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>