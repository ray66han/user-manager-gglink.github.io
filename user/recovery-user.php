<!-- header link -->
<?php
    include 'header.php';
    include 'navbar.php';
?>
<div class="content-wrapper" style="min-height: 265px;">
    <div class="col-md-8 col-lg-12">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-user"></i> Set your account recovery options by email or phone number:
            </div>
            <ul>
                <li>Enter your email or phone.</li>
                <li>Will get a verification code.</li>
                <li>Insert the verification code.</li>
                <li>Submit the code and confirm your account recovery option.</li>
            </ul>
            <div class="card-body">
            <div class="form-group row">
                <!-- email-address verification -->
                <div class="form-group col-sm-6">
                    <label for="email" class="col-form-label">E-mail Address:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail Address" value="rayanbijoy@gglink.uk" readonly="">
                </div>
                <!-- phone number verification -->
                <div class="form-group col-sm-6">
                    <input type="hidden" id="track" name="country_code">
                    <label for="phone" class="col-form-label">Mobile Number</label>
                    <input type="tel" class="form-control pranto-control" id="phone" name="mobile" value="+4407771174774" placeholder="Your Contact Number" readonly="">
                </div>
                <!-- Success Button -->
                <div class="card-footer text-right">
                    <a href="verification-user.php" title="verification code"><button type="submit" class="btn btn-success text-white p-2">Send code!</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer link -->
<?php
    include 'footer.php';
?>