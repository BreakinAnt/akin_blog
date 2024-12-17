<?php
class Database {
    private $connection, $query, $fields;

    public function __construct($config)
    {
        $this->connection = new PDO(
            "mysql:host={$config['database']['host']};port={$config['database']['port']};dbname={$config['database']['name']};charset={$config['database']['charset']}", 
            $config['database']['user'], 
            $config['database']['password'], 
            [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
        );
        $this->query = "";
        $this->fields = [];
    }

    public function raw($query, $fields)
    {
        $this->query = $query;
        return $this->execute($fields);
    }

    public function from($model)
    {
        $this->query = $this->getQuery()."from $model";

        return $this;
    }


    public function where($field, $condition, $value)
    {
        $this->addFields([$field => $value]);

        $command = strpos($this->getQuery(), "where") ? "and" : "where";
        $this->query = $this->getQuery()." $command $field $condition {$this->setVariables([$field => $value])}";

        return $this;
    }

    public function insert($model, Array $data)
    {
        $fields = implode(",",array_keys($data));
        $this->addFields($data);
        $this->query = "insert into $model($fields) values({$this->setVariables($data)})";

        return $this->execute($this->fields);
    }

    public function get($fields = "*")
    {
        $this->query = "select $fields ".$this->getQuery();

        return $this->execute();

    }

    public function getOrFail($fields = "*")
    {
        $data = $this->get($fields);

        if(!isset($data[0])){
            abort(404);
        }

        return $data;
    }

    private function addFields(Array $data)
    {
        foreach($data as $field=>$value){
            $this->fields = array_merge($this->fields, ["$field"."_{$this->formatValueString($value)}" => $value]);
        }
    }

    private function formatValueString($string)
    {
        return  preg_replace('/[^A-Za-z0-9\-]/', '',substr(str_replace(' ', '_', $string), -5));
    }

    private function setVariables($data)
    {
        $query = "";
        foreach($data as $field=>$value){
            $query .= ":$field"."_{$this->formatValueString($value)}";
            if ($field != array_key_last($data)) {
                $query .= ", ";
            }
        }
        return $query;
    }

    private function getQuery()
    {
        return $this->query;
    }

    private function execute($fields = [])
    {
        $statement = $this->connection->prepare($this->getQuery());
        $statement->execute($fields);
        $this->query = '';
        return $statement->fetchAll();
    }
}