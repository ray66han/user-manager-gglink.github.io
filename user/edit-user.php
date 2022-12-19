<!-- header link -->
<?php
    include 'header.php';
    include 'navbar.php';
?>
<!-- main body elements goes here -->
<div class="content-wrapper" style="min-height: 265px;">
    <div class="col-md-8 col-lg-12">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-user"></i> Edit your details:
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <div class="form-group col-sm-6">
                        <label for="InputFirstname" class="col-form-label">First Name:</label>
                        <input type="text" class="form-control" id="InputFirstname" name="firstname" placeholder="First Name" value="Rayan" required="">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="lastname" class="col-form-label">Last Name:</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" value="Bijoy" required="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group col-sm-6">
                        <label for="email" class="col-form-label">E-mail Address:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail Address" value="rayanbijoy@gglink.uk" readonly="">
                    </div>
                    <div class="form-group col-sm-6">
                        <input type="hidden" id="track" name="country_code">
                        <label for="phone" class="col-form-label">Mobile Number</label>
                        <input type="tel" class="form-control pranto-control" id="phone" name="mobile" value="+4407771174774" placeholder="Your Contact Number" readonly="">
                    </div>
                </div>
                <div class="form-group row">
                    <input type="hidden" name="country" id="country" class="form-control d-none" value="Jersey">
                    <div class="form-group col-sm-6">
                        <label for="address" class="col-form-label">Address:</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="London" required="">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="state" class="col-form-label">State:</label>
                        <input type="text" class="form-control" id="state" name="state" placeholder="state" value="UK" required="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group col-sm-6">
                        <label for="zip" class="col-form-label">Zip Code:</label>
                        <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip Code" value="CR0 2AA" required="">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="city" class="col-form-label">City:</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="City" value="London" required="">
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <a href="view-user.php" title="view"><button type="submit" class="btn btn-success text-white p-2">Update</button></a>
            </div>
        </div>
    </div>
</div>
<!-- footer link -->
<?php
    include 'footer.php';
?>