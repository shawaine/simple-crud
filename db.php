<?php

if (!isset($_SESSION['user'])) {
    session_start();
}

class DB
{
    protected $host = 'localhost';
    protected $dbname = 'simple-crud';
    protected $user = 'root';
    protected $pass = '';
    protected $conn;

    function __construct()
    {
        // set DSN
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        // creating PDO instance
        $this->conn = new PDO($dsn, $this->user, $this->pass);
        // some configuration for PDO
        $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
}
