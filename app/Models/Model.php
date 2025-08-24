<?php
namespace App\Models;

use App\Database;

class Model {
    protected $table, $db;

    public function __construct() 
    {
        $this->db = (new Database())->from($this->getTable());
        $this->table = $this->getTable();
    }

    public function getTable(): String
    {
        return $this->table ?? strtolower((new \ReflectionClass(static::class))->getShortName()).'s';
    }

    public static function all(): Array
    {
        $instance = new static();
        $instance->getTable();

        return db()->from($instance->getTable())->get();
    }

    public function where($column, $value, $comparator = '='): Model
    {
        $this->db->where($column, $comparator, $value);
        return $this;
    }

    public function first(): Model
    {
        $data = $this->db->get()[0];
        $this->setAttributes($data);
        return $this;
    }

    private function setAttributes($attributes): void
    {
        foreach($attributes as $key => $value) {
            if (property_exists($this, $key)){
                $this->$key = $value;
            }
        }
    }
    
    protected function belongsTo($related, $foreignKey = null, $localKey = 'id'): Model
    {
        $related = new $related();
        $foreignKey = $foreignKey ?? strtolower((new \ReflectionClass($related))->getShortName()).'_id';

        return $related->where($localKey, $this->$foreignKey)->first();
    }
}