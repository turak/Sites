<?php require 'inc/header.php'; ?>
<? require_once 'inc/db.php';?>

<h2>Nous contacter</h2>

<div class="container1">

    <div id="contact">

        <form action="login.php" method="POST">

            <fieldset class="clearfix">

                <p><span class="fa fa-user"></span><input type="text" name="Username" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
                <p><span class="fa fa-envelope"></span><input type="text"  name="Email" value="Email" onBlur="if(this.value == '') this.value = 'Email'" onFocus="if(this.value == 'Email') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
                <p><span class="fa fa-lock"></span><input type="password" name="Password" value="Username" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
                <p><span class="fa  fa-comment "></span><textarea name="Text" value="Commentaire" onBlur="if(this.value == '') this.value = 'Commentaire'" onFocus="if(this.value == 'Commentaire') this.value = ''" required>Commentaire...</textarea></p> <!-- JS because of IE support; better: placeholder="Username" -->
<!--                <p><input type="submit" value="Envoyer"><input type="reset" value="Reset"></p>-->
                <p><button type="submit" class="btn btn-success" "><i class="fa fa-check"></i>  Envoyer</button><button type="reset" class="btn btn-danger" "><i class="fa fa-ban"></i>  Reset</button> </p>

            </fieldset>

        </form>
    </div> <!-- end login -->

</div>
<?php require'inc/footer.php'; ?>
