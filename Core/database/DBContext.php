<?php

class DBContext
{
    private $hostname = null;
    private $dbname = null;
    private $username = null;
    private $password = null;
    private $port = null;
    private $connection = null;

    public function __construct()
    {
        $this->hostname = HOSTNAME;
        $this->dbname = DBNAME;
        $this->username = USERNAME;
        $this->password = PASSWORD;
        $this->port = PORT;
    }

    private function getConnection()
    {
        $dsn = 'mysql:';
        $dsn .= "host=$this->hostname;";
        $dsn .= "dbname=$this->dbname;"; 
        $dsn .= "port=$this->port";

        try {
            $this->connection = new PDO($dsn, $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            echo '<h3>' . $ex->getMessage() . '</h3>';
        }
    }


    public function query($sql, $parameters = []){
        $this->getConnection();
        $this->stmt = $this->connection->prepare($sql);
        $this->stmt->execute();
        $results = $this->stmt->fetchAll();

        var_dump($results);
    }
}