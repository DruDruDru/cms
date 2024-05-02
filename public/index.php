<?php

use Src\Database;
use App\Model\User;

require_once '../vendor/autoload.php';

$config = require __DIR__ . '/../config/path.php';

$db = new Database();
//$db->upMigrations();

$routes = [
    rtrim($config["root"], '/') => ['method' => 'user',
        'ctx' => ['users' => User::all()->toArray()]],

    $config["root"] . 'index.php' => ['method' => 'user',
        'ctx' => User::all()->toArray()],

    $config["root"] . 'signup' => ['method' => 'signup',
        'ctx' => []],

    $config["root"] . 'login'  => ['method' => 'login',
        'ctx' => []]
];

$currentUrl = rtrim($_SERVER['REQUEST_URI'], '/');

if (array_key_exists($currentUrl, $routes)) {
    $action = $routes[$currentUrl];
    call_user_func(array(new App\Controller\Site(), $action['method']), $action['ctx']);
} else {
    throw new Exception("NOT FOUND 404");
}
