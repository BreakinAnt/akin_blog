<?php
namespace App\Models;

use App\Database;

class Model {
    protected $table, $db, $attributes;
    public $id;

    public function __construct($attributes = []) 
    {
        $this->db = (new Database())->from($this->getTable());
        $this->table = $this->getTable();
        $this->setAttributes($attributes);
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

    public function where($column, $value, $comparator = '='): static|Model
    {
        $this->db->where($column, $comparator, $value);
        return $this;
    }

    public function get(): Array
    {
        $data = $this->db->get();
        $list = [];
        foreach($data as $model) {
            $this->setAttributes($model);
            array_push($list, $model);
        }

        return $list;
    }

    public function first(): static|Model
    {
        $data = $this->db->get()[0];
        $this->setAttributes($data);
        return $this;
    }

    public function save(): static|Model
    {
        if (isset($this->id)) {
            //TODO: update logic
            return $this;
        } else {
            $result = $this->db->insert($this->table, $this->attributes);
            $this->id = $result;

            return $this;
        }
    }

    private function setAttributes($attributes): void
    {
        foreach($attributes as $key => $value) {
            if (property_exists($this, $key)){
                $this->attributes[$key] = $value;
                $this->$key = $value;
            }
        }
    }
    
    protected function belongsTo($related, $foreignKey = null, $localKey = 'id'): static|Model
    {
        $related = new $related();
        $foreignKey = $foreignKey ?? strtolower((new \ReflectionClass($related))->getShortName()).'_id';

        return $related->where($localKey, $this->$foreignKey);
    }
}