<?php

// ..  application name
define('APP_NAME', 'Food Store');

// ..  database credentials
define('DB', [
    'host' => 'localhost',
    'user' => 'root',
    'password' => '',
    'dbname' => 'online_store'
]);


// path
$_PATHS = [
    'frontpage' => __DIR__ . '/../includes/pages',
    'admin' => __DIR__ . '/../admin/includes/pages'
];

include __DIR__ . '/../src/bootstrap.php';
