<?php declare(strict_types=1);
namespace PazerApp\Core\Module;
use PazerApp\DatabaseManager\DatabaseClient;
use PazerApp\DatabaseManager\DatabaseManager;
class CoreDatabaseManager {
    protected CoreConfig $_config;
    protected DatabaseManager $_dbm;
    public function __construct(DatabaseManager $dbm, CoreConfig $config) { $this->_config = $config; $this->_dbm = $dbm; return $this; }
    public function method() : string { return $this->_config->database_method(); }
    public function main_read() : DatabaseClient { return $this->_dbm->host($this->_config->database_main_read())->client(); }
    public function main_write() : DatabaseClient { return $this->_dbm->host($this->_config->database_main_write())->client(); }
    public function sub1_read() : DatabaseClient { return $this->_dbm->host($this->_config->database_sub1_read())->client(); }
    public function sub1_write() : DatabaseClient { return $this->_dbm->host($this->_config->database_sub1_write())->client(); }
    public function sub2_read() : DatabaseClient { return $this->_dbm->host($this->_config->database_sub2_read())->client(); }
    public function sub2_write() : DatabaseClient { return $this->_dbm->host($this->_config->database_sub2_write())->client(); }
    public function sub3_read() : DatabaseClient { return $this->_dbm->host($this->_config->database_sub3_read())->client(); }
    public function sub3_write() : DatabaseClient { return $this->_dbm->host($this->_config->database_sub3_write())->client(); }
    public function sub4_read() : DatabaseClient { return $this->_dbm->host($this->_config->database_sub4_read())->client(); }
    public function sub4_write() : DatabaseClient { return $this->_dbm->host($this->_config->database_sub4_write())->client(); }
    public function sub5_read() : DatabaseClient { return $this->_dbm->host($this->_config->database_sub5_read())->client(); }
    public function sub5_write() : DatabaseClient { return $this->_dbm->host($this->_config->database_sub5_write())->client(); }
}
