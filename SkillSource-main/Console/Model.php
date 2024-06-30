<?php


require_once './Support/autoload.php';
use Support\Console;


class ConsoleModel extends Console {
    public function __construct()
    {
        echo static::class;
    }
}