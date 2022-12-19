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
    // $pagename = isset($_GET['q']) ? $_GET['q'] : '' ;
    // $url = $_GET['q']; 
    // $object = explode("?page=", $url); 
    // $projectName = explode("=", $object[0]); 
    // $projectName = $projectName[1];
    // $pagename = $object[1];

    // switch ($pagename)
    // {
    //     case 'log-in':
    //         include 'log-in.php';
    //     break;

    //     case 'register':
    //         include 'register.php';
    //     break;

    //     case 'forget-password':
    //         include 'forget-password.php';
    //     break;

    //     case 'recover-password':
    //         include 'recover-password.php';
    //     break;

    //     case  'user-menu':
    //         include 'user-menu.php';
    //     break;

    //     case '404-error':
    //         include '404-error.php';
    //     break;

    //     case '500-error':
    //         include '500-error.php';
    //     break;

    //     case 'view-profile':
    //         include 'view-profile.php';
    //     break;

    //     case 'update-profile':
    //         include 'update-profile.php';
    //     break;

    //     case 'delete-profile':
    //         include 'delete-profile.php';
    //     break;
    // }

        // include 'recover-password.php';
        // include 'user-menu.php';
        // include '404-error.php';
        // include '500-error.php';
        // include 'view-profile.php';
        // include 'update-profile.php';
        // include 'delete-profile.php';

        include 'log-in.php';
    ?>
</body>
</html>