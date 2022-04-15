<?php
class Connection
{
    private static $host = "localhost";
    private static $database = "top_handler";
    private static $username = "root";
    private static $password = "";

    private static $instance;

    public static function getInstance()
    {
        if (!isset($instance)) {
            $dsn = sprintf("mysql:host=%s;dbname=%s", self::$host, self::$database);
            self::$instance = new PDO($dsn, self::$username, self::$password);
        }
        return self::$instance;
    }
    public static function disconnect()
    {
        self::$instance = null;
    }
}
