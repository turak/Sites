<?php

$dbname = "";
$server = "";
$port = "";
$username = "";
$password = "";

$pdo = new PDO('mysql:host='.$server.';port='.$port.';dbname='.$dbname,$username,$password);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);




