<?php

define('BASE_PATH',realpath(__DIR__.'/../../'));

require_once __DIR__.'/../../vendor/autoload.php';

$dotLoader = new \Dotenv\Loader([
    BASE_PATH . '/.env'
], new \Dotenv\Environment\DotenvFactory());
$dotEnv = new \Dotenv\Dotenv($dotLoader);

$dotEnv->load();