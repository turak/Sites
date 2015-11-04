<?php
session_destroy();
session_start();
unset($_SESSION['auth']);
$_SESSION['flash']['success'] = "Vous etes deconnecte";
header('Location: login.php');

?>