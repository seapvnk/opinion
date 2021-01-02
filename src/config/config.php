<?php

define('ROOT_PATH', str_replace('/src/config', '', __DIR__));
define('HOST', 'http://localhost');

session_start();

$autoload = [
    '/src/core',
    '/src/models',
    '/src/services',
];

foreach ($autoload as $dir) {
    foreach (scandir(ROOT_PATH . $dir) as $file) {
        if (!in_array($file, ['.', '..'])) {
            include ROOT_PATH . $dir . "/{$file}";
        }
    }
}

// rotas não protegidas
$guest = [
    'login',
    'register',
    'index'
];

$includeInfo = debug_backtrace();
$filename = pathinfo($includeInfo[0]['file'], PATHINFO_FILENAME);

if (isset($_SESSION['user']) && in_array($filename, $guest)) {
    header('location:' . HOST . '/app.php');
    exit;
} else if (!isset($_SESSION['user']) && !in_array($filename, $guest)) {
    header('location:' . HOST . '/index.php');
    exit;
}