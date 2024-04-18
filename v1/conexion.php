<?php

class Conexion
{
    private $connection;
    private $host;
    private $username;
    private $password;
    private $db;
    private $port;
    private $server;

    public function __construct()
    {
        $this->server = $_SERVER['HTTP_HOST'];
        $this->connection = null;
        $this->port = 3307; //puerto por default de mysql
        $this->db = 'EV1_BACKEND_SEC70';

        if ($this->server == 'localhost'){
            $this->username = 'EV1_BACKEND_SEC70'; //nombre BD
            $this->password = 'c11s42024'; // clave BD
        }
    }

    public function getConnection(){
        $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->db);
        mysqli_set_charset($this->connection, 'utf8');
        if (!$this->connection){
            return mysqli_connect_errno();
        }
        return $this->connection;
    }

    public function closeConnection(){
        mysqli_close($this->connection);
    }
}