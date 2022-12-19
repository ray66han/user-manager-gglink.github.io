<!-- header link -->
<?php
    include 'header.php';
    include 'navbar.php';
?>
<div class="content-wrapper" style="min-height: 265px;">
    <div class="col-md-8 col-lg-12">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-user"></i> Enter your verification code!
            </div>
            <div class="card-body">
            <div class="form-group row">
                <!-- email-address verification -->
                <div class="form-group col-sm-6">
                    <input type="number" class="form-control" id="verification-code" name="OTP" placeholder="OTP" value="example:098 876">
                </div>
                <!-- phone number verification -->
                <!-- Success Button -->
                <div class="card-footer text-right">
                    <a href="recovery-user.php" title="verification code"><button type="submit" class="btn btn-success text-white p-2">Verify!</button></a>
                </div>
                <!-- Didn't get a code! Re-send it. -->
                <div class="card-footer text-right">
                    <a href="" title="Did't get a verification code?">Did't get a verification code? Resend it!</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer link -->
<?php
    include 'success-alert.php';
    include 'warning-alert.php';
    include 'info-alert.php';
    include 'danger-alert.php';
    include 'footer.php';
?>