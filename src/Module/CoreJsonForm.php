<?php declare(strict_types=1);
namespace PazerApp\Core\Module;
use PazerApp\EasyFunction\EasyFunction;
class CoreJsonForm {
    protected array $_data;
    protected array $_time;
    protected bool $_auto;
    protected EasyFunction $_func;
    public function __construct(EasyFunction $func, bool $auto) {
        $this->_func = $func;
        $this->_auto = $auto;
        return $this->clear();
    }
    public function clear() : self {
        $this->_data = array("execute" => false, "code" => 0);
        $this->_time = array("time_start" => 0, "time_end" => 0, "time_run" => 0);
        if($this->_auto) { $this->time_start(); }
        return $this;
    }
    public function func() : EasyFunction { return $this->_func; }
    public function headerJSON() : self { $this->_func->headerJSON(); return $this; }
    public function vars(string $name, $value) : self { if($value) $this->_data[$name] = $value; return $this; }
    public function execute(bool $value) : self { return $this->vars(__FUNCTION__, $value); }
    public function code(int $value) : self { return $this->vars(__FUNCTION__, $value); }
    public function message(string $value) : self { return $this->vars(__FUNCTION__, $value); }
    public function data(array $value) : self { return $this->vars(__FUNCTION__, $value); }
    public function time_start() : self { $this->_time["time_start"] = microtime(true); return $this; }
    public function time_end() : self {
        $this->_time["time_end"] = microtime(true);
        $this->_time["time_run"] = $this->_time['time_end'] - $this->_time['time_start'];
        return $this;
    }
    public function time_add() : self {
        $this->_data['time_start'] = round($this->_time['time_start'], 4);
        $this->_data['time_end'] = round($this->_time['time_end'], 4);
        $this->_data['time_run'] = round($this->_time['time_run'], 6);
        return $this;
    }
    public function toArray() : array { return $this->_data; }
    public function toJSON() : string { return json_encode($this->toArray(), 256); }
    public function show() : void { if($this->_auto) { $this->time_end()->time_add(); } echo $this->toJSON(); }
}
