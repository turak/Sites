<?php include_once 'inc/header.php';?>
<?php include_once 'inc/db.php';?>

<?php

if(!empty($_POST)){

    $errors = array();

    if(empty($_POST['Username']) || !preg_match('/^[a-zA-Z0-9_]+$/',$_POST['Username'])){
        $errors['Username'] = "Vous n'avez pas entrer de pseudo";
    }
    if(empty($_POST['Email']) || !filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)){
        $errors['Email'] = "Votre email n'est pas valide";
    }
    if(empty($_POST['Password']) || $_POST['Password'] != $_POST['Password_confirm']) {
        $errors['Password'] = "Vous devez rentrer un mot de passe valide";
    }

    if(empty($errors)) {
        $req = $pdo->prepare("INSERT INTO users SET username = ?, password = ?, email = ?");
        $password = password_hash($_POST['Password'], PASSWORD_BCRYPT);
        $req->execute([$_POST['Username'], $password, $_POST['Email']]);
        die('Notre compte a bien ete cree');
    }


}

?>

<!--<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>CodePen - Login</title>
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
-->
<div class="container1" xmlns="http://www.w3.org/1999/html">

    <div id="login">

        <form action="" method="POST">

            <fieldset class="clearfix">

                <p><span class="fa fa-user"></span><input type="text" name="Username"  /></p> <!-- JS because of IE support; better: placeholder="Username" -->
                <p><span class="fa fa-envelope"></span><input type="text" name="Email"  /></p> <!-- JS because of IE support; better: placeholder="Username" -->
                <p><span class="fa fa-lock"></span><input type="password"  name="Password"  /></p> <!-- JS because of IE support; better: placeholder="Password" -->
                <p><span class="fa fa-lock"></span><input type="password"  name="Password_confirm"   /></p> <!-- JS because of IE support; better: placeholder="Password" -->

                <p><button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Sign In</button></p>

            </fieldset>

        </form>

        <p>Not a member? <a href="#">Sign up now</a><span class="fa fa-arrow-right"></span></p>

    </div> <!-- end login -->

</div>

<?php include_once 'inc/footer.php'; ?>