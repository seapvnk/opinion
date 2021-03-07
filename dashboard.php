<?php

include 'src/config/config.php';

$user = unserialize($_SESSION['user']);

include 'src/views/default.php';

$polls = Poll::all(["user_id" => $user->id]);

include 'src/views/dashboard.php';
include 'src/views/footer.php';