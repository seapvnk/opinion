<?php

include 'src/config/config.php';

if ($_GET && $_GET['v']) {
    $option = Option::one(["id" => $_GET['v']]);

    if ($option->getValues()) {
        $option->votes = (int) $option->votes + 1;
        $option->update();
    }

}

header('location: app.php');
exit;