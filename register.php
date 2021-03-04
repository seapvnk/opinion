<?php 

include 'src/config/config.php';

$hasCreatedUser = false;

if (isset($_POST) && count($_POST) > 0) {
    $errors = Auth::validateRegisterForm($_POST);
    if (!$errors) {
        $user = new User($_POST);
        $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $hasCreatedUser = true;

        $user->insert();
    }
}

include 'src/views/default.php';
include 'src/views/register.php';
include 'src/views/footer.php';

