<?php
session_start();
if (!empty($_SESSION) && $_SESSION['id'] == '2' && $_SESSION['email'] == "anthonydafonseca@yahoo.fr") {
    require("includes/header_admin.php");
    require('../componants/function.php');
    require("includes/wrapper.php");
    $admin = GetAdmin($bdd);

?>

</aside>

<div class="carte_admin">
    <h2>Mon profil </h2>
    <div class="profil">
        <div class="profil_item1">
            <img src="imgs/icons8-invité-homme-100.png" alt="">
        </div>
        <div class="profil_item2">
            <h3>Mes informations personnelles</h3>
            <p>Nom : <?= $admin['last_name'] ?></p>
            <p>Prenom : <?= $admin['first_name'] ?> </p>
            <p>email : <?= $admin['email'] ?> </p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Modifier mes informations
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Mes informations</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="actions/modif_profil.php?id=<?= $admin['id'] ?>" method="POST">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Nom</span>
                                    <input type="text" name="last_name" class="form-control"
                                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                        value="<?= $admin['last_name'] ?>">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Prénom</span>
                                    <input type="text" name="first_name" class="form-control"
                                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                        value="<?= $admin['first_name'] ?>">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Mail</span>
                                    <input type="text" name="email" class="form-control"
                                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                        value="<?= $admin['email'] ?>">
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            <button type="sumbit" class="btn btn-primary">Sauvegarder</button>
                        </div>
                        </form>

                    </div>

                </div>
            </div>

        </div>
        <div class="profil_item3">
            <h3>Sécurité</h3>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal"
                data-bs-target="#exampleModal2">
                Changer le mot de passe
            </button>

            <!-- Modal -->
            <div class="modal fade " id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Mot de passe</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="actions/modif_securité.php?id=<?= $admin['id'] ?>" method="POST">

                                <label for="floatingPassword">Nouveau mot de passe</label>
                                <input type="password" class="form-control" id="floatingPassword" name="new_password">
                                <label for="floatingPassword">Confirmer le nouveau mot de passe</label>
                                <input type="password" class="form-control" id="floatingPassword" name="new_password_c">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary" name="validate">Enregistrer</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <br>

            <?php if (isset($_GET['success']) && $_GET['success'] == "mdp") { ?>
            <p class="success">Nouveau mot de passe enregistré ! </p>
            <?php } else if (isset($_GET['error']) && $_GET['error'] == "password") { ?>
            <p class="error">Veuillez vérifier le mot de passe</p>
            <?php } ?>

        </div>

    </div>
</div>




<?php
} else {
    header("location: ../real_estate.php");
}
require("includes/footer_admin.php") ?>