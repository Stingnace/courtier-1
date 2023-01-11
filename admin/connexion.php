<?php
session_start();
require("includes/header_connexion.php");
?>
<br><br>

<?php if (isset($_GET['success']) && $_GET['success'] == "inscrit") { ?>
<p class="success">Vous êtes bien inscrit, vous pouvez maintenant vous connecter</p>
<?php } else if (!empty($_GET['error']) && $_GET['error'] == "password") { ?>
<p class="error">Mot de passe incorrect</p>
<?php } ?>

<div class="container">
    <form action="actions/connexion_back.php" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Adresse mail</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="password">
        </div>

        <button type="submit" class="btn btn-primary" name="validate">Se connecter</button>
    </form>
</div>



<?php require("includes/footer_connexion.php"); ?>