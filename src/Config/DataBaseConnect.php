<?php
namespace App\Config;

use mysqli;

class DataBaseConnect {
    private static $instance;
    private $connection;

    private function __construct() {
        $host = DataBaseConfig::getHost();
        $username = DataBaseConfig::getUsername();
        $password = DataBaseConfig::getPassword();
        $database = DataBaseConfig::getDatabase();

        $this->connection = new mysqli($host, $username, $password, $database);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }
}
require_once '../../vendor/autoload.php';
?>


