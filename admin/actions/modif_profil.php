<?php
require("../../settings/settings.php");
$modif_profil = $bdd->prepare('UPDATE admin SET last_name=?, first_name=? WHERE id= ?');
$modif_profil->execute([$_POST['last_name'], $_POST['first_name'], $_GET['id']]);
header("location: ../profil_admin.php?success=modif");