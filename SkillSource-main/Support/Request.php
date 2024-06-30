<?php
namespace Support;

use ArrayObject;

class Request {
    private static $instance;

    public static function getInstance($data = null) {
        if (isset(static::$instance))
            return static::$instance;
        else
            static::$instance = new ArrayObject($data, ArrayObject::ARRAY_AS_PROPS);
            static::$instance['uri'] = $_SERVER['REQUEST_URI'];
            return static::$instance;
        }

    public static function get($prop, $ifNull = null) {
        return static::getInstance()->$prop ?? $ifNull;
    }

}