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
                    <h6 class="page-title">Email Unverified Users</h6>
                </div>
                <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part">
                    <form action="https://skillstest.me/admin/users/emailUnverified/search" method="GET" class="form-inline float-sm-right bg--white">
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
                                                    <span class="name">Luna Mirzaee</span>
                                                </div>
                                            </td>
                                            <td data-label="Username">
                                                <a href="admin-user-crud.php">Lunini97</a>
                                            </td>
                                            <td data-label="Email">luna.mirzaee@gmail.com</td>
                                            <td data-label="Phone">989015314921</td>
                                            <td data-label="Joined At">12 Dec, 2022 11:57 PM</td>
                                            <td data-label="Action">
                                                <a href="admin-user-crud.php" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                                    <i class="las la-desktop text--shadow"></i>
                                                </a>
                                                <form action="https://skillstest.me/admin/users/165/delete" class="d-inline" method="POST">
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
                                                        <img src="https://skillstest.me/placeholder-image/350x300" alt="image">
                                                    </div>
                                                    <span class="name">Andwuger AndwugerUI</span>
                                                </div>
                                            </td>
                                            <td data-label="Username">
                                                <a href="admin-user-crud.php">Andwuger</a>
                                            </td>
                                            <td data-label="Email">petrov.anton.1980.11.9@mail.ru</td>
                                            <td data-label="Phone">3382912831221</td>
                                            <td data-label="Joined At">30 Nov, 2022 10:42 AM</td>
                                            <td data-label="Action">
                                                <a href="admin-user-crud.php" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                                    <i class="las la-desktop text--shadow"></i>
                                                </a>
                                                <form action="https://skillstest.me/admin/users/164/delete" class="d-inline" method="POST">
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
                                                        <img src="https://skillstest.me/placeholder-image/350x300" alt="image">
                                                    </div>
                                                    <span class="name">Tomygur TomygurDA</span>
                                                </div>
                                            </td>
                                            <td data-label="Username">
                                                <a href="admin-user-crud.php">Tomygur</a>
                                            </td>
                                            <td data-label="Email">pashenka.fdorov.99@mail.ru</td>
                                            <td data-label="Phone">788672878982</td>
                                            <td data-label="Joined At">30 Nov, 2022 09:17 AM</td>
                                            <td data-label="Action">
                                                <a href="admin-user-crud.php" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                                    <i class="las la-desktop text--shadow"></i>
                                                </a>
                                                <form action="https://skillstest.me/admin/users/163/delete" class="d-inline" method="POST">
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
                                                        <img src="https://skillstest.me/placeholder-image/350x300" alt="image">
                                                    </div>
                                                    <span class="name">Jacywed JacywedHG</span>
                                                </div>
                                            </td>
                                            <td data-label="Username">
                                                <a href="admin-user-crud.php">Jacywed</a>
                                            </td>
                                            <td data-label="Email">oleg.kurbatov.2023@mail.ru</td>
                                            <td data-label="Phone">24686185178698</td>
                                            <td data-label="Joined At">30 Nov, 2022 07:56 AM</td>
                                            <td data-label="Action">
                                                <a href="admin-user-crud.php" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                                    <i class="las la-desktop text--shadow"></i>
                                                </a>
                                                <form action="https://skillstest.me/admin/users/162/delete" class="d-inline" method="POST">
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
                                                        <img src="https://skillstest.me/placeholder-image/350x300" alt="image">
                                                    </div>
                                                    <span class="name">CurtisTok CurtisTokXB</span>
                                                </div>
                                            </td>
                                            <td data-label="Username">
                                                <a href="admin-user-crud.php">CurtisTok</a>
                                            </td>
                                            <td data-label="Email">ivan.selin.2023@mail.ru</td>
                                            <td data-label="Phone">175881727637274</td>
                                            <td data-label="Joined At">30 Nov, 2022 06:33 AM</td>
                                            <td data-label="Action">
                                                <a href="admin-user-crud.php" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                                    <i class="las la-desktop text--shadow"></i>
                                                </a>
                                                <form action="https://skillstest.me/admin/users/161/delete" class="d-inline" method="POST">
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
                                                        <img src="https://skillstest.me/placeholder-image/350x300" alt="image">
                                                    </div>
                                                    <span class="name">Richardboary RichardboaryFE</span>
                                                </div>
                                            </td>
                                            <td data-label="Username">
                                                <a href="admin-user-crud.php">Richardboary</a>
                                            </td>
                                            <td data-label="Email">slava.babenko.2022@mail.ru</td>
                                            <td data-label="Phone">9187157887551</td>
                                            <td data-label="Joined At">30 Nov, 2022 05:13 AM</td>
                                            <td data-label="Action">
                                                <a href="admin-user-crud.php" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                                    <i class="las la-desktop text--shadow"></i>
                                                </a>
                                                <form action="https://skillstest.me/admin/users/160/delete" class="d-inline" method="POST">
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
                                                        <img src="https://skillstest.me/placeholder-image/350x300" alt="image">
                                                    </div>
                                                    <span class="name">Kenyter KenyterOH</span>
                                                </div>
                                            </td>
                                            <td data-label="Username">
                                                <a href="admin-user-crud.php">Kenyter</a>
                                            </td>
                                            <td data-label="Email">petrov_roman_1991_22_6@mail.ru</td>
                                            <td data-label="Phone">8688419396349</td>
                                            <td data-label="Joined At">30 Nov, 2022 03:50 AM</td>
                                            <td data-label="Action">
                                                <a href="admin-user-crud.php" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                                    <i class="las la-desktop text--shadow"></i>
                                                </a>
                                                <form action="https://skillstest.me/admin/users/159/delete" class="d-inline" method="POST">
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
                                                        <img src="https://skillstest.me/placeholder-image/350x300" alt="image">
                                                    </div>
                                                    <span class="name">Vinwuher VinwuherCG</span>
                                                </div>
                                            </td>
                                            <td data-label="Username">
                                                <a href="admin-user-crud.php">Vinwuher</a>
                                            </td>
                                            <td data-label="Email">edik_sergeev_2023@mail.ru</td>
                                            <td data-label="Phone">5684355944466</td>
                                            <td data-label="Joined At">30 Nov, 2022 02:29 AM</td>
                                            <td data-label="Action">
                                                <a href="admin-user-crud.php" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                                    <i class="las la-desktop text--shadow"></i>
                                                </a>
                                                <form action="https://skillstest.me/admin/users/158/delete" class="d-inline" method="POST">
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
                                                        <img src="https://skillstest.me/placeholder-image/350x300" alt="image">
                                                    </div>
                                                    <span class="name">Willower WillowerNH</span>
                                                </div>
                                            </td>
                                            <td data-label="Username">
                                                <a href="admin-user-crud.php">Willower</a>
                                            </td>
                                            <td data-label="Email">gena.yermolayev.2005@mail.ru</td>
                                            <td data-label="Phone">97183916372249</td>
                                            <td data-label="Joined At">30 Nov, 2022 01:07 AM</td>
                                            <td data-label="Action">
                                                <a href="admin-user-crud.php" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                                    <i class="las la-desktop text--shadow"></i>
                                                </a>
                                                <form action="https://skillstest.me/admin/users/157/delete" class="d-inline" method="POST">
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
                                                        <img src="https://skillstest.me/placeholder-image/350x300" alt="image">
                                                    </div>
                                                    <span class="name">Anthuwer AnthuwerDL</span>
                                                </div>
                                            </td>
                                            <td data-label="Username">
                                                <a href="admin-user-crud.php">Anthuwer</a>
                                            </td>
                                            <td data-label="Email">sashunya.yermakov.2002@mail.ru</td>
                                            <td data-label="Phone">50987433626318</td>
                                            <td data-label="Joined At">29 Nov, 2022 11:43 PM</td>
                                            <td data-label="Action">
                                                <a href="admin-user-crud.php" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                                    <i class="las la-desktop text--shadow"></i>
                                                </a>
                                                <form action="https://skillstest.me/admin/users/156/delete" class="d-inline" method="POST">
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
                                                        <img src="https://skillstest.me/placeholder-image/350x300" alt="image">
                                                    </div>
                                                    <span class="name">ThomasKem ThomasKemHF</span>
                                                </div>
                                            </td>
                                            <td data-label="Username">
                                                <a href="admin-user-crud.php">ThomasKem</a>
                                            </td>
                                            <td data-label="Email">oleg.zaripov.2023@mail.ru</td>
                                            <td data-label="Phone">4484393975817</td>
                                            <td data-label="Joined At">29 Nov, 2022 10:23 PM</td>
                                            <td data-label="Action">
                                                <a href="admin-user-crud.php" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                                    <i class="las la-desktop text--shadow"></i>
                                                </a>
                                                <form action="https://skillstest.me/admin/users/155/delete" class="d-inline" method="POST">
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
                                                        <img src="https://skillstest.me/placeholder-image/350x300" alt="image">
                                                    </div>
                                                    <span class="name">Wilywas WilywasAP</span>
                                                </div>
                                            </td>
                                            <td data-label="Username">
                                                <a href="admin-user-crud.php">Wilywas</a>
                                            </td>
                                            <td data-label="Email">viktor-yegorov-83@mail.ru</td>
                                            <td data-label="Phone">37588818653696</td>
                                            <td data-label="Joined At">29 Nov, 2022 09:00 PM</td>
                                            <td data-label="Action">
                                                <a href="admin-user-crud.php" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                                    <i class="las la-desktop text--shadow"></i>
                                                </a>
                                                <form action="https://skillstest.me/admin/users/154/delete" class="d-inline" method="POST">
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
                                                        <img src="https://skillstest.me/placeholder-image/350x300" alt="image">
                                                    </div>
                                                    <span class="name">Milywed MilywedKQ</span>
                                                </div>
                                            </td>
                                            <td data-label="Username">
                                                <a href="admin-user-crud.php">Milywed</a>
                                            </td>
                                            <td data-label="Email">ivanov_ivan_1991_14_3@mail.ru</td>
                                            <td data-label="Phone">50286398559292</td>
                                            <td data-label="Joined At">29 Nov, 2022 07:40 PM</td>
                                            <td data-label="Action">
                                                <a href="admin-user-crud.php" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                                    <i class="las la-desktop text--shadow"></i>
                                                </a>
                                                <form action="https://skillstest.me/admin/users/153/delete" class="d-inline" method="POST">
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
                                                        <img src="https://skillstest.me/placeholder-image/350x300" alt="image">
                                                    </div>
                                                    <span class="name">Heawutys HeawutysXH</span>
                                                </div>
                                            </td>
                                            <td data-label="Username">
                                                <a href="admin-user-crud.php">Heawutys</a>
                                            </td>
                                            <td data-label="Email">zhenya.akimov.1993@mail.ru</td>
                                            <td data-label="Phone">134089325522438</td>
                                            <td data-label="Joined At">29 Nov, 2022 06:18 PM</td>
                                            <td data-label="Action">
                                                <a href="admin-user-crud.php" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                                    <i class="las la-desktop text--shadow"></i>
                                                </a>
                                                <form action="https://skillstest.me/admin/users/152/delete" class="d-inline" method="POST">
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
                                                        <img src="https://skillstest.me/placeholder-image/350x300" alt="image">
                                                    </div>
                                                    <span class="name">Isawyuder IsawyuderKX</span>
                                                </div>
                                            </td>
                                            <td data-label="Username">
                                                <a href="admin-user-crud.php">Isawyuder</a>
                                            </td>
                                            <td data-label="Email">volkov_sania_1991_5_3@mail.ru</td>
                                            <td data-label="Phone">67282478867537</td>
                                            <td data-label="Joined At">29 Nov, 2022 04:49 PM</td>
                                            <td data-label="Action">
                                                <a href="admin-user-crud.php" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                                    <i class="las la-desktop text--shadow"></i>
                                                </a>
                                                <form action="https://skillstest.me/admin/users/151/delete" class="d-inline" method="POST">
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
                                                        <img src="https://skillstest.me/placeholder-image/350x300" alt="image">
                                                    </div>
                                                    <span class="name">Stevyger StevygerNB</span>
                                                </div>
                                            </td>
                                            <td data-label="Username">
                                                <a href="admin-user-crud.php">Stevyger</a>
                                            </td>
                                            <td data-label="Email">pavel_shilov_1985@mail.ru</td>
                                            <td data-label="Phone">35081562621215</td>
                                            <td data-label="Joined At">29 Nov, 2022 03:24 PM</td>
                                            <td data-label="Action">
                                                <a href="admin-user-crud.php" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                                    <i class="las la-desktop text--shadow"></i>
                                                </a>
                                                <form action="https://skillstest.me/admin/users/150/delete" class="d-inline" method="POST">
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
                                                        <img src="https://skillstest.me/placeholder-image/350x300" alt="image">
                                                    </div>
                                                    <span class="name">Marhewwr MarhewwrQE</span>
                                                </div>
                                            </td>
                                            <td data-label="Username">
                                                <a href="admin-user-crud.php">Marhewwr</a>
                                            </td>
                                            <td data-label="Email">kuznetsov.lekha.1997.27.6@mail.ru</td>
                                            <td data-label="Phone">25287865556578</td>
                                            <td data-label="Joined At">29 Nov, 2022 02:03 PM</td>
                                            <td data-label="Action">
                                                <a href="admin-user-crud.php" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                                    <i class="las la-desktop text--shadow"></i>
                                                </a>
                                                <form action="https://skillstest.me/admin/users/149/delete" class="d-inline" method="POST">
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
                                                        <img src="https://skillstest.me/placeholder-image/350x300" alt="image">
                                                    </div>
                                                    <span class="name">Donuwert DonuwertMB</span>
                                                </div>
                                            </td>
                                            <td data-label="Username">
                                                <a href="admin-user-crud.php">Donuwert</a>
                                            </td>
                                            <td data-label="Email">tima.kapustin.85@mail.ru</td>
                                            <td data-label="Phone">21889335335733</td>
                                            <td data-label="Joined At">29 Nov, 2022 12:39 PM</td>
                                            <td data-label="Action">
                                                <a href="admin-user-crud.php" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                                    <i class="las la-desktop text--shadow"></i>
                                                </a>
                                                <form action="https://skillstest.me/admin/users/148/delete" class="d-inline" method="POST">
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
                                                        <img src="https://skillstest.me/placeholder-image/350x300" alt="image">
                                                    </div>
                                                    <span class="name">Branduws BranduwsPC</span>
                                                </div>
                                            </td>
                                            <td data-label="Username">
                                                <a href="admin-user-crud.php">Branduws</a>
                                            </td>
                                            <td data-label="Email">reviakin_vadim_24807@mail.ru</td>
                                            <td data-label="Phone">147387891321621</td>
                                            <td data-label="Joined At">29 Nov, 2022 11:14 AM</td>
                                            <td data-label="Action">
                                                <a href="admin-user-crud.php" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                                    <i class="las la-desktop text--shadow"></i>
                                                </a>
                                                <form action="https://skillstest.me/admin/users/147/delete" class="d-inline" method="POST">
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
                                                        <img src="https://skillstest.me/placeholder-image/350x300" alt="image">
                                                    </div>
                                                    <span class="name">Jamuwer JamuwerDC</span>
                                                </div>
                                            </td>
                                            <td data-label="Username">
                                                <a href="admin-user-crud.php">Jamuwer</a>
                                            </td>
                                            <td data-label="Email">marina-goncharova-13479@mail.ru</td>
                                            <td data-label="Phone">789217276695</td>
                                            <td data-label="Joined At">29 Nov, 2022 09:54 AM</td>
                                            <td data-label="Action">
                                                <a href="admin-user-crud.php" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Details">
                                                    <i class="las la-desktop text--shadow"></i>
                                                </a>
                                                <form action="https://skillstest.me/admin/users/146/delete" class="d-inline" method="POST">
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
                                    <li class="page-item active">
                                        <a class="page-link" href="javascript:void(0)">1</a>
                                    </li>
                                    <li class="page-item ">
                                        <a class="page-link" href="https://skillstest.me/admin/users/email-unverified?page=2">2</a>
                                    </li>
                                    <li class="page-item ">
                                        <a class="page-link" href="https://skillstest.me/admin/users/email-unverified?page=3">3</a>
                                    </li>
                                    <li class="page-item ">
                                        <a class="page-link" href="https://skillstest.me/admin/users/email-unverified?page=4">4</a>
                                    </li>
                                    <li class="page-item ">
                                        <a class="page-link" href="https://skillstest.me/admin/users/email-unverified?page=5">5</a>
                                    </li>
                                    <li class="page-item ">
                                        <a class="page-link" href="https://skillstest.me/admin/users/email-unverified?page=6">6</a>
                                    </li>
                                    <li class="page-item ">
                                        <a class="page-link" href="https://skillstest.me/admin/users/email-unverified?page=7">7</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="https://skillstest.me/admin/users/email-unverified?page=2">
                                            <i class="fa fa-angle-right"></i>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
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