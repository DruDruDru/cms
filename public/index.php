<?php

require_once '../vendor/autoload.php';

use Src\Database;

$db = new Database();
$db->upMigrations();

switch ($_SERVER['REQUEST_URI']) {
    case '/':
    case '/index.php':
        call_user_func(array(new App\Controller\Site(), 'user'), ['name' => 'test']);
        break;
    default:
        throw new Exception("NOT FOUND 404");
}
