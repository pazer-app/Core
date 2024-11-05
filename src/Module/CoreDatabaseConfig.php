<?php declare(strict_types=1);
namespace PazerApp\Core\Module;
use PazerApp\DatabaseManager\DatabaseManager;
class CoreDatabaseConfig {
    protected DatabaseManager $_dbm;
    protected CoreConfig $_config;
    public function __construct(DatabaseManager $dbm, CoreConfig $config) { $this->_dbm = $dbm; $this->_config = $config; return $this; }
    protected function _sets_host(string $name, string $hostname, string $username, string $password, string $database, int $port = 3306, string $charset = "utf8mb4") : self { $this->_dbm->host($name)->set_hostname($hostname)->set_username($username)->set_password($password)->set_database($database)->set_port($port)->set_charset($charset); return $this; }
    public function main_read(string $hostname, string $username, string $password, string $database, int $port = 3306, string $charset = "utf8mb4") : self { return $this->_sets_host($this->_config->database_main_read(), $hostname, $username, $password, $database, $port, $charset); }
    public function main_write(string $hostname, string $username, string $password, string $database, int $port = 3306, string $charset = "utf8mb4") : self { return $this->_sets_host($this->_config->database_main_write(), $hostname, $username, $password, $database, $port, $charset); }
    public function sub1_read(string $hostname, string $username, string $password, string $database, int $port = 3306, string $charset = "utf8mb4") : self { return $this->_sets_host($this->_config->database_sub1_read(), $hostname, $username, $password, $database, $port, $charset); }
    public function sub1_write(string $hostname, string $username, string $password, string $database, int $port = 3306, string $charset = "utf8mb4") : self { return $this->_sets_host($this->_config->database_sub1_write(), $hostname, $username, $password, $database, $port, $charset); }
    public function sub2_read(string $hostname, string $username, string $password, string $database, int $port = 3306, string $charset = "utf8mb4") : self { return $this->_sets_host($this->_config->database_sub2_read(), $hostname, $username, $password, $database, $port, $charset); }
    public function sub2_write(string $hostname, string $username, string $password, string $database, int $port = 3306, string $charset = "utf8mb4") : self { return $this->_sets_host($this->_config->database_sub2_write(), $hostname, $username, $password, $database, $port, $charset); }
    public function sub3_read(string $hostname, string $username, string $password, string $database, int $port = 3306, string $charset = "utf8mb4") : self { return $this->_sets_host($this->_config->database_sub3_read(), $hostname, $username, $password, $database, $port, $charset); }
    public function sub3_write(string $hostname, string $username, string $password, string $database, int $port = 3306, string $charset = "utf8mb4") : self { return $this->_sets_host($this->_config->database_sub3_write(), $hostname, $username, $password, $database, $port, $charset); }
    public function sub4_read(string $hostname, string $username, string $password, string $database, int $port = 3306, string $charset = "utf8mb4") : self { return $this->_sets_host($this->_config->database_sub4_read(), $hostname, $username, $password, $database, $port, $charset); }
    public function sub4_write(string $hostname, string $username, string $password, string $database, int $port = 3306, string $charset = "utf8mb4") : self { return $this->_sets_host($this->_config->database_sub4_write(), $hostname, $username, $password, $database, $port, $charset); }
    public function sub5_read(string $hostname, string $username, string $password, string $database, int $port = 3306, string $charset = "utf8mb4") : self { return $this->_sets_host($this->_config->database_sub5_read(), $hostname, $username, $password, $database, $port, $charset); }
    public function sub5_write(string $hostname, string $username, string $password, string $database, int $port = 3306, string $charset = "utf8mb4") : self { return $this->_sets_host($this->_config->database_sub5_write(), $hostname, $username, $password, $database, $port, $charset); }
}
