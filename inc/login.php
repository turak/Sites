<?php

if(!empty($_POST) && !empty($_POST['Username']) && !empty($_POST['Password'])){
    require_once 'inc/db.php';
    $req = $pdo->prepare('SELECT * FROM users WHERE username = ?');
    $req->execute('username' => $_POST['Username']);
    $user = $req->fetch();
    if($_POST['Password'] == $user->password){
        $_SESSION['auth'] = $user;
        $_SESSION['flash']['success'] = 'Vous êtes maintenant connecté';
        header('Location: index.php');
        exit();
    }else{
        $_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrecte';
    }
}

?>
