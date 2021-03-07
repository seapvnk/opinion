<?php

include 'src/config/config.php';

$user = unserialize($_SESSION['user']);

include 'src/views/default.php';

// create votation
if (isset($_POST['create_votation'])) {
    $poll = new Poll([
        "user_id" => $user->id,
        "title" => $_POST['title'],
        "description" => $_POST['description'],
    ]);

    $poll->insert();

    foreach ($_POST['option'] as $option) {
        if (!$option) continue;

        (new Option([
            "name" => $option,
            "poll_id" => $poll->id,
            "votes" => 0,
        ]))->insert();
    }
}

// get a random votation
$quantity = Poll::count();
$randomPoll = Poll::getRandom();

include 'src/views/app.php';
include 'src/views/footer.php';