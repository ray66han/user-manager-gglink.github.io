<!-- header link -->
<?php
    include 'header.php';
    include 'navbar.php';
?>
<div class="content-wrapper" style="min-height: 265px;">
    <div class="col-md-4 col-lg-12" style="text-align:center;">
        <div class="card card-primary card-outline text-center">
            <div class="card-body box-profile">
                <div class="profile-thumb-area text-center">
                    <div class="profile-thumb">
                        <img class="image-preview bg_img" id="preview" src="https://skillstest.me/assets/images/user/profile/1647622374_mogglink.jpg">
                    </div>
                    <div class="profile-edit">
                        <input type="file" name="image" id="imageUpload" class="upload" accept=".png, .jpg, .jpeg">
                        <div class="rank-label">
                            <label for="imageUpload" class="imgUp bg-primary"> Upload Image </label>
                        </div>
                    </div>
                </div>
                <h3 class="profile-username text-center">Rayan Bijoy</h3>
                <p class="text-muted text-center phone">Phone : +4407771174774</p>
                <p class="text-muted text-center email">E-Mail : rayan@gglink.co.uk</p>
                <p class="text-muted text-center adress">Address : London</p>
            </div>
            <div class="card-footer text-right">
                <a href="../index.php" title="delete account"><button type="submit" class="badge badge-danger text-white p-2">Sign-out</button></a>
            </div>
        </div>
    </div>
</div>
<!-- footer link -->
<?php
    include 'footer.php';
?>