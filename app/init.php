<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$_SERVER['DOCUMENT_ROOT'] = __DIR__ . '/..';
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';