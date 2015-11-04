<?php

$dbname = "ultimegu";
$server = "la18075-001.privatesql.ha.ovh.net";
$port = "35232";
$username = "aurelien";
$password = "United62";

$pdo = new PDO('mysql:host='.$server.';port='.$port.';dbname='.$dbname,$username,$password);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);




