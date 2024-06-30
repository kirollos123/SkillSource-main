<?php

namespace Support\Contracts;

interface DataBaseInterface {
    public static function connect();
    public static function query($query, $params);
    public function close();
    public static function getInstance();
}

