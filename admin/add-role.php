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
                    <h6 class="page-title">Add New Role</h6>
                </div>
                <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part">
                    <a class="btn btn--primary" href="https://skillstest.me/admin/users/roles">
                        <i class="las la-backward"></i> Go Back </a>
                </div>
            </div>
            <div class="container-fluid">
                <form action="" method="POST">
                    <input type="hidden" name="_token" value="fFzHuYKFvUmpTHE2yPgXry9w15soGmmRGD6uvAkp">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card b-radius--10 p-3">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Role Name <span class="text-danger">*</span>
                                        </label>
                                        <input class="form-control" type="text" placeholder="Role Name" name="name" required="" value="">
                                    </div>
                                    <div class="form-group ">
                                        <label class="form-control-label font-weight-bold">Guard</label>
                                        <select name="guard" class="form-control">
                                            <option value="web">Web</option>
                                            <option value="api">Api</option>
                                            <option value="admin">Admin</option>
                                        </select>
                                    </div>
                                    <div class="form-group ">
                                        <label class="form-control-label font-weight-bold">Admin</label>
                                        <select name="permissions[]" class="form-control select2-auto-tokenize select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true" data-select2-id="select2-data-213-131p">
                                            <option value="admin.manage" selected="" data-select2-id="select2-data-215-huix">Manage</option>
                                            <option value="admin.role" selected="" data-select2-id="select2-data-216-4ti7">Role</option>
                                            <option value="admin.role_assign" selected="" data-select2-id="select2-data-217-pe6e">Role Assign</option>
                                            <option value="admin.subject_assign" selected="" data-select2-id="select2-data-218-b2kg">Subject Assign</option>
                                            <option value="admin.change_password" selected="" data-select2-id="select2-data-219-un0y">Change Password</option>
                                        </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-214-yegn" style="width: 517.984px;">
                                            <span class="selection">
                                                <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                    <ul class="select2-selection__rendered" id="select2-permissions-b1-container">
                                                        <li class="select2-selection__choice" title="Manage" data-select2-id="select2-data-220-hutt">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-b1-container-choice-vubb-admin.manage">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-b1-container-choice-vubb-admin.manage">Manage</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Role" data-select2-id="select2-data-221-1bxh">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-b1-container-choice-hqke-admin.role">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-b1-container-choice-hqke-admin.role">Role</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Role Assign" data-select2-id="select2-data-222-z5uv">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-b1-container-choice-k3mu-admin.role_assign">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-b1-container-choice-k3mu-admin.role_assign">Role Assign</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Subject Assign" data-select2-id="select2-data-223-f5wg">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-b1-container-choice-blkl-admin.subject_assign">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-b1-container-choice-blkl-admin.subject_assign">Subject Assign</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Change Password" data-select2-id="select2-data-224-rj8g">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-b1-container-choice-rpha-admin.change_password">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-b1-container-choice-rpha-admin.change_password">Change Password</span>
                                                        </li>
                                                    </ul>
                                                    <span class="select2-search select2-search--inline">
                                                        <input class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-describedby="select2-permissions-b1-container" placeholder="" style="width: 0.75em;">
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                        </span>
                                    </div>
                                    <div class="form-group ">
                                        <label class="form-control-label font-weight-bold">User</label>
                                        <select name="permissions[]" class="form-control select2-auto-tokenize select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true" data-select2-id="select2-data-225-zcjy">
                                            <option value="user.add_balance" selected="" data-select2-id="select2-data-227-praa">Add Balance</option>
                                            <option value="user.edit" selected="" data-select2-id="select2-data-228-s62s">Edit</option>
                                            <option value="user.access.active" selected="" data-select2-id="select2-data-229-140h">Access Active</option>
                                            <option value="user.access.banned" selected="" data-select2-id="select2-data-230-x4fj">Access Banned</option>
                                            <option value="user.access.unverified_email" selected="" data-select2-id="select2-data-231-kovk">Access Unverified Email</option>
                                            <option value="user.access.unverified_sms" selected="" data-select2-id="select2-data-232-leng">Access Unverified Sms</option>
                                            <option value="user.sendemail" selected="" data-select2-id="select2-data-233-ug75">Sendemail</option>
                                        </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-226-7pbc" style="width: 517.984px;">
                                            <span class="selection">
                                                <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                    <ul class="select2-selection__rendered" id="select2-permissions-gn-container">
                                                        <li class="select2-selection__choice" title="Add Balance" data-select2-id="select2-data-234-odyd">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-gn-container-choice-jf73-user.add_balance">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-gn-container-choice-jf73-user.add_balance">Add Balance</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Edit" data-select2-id="select2-data-235-eksb">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-gn-container-choice-7bwl-user.edit">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-gn-container-choice-7bwl-user.edit">Edit</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Access Active" data-select2-id="select2-data-236-iw6m">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-gn-container-choice-pzee-user.access.active">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-gn-container-choice-pzee-user.access.active">Access Active</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Access Banned" data-select2-id="select2-data-237-ofi2">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-gn-container-choice-c9rn-user.access.banned">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-gn-container-choice-c9rn-user.access.banned">Access Banned</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Access Unverified Email" data-select2-id="select2-data-238-1924">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-gn-container-choice-3ke5-user.access.unverified_email">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-gn-container-choice-3ke5-user.access.unverified_email">Access Unverified Email</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Access Unverified Sms" data-select2-id="select2-data-239-js2t">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-gn-container-choice-fa63-user.access.unverified_sms">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-gn-container-choice-fa63-user.access.unverified_sms">Access Unverified Sms</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Sendemail" data-select2-id="select2-data-240-71yx">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-gn-container-choice-mvnq-user.sendemail">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-gn-container-choice-mvnq-user.sendemail">Sendemail</span>
                                                        </li>
                                                    </ul>
                                                    <span class="select2-search select2-search--inline">
                                                        <input class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-describedby="select2-permissions-gn-container" placeholder="" style="width: 0.75em;">
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                        </span>
                                    </div>
                                    <div class="form-group ">
                                        <label class="form-control-label font-weight-bold">Exam Categories</label>
                                        <select name="permissions[]" class="form-control select2-auto-tokenize select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true" data-select2-id="select2-data-241-mfwj">
                                            <option value="exam_categories.access.all" selected="" data-select2-id="select2-data-243-2gzg">Access All</option>
                                            <option value="exam_categories.access.own" selected="" data-select2-id="select2-data-244-0lfx">Access Own</option>
                                            <option value="exam_categories.add" selected="" data-select2-id="select2-data-245-5n26">Add</option>
                                            <option value="exam_categories.edit" selected="" data-select2-id="select2-data-246-zzir">Edit</option>
                                        </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-242-l1qx" style="width: 517.984px;">
                                            <span class="selection">
                                                <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                    <ul class="select2-selection__rendered" id="select2-permissions-49-container">
                                                        <li class="select2-selection__choice" title="Access All" data-select2-id="select2-data-247-zgah">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-49-container-choice-5opp-exam_categories.access.all">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-49-container-choice-5opp-exam_categories.access.all">Access All</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Access Own" data-select2-id="select2-data-248-glf9">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-49-container-choice-etg4-exam_categories.access.own">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-49-container-choice-etg4-exam_categories.access.own">Access Own</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Add" data-select2-id="select2-data-249-bimj">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-49-container-choice-q4sp-exam_categories.add">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-49-container-choice-q4sp-exam_categories.add">Add</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Edit" data-select2-id="select2-data-250-57bv">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-49-container-choice-l5g9-exam_categories.edit">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-49-container-choice-l5g9-exam_categories.edit">Edit</span>
                                                        </li>
                                                    </ul>
                                                    <span class="select2-search select2-search--inline">
                                                        <input class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-describedby="select2-permissions-49-container" placeholder="" style="width: 0.75em;">
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                        </span>
                                    </div>
                                    <div class="form-group ">
                                        <label class="form-control-label font-weight-bold">Subjects</label>
                                        <select name="permissions[]" class="form-control select2-auto-tokenize select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true" data-select2-id="select2-data-251-90lx">
                                            <option value="subjects.access.all" selected="" data-select2-id="select2-data-253-g0gn">Access All</option>
                                            <option value="subjects.access.own" selected="" data-select2-id="select2-data-254-c308">Access Own</option>
                                            <option value="subjects.add" selected="" data-select2-id="select2-data-255-tmd6">Add</option>
                                            <option value="subjects.edit" selected="" data-select2-id="select2-data-256-jyxj">Edit</option>
                                        </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-252-o6bt" style="width: 517.984px;">
                                            <span class="selection">
                                                <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                    <ul class="select2-selection__rendered" id="select2-permissions-eh-container">
                                                        <li class="select2-selection__choice" title="Access All" data-select2-id="select2-data-257-u8l2">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-eh-container-choice-41yu-subjects.access.all">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-eh-container-choice-41yu-subjects.access.all">Access All</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Access Own" data-select2-id="select2-data-258-gxjd">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-eh-container-choice-0qsc-subjects.access.own">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-eh-container-choice-0qsc-subjects.access.own">Access Own</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Add" data-select2-id="select2-data-259-e5xw">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-eh-container-choice-bfpx-subjects.add">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-eh-container-choice-bfpx-subjects.add">Add</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Edit" data-select2-id="select2-data-260-ff4l">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-eh-container-choice-avfa-subjects.edit">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-eh-container-choice-avfa-subjects.edit">Edit</span>
                                                        </li>
                                                    </ul>
                                                    <span class="select2-search select2-search--inline">
                                                        <input class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-describedby="select2-permissions-eh-container" placeholder="" style="width: 0.75em;">
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                        </span>
                                    </div>
                                    <div class="form-group ">
                                        <label class="form-control-label font-weight-bold">Questions</label>
                                        <select name="permissions[]" class="form-control select2-auto-tokenize select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true" data-select2-id="select2-data-261-2j8y">
                                            <option value="questions.access.all" selected="" data-select2-id="select2-data-263-4lqk">Access All</option>
                                            <option value="questions.access.own" selected="" data-select2-id="select2-data-264-prep">Access Own</option>
                                            <option value="questions.add" selected="" data-select2-id="select2-data-265-vhh5">Add</option>
                                            <option value="questions.edit" selected="" data-select2-id="select2-data-266-zjr9">Edit</option>
                                            <option value="questions.delete" selected="" data-select2-id="select2-data-267-80di">Delete</option>
                                            <option value="questions.archived" selected="" data-select2-id="select2-data-268-gsod">Archived</option>
                                            <option value="questions.review" selected="" data-select2-id="select2-data-269-z6r2">Review</option>
                                            <option value="questions.import" selected="" data-select2-id="select2-data-270-gec0">Import</option>
                                            <option value="questions.export" selected="" data-select2-id="select2-data-271-pa47">Export</option>
                                        </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-262-wrs8" style="width: 517.984px;">
                                            <span class="selection">
                                                <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                    <ul class="select2-selection__rendered" id="select2-permissions-bz-container">
                                                        <li class="select2-selection__choice" title="Access All" data-select2-id="select2-data-272-bt0y">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-bz-container-choice-74cy-questions.access.all">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-bz-container-choice-74cy-questions.access.all">Access All</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Access Own" data-select2-id="select2-data-273-45ne">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-bz-container-choice-vtjt-questions.access.own">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-bz-container-choice-vtjt-questions.access.own">Access Own</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Add" data-select2-id="select2-data-274-1qvh">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-bz-container-choice-ju71-questions.add">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-bz-container-choice-ju71-questions.add">Add</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Edit" data-select2-id="select2-data-275-6xol">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-bz-container-choice-wp7s-questions.edit">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-bz-container-choice-wp7s-questions.edit">Edit</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Delete" data-select2-id="select2-data-276-42m7">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-bz-container-choice-v8sb-questions.delete">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-bz-container-choice-v8sb-questions.delete">Delete</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Archived" data-select2-id="select2-data-277-0fxf">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-bz-container-choice-02dm-questions.archived">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-bz-container-choice-02dm-questions.archived">Archived</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Review" data-select2-id="select2-data-278-mqs1">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-bz-container-choice-daa6-questions.review">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-bz-container-choice-daa6-questions.review">Review</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Import" data-select2-id="select2-data-279-86h3">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-bz-container-choice-mpin-questions.import">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-bz-container-choice-mpin-questions.import">Import</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Export" data-select2-id="select2-data-280-1wr5">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-bz-container-choice-y19e-questions.export">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-bz-container-choice-y19e-questions.export">Export</span>
                                                        </li>
                                                    </ul>
                                                    <span class="select2-search select2-search--inline">
                                                        <input class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-describedby="select2-permissions-bz-container" placeholder="" style="width: 0.75em;">
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                        </span>
                                    </div>
                                    <div class="form-group ">
                                        <label class="form-control-label font-weight-bold">Exam</label>
                                        <select name="permissions[]" class="form-control select2-auto-tokenize select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true" data-select2-id="select2-data-281-q2vm">
                                            <option value="exam.access.all" selected="" data-select2-id="select2-data-283-g395">Access All</option>
                                            <option value="exam.access.own" selected="" data-select2-id="select2-data-284-g3b6">Access Own</option>
                                            <option value="exam.add" selected="" data-select2-id="select2-data-285-nufg">Add</option>
                                            <option value="exam.edit" selected="" data-select2-id="select2-data-286-jnfg">Edit</option>
                                            <option value="exam.questions" selected="" data-select2-id="select2-data-287-a1ja">Questions</option>
                                            <option value="exam.questions.add" selected="" data-select2-id="select2-data-288-tm65">Questions Add</option>
                                            <option value="exam.questions.edit" selected="" data-select2-id="select2-data-289-ayq6">Questions Edit</option>
                                            <option value="exam.questions.remove" selected="" data-select2-id="select2-data-290-qloj">Questions Remove</option>
                                            <option value="exam.use.question.bank" selected="" data-select2-id="select2-data-291-v4os">Use Question Bank</option>
                                            <option value="exam.review" selected="" data-select2-id="select2-data-292-zjxu">Review</option>
                                        </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-282-70v2" style="width: 517.984px;">
                                            <span class="selection">
                                                <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                    <ul class="select2-selection__rendered" id="select2-permissions-a3-container">
                                                        <li class="select2-selection__choice" title="Access All" data-select2-id="select2-data-293-ntlc">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-a3-container-choice-q7ym-exam.access.all">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-a3-container-choice-q7ym-exam.access.all">Access All</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Access Own" data-select2-id="select2-data-294-0hpb">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-a3-container-choice-mdd4-exam.access.own">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-a3-container-choice-mdd4-exam.access.own">Access Own</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Add" data-select2-id="select2-data-295-8xb8">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-a3-container-choice-tanc-exam.add">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-a3-container-choice-tanc-exam.add">Add</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Edit" data-select2-id="select2-data-296-1og7">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-a3-container-choice-aos9-exam.edit">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-a3-container-choice-aos9-exam.edit">Edit</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Questions" data-select2-id="select2-data-297-htyc">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-a3-container-choice-3ewu-exam.questions">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-a3-container-choice-3ewu-exam.questions">Questions</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Questions Add" data-select2-id="select2-data-298-4yzh">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-a3-container-choice-3b43-exam.questions.add">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-a3-container-choice-3b43-exam.questions.add">Questions Add</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Questions Edit" data-select2-id="select2-data-299-9w0r">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-a3-container-choice-ngjk-exam.questions.edit">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-a3-container-choice-ngjk-exam.questions.edit">Questions Edit</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Questions Remove" data-select2-id="select2-data-300-nac5">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-a3-container-choice-xch0-exam.questions.remove">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-a3-container-choice-xch0-exam.questions.remove">Questions Remove</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Use Question Bank" data-select2-id="select2-data-301-pgla">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-a3-container-choice-5wfs-exam.use.question.bank">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-a3-container-choice-5wfs-exam.use.question.bank">Use Question Bank</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Review" data-select2-id="select2-data-302-mq5v">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-a3-container-choice-2t3t-exam.review">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-a3-container-choice-2t3t-exam.review">Review</span>
                                                        </li>
                                                    </ul>
                                                    <span class="select2-search select2-search--inline">
                                                        <input class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-describedby="select2-permissions-a3-container" placeholder="" style="width: 0.75em;">
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                        </span>
                                    </div>
                                    <div class="form-group ">
                                        <label class="form-control-label font-weight-bold">Written Exam</label>
                                        <select name="permissions[]" class="form-control select2-auto-tokenize select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true" data-select2-id="select2-data-303-lfyv">
                                            <option value="written_exam.all_pending_scripts" selected="" data-select2-id="select2-data-305-m084">All Pending Scripts</option>
                                            <option value="written_exam.pending_exam" selected="" data-select2-id="select2-data-306-rw2d">Pending Exam</option>
                                            <option value="written_exam.reviewed_exam" selected="" data-select2-id="select2-data-307-dulu">Reviewed Exam</option>
                                        </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-304-s9e1" style="width: 517.984px;">
                                            <span class="selection">
                                                <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                    <ul class="select2-selection__rendered" id="select2-permissions-rt-container">
                                                        <li class="select2-selection__choice" title="All Pending Scripts" data-select2-id="select2-data-308-mgby">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-rt-container-choice-jxog-written_exam.all_pending_scripts">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-rt-container-choice-jxog-written_exam.all_pending_scripts">All Pending Scripts</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Pending Exam" data-select2-id="select2-data-309-t8gl">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-rt-container-choice-agvr-written_exam.pending_exam">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-rt-container-choice-agvr-written_exam.pending_exam">Pending Exam</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Reviewed Exam" data-select2-id="select2-data-310-rvy8">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-rt-container-choice-5plb-written_exam.reviewed_exam">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-rt-container-choice-5plb-written_exam.reviewed_exam">Reviewed Exam</span>
                                                        </li>
                                                    </ul>
                                                    <span class="select2-search select2-search--inline">
                                                        <input class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-describedby="select2-permissions-rt-container" placeholder="" style="width: 0.75em;">
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                        </span>
                                    </div>
                                    <div class="form-group ">
                                        <label class="form-control-label font-weight-bold">Exam Certificate</label>
                                        <select name="permissions[]" class="form-control select2-auto-tokenize select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true" data-select2-id="select2-data-311-mndq">
                                            <option value="exam_certificate.access" selected="" data-select2-id="select2-data-313-3v27">Access</option>
                                            <option value="exam_certificate.edit" selected="" data-select2-id="select2-data-314-ziub">Edit</option>
                                        </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-312-s4n4" style="width: 517.984px;">
                                            <span class="selection">
                                                <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                    <ul class="select2-selection__rendered" id="select2-permissions-at-container">
                                                        <li class="select2-selection__choice" title="Access" data-select2-id="select2-data-315-ctr6">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-at-container-choice-i1r3-exam_certificate.access">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-at-container-choice-i1r3-exam_certificate.access">Access</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Edit" data-select2-id="select2-data-316-ql5k">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-at-container-choice-3r1h-exam_certificate.edit">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-at-container-choice-3r1h-exam_certificate.edit">Edit</span>
                                                        </li>
                                                    </ul>
                                                    <span class="select2-search select2-search--inline">
                                                        <input class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-describedby="select2-permissions-at-container" placeholder="" style="width: 0.75em;">
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                        </span>
                                    </div>
                                    <div class="form-group ">
                                        <label class="form-control-label font-weight-bold">Coupon</label>
                                        <select name="permissions[]" class="form-control select2-auto-tokenize select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true" data-select2-id="select2-data-317-48ml">
                                            <option value="coupon.access.all" selected="" data-select2-id="select2-data-319-illp">Access All</option>
                                            <option value="coupon.access.own" selected="" data-select2-id="select2-data-320-9o33">Access Own</option>
                                            <option value="coupon.add" selected="" data-select2-id="select2-data-321-ooxk">Add</option>
                                            <option value="coupon.edit" selected="" data-select2-id="select2-data-322-9nrp">Edit</option>
                                        </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-318-6nz9" style="width: 517.984px;">
                                            <span class="selection">
                                                <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                    <ul class="select2-selection__rendered" id="select2-permissions-ui-container">
                                                        <li class="select2-selection__choice" title="Access All" data-select2-id="select2-data-323-30fu">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-ui-container-choice-0oqo-coupon.access.all">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-ui-container-choice-0oqo-coupon.access.all">Access All</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Access Own" data-select2-id="select2-data-324-7e9c">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-ui-container-choice-byag-coupon.access.own">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-ui-container-choice-byag-coupon.access.own">Access Own</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Add" data-select2-id="select2-data-325-o82d">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-ui-container-choice-e1mt-coupon.add">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-ui-container-choice-e1mt-coupon.add">Add</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Edit" data-select2-id="select2-data-326-je4t">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-ui-container-choice-d6c3-coupon.edit">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-ui-container-choice-d6c3-coupon.edit">Edit</span>
                                                        </li>
                                                    </ul>
                                                    <span class="select2-search select2-search--inline">
                                                        <input class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-describedby="select2-permissions-ui-container" placeholder="" style="width: 0.75em;">
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                        </span>
                                    </div>
                                    <div class="form-group ">
                                        <label class="form-control-label font-weight-bold">Payment Gateways</label>
                                        <select name="permissions[]" class="form-control select2-auto-tokenize select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true" data-select2-id="select2-data-327-som9">
                                            <option value="payment_gateways.automatic_gateway" selected="" data-select2-id="select2-data-329-v7fh">Automatic Gateway</option>
                                            <option value="payment_gateways.automatic_gateway.edit" selected="" data-select2-id="select2-data-330-g7tm">Automatic Gateway Edit</option>
                                            <option value="payment_gateways.manual_gateway" selected="" data-select2-id="select2-data-331-oyfm">Manual Gateway</option>
                                            <option value="payment_gateways.manual_gateway.add" selected="" data-select2-id="select2-data-332-whvm">Manual Gateway Add</option>
                                            <option value="payment_gateways.manual_gateway.edit" selected="" data-select2-id="select2-data-333-9g7w">Manual Gateway Edit</option>
                                        </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-328-xxaq" style="width: 517.984px;">
                                            <span class="selection">
                                                <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                    <ul class="select2-selection__rendered" id="select2-permissions-ro-container">
                                                        <li class="select2-selection__choice" title="Automatic Gateway" data-select2-id="select2-data-334-b5oc">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-ro-container-choice-yysm-payment_gateways.automatic_gateway">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-ro-container-choice-yysm-payment_gateways.automatic_gateway">Automatic Gateway</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Automatic Gateway Edit" data-select2-id="select2-data-335-1kxv">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-ro-container-choice-0i8x-payment_gateways.automatic_gateway.edit">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-ro-container-choice-0i8x-payment_gateways.automatic_gateway.edit">Automatic Gateway Edit</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Manual Gateway" data-select2-id="select2-data-336-503t">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-ro-container-choice-0zzg-payment_gateways.manual_gateway">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-ro-container-choice-0zzg-payment_gateways.manual_gateway">Manual Gateway</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Manual Gateway Add" data-select2-id="select2-data-337-96lm">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-ro-container-choice-sqd8-payment_gateways.manual_gateway.add">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-ro-container-choice-sqd8-payment_gateways.manual_gateway.add">Manual Gateway Add</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Manual Gateway Edit" data-select2-id="select2-data-338-9p74">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-ro-container-choice-u9yo-payment_gateways.manual_gateway.edit">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-ro-container-choice-u9yo-payment_gateways.manual_gateway.edit">Manual Gateway Edit</span>
                                                        </li>
                                                    </ul>
                                                    <span class="select2-search select2-search--inline">
                                                        <input class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-describedby="select2-permissions-ro-container" placeholder="" style="width: 0.75em;">
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                        </span>
                                    </div>
                                    <div class="form-group ">
                                        <label class="form-control-label font-weight-bold">Deposits</label>
                                        <select name="permissions[]" class="form-control select2-auto-tokenize select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true" data-select2-id="select2-data-339-7f3o">
                                            <option value="deposits.pending_deposits" selected="" data-select2-id="select2-data-341-n02y">Pending Deposits</option>
                                            <option value="deposits.approved_deposits" selected="" data-select2-id="select2-data-342-lfmx">Approved Deposits</option>
                                            <option value="deposits.successful_deposits" selected="" data-select2-id="select2-data-343-8lp9">Successful Deposits</option>
                                            <option value="deposits.rejected_deposits" selected="" data-select2-id="select2-data-344-yji6">Rejected Deposits</option>
                                            <option value="deposits.all_deposits" selected="" data-select2-id="select2-data-345-03df">All Deposits</option>
                                        </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-340-mjg7" style="width: 517.984px;">
                                            <span class="selection">
                                                <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                    <ul class="select2-selection__rendered" id="select2-permissions-bz-container">
                                                        <li class="select2-selection__choice" title="Pending Deposits" data-select2-id="select2-data-346-mbs1">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-bz-container-choice-q5zc-deposits.pending_deposits">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-bz-container-choice-q5zc-deposits.pending_deposits">Pending Deposits</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Approved Deposits" data-select2-id="select2-data-347-os15">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-bz-container-choice-u5bv-deposits.approved_deposits">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-bz-container-choice-u5bv-deposits.approved_deposits">Approved Deposits</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Successful Deposits" data-select2-id="select2-data-348-ef8b">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-bz-container-choice-j9du-deposits.successful_deposits">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-bz-container-choice-j9du-deposits.successful_deposits">Successful Deposits</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Rejected Deposits" data-select2-id="select2-data-349-3e2r">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-bz-container-choice-78ze-deposits.rejected_deposits">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-bz-container-choice-78ze-deposits.rejected_deposits">Rejected Deposits</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="All Deposits" data-select2-id="select2-data-350-1nip">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-bz-container-choice-1llb-deposits.all_deposits">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-bz-container-choice-1llb-deposits.all_deposits">All Deposits</span>
                                                        </li>
                                                    </ul>
                                                    <span class="select2-search select2-search--inline">
                                                        <input class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-describedby="select2-permissions-bz-container" placeholder="" style="width: 0.75em;">
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                        </span>
                                    </div>
                                    <div class="form-group ">
                                        <label class="form-control-label font-weight-bold">Support Ticket</label>
                                        <select name="permissions[]" class="form-control select2-auto-tokenize select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true" data-select2-id="select2-data-351-0z5m">
                                            <option value="support_ticket.all_ticket" selected="" data-select2-id="select2-data-353-6mpv">All Ticket</option>
                                            <option value="support_ticket.pending_ticket" selected="" data-select2-id="select2-data-354-aq1j">Pending Ticket</option>
                                            <option value="support_ticket.closed_ticket" selected="" data-select2-id="select2-data-355-pwtu">Closed Ticket</option>
                                            <option value="support_ticket.answered_ticket" selected="" data-select2-id="select2-data-356-p2oe">Answered Ticket</option>
                                            <option value="support_ticket.details" selected="" data-select2-id="select2-data-357-4u89">Details</option>
                                            <option value="support_ticket.close" selected="" data-select2-id="select2-data-358-uzts">Close</option>
                                            <option value="support_ticket.reply" selected="" data-select2-id="select2-data-359-vrvc">Reply</option>
                                            <option value="support_ticket.delete" selected="" data-select2-id="select2-data-360-figq">Delete</option>
                                        </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-352-u9td" style="width: 517.984px;">
                                            <span class="selection">
                                                <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                    <ul class="select2-selection__rendered" id="select2-permissions-k0-container">
                                                        <li class="select2-selection__choice" title="All Ticket" data-select2-id="select2-data-361-selv">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-k0-container-choice-m70r-support_ticket.all_ticket">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-k0-container-choice-m70r-support_ticket.all_ticket">All Ticket</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Pending Ticket" data-select2-id="select2-data-362-etab">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-k0-container-choice-enrs-support_ticket.pending_ticket">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-k0-container-choice-enrs-support_ticket.pending_ticket">Pending Ticket</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Closed Ticket" data-select2-id="select2-data-363-petj">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-k0-container-choice-s0bi-support_ticket.closed_ticket">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-k0-container-choice-s0bi-support_ticket.closed_ticket">Closed Ticket</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Answered Ticket" data-select2-id="select2-data-364-0fae">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-k0-container-choice-4tsh-support_ticket.answered_ticket">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-k0-container-choice-4tsh-support_ticket.answered_ticket">Answered Ticket</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Details" data-select2-id="select2-data-365-trbo">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-k0-container-choice-qgnr-support_ticket.details">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-k0-container-choice-qgnr-support_ticket.details">Details</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Close" data-select2-id="select2-data-366-umab">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-k0-container-choice-rse4-support_ticket.close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-k0-container-choice-rse4-support_ticket.close">Close</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Reply" data-select2-id="select2-data-367-a3xv">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-k0-container-choice-ywyw-support_ticket.reply">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-k0-container-choice-ywyw-support_ticket.reply">Reply</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Delete" data-select2-id="select2-data-368-864i">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-k0-container-choice-2rlx-support_ticket.delete">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-k0-container-choice-2rlx-support_ticket.delete">Delete</span>
                                                        </li>
                                                    </ul>
                                                    <span class="select2-search select2-search--inline">
                                                        <input class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-describedby="select2-permissions-k0-container" placeholder="" style="width: 0.75em;">
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                        </span>
                                    </div>
                                    <div class="form-group ">
                                        <label class="form-control-label font-weight-bold">Report</label>
                                        <select name="permissions[]" class="form-control select2-auto-tokenize select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true" data-select2-id="select2-data-369-3n40">
                                            <option value="report.transaction_log" selected="" data-select2-id="select2-data-371-abzw">Transaction Log</option>
                                            <option value="report.login_history.all" selected="" data-select2-id="select2-data-372-xgyq">Login History All</option>
                                            <option value="report.login_history.own" selected="" data-select2-id="select2-data-373-33ua">Login History Own</option>
                                        </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-370-fd45" style="width: 517.984px;">
                                            <span class="selection">
                                                <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                    <ul class="select2-selection__rendered" id="select2-permissions-7o-container">
                                                        <li class="select2-selection__choice" title="Transaction Log" data-select2-id="select2-data-374-s902">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-7o-container-choice-y003-report.transaction_log">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-7o-container-choice-y003-report.transaction_log">Transaction Log</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Login History All" data-select2-id="select2-data-375-23ry">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-7o-container-choice-dprj-report.login_history.all">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-7o-container-choice-dprj-report.login_history.all">Login History All</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Login History Own" data-select2-id="select2-data-376-psu6">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-7o-container-choice-ig91-report.login_history.own">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-7o-container-choice-ig91-report.login_history.own">Login History Own</span>
                                                        </li>
                                                    </ul>
                                                    <span class="select2-search select2-search--inline">
                                                        <input class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-describedby="select2-permissions-7o-container" placeholder="" style="width: 0.75em;">
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                        </span>
                                    </div>
                                    <div class="form-group ">
                                        <label class="form-control-label font-weight-bold">Subscriber</label>
                                        <select name="permissions[]" class="form-control select2-auto-tokenize select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true" data-select2-id="select2-data-377-hc55">
                                            <option value="subscriber.access" selected="" data-select2-id="select2-data-379-bz5m">Access</option>
                                            <option value="subscriber.send_email" selected="" data-select2-id="select2-data-380-voj7">Send Email</option>
                                            <option value="subscriber.delete" selected="" data-select2-id="select2-data-381-5cw8">Delete</option>
                                        </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-378-c14p" style="width: 517.984px;">
                                            <span class="selection">
                                                <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                    <ul class="select2-selection__rendered" id="select2-permissions-d3-container">
                                                        <li class="select2-selection__choice" title="Access" data-select2-id="select2-data-382-tzmy">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-d3-container-choice-1sm3-subscriber.access">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-d3-container-choice-1sm3-subscriber.access">Access</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Send Email" data-select2-id="select2-data-383-ujzr">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-d3-container-choice-yfae-subscriber.send_email">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-d3-container-choice-yfae-subscriber.send_email">Send Email</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Delete" data-select2-id="select2-data-384-d4r6">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-d3-container-choice-3qhu-subscriber.delete">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-d3-container-choice-3qhu-subscriber.delete">Delete</span>
                                                        </li>
                                                    </ul>
                                                    <span class="select2-search select2-search--inline">
                                                        <input class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-describedby="select2-permissions-d3-container" placeholder="" style="width: 0.75em;">
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                        </span>
                                    </div>
                                    <div class="form-group ">
                                        <label class="form-control-label font-weight-bold">Settings</label>
                                        <select name="permissions[]" class="form-control select2-auto-tokenize select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true" data-select2-id="select2-data-385-3xwr">
                                            <option value="settings.general_settings" selected="" data-select2-id="select2-data-387-r4ub">General Settings</option>
                                            <option value="settings.logo_icon_settings" selected="" data-select2-id="select2-data-388-53ki">Logo Icon Settings</option>
                                            <option value="settings.extensions" selected="" data-select2-id="select2-data-389-r9b4">Extensions</option>
                                            <option value="settings.language" selected="" data-select2-id="select2-data-390-xxhp">Language</option>
                                            <option value="settings.seo_manager" selected="" data-select2-id="select2-data-391-f72q">Seo Manager</option>
                                        </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-386-lwux" style="width: 517.984px;">
                                            <span class="selection">
                                                <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                    <ul class="select2-selection__rendered" id="select2-permissions-61-container">
                                                        <li class="select2-selection__choice" title="General Settings" data-select2-id="select2-data-392-ep0m">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-61-container-choice-5e23-settings.general_settings">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-61-container-choice-5e23-settings.general_settings">General Settings</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Logo Icon Settings" data-select2-id="select2-data-393-54pu">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-61-container-choice-qf60-settings.logo_icon_settings">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-61-container-choice-qf60-settings.logo_icon_settings">Logo Icon Settings</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Extensions" data-select2-id="select2-data-394-lwi9">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-61-container-choice-5xci-settings.extensions">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-61-container-choice-5xci-settings.extensions">Extensions</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Language" data-select2-id="select2-data-395-avfn">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-61-container-choice-2c5r-settings.language">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-61-container-choice-2c5r-settings.language">Language</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Seo Manager" data-select2-id="select2-data-396-ds1b">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-61-container-choice-5nvd-settings.seo_manager">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-61-container-choice-5nvd-settings.seo_manager">Seo Manager</span>
                                                        </li>
                                                    </ul>
                                                    <span class="select2-search select2-search--inline">
                                                        <input class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-describedby="select2-permissions-61-container" placeholder="" style="width: 0.75em;">
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                        </span>
                                    </div>
                                    <div class="form-group ">
                                        <label class="form-control-label font-weight-bold">Email Manager</label>
                                        <select name="permissions[]" class="form-control select2-auto-tokenize select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true" data-select2-id="select2-data-397-tloa">
                                            <option value="email_manager.global_template" selected="" data-select2-id="select2-data-399-2izj">Global Template</option>
                                            <option value="email_manager.email_template" selected="" data-select2-id="select2-data-400-s8gt">Email Template</option>
                                            <option value="email_manager.email_template.edit" selected="" data-select2-id="select2-data-401-4lr8">Email Template Edit</option>
                                            <option value="email_manager.email_configure" selected="" data-select2-id="select2-data-402-6bvw">Email Configure</option>
                                        </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-398-7oxf" style="width: 517.984px;">
                                            <span class="selection">
                                                <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                    <ul class="select2-selection__rendered" id="select2-permissions-8d-container">
                                                        <li class="select2-selection__choice" title="Global Template" data-select2-id="select2-data-403-n1kl">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-8d-container-choice-neh6-email_manager.global_template">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-8d-container-choice-neh6-email_manager.global_template">Global Template</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Email Template" data-select2-id="select2-data-404-mjfh">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-8d-container-choice-jibi-email_manager.email_template">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-8d-container-choice-jibi-email_manager.email_template">Email Template</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Email Template Edit" data-select2-id="select2-data-405-f8la">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-8d-container-choice-hfyi-email_manager.email_template.edit">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-8d-container-choice-hfyi-email_manager.email_template.edit">Email Template Edit</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Email Configure" data-select2-id="select2-data-406-vyq4">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-8d-container-choice-9qhb-email_manager.email_configure">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-8d-container-choice-9qhb-email_manager.email_configure">Email Configure</span>
                                                        </li>
                                                    </ul>
                                                    <span class="select2-search select2-search--inline">
                                                        <input class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-describedby="select2-permissions-8d-container" placeholder="" style="width: 0.75em;">
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                        </span>
                                    </div>
                                    <div class="form-group ">
                                        <label class="form-control-label font-weight-bold">Sms Manager</label>
                                        <select name="permissions[]" class="form-control select2-auto-tokenize select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true" data-select2-id="select2-data-407-mjxk">
                                            <option value="sms_manager.api_setting" selected="" data-select2-id="select2-data-409-7srn">Api Setting</option>
                                            <option value="sms_manager.api_setting.edit" selected="" data-select2-id="select2-data-410-8uul">Api Setting Edit</option>
                                            <option value="sms_manager.sms_templates" selected="" data-select2-id="select2-data-411-4jsa">Sms Templates</option>
                                            <option value="sms_manager.sms_templates.edit" selected="" data-select2-id="select2-data-412-9c03">Sms Templates Edit</option>
                                        </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-408-mgiu" style="width: 517.984px;">
                                            <span class="selection">
                                                <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                    <ul class="select2-selection__rendered" id="select2-permissions-4a-container">
                                                        <li class="select2-selection__choice" title="Api Setting" data-select2-id="select2-data-413-9fdb">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-4a-container-choice-3e61-sms_manager.api_setting">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-4a-container-choice-3e61-sms_manager.api_setting">Api Setting</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Api Setting Edit" data-select2-id="select2-data-414-5gfn">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-4a-container-choice-j4av-sms_manager.api_setting.edit">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-4a-container-choice-j4av-sms_manager.api_setting.edit">Api Setting Edit</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Sms Templates" data-select2-id="select2-data-415-t7kk">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-4a-container-choice-1e3e-sms_manager.sms_templates">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-4a-container-choice-1e3e-sms_manager.sms_templates">Sms Templates</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Sms Templates Edit" data-select2-id="select2-data-416-qt5v">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-4a-container-choice-oy9q-sms_manager.sms_templates.edit">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-4a-container-choice-oy9q-sms_manager.sms_templates.edit">Sms Templates Edit</span>
                                                        </li>
                                                    </ul>
                                                    <span class="select2-search select2-search--inline">
                                                        <input class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-describedby="select2-permissions-4a-container" placeholder="" style="width: 0.75em;">
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                        </span>
                                    </div>
                                    <div class="form-group ">
                                        <label class="form-control-label font-weight-bold">Frontend Manager</label>
                                        <select name="permissions[]" class="form-control select2-auto-tokenize select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true" data-select2-id="select2-data-417-d3oc">
                                            <option value="frontend_manager.manage_templates" selected="" data-select2-id="select2-data-419-i2zd">Manage Templates</option>
                                            <option value="frontend_manager.manage_pages" selected="" data-select2-id="select2-data-420-gyqc">Manage Pages</option>
                                            <option value="frontend_manager.manage_section" selected="" data-select2-id="select2-data-421-fl17">Manage Section</option>
                                        </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-418-m2tl" style="width: 517.984px;">
                                            <span class="selection">
                                                <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                    <ul class="select2-selection__rendered" id="select2-permissions-fr-container">
                                                        <li class="select2-selection__choice" title="Manage Templates" data-select2-id="select2-data-422-wyk3">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-fr-container-choice-u66i-frontend_manager.manage_templates">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-fr-container-choice-u66i-frontend_manager.manage_templates">Manage Templates</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Manage Pages" data-select2-id="select2-data-423-v7s5">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-fr-container-choice-g4vf-frontend_manager.manage_pages">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-fr-container-choice-g4vf-frontend_manager.manage_pages">Manage Pages</span>
                                                        </li>
                                                        <li class="select2-selection__choice" title="Manage Section" data-select2-id="select2-data-424-r9jf">
                                                            <button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-permissions-fr-container-choice-953a-frontend_manager.manage_section">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="select2-selection__choice__display" id="select2-permissions-fr-container-choice-953a-frontend_manager.manage_section">Manage Section</span>
                                                        </li>
                                                    </ul>
                                                    <span class="select2-search select2-search--inline">
                                                        <input class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-describedby="select2-permissions-fr-container" placeholder="" style="width: 0.75em;">
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="card-footer py-4">
                                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- footer link -->
<?php
    include 'footer.php';
?>