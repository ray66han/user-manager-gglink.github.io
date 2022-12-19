<!-- header link --> <?php
    include 'header.php';
    include 'navbar.php';
?>
<!-- main body elements goes here -->
<div class="content-wrapper" style="min-height: 265px;">
    <div class="col-md-8 col-lg-12">
        <div class="bodywrapper__inner">
            <div class="row align-items-center mb-30 justify-content-between">
                <div class="col-lg-6 col-sm-6">
                    <h6 class="page-title">General Settings</h6>
                </div>
                <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part"></div>
            </div>
            <div class="row mb-none-30">
                <div class="col-lg-12 col-md-12 mb-30">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="fFzHuYKFvUmpTHE2yPgXry9w15soGmmRGD6uvAkp">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group ">
                                            <label class="form-control-label font-weight-bold"> Site Title </label>
                                            <input class="form-control form-control-lg" type="text" name="sitename" value="SkillsTest">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group ">
                                            <label class="form-control-label font-weight-bold">Currency</label>
                                            <input class="form-control form-control-lg" type="text" name="cur_text" value="GBP">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group ">
                                            <label class="form-control-label font-weight-bold">Currency Symbol </label>
                                            <input class="form-control form-control-lg" type="text" name="cur_sym" value="£">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label class="form-control-label font-weight-bold"> Site Base Color</label>
                                        <div class="input-group">
                                            <span class="input-group-addon ">
                                                <input type="text" class="form-control form-control-lg colorPicker" value="22806F" style="display: none;">
                                                <div class="sp-replacer sp-light">
                                                    <div class="sp-preview">
                                                        <div class="sp-preview-inner" style="background-color: rgb(34, 128, 111);"></div>
                                                    </div>
                                                    <div class="sp-dd">▼</div>
                                                </div>
                                            </span>
                                            <input type="text" class="form-control form-control-lg colorCode" name="base_color" value="22806F">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="form-control-label font-weight-bold"> Site Secondary Color</label>
                                        <div class="input-group">
                                            <span class="input-group-addon ">
                                                <input type="text" class="form-control form-control-lg colorPicker" value="343434" style="display: none;">
                                                <div class="sp-replacer sp-light">
                                                    <div class="sp-preview">
                                                        <div class="sp-preview-inner" style="background-color: rgb(52, 52, 52);"></div>
                                                    </div>
                                                    <div class="sp-dd">▼</div>
                                                </div>
                                            </span>
                                            <input type="text" class="form-control form-control-lg colorCode" name="secondary_color" value="343434">
                                        </div>
                                    </div>
                                    <div class="form-group col">
                                        <label class="form-control-label font-weight-bold">User Registration</label>
                                        <div class="toggle btn btn--success btn-lg" data-toggle="toggle" style="width: 100%; height: 39px;">
                                            <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success" data-offstyle="-danger" data-toggle="toggle" data-on="Enable" data-off="Disabled" name="registration" checked="">
                                            <div class="toggle-group">
                                                <label class="btn btn--success btn-lg toggle-on">Enable</label>
                                                <label class="btn btn--danger btn-lg active toggle-off">Disabled</label>
                                                <span class="toggle-handle btn btn-default btn-lg"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-3 col-sm-6 col-md-4">
                                        <label class="form-control-label font-weight-bold"> Email Verification</label>
                                        <div class="toggle btn btn--success btn-lg" data-toggle="toggle" style="width: 100%; height: 39px;">
                                            <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success" data-offstyle="-danger" data-toggle="toggle" data-on="Enable" data-off="Disable" name="ev" checked="">
                                            <div class="toggle-group">
                                                <label class="btn btn--success btn-lg toggle-on">Enable</label>
                                                <label class="btn btn--danger btn-lg active toggle-off">Disable</label>
                                                <span class="toggle-handle btn btn-default btn-lg"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-3 col-sm-6 col-md-4">
                                        <label class="form-control-label font-weight-bold">Email Notification</label>
                                        <div class="toggle btn btn--success btn-lg" data-toggle="toggle" style="width: 100%; height: 39px;">
                                            <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success" data-offstyle="-danger" data-toggle="toggle" data-on="Enable" data-off="Disable" name="en" checked="">
                                            <div class="toggle-group">
                                                <label class="btn btn--success btn-lg toggle-on">Enable</label>
                                                <label class="btn btn--danger btn-lg active toggle-off">Disable</label>
                                                <span class="toggle-handle btn btn-default btn-lg"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-3 col-sm-6 col-md-4">
                                        <label class="form-control-label font-weight-bold"> SMS Verification</label>
                                        <div class="toggle btn btn--danger off btn-lg" data-toggle="toggle" style="width: 100%; height: 39px;">
                                            <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success" data-offstyle="-danger" data-toggle="toggle" data-on="Enable" data-off="Disable" name="sv">
                                            <div class="toggle-group">
                                                <label class="btn btn--success btn-lg toggle-on">Enable</label>
                                                <label class="btn btn--danger btn-lg active toggle-off">Disable</label>
                                                <span class="toggle-handle btn btn-default btn-lg"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-3 col-sm-6 col-md-4">
                                        <label class="form-control-label font-weight-bold">SMS Notification</label>
                                        <div class="toggle btn btn--danger off btn-lg" data-toggle="toggle" style="width: 100%; height: 39px;">
                                            <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success" data-offstyle="-danger" data-toggle="toggle" data-on="Enable" data-off="Disable" name="sn">
                                            <div class="toggle-group">
                                                <label class="btn btn--success btn-lg toggle-on">Enable</label>
                                                <label class="btn btn--danger btn-lg active toggle-off">Disable</label>
                                                <span class="toggle-handle btn btn-default btn-lg"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn--primary btn-block btn-lg">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer link --> <?php
    include 'footer.php';
?>