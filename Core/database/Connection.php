<?php

class Connection {
    private $Hostname;
    private $Dbname;
    private $Username;
    private $Password;
    private $Port;

    public function __construct() {
        $this->Hostname = HOSTNAME;
        $this->Dbname = DBNAME;
        $this->Username = USERNAME;
        $this->Password = PASSWORD;
        $this->Port = PORT;
    } 
}