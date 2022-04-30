<?php

// ... database connection 
class Database
{

    public PDO $pdo;

    public function __construct()
    {

        try {


            $host = DB['host'];
            $user = DB['user'];
            $password = DB['password'];
            $dbname = DB['dbname'];

            $dsn = "mysql:host=$host;dbname=$dbname;charset=UTF8";

            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

            $this->pdo = new PDO($dsn, $user, $password, $options);
            // return pdo object
            return $this->pdo;
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }

    public function update($query, $params)
    {
        $statement = $this->pdo->prepare($query);
        return  $statement->execute($params);
    }

    public function query($query)
    {
        return $this->pdo->query($query);
    }


    public function delete($params, $table)
    {
        $statement =  $this->pdo->prepare("DELETE FROM $table WHERE product_id = :product_id");
        return $statement->execute($params);
    }


    public function get_row_byColumn($param, $column, $table = 'student')
    {
        $statement =  $this->query("SELECT * FROM $table WHERE $column = ?");
        $statement->execute([$param]);
        return $statement;
    }


    public function get_pairs($column1, $column2, $table)
    {
        return $this->query("SELECT $column1, $column2 FROM $table")->fetchAll(PDO::FETCH_KEY_PAIR);
    }


    public function get_rows($table, $column = 'product_id')
    {
        return $this->query("SELECT * FROM $table ORDER BY $column DESC");
    }

    public function get_row_byId($params, $table = 'products')
    {
        $statement = $this->pdo->prepare("SELECT * FROM $table WHERE product_id = :product_id");
        $statement->execute($params);
        return $statement;
    }

    public function rowCounts($table)
    {
        return  $this->query("SELECT COUNT(*) as counts FROM $table")->fetch(PDO::FETCH_ASSOC)['counts'];
    }

    public function insert_row($query, array $array)
    {
        $statement = $this->pdo->prepare($query);
        return $statement->execute($array);
    }

    public function search($query, array $params)
    {
        $statement =  $this->pdo->prepare($query);
        $statement->execute($params);
        return $statement;
    }

    public function limited_records($table)
    {
        return  $this->pdo->query("SELECT * FROM $table ORDER BY product_id DESC LIMIT 4");
    }
}
