<?php
namespace App\Config;
class DataBaseConfig {

    //TODO: переделать на getenv('MYSQL_HOST')
    private static $host = 'mariadb';
    private static $username = 'root';
    private static $password = 'rootsecret';
    private static $database = 'Test';

    public static function getHost() {
        return self::$host;
    }

    public static function getUsername() {
        return self::$username;
    }

    public static function getPassword() {
        return self::$password;
    }

    public static function getDatabase() {
        return self::$database;
    }
}

require_once '../../vendor/autoload.php';
