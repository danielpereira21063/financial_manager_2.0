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

        //teste
        $this->getConnection();
    }

    public function getConnection()
    {
        $dsn = 'mysql:';
        $dsn .= "host=$this->hostname;";
        $dsn .= "dbname=$this->dbname;"; 
        $dsn .= "port=$this->port";

        echo $dsn;

        try {
            $this->connection = new PDO($dsn, $this->username, $this->password);
        } catch (Exception $ex) {
            echo '<h3>' . $ex->getMessage() . '</h3>';
        }

    }
}
