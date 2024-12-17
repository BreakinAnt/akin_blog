<?php
class Database {
    private $connection, $query;

    public function __construct()
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
    }

    public function raw($query)
    {
        return $this->execute($this->query = $query);
    }

    public function from($model)
    {
        $this->query = $this->query."from $model";

        return $this;
    }


    public function where($field, $condition, $hay)
    {
        $this->query = $this->getQuery()." where $field $condition $hay";

        return $this;
    }

    public function get($fields = "*")
    {
        $this->query = "select $fields ".$this->getQuery();

        return $this->execute();

    }

    private function getQuery()
    {
        return $this->query;
    }

    private function execute()
    {
        $statement = $this->connection->prepare($this->getQuery());
        $statement->execute();
        return $statement->fetchAll();
    }
}