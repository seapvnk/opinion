<?php

include 'src/config/config.php';

$user = unserialize($_SESSION['user']);

$deletedPoll = false;

if ($_GET && $_GET['d']) {
    $poll = Poll::one([ "id" => $_GET['d' ]]);
    if ($poll->getValues() && $poll->user_id == $user->id) {
        $poll->delete();
        $deletedPoll = true;
        
        header('location: dashboard.php');
        exit;
    }
}

include 'src/views/default.php';

$polls = Poll::all(["user_id" => $user->id]);

include 'src/views/dashboard.php';
include 'src/views/footer.php';