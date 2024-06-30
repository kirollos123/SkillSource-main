<?php

namespace Support\Contracts;

interface ModelInterface {
    public static function create(array $data);
    public static function update($id, array $data);
    public static function delete($id);
    public static function find($id);
}

