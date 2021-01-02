    <?php

    include 'src/config/config.php';

    $_SESSION = [];
    session_destroy();

    header('location: index.php');