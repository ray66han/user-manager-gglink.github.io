<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-Manager</title>
    <!-- adminLTE CDN links for css and JS -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
</head>
<body>
<?php
 include 'user-menu.php';
?>
<div class="card card-primary card-outline">
    <div class="card-body box-profile">
        <div class="text-center">
            <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
        </div>
        <h3 class="profile-username text-center">Nina Mcintire</h3>
        <p class="text-muted text-center">Software Engineer</p>
        <ul class="list-group list-group-unbordered mb-3">
            <li class="list-group-item">
                <b>Followers</b>
                <a class="float-right">1,322</a>
            </li>
            <li class="list-group-item">
                <b>Following</b>
                <a class="float-right">543</a>
            </li>
            <li class="list-group-item">
                <b>Friends</b>
                <a class="float-right">13,287</a>
            </li>
        </ul>
        <a href="update-profile.php" class="btn btn-primary btn-block">
            <b>Update Profile</b>
        </a>
        <a href="log-in.php" class="btn btn-primary btn-block">
            <b>Delete Profile</b>
        </a>
    </div>
</div>
</body>
</html>