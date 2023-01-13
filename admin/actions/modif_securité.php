<?php
require("../../settings/settings.php");

if (isset($_POST['validate'])) {
    if (!empty($_POST['new_password']) && !empty($_POST['new_password_c'])) {

        if ($_POST['new_password'] == $_POST['new_password_c']) {

            $modif_password = $bdd->prepare('UPDATE admin SET password=? WHERE id= ?');
            $modif_password->execute([password_hash($_POST['new_password'], PASSWORD_DEFAULT), $_GET['id']]);
            header("location: ../profil_admin.php?success=mdp");
        } else {
            header("location: ../profil_admin.php?error=password");
        }
    }
}





// $modif_profil = $bdd->prepare('UPDATE admin SET last_name=?, first_name=? WHERE id= ?');
// $modif_profil->execute([$_POST['last_name'], $_POST['first_name'], $_GET['id']]);
// header("location: ../profil_admin.php?success=modif");