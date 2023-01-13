<?php
require("../../settings/settings.php");
if (isset($_GET['action']) &&  $_GET['action'] == "en cours" || $_GET['action'] == "complétée" || $_GET['action'] == "traitée") {
    $modif_statut = $bdd->prepare('UPDATE insurance SET statut=? WHERE id= ?');
    $modif_statut->execute([$_GET['action'], $_GET['id']]);
    header("location:../index.php?menu=immo");
} else if ($_GET['action'] == "supprimer") {
    $supprimer_demande = $bdd->prepare('DELETE FROM insurance WHERE id = ?');
    $supprimer_demande->execute([$_GET['id']]);
    header("location:../index.php?menu=immo");
}
