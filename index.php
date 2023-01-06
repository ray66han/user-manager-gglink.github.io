<?php
    // Header goes here

    $page = $_GET['page'];

    // switching from page to page
    switch ($page) {
        case 'log-in';
                // header
            include 'guest/header.php';

            // Main snippets goes here
            include 'guest/log-in.php';
            // footer
            include 'guest/footer.php;';
        break;
        
        default:
            include 'header.php';
            include 'navbar.php';
            include 'banner.php';
            include 'footer-l.php';
            include 'footer.php';
        break;
    }

    // Footer goes here
?>