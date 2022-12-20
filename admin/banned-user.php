<!-- header link -->
<?php
    include 'header.php';
    include 'navbar.php';
?>
<div class="content-wrapper" style="min-height: 265px;">
<div class="bodywrapper__inner">
    <div class="row align-items-center mb-30 justify-content-between">
        <div class="col-lg-6 col-sm-6">
            <h6 class="page-title">Banned Users</h6>
        </div>
        <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part">
            <form action="https://skillstest.me/admin/users/banned/search" method="GET" class="form-inline float-sm-right bg--white">
                <div class="input-group has_append">
                    <input type="text" name="search" class="form-control" placeholder="Username or email" value="">
                    <div class="input-group-append">
                        <button class="btn btn--primary" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
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
                                    <th scope="col">User</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Joined At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="User">
                                        <div class="user">
                                            <div class="thumb">
                                                <img src="https://skillstest.me/placeholder-image/350x300" alt="image">
                                            </div>
                                            <span class="name">GG Media</span>
                                        </div>
                                    </td>
                                    <td data-label="Username">
                                        <a href="admin-user-crud.php">113884999122655323006</a>
                                    </td>
                                    <td data-label="Email">ourportfolios897@gmail.com</td>
                                    <td data-label="Phone">1688416719</td>
                                    <td data-label="Joined At">10 Jan, 2022 04:54 PM</td>
                                    <td data-label="Action">
                                        <a href="admin-user-crud.php" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                            <i class="las la-desktop text--shadow"></i>
                                        </a>
                                        <form action="https://skillstest.me/admin/users/20/delete" class="d-inline" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="fFzHuYKFvUmpTHE2yPgXry9w15soGmmRGD6uvAkp">
                                            <button onclick="if (!window.__cfRLUnblockHandlers) return false; return confirm('This delete action will delete all the related data, are you sure? ')" type="submit" class="icon-btn btn--danger ml-2 delete" data-toggle="tooltip" title="" data-original-title="Delete">
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
<!-- footer link -->
<?php
    include 'footer.php';
?>