<?php

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('FILE_PATH', $root . 'transaction_files' . DIRECTORY_SEPARATOR);
define('VIEW_PATH', $root . 'views' . DIRECTORY_SEPARATOR);

// echo APP_PATH;
// echo '<br />';
// echo FILE_PATH;
// echo '<br />';
// echo VIEW_PATH;

require APP_PATH . 'app.php';

$files = getTransactionFiles();
