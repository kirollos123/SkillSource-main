<?php

namespace Support;

use Support\Contracts\DataBaseInterface;

class DB implements DataBaseInterface {
    private static $instance = null;

    public static function getInstance()
    {
        if (static::$instance == null)
            DB::connect();
        return static::$instance;
    }

    public static function connect() {
        $host = env('DB_HOST');
        $port = env('DB_PORT');
        $user = env('DB_USERNAME');
        $pass = env('DB_PASSWORD');
        $dbname = env('DB_DATABASE');
        // build the DSN including SSL settings
        $conn = "mysql:host=$host;port=$port;dbname=$dbname";
        if (env('DB_SSL') == true)
            $conn .= ";sslmode=verify-ca;sslrootcert=ca.pem";

        try {
            // Create a PDO instance
            $db = new \PDO($conn, $user, $pass);
            static::$instance = $db;
            
            // Set PDO to throw exceptions on errors
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            // If connection fails, handle the exception
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public static function query($query, $params = []) {
        $db = static::getInstance();
        $stmt = $db->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function close() {
        // Implement close connection logic
        static::$instance->close();
    }

    public static function lastInsertedId() {
        // Implement last inserted id logic
        return static::$instance->lastInsertId();
    }

}
