<?php

include 'src/config/config.php';

$user = unserialize($_SESSION['user']);


include 'src/views/default.php';

// todo - create votation
var_dump($_POST);

include 'src/views/app.php';
include 'src/views/footer.php';