<?php
namespace App\Models;

class Model {
    protected $table, $instance, $db;

    public function __construct() {
        $this->instance = new static();
        $this->db = db();
    }

    public function getTable()
    {
        return $this->table !== null ? $this->table : strtolower((new \ReflectionClass(static::class))->getShortName()).'s';
    }

    public static function all()
    {
        $instance = new static();
        $instance->getTable();

        return db()->from($instance->getTable())->get();
    }

    public function where($column, $value, $comparator = '=')
    {
        dd($this->instance);
        return db()->from($instance->getTable())->where($column, $comparator, $value)->get();
    }
    
}