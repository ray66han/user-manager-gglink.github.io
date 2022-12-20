<!-- header link -->
<?php
    include 'header.php';
    include 'navbar.php';
?>
<div class="content-wrapper" style="min-height: 265px;">
    <div class="bodywrapper__inner">
        <div class="row align-items-center mb-30 justify-content-between">
            <div class="col-lg-6 col-sm-6">
                <h6 class="page-title">Admin List</h6>
            </div>
            <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part">
                <a href="add-admin.php" class="btn btn-success">
                    <i class="las la-plus"></i> Add Admin </a>
                <br>
                <br>
                <form action="https://skillstest.me/admin/users/admin?index" method="GET" class="form-inline float-sm-right bg--white">
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
                                        <th scope="col">Joined At</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td data-label="User">
                                            <div class="user">
                                                <div class="thumb">
                                                    
                                                </div>
                                                <span class="name">Maliha</span>
                                            </div>
                                        </td>
                                        <td data-label="Username">
                                            <a href="admin-user-crud.php">maliha678</a>
                                        </td>
                                        <td data-label="Email">mahzabintmm@gmail.com</td>
                                        <td data-label="Joined At">28 Apr, 2022 02:41 PM</td>
                                        <td data-label="Action">
                                            <a href="https://skillstest.me/admin/users/admin/27/edit" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                                <i class="las la-desktop text--shadow"></i>
                                            </a>
                                            <form action="https://skillstest.me/admin/users/admin/27/delete" class="d-inline" method="POST">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="fFzHuYKFvUmpTHE2yPgXry9w15soGmmRGD6uvAkp">
                                                <button onclick="if (!window.__cfRLUnblockHandlers) return false; return confirm('This delete action will delete all the related data, are you sure? ')" type="submit" class="icon-btn btn--danger ml-2 delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="las la-trash-alt text--shadow"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-label="User">
                                            <div class="user">
                                                <div class="thumb">
                                                    
                                                </div>
                                                <span class="name">Rokeya Akter Oshin</span>
                                            </div>
                                        </td>
                                        <td data-label="Username">
                                            <a href="admin-user-crud.php">oshin</a>
                                        </td>
                                        <td data-label="Email">rokeyaoshin@gmail.com</td>
                                        <td data-label="Joined At">21 Apr, 2022 05:11 AM</td>
                                        <td data-label="Action">
                                            <a href="https://skillstest.me/admin/users/admin/26/edit" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                                <i class="las la-desktop text--shadow"></i>
                                            </a>
                                            <form action="https://skillstest.me/admin/users/admin/26/delete" class="d-inline" method="POST">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="fFzHuYKFvUmpTHE2yPgXry9w15soGmmRGD6uvAkp">
                                                <button onclick="if (!window.__cfRLUnblockHandlers) return false; return confirm('This delete action will delete all the related data, are you sure? ')" type="submit" class="icon-btn btn--danger ml-2 delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="las la-trash-alt text--shadow"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-label="User">
                                            <div class="user">
                                                <div class="thumb">
                                                    
                                                </div>
                                                <span class="name">Rafsan</span>
                                            </div>
                                        </td>
                                        <td data-label="Username">
                                            <a href="admin-user-crud.php">ratul66</a>
                                        </td>
                                        <td data-label="Email">rafsanhassan230@gmail.com</td>
                                        <td data-label="Joined At">10 Apr, 2022 10:49 AM</td>
                                        <td data-label="Action">
                                            <a href="https://skillstest.me/admin/users/admin/24/edit" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                                <i class="las la-desktop text--shadow"></i>
                                            </a>
                                            <form action="https://skillstest.me/admin/users/admin/24/delete" class="d-inline" method="POST">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="fFzHuYKFvUmpTHE2yPgXry9w15soGmmRGD6uvAkp">
                                                <button onclick="if (!window.__cfRLUnblockHandlers) return false; return confirm('This delete action will delete all the related data, are you sure? ')" type="submit" class="icon-btn btn--danger ml-2 delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="las la-trash-alt text--shadow"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-label="User">
                                            <div class="user">
                                                <div class="thumb">
                                                    
                                                </div>
                                                <span class="name">Protasha</span>
                                            </div>
                                        </td>
                                        <td data-label="Username">
                                            <a href="admin-user-crud.php">protasha66</a>
                                        </td>
                                        <td data-label="Email">shairaislam8@gmail.com</td>
                                        <td data-label="Joined At">10 Apr, 2022 08:34 AM</td>
                                        <td data-label="Action">
                                            <a href="https://skillstest.me/admin/users/admin/23/edit" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                                <i class="las la-desktop text--shadow"></i>
                                            </a>
                                            <form action="https://skillstest.me/admin/users/admin/23/delete" class="d-inline" method="POST">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="fFzHuYKFvUmpTHE2yPgXry9w15soGmmRGD6uvAkp">
                                                <button onclick="if (!window.__cfRLUnblockHandlers) return false; return confirm('This delete action will delete all the related data, are you sure? ')" type="submit" class="icon-btn btn--danger ml-2 delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="las la-trash-alt text--shadow"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-label="User">
                                            <div class="user">
                                                <div class="thumb">
                                                
                                                </div>
                                                <span class="name">Tajul Islam</span>
                                            </div>
                                        </td>
                                        <td data-label="Username">
                                            <a href="admin-user-crud.php">tajulskillstest</a>
                                        </td>
                                        <td data-label="Email">tajul.azazil@gmail.com</td>
                                        <td data-label="Joined At">09 Apr, 2022 08:46 AM</td>
                                        <td data-label="Action">
                                            <a href="https://skillstest.me/admin/users/admin/22/edit" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                                <i class="las la-desktop text--shadow"></i>
                                            </a>
                                            <form action="https://skillstest.me/admin/users/admin/22/delete" class="d-inline" method="POST">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="fFzHuYKFvUmpTHE2yPgXry9w15soGmmRGD6uvAkp">
                                                <button onclick="if (!window.__cfRLUnblockHandlers) return false; return confirm('This delete action will delete all the related data, are you sure? ')" type="submit" class="icon-btn btn--danger ml-2 delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="las la-trash-alt text--shadow"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-label="User">
                                            <div class="user">
                                                <div class="thumb">
                                                    
                                                </div>
                                                <span class="name">Pratasha Khandoker</span>
                                            </div>
                                        </td>
                                        <td data-label="Username">
                                            <a href="admin-user-crud.php">pratashaskillstest</a>
                                        </td>
                                        <td data-label="Email">shairaislam8@gmail.com</td>
                                        <td data-label="Joined At">09 Apr, 2022 08:45 AM</td>
                                        <td data-label="Action">
                                            <a href="https://skillstest.me/admin/users/admin/21/edit" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                                <i class="las la-desktop text--shadow"></i>
                                            </a>
                                            <form action="https://skillstest.me/admin/users/admin/21/delete" class="d-inline" method="POST">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="fFzHuYKFvUmpTHE2yPgXry9w15soGmmRGD6uvAkp">
                                                <button onclick="if (!window.__cfRLUnblockHandlers) return false; return confirm('This delete action will delete all the related data, are you sure? ')" type="submit" class="icon-btn btn--danger ml-2 delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="las la-trash-alt text--shadow"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-label="User">
                                            <div class="user">
                                                <div class="thumb">
                                                    
                                                </div>
                                                <span class="name">Ibnat Autoshe</span>
                                            </div>
                                        </td>
                                        <td data-label="Username">
                                            <a href="admin-user-crud.php">autosheskillstest</a>
                                        </td>
                                        <td data-label="Email">ibnatautoshe4@gmail.com</td>
                                        <td data-label="Joined At">09 Apr, 2022 08:43 AM</td>
                                        <td data-label="Action">
                                            <a href="https://skillstest.me/admin/users/admin/20/edit" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                                <i class="las la-desktop text--shadow"></i>
                                            </a>
                                            <form action="https://skillstest.me/admin/users/admin/20/delete" class="d-inline" method="POST">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="fFzHuYKFvUmpTHE2yPgXry9w15soGmmRGD6uvAkp">
                                                <button onclick="if (!window.__cfRLUnblockHandlers) return false; return confirm('This delete action will delete all the related data, are you sure? ')" type="submit" class="icon-btn btn--danger ml-2 delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="las la-trash-alt text--shadow"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-label="User">
                                            <div class="user">
                                                <div class="thumb">
                                                    
                                                </div>
                                                <span class="name">ray</span>
                                            </div>
                                        </td>
                                        <td data-label="Username">
                                            <a href="admin-user-crud.php">ray66</a>
                                        </td>
                                        <td data-label="Email">rayhan66chowdhury@gmail.com</td>
                                        <td data-label="Joined At">16 Mar, 2022 03:48 PM</td>
                                        <td data-label="Action">
                                            <a href="https://skillstest.me/admin/users/admin/15/edit" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                                <i class="las la-desktop text--shadow"></i>
                                            </a>
                                            <form action="https://skillstest.me/admin/users/admin/15/delete" class="d-inline" method="POST">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="fFzHuYKFvUmpTHE2yPgXry9w15soGmmRGD6uvAkp">
                                                <button onclick="if (!window.__cfRLUnblockHandlers) return false; return confirm('This delete action will delete all the related data, are you sure? ')" type="submit" class="icon-btn btn--danger ml-2 delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="las la-trash-alt text--shadow"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-label="User">
                                            <div class="user">
                                                <div class="thumb">
                                                    
                                                </div>
                                                <span class="name">test test</span>
                                            </div>
                                        </td>
                                        <td data-label="Username">
                                            <a href="admin-user-crud.php"></a>
                                        </td>
                                        <td data-label="Email">sdfgskdfhshdfkhskf@gmail.com</td>
                                        <td data-label="Joined At">03 Feb, 2022 05:16 PM</td>
                                        <td data-label="Action">
                                            <a href="https://skillstest.me/admin/users/admin/11/edit" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                                <i class="las la-desktop text--shadow"></i>
                                            </a>
                                            <form action="https://skillstest.me/admin/users/admin/11/delete" class="d-inline" method="POST">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="fFzHuYKFvUmpTHE2yPgXry9w15soGmmRGD6uvAkp">
                                                <button onclick="if (!window.__cfRLUnblockHandlers) return false; return confirm('This delete action will delete all the related data, are you sure? ')" type="submit" class="icon-btn btn--danger ml-2 delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="las la-trash-alt text--shadow"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-label="User">
                                            <div class="user">
                                                <div class="thumb">
                                                    
                                                </div>
                                                <span class="name">Adam Levine</span>
                                            </div>
                                        </td>
                                        <td data-label="Username">
                                            <a href=admin-user-crud.php">rikmon</a>
                                        </td>
                                        <td data-label="Email">admin@gglink.uk</td>
                                        <td data-label="Joined At">19 Dec, 2022 10:28 PM</td>
                                        <td data-label="Action">
                                            <a href="https://skillstest.me/admin/users/admin/1/edit" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                                <i class="las la-desktop text--shadow"></i>
                                            </a>
                                            <form action="https://skillstest.me/admin/users/admin/1/delete" class="d-inline" method="POST">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="fFzHuYKFvUmpTHE2yPgXry9w15soGmmRGD6uvAkp">
                                                <button onclick="if (!window.__cfRLUnblockHandlers) return false; return confirm('This delete action will delete all the related data, are you sure? ')" type="submit" class="icon-btn btn--danger ml-2 delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="las la-trash-alt text--shadow"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-label="User">
                                            <div class="user">
                                                <div class="thumb">
                                                    
                                                </div>
                                                <span class="name">Tasfia Mahzabin Maliha</span>
                                            </div>
                                        </td>
                                        <td data-label="Username">
                                            <a href=admin-user-crud.php">mahzabintmm</a>
                                        </td>
                                        <td data-label="Email">mahzabintmm@gmail.com</td>
                                        <td data-label="Joined At">19 Dec, 2022 10:28 PM</td>
                                        <td data-label="Action">
                                            <a href="https://skillstest.me/admin/users/admin/6/edit" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                                <i class="las la-desktop text--shadow"></i>
                                            </a>
                                            <form action="https://skillstest.me/admin/users/admin/6/delete" class="d-inline" method="POST">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="fFzHuYKFvUmpTHE2yPgXry9w15soGmmRGD6uvAkp">
                                                <button onclick="if (!window.__cfRLUnblockHandlers) return false; return confirm('This delete action will delete all the related data, are you sure? ')" type="submit" class="icon-btn btn--danger ml-2 delete" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <i class="las la-trash-alt text--shadow"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-label="User">
                                            <div class="user">
                                                <div class="thumb">
                                                    
                                                </div>
                                                <span class="name">Rayhan Chowdhury Bijoy</span>
                                            </div>
                                        </td>
                                        <td data-label="Username">
                                            <a href=admin-user-crud.php">rayhan66chowdhury</a>
                                        </td>
                                        <td data-label="Email">rayhan66chowdhury@gmail.com</td>
                                        <td data-label="Joined At">19 Dec, 2022 10:28 PM</td>
                                        <td data-label="Action">
                                            <a href="https://skillstest.me/admin/users/admin/7/edit" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                                <i class="las la-desktop text--shadow"></i>
                                            </a>
                                            <form action="https://skillstest.me/admin/users/admin/7/delete" class="d-inline" method="POST">
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