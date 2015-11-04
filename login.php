<?php
include_once 'inc/bootstrap.php';

$db = App::getDatabase();
if(!empty($_POST) && !empty($_POST['Username']) && !empty($_POST['Password'])){
    $user = $db->query('SELECT * FROM users WHERE username = :username',['username' => $_POST['Username']] )->fetch();
    if(password_verify($_POST['Password'], $user->password)){
        session_start();
        $_SESSION['auth'] = $user;
        $_SESSION['flash']['success'] = 'Vous êtes maintenant connecté';
       header('Location: index.php');
       exit();
   }else{
       $_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrecte';

  }
}

?>

<?php include_once 'inc/header.php';?>

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

        <form action="login.php" method="POST">

          <fieldset class="clearfix">

            <p><span class="fa fa-user"></span><input type="text" name="Username" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fa fa-lock"></span><input type="password"  name="Password" value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p><button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Sign In</button></p>

          </fieldset>

        </form>

        <p>Not a member? <a href="#">Sign up now</a><span class="fa fa-arrow-right"></span></p>

      </div> <!-- end login -->

    </div>

  </body>
</html>

</body>

</html>
