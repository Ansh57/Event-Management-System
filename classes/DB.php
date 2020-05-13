<?php
class DB {

    private static $host = "localhost";
    private static $database = "phpmyadmin";
    private static $username = "phpmyadmin";
    private static $password = "atech123";
    
    public static function getConnection() {
        $dsn = 'mysql:host=' . DB::$host . ';dbname=' . DB::$database;

        $connection = new PDO($dsn, DB::$username, DB::$password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $connection;
    }

}
