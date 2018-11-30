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
        //insert into %s (%s) values (%s)

        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            'one', 'two', 'three'
        );

        die(var_dump($sql));
        
        // insert into names (names, email) values (:name, :email)
        $statement->execute(['name' => 'Joe', 'email' => 'joe@example.com']);

        // $statement = $this->pdo->prepare("insert * into {$table}");
        // $statement->execute();

        // return $statement->fetchAll(PDO::FETCH_CLASS);
    }

}

