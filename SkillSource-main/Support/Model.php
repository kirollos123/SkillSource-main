<?php
namespace Support;

use Models\Job;

abstract class Model {
    protected $data;
    private static $table;
    protected static $fillable = [];

    public function __construct(array $data) {
        $this->data = new \ArrayObject($data);
    }

    public function __get($key) {
        if (isset($this->data[$key])) {
            return $this->data[$key];
        }
        return null;
    }

    public function __set($key, $value) {
        $this->data[$key] = $value;
    }

    public function __isset($key) {
        return isset($this->data[$key]);
    }

    public function __unset($key) {
        unset($this->data[$key]);
    }

    public static function table() {
        return static::$table ?? static::$table = lcfirst(basename(str_replace('\\', '/' ,static::class)))."s";
    }

    public static function all() {
        $query = "select * from ". static::table();
        return DB::query($query);
    }

    public static function create($data) {
        $columns = implode(', ', static::$fillable);
        $placeholders = ':' . implode(', :', static::$fillable);
        $sql = "INSERT INTO " . static::table() . " ($columns) VALUES ($placeholders)";
        DB::query($sql, $data);
        return DB::lastInsertedId();
    }
    
    public static function find($id) {
        $table = static::table();
        $result = DB::query("SELECT * FROM $table WHERE id = :id", ['id' => $id]);
        $found = $result[0] ?? null;
        if ($found) {
            return new static($found);
        }
    }
    public static function update($id, array $data) {
        $table = static::table();
        $query = "UPDATE $table SET ";
        foreach ($data as $column => $value) {
            $query .= "$column = :$column,";
        }
        $query = rtrim($query, ',');
        $query .= " WHERE id = :id";
        $data['id'] = $id;
        DB::query($query, $data);
    }
    public static function delete($id) {
        $table = static::table();
        DB::query("DELETE FROM $table WHERE id = :id", ['id' => $id]);
    }

    public static function where($column, $value) {
        $table = static::table();
        return DB::query("SELECT * FROM $table WHERE $column = :$column" , [$column => $value]);
    }

    public static function attach($pivot_table, $foreign_key, $related_key, $id, $related_id) {
        DB::query("INSERT INTO $pivot_table ($foreign_key, $related_key) VALUES (:id, :related_id)", ['id' => $id, 'related_id' => $related_id]);
    }

    public static function belongsToMany($related, $pivot_table, $foreign_key, $related_key, $id) {
        return DB::query("SELECT * FROM $related WHERE id IN (SELECT $related_key FROM $pivot_table WHERE $foreign_key = :id)", ['id' => $id]);
    }

    public static function findOrInsert($column, $value)
    {
        $obj = static::where($column, $value);
        if (!$obj) {
            static::create([$column => $value]);
            $obj = static::where($column, $value);
        }
        return $obj[0];
    }

    public static function hasMany($related, $foreign_key, $id) {
        return DB::query("SELECT * FROM $related WHERE $foreign_key = :id", ['id' => $id]);
    }

    public static function belongsTo($related, $foreign_key, $id) {
        return DB::query("SELECT * FROM $related WHERE id = :id", ['id' => $id]);
    }

    public static function lastInsertedId() {
        return DB::lastInsertedId();
    }

    public static function exists($column, $value) {
        $table = static::table();
        $result = DB::query("SELECT * FROM $table WHERE $column = :$column", [$column => $value]);
        return count($result) > 0;
    }
}