<?php
require_once __DIR__ . '/../config/config.php';

class Database {
    private static $conn;

    public static function connect() {
        if (!self::$conn) {
            $dsn = "pgsql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME;
            try {
                self::$conn = new PDO($dsn, DB_USER, DB_PASS);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Erro ao conectar ao banco: " . $e->getMessage());
            }
        }
        return self::$conn;
    }
}
