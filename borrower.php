<?php session_start();
var_dump($_SESSION);
?>



<?php require("../courtier/componants/header.php"); ?>
<br>
<div class="card text-center">
    <div class="card-header bg-warning">
        <h2> Pour mieux vous connaître <h2>
    </div>
    <div class="js_speak_projet">
        <form method="POST" action="./settings/form_back.php">
            <div class="main-container">

                <div class="radio-buttons">
                    <div class="js_logo_borrower">
                        <i class="bi bi-person"></i>EMPRUNTEUR
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon3">Situation professionnelle</span>
                            <select class="form-select" required="required" name="situation_professional" aria-label="Default select example">
                                <option value="Employé">Employé</option>
                                <option value="Ouvrier">Ouvrier</option>
                                <option value="Cadre">Cadre</option>
                                <option value="Fonctionnaire">Fonctionnaire</option>
                                <option value="Enseignant">Enseignant</option>
                                <option value="Artisan">Artisan</option>
                                <option value="Chef d'entreprise">Chef d'entreprise</option>
                                <option value="Profession libérale">Profession libérale</option>
                                <option value="Travailleur indépendant">Travailleur indépendant</option>
                                <option value="Congé parental">Congé parental</option>
                                <option value="Intermittent du spectale">Intermittent du spectale</option>
                                <option value="Agriculteur">Agriculteur</option>
                                <option value="Retraité">Retraité</option>
                                <option value="Sans profession">Sans profession</option>
                                <option value="Recherche d'emploi">Recherche d'emploi</option>
                                <option value="Etudiant">Etudiant</option>
                                <option value="Autre">Autre</option>

                            </select>
                        </div>

                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon3">Contrat de travail</span>
                            <select class="form-select" required="required" name="situation_contract" aria-label="Default select example">
                                <option value="CDI">CDI</option>
                                <option value="CDI (période d'essai)">CDI (période d'essai)</option>
                                <option value="CDD">CDD</option>
                                <option value="Intérim">Intérim</option>
                                <option value="Autre">Autre</option>



                            </select>
                        </div>

                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon3">Vous occupez votre poste actuel depuis</span>
                            <input type="date" name="duration_contract">
                        </div>

                    </div>

                </div>
            </div>




            <input type="submit" class="btn btn-primary " style="width: 250px;" value="Suivant" name="next">
    </div>

    </form>
    <div class="card-footer text-muted">
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">80%</div>
        </div>
    </div>
</div>
</div>
<br>
<?php require("../courtier/componants/footer.php"); ?>