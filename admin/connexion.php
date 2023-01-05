<?php
require("includes/header_connexion.php");

?>

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

<div class="container">
    <div class="frame">
        <div class="nav">
            <ul class"links">
                <li class="signin-active"><a class="btn">Connexion</a></li>
            </ul>
        </div>
        <div ng-app ng-init="checked = false">
            <form class="form-signin" action="" method="post" name="form">
                <label for="username">Email</label>
                <input class="form-styling" type="text" name="username" p />
                <label for="password">Mot de passe</label>
                <input class="form-styling" type="text" name="password" />

                <div class="btn-animate">
                    <a class="btn-signin">Se connecter</a>
                </div>
            </form>


            <?php require("includes/footer_connexion.php"); ?>