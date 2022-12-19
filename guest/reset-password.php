<!-- header link -->
<?php
    include 'header.php';
    include 'navbar.php';
?>
<div class="main-content">
    <div class="login-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-8 mx-auto">
                    <div class="card card-body">
                        <h1 itemprop="headline" class="text-center mb-3 heading">Reset Password</h1>
                        <form id="submitForm" action="../index.php" method="POST">
                            <input type="hidden" name="_token" value="5lpTfBgn3alUV7Mc3h63FAEwencgJKzcBNa88McZ">
                            <div class="form-group required">
                                <label>Email Address <span class="text-danger">*</span>
                                </label>
                                <input type="email" class="form-control form--control" name="email" required="" value="">
                            </div>
                            <div class="form-group pt-2 pb-3">
                                <button class="btn btn-success btn-block" type="submit">Send Password Reset Code</button>
                            </div>
                        </form>
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