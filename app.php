<?php

include 'src/config/config.php';

$user = unserialize($_SESSION['user']);


include 'src/views/default.php';

// todo - create votation
if (isset($_POST['create_votation'])) {
    $poll = new Poll([
        "title" => $_POST['title'],
        "description" => $_POST['description'],
    ]);

    $poll->insert();

    foreach ($_POST['option'] as $option) {
        (new Option([
            "name" => $option,
            "poll_id" => $poll->id,
            "votes" => 0,
        ]))->insert();
    }
}

include 'src/views/app.php';
include 'src/views/footer.php';