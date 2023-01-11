<?php
require("includes/header_connexion.php");
?>
<br><br>
<?php if (isset($_GET['error']) && $_GET['error'] == 'champs') { ?>
<p class="error">Veuillez remplir tous les champs</p>
<?php } else if (isset($_GET['error']) && $_GET['error'] == 'user') { ?>
<p class="error">Le compte rentré existe déjà</p>
<?php } ?>
<div class="container">
    <form action="actions/inscription_back.php" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prénom</label>
            <input type="text" class="form-control" name="first_name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" class="form-control" name="last_name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Adresse mail</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="password">
        </div>

        <?php if (isset($_GET['error']) && $_GET['error'] == 'password') { ?>
        <p class="error">Les mots de passe ne correspondent pas</p>
        <?php } ?>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Vérifier votre mot de passe</label>
            <input type="password" class="form-control" name="password_c">
        </div>

        <button type="submit" class="btn btn-primary" name="validate">S'inscrire</button>
    </form>
</div>




<?php require("includes/footer_connexion.php"); ?>