<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }


    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();
        
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters)
    {
       die(var_dump(array_keys($parameters)));

        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            'one', 'two', 'three'
        );

        // die(var_dump($sql));

    }

}

