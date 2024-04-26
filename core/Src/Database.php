<?php

namespace Src;

class Database
{
    public static function upMigrations()
    {
        $dir = __DIR__ . '/../../migrations';
        foreach (scandir($dir) as $migration) {
            $class = require_once $dir . '/' . $migration;
            $class->up();
        }
    }

    public static function downMigrations()
    {
        $dir = __DIR__ . '/../../migrations';
        foreach (scandir($dir) as $migration) {
            $class = require_once $dir . '/' . $migration;
            $class->down();
        }
    }
}