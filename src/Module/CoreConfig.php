<?php declare(strict_types=1);
namespace PazerApp\Core\Module;
class CoreConfig {
    protected array $_data;
    public function __construct() { return $this->clear(); }
    public function clear() : self {
        $this->_data = array(
            "database_method" => "pz",
            "database_main_read" => "main1r",
            "database_main_write" => "main1w",
            "database_sub1_read" => "sub1r",
            "database_sub1_write" => "sub1w",
            "database_sub2_read" => "sub2r",
            "database_sub2_write" => "sub2w",
            "database_sub3_read" => "sub3r",
            "database_sub3_write" => "sub3w",
            "database_sub4_read" => "sub4r",
            "database_sub4_write" => "sub4w",
            "database_sub5_read" => "sub5r",
            "database_sub5_write" => "sub5w",
        );
        return $this;
    }
    public function vars(string $name, $value = null) { if($value) $this->_data[$name] = $value; return $this->_data[$name]; }
    public function database_method(string $value = null) : string { return $this->vars(__FUNCTION__, $value); }
    public function database_main_read(string $value = null) : string { return $this->vars(__FUNCTION__, $value); }
    public function database_main_write(string $value = null) : string { return $this->vars(__FUNCTION__, $value); }
    public function database_sub1_read(string $value = null) : string { return $this->vars(__FUNCTION__, $value); }
    public function database_sub1_write(string $value = null) : string { return $this->vars(__FUNCTION__, $value); }
    public function database_sub2_read(string $value = null) : string { return $this->vars(__FUNCTION__, $value); }
    public function database_sub2_write(string $value = null) : string { return $this->vars(__FUNCTION__, $value); }
    public function database_sub3_read(string $value = null) : string { return $this->vars(__FUNCTION__, $value); }
    public function database_sub3_write(string $value = null) : string { return $this->vars(__FUNCTION__, $value); }
    public function database_sub4_read(string $value = null) : string { return $this->vars(__FUNCTION__, $value); }
    public function database_sub4_write(string $value = null) : string { return $this->vars(__FUNCTION__, $value); }
    public function database_sub5_read(string $value = null) : string { return $this->vars(__FUNCTION__, $value); }
    public function database_sub5_write(string $value = null) : string { return $this->vars(__FUNCTION__, $value); }
    public function toArray() : array { return $this->_data; }
    public function toJSON() : string { return json_encode($this->_data, 256); }
}
