<?php

namespace Src;

use Illuminate\Container\Container;
use Illuminate\Events\Dispatcher;
use Illuminate\Database\Capsule\Manager;

class Database
{
    public function __construct()
    {
        $dbConnect = require __DIR__ . '/../../config/db.php';
        $this->dbManager = new Manager();
        $this->dbManager->addConnection($dbConnect);
        $this->dbManager->setEventDispatcher(new Dispatcher(new Container));
        $this->dbManager->setAsGlobal();
        $this->dbManager->bootEloquent();
    }

    public function upMigrations()
    {
        $dir = __DIR__ . '/../../migrations';
        foreach (scandir($dir) as $migration) {
            $class = require $dir . '/' . $migration;
            $class->up();
        }
    }

    public function downMigrations()
    {
        $dir = __DIR__ . '/../../migrations';
        foreach (scandir($dir) as $migration) {
            $class = require_once $dir . '/' . $migration;
            $class->down();
        }
    }
}