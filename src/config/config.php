<?php

define('ROOT_PATH', str_replace('/src/config', '', __DIR__));

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