<?php 

include 'src/config/config.php';

if (isset($_POST) && count($_POST) > 0) {
    $errors = Auth::login($_POST);

    if (!count($errors) && isset($_SESSION['user'])) {
        header('location: app.php');
        exit;
    }
}


include 'src/views/default.php';
include 'src/views/login.php';
include 'src/views/footer.php';

