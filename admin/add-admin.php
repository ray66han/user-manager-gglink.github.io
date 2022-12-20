<!-- header link -->
<?php
    include 'header.php';
    include 'navbar.php';
?>
<!-- main body elements goes here -->
<div class="content-wrapper" style="min-height: 265px;">
    <div class="col-md-8 col-lg-12">
        <div class="bodywrapper__inner">
            <div class="row align-items-center mb-30 justify-content-between">
                <div class="col-lg-6 col-sm-6">
                    <h6 class="page-title">Create Admin</h6>
                </div>
                <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part">
                    <a href="https://skillstest.me/admin/users/admin" class="btn btn-sm btn--primary box--shadow1 text--small">&lt; Back</a>
                </div>
            </div>
            <div class="row mb-none-30">
                <div class="col-lg-9 col-md-9 mb-30">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-50 border-bottom pb-2">Profile Information</h5>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="fFzHuYKFvUmpTHE2yPgXry9w15soGmmRGD6uvAkp">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="image-upload">
                                                <div class="thumb">
                                                    <div class="avatar-preview">
                                                        <div class="profilePicPreview">
                                                            <button type="button" class="remove-image">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="avatar-edit">
                                                        <input type="file" class="profilePicUpload" name="image" id="profilePicUpload1" accept=".png, .jpg, .jpeg">
                                                        <label for="profilePicUpload1" class="bg--success">Upload Image</label>
                                                        <small class="mt-2 text-facebook">Supported files: <b>jpeg, jpg.</b> Image will be resized into 400x400px </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label class="form-control-label font-weight-bold">Name</label>
                                            <input class="form-control" type="text" name="name" value="">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label  font-weight-bold">Email</label>
                                            <input class="form-control" type="email" name="email" value="">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label  font-weight-bold">Username</label>
                                            <input class="form-control" type="text" name="username" value="">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold">Select Subject </label>
                                            <select id="my-select" multiple="" class="form-control select2-hidden-accessible" name="allowed_subjects[]" data-select2-id="select2-data-my-select" tabindex="-1" aria-hidden="true">
                                                <option value="18"> (Professional)</option>
                                                <option value="13">Adobe XD (Professional)</option>
                                                <option value="15">Apache (Professional)</option>
                                                <option value="7">Bootstrap (Professional)</option>
                                                <option value="10">Canva (Professional)</option>
                                                <option value="11">Content Writing (Professional)</option>
                                                <option value="20">Docker (Professional)</option>
                                                <option value="14">Drupal (Professional)</option>
                                                <option value="2">English (Admission)</option>
                                                <option value="9">GIT (Professional)</option>
                                                <option value="6">Illustrator (Professional)</option>
                                                <option value="17">Java (Professional)</option>
                                                <option value="12">Javascript (Professional)</option>
                                                <option value="5">Laravel (Professional)</option>
                                                <option value="1">MySQL (Professional)</option>
                                                <option value="4">Photoshop (Professional)</option>
                                                <option value="19">PHP (Professional)</option>
                                                <option value="16">ReactJS (Professional)</option>
                                                <option value="3">ReactNative (Professional)</option>
                                                <option value="8">Social Media (New Category)</option>
                                            </select>
                                            <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-1-q7ts" style="width: 325px;">
                                                <span class="selection">
                                                    <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                        <ul class="select2-selection__rendered" id="select2-my-select-container"></ul>
                                                        <span class="select2-search select2-search--inline">
                                                            <input class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-describedby="select2-my-select-container" placeholder="" style="width: 0.75em;">
                                                        </span>
                                                    </span>
                                                </span>
                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                            </span>
                                        </div>
                                        <div class="form-group ">
                                            <label class="form-control-label font-weight-bold">Role <span class="text-danger">*</span>
                                            </label>
                                            <select name="role" class="form-control">
                                                <option value="GG Admin">GG Admin</option>
                                                <option value="Reviewer">Reviewer</option>
                                                <option value="Front End Developer">Front End Developer</option>
                                                <option value="Graphic Designer">Graphic Designer</option>
                                                <option value="Back End Developer">Back End Developer</option>
                                                <option value="Content Writer">Content Writer</option>
                                                <option value="App Developer">App Developer</option>
                                                <option value="Test the role again">Test the role again</option>
                                            </select>
                                        </div>
                                        <div class="form-group ">
                                            <label class="form-control-label font-weight-bold">Password</label>
                                            <input class="form-control" type="password" name="password" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-block btn-lg">Create</button>
                                </div>
                            </form>
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