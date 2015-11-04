<?
if (session_status() == PHP_SESSION_NONE){
    session_start();
}

require_once 'inc/bootstrap.php';
require_once 'inc/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Mon projet</title>

    <!-- Bootstrap core CSS -->
    <link href="css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </head>

  <body>

    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Mon Projet</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <?php if (isset($_SESSION['auth'])): ?>
              <li><a href="#">Mon compte</a></li>
              <li><a href="logout.php">Se deconnecter</a></li>
            <?php else: ?>
              <li><a href="login.php">Se connecter</a></li>
             <?php endif; ?>
            <li><a href="contact.php">Contact</a></li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
<?php if (isset($_SESSION['flash'])): ?>
    <? foreach($_SESSION['flash'] as $type => $message): ?>
        <div class="alert alert-<?= $type; ?>">
            <?= $message; ?>
        </div>
    <? endforeach;
  unset($_SESSION['flash']); ?>
    
<? endif; ?>
