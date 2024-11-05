<?php declare(strict_types=1);
namespace PazerApp\Core;
use PazerApp\Core\Module\CoreConfig;
use PazerApp\Core\Module\CoreDatabaseConfig;
use PazerApp\Core\Module\CoreDatabaseManager;
use PazerApp\Core\Module\CoreJsonForm;
use PazerApp\DatabaseManager\DatabaseManager;
use PazerApp\EasyFunction\EasyFunction;
class Core {
    protected EasyFunction $_func;
    protected DatabaseManager $_dbm;
    protected CoreDatabaseConfig $_database_config;
    protected CoreDatabaseManager $_dbms;
    protected CoreConfig $_config;
    public function __construct() { return $this->clear(); }
    public function clear() : self {
        $this->_config = new CoreConfig();
        $this->_func = new EasyFunction();
        $this->_dbm = new DatabaseManager();
        $this->_database_config = new CoreDatabaseConfig($this->_dbm, $this->_config);
        $this->_dbms = new CoreDatabaseManager($this->_dbm, $this->_config);
        return $this;
    }
    public function config() : CoreConfig { return $this->_config; }
    public function func() : EasyFunction { return $this->_func; }
    public function host() : CoreDatabaseConfig { return $this->_database_config; }
    public function manager() : CoreDatabaseManager { return $this->_dbms; }
    public function jsonForm(bool $start = false) : CoreJsonForm { return new CoreJsonForm($this->_func, $start); }
}
