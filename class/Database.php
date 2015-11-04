<?php

class Database{

    private $pdo;

    public function __construct($login, $password, $host, $database_name, $port){
        $this->pdo = new PDO("mysql:host=$host;port=$port;dbname=$database_name",$login,$password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    }

    public function query($query, $params = []) {
        $req = $this->pdo->prepare($query);
        $req->execute($params);
        return $req;
    }
}
