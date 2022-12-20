<?php
    include 'header.php';
    include 'navbar.php';
?>
<div class="content-wrapper" style="min-height: 265px;">
    <div class="col-md-8 col-lg-12">
        <div class="bodywrapper__inner">
            <div class="row align-items-center mb-30 justify-content-between">
                <div class="col-lg-6 col-sm-6">
                    <h6 class="page-title">All Roles</h6>
                </div>
                <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part">
                    <a href="add-role.php" class="btn btn-success">
                        <i class="las la-plus"></i> Add Role </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card b-radius--10 ">
                        <div class="card-body p-0">
                            <div class="table-responsive--md  table-responsive">
                                <table class="table table--light style--two">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Guard</th>
                                            <th scope="col">Total Permissions</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-label="Name">Test the role again</td>
                                            <td data-label="Name">admin</td>
                                            <td data-label="Total Permissions">
                                                <span class="text--small badge font-weight-normal badge--success">87</span>
                                            </td>
                                            <td data-label="Action">
                                                <a href="https://skillstest.me/admin/users/roles/12/edit" class="icon-btn" data-toggle="tooltip" title="" data-original-title="edit">
                                                    <i class="las la-edit text--shadow"></i>
                                                </a>
                                                <form action="https://skillstest.me/admin/users/roles/12/delete" class="d-inline" method="POST">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="fFzHuYKFvUmpTHE2yPgXry9w15soGmmRGD6uvAkp">
                                                    <button onclick="if (!window.__cfRLUnblockHandlers) return false; return confirm('Are you sure?')" type="submit" class="icon-btn btn--danger ml-2 delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                        <i class="las la-trash-alt text--shadow"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-label="Name">Test the role</td>
                                            <td data-label="Name">web</td>
                                            <td data-label="Total Permissions">
                                                <span class="text--small badge font-weight-normal badge--success">87</span>
                                            </td>
                                            <td data-label="Action">
                                                <a href="https://skillstest.me/admin/users/roles/11/edit" class="icon-btn" data-toggle="tooltip" title="" data-original-title="edit">
                                                    <i class="las la-edit text--shadow"></i>
                                                </a>
                                                <form action="https://skillstest.me/admin/users/roles/11/delete" class="d-inline" method="POST">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="fFzHuYKFvUmpTHE2yPgXry9w15soGmmRGD6uvAkp">
                                                    <button onclick="if (!window.__cfRLUnblockHandlers) return false; return confirm('Are you sure?')" type="submit" class="icon-btn btn--danger ml-2 delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                        <i class="las la-trash-alt text--shadow"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-label="Name">App Developer</td>
                                            <td data-label="Name">admin</td>
                                            <td data-label="Total Permissions">
                                                <span class="text--small badge font-weight-normal badge--success">87</span>
                                            </td>
                                            <td data-label="Action">
                                                <a href="https://skillstest.me/admin/users/roles/10/edit" class="icon-btn" data-toggle="tooltip" title="" data-original-title="edit">
                                                    <i class="las la-edit text--shadow"></i>
                                                </a>
                                                <form action="https://skillstest.me/admin/users/roles/10/delete" class="d-inline" method="POST">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="fFzHuYKFvUmpTHE2yPgXry9w15soGmmRGD6uvAkp">
                                                    <button onclick="if (!window.__cfRLUnblockHandlers) return false; return confirm('Are you sure?')" type="submit" class="icon-btn btn--danger ml-2 delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                        <i class="las la-trash-alt text--shadow"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-label="Name">Content Writer</td>
                                            <td data-label="Name">admin</td>
                                            <td data-label="Total Permissions">
                                                <span class="text--small badge font-weight-normal badge--success">87</span>
                                            </td>
                                            <td data-label="Action">
                                                <a href="https://skillstest.me/admin/users/roles/7/edit" class="icon-btn" data-toggle="tooltip" title="" data-original-title="edit">
                                                    <i class="las la-edit text--shadow"></i>
                                                </a>
                                                <form action="https://skillstest.me/admin/users/roles/7/delete" class="d-inline" method="POST">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="fFzHuYKFvUmpTHE2yPgXry9w15soGmmRGD6uvAkp">
                                                    <button onclick="if (!window.__cfRLUnblockHandlers) return false; return confirm('Are you sure?')" type="submit" class="icon-btn btn--danger ml-2 delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                        <i class="las la-trash-alt text--shadow"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-label="Name">Back End Developer</td>
                                            <td data-label="Name">admin</td>
                                            <td data-label="Total Permissions">
                                                <span class="text--small badge font-weight-normal badge--success">87</span>
                                            </td>
                                            <td data-label="Action">
                                                <a href="https://skillstest.me/admin/users/roles/6/edit" class="icon-btn" data-toggle="tooltip" title="" data-original-title="edit">
                                                    <i class="las la-edit text--shadow"></i>
                                                </a>
                                                <form action="https://skillstest.me/admin/users/roles/6/delete" class="d-inline" method="POST">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="fFzHuYKFvUmpTHE2yPgXry9w15soGmmRGD6uvAkp">
                                                    <button onclick="if (!window.__cfRLUnblockHandlers) return false; return confirm('Are you sure?')" type="submit" class="icon-btn btn--danger ml-2 delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                        <i class="las la-trash-alt text--shadow"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-label="Name">Graphic Designer</td>
                                            <td data-label="Name">admin</td>
                                            <td data-label="Total Permissions">
                                                <span class="text--small badge font-weight-normal badge--success">86</span>
                                            </td>
                                            <td data-label="Action">
                                                <a href="https://skillstest.me/admin/users/roles/5/edit" class="icon-btn" data-toggle="tooltip" title="" data-original-title="edit">
                                                    <i class="las la-edit text--shadow"></i>
                                                </a>
                                                <form action="https://skillstest.me/admin/users/roles/5/delete" class="d-inline" method="POST">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="fFzHuYKFvUmpTHE2yPgXry9w15soGmmRGD6uvAkp">
                                                    <button onclick="if (!window.__cfRLUnblockHandlers) return false; return confirm('Are you sure?')" type="submit" class="icon-btn btn--danger ml-2 delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                        <i class="las la-trash-alt text--shadow"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-label="Name">Front End Developer</td>
                                            <td data-label="Name">admin</td>
                                            <td data-label="Total Permissions">
                                                <span class="text--small badge font-weight-normal badge--success">86</span>
                                            </td>
                                            <td data-label="Action">
                                                <a href="https://skillstest.me/admin/users/roles/4/edit" class="icon-btn" data-toggle="tooltip" title="" data-original-title="edit">
                                                    <i class="las la-edit text--shadow"></i>
                                                </a>
                                                <form action="https://skillstest.me/admin/users/roles/4/delete" class="d-inline" method="POST">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="fFzHuYKFvUmpTHE2yPgXry9w15soGmmRGD6uvAkp">
                                                    <button onclick="if (!window.__cfRLUnblockHandlers) return false; return confirm('Are you sure?')" type="submit" class="icon-btn btn--danger ml-2 delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                        <i class="las la-trash-alt text--shadow"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-label="Name">Reviewer</td>
                                            <td data-label="Name">admin</td>
                                            <td data-label="Total Permissions">
                                                <span class="text--small badge font-weight-normal badge--success">20</span>
                                            </td>
                                            <td data-label="Action">
                                                <a href="https://skillstest.me/admin/users/roles/3/edit" class="icon-btn" data-toggle="tooltip" title="" data-original-title="edit">
                                                    <i class="las la-edit text--shadow"></i>
                                                </a>
                                                <form action="https://skillstest.me/admin/users/roles/3/delete" class="d-inline" method="POST">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="fFzHuYKFvUmpTHE2yPgXry9w15soGmmRGD6uvAkp">
                                                    <button onclick="if (!window.__cfRLUnblockHandlers) return false; return confirm('Are you sure?')" type="submit" class="icon-btn btn--danger ml-2 delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                        <i class="las la-trash-alt text--shadow"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-label="Name">Learner</td>
                                            <td data-label="Name">web</td>
                                            <td data-label="Total Permissions">
                                                <span class="text--small badge font-weight-normal badge--success">33</span>
                                            </td>
                                            <td data-label="Action">
                                                <a href="https://skillstest.me/admin/users/roles/2/edit" class="icon-btn" data-toggle="tooltip" title="" data-original-title="edit">
                                                    <i class="las la-edit text--shadow"></i>
                                                </a>
                                                <form action="https://skillstest.me/admin/users/roles/2/delete" class="d-inline" method="POST">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="fFzHuYKFvUmpTHE2yPgXry9w15soGmmRGD6uvAkp">
                                                    <button onclick="if (!window.__cfRLUnblockHandlers) return false; return confirm('Are you sure?')" type="submit" class="icon-btn btn--danger ml-2 delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                        <i class="las la-trash-alt text--shadow"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-label="Name">GG Admin</td>
                                            <td data-label="Name">admin</td>
                                            <td data-label="Total Permissions">
                                                <span class="text--small badge font-weight-normal badge--success">59</span>
                                            </td>
                                            <td data-label="Action">
                                                <a href="https://skillstest.me/admin/users/roles/1/edit" class="icon-btn" data-toggle="tooltip" title="" data-original-title="edit">
                                                    <i class="las la-edit text--shadow"></i>
                                                </a>
                                                <form action="https://skillstest.me/admin/users/roles/1/delete" class="d-inline" method="POST">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="fFzHuYKFvUmpTHE2yPgXry9w15soGmmRGD6uvAkp">
                                                    <button onclick="if (!window.__cfRLUnblockHandlers) return false; return confirm('Are you sure?')" type="submit" class="icon-btn btn--danger ml-2 delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                        <i class="las la-trash-alt text--shadow"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer py-4">
                            <nav aria-label="...">
                                <ul class="pagination justify-content-end mb-0">
                                    <li></li>
                                </ul>
                            </nav>
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