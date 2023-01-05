<?php session_start();
var_dump($_SESSION);
?>



<?php require("../courtier/componants/header.php"); ?>
<br>
<div class="card text-center">
    <div class="card-header bg-warning mb-3">
        <h2> Enchantés de vous rencontrer ! Vous êtes... <h2>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-warning col-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="bi bi-question-lg"></i>
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">POURQUOI AVONS-NOUS BESOIN DE CES INFORMATIONS?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Afin de pouvoir vous fournir les taux les plus justes pour votre projet, certaines informations personnelles sont indispensables, car elles permettent d’évaluer votre dossier de maniere précise.

                    100% transparent<br>
                    <a href="#">Nos engagements pour vos données personnelles</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">J'ai compris</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
    <div class="js_speak_projet">
        <form method="POST" action="./settings/form_back.php">
            <div class="main-container">

                <div class="radio-buttons">
                    <div class="js_logo_borrower">
                        <i class="bi bi-person"></i>EMPRUNTEUR
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="coordinate_borrower" value="double">

                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon3">Civilité</span>
                            <select class="form-select" required="required" name="Civility" aria-label="Default select example">
                                <option value="Monsieur">Monsieur</option>
                                <option value="Madame">Madame</option>
                            </select>
                        </div>

                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon3">Prénom</span>
                            <input type="text" class="form-control" name="first_name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>

                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon3">Nom</span>
                            <input type="text" class="form-control" name="name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>

                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon3">Situation familiale</span>
                            <select class="form-select" required="required" name="Family_situation" aria-label="Default select example">
                                <option value="Célibattaire">Célibataire</option>
                                <option value="Marié(e)">Marié(e)</option>
                                <option value="Concubin(e)">Concubin(e)</option>
                                <option value="PACS">PACS</option>
                                <option value="Divorcé(e)">Divorcé(e)</option>
                                <option value="Séparé(é)">Séparé(é)</option>
                                <option value="Veuf / Veuve">Veuf / Veuve</option>
                            </select>
                        </div>

                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon3">Nationalité</span>
                            <select class="form-select" required="required" name="Nationality" aria-label="Default select example">
                                <option value="Française">Française</option>
                                <option value="Union Européenne">Union Européenne</option>
                                <option value="Hors Union Européenne">Hors Union Européenne</option>


                            </select>
                        </div>

                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon3">Date de naissance</span>
                            <input type="date" required="required" name="birth_date">
                        </div>

                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon3">Adresse</span>
                            <input type="text" class="form-control" required="required" name="street" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>

                    </div>

                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon3">Code postal</span>
                            <input type="text" class="form-control" required="required" name="code_zippe" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>

                    </div>

                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon3">Ville</span>
                            <input type="text" class="form-control" required="required" name="town" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>

                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon3">Téléphone portable</span>
                            <input type="text" class="form-control" required="required" name="phone_number" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>

                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon3">Votre e-mail</span>
                            <input type="text" class="form-control" required="required" name="mail" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>


                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <input class="form-control" required="required" name="salary1" type="file" id="formFile">
                        </div>

                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" required="required" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Je crée un compte client auprès de XXXX <br> <a href="#"> conformément aux conditions générales</a>
                        </label>
                    </div>



                </div>

            </div>




            <input type="submit" class="btn btn-primary " style="width: 250px;" value="Suivant" name="next">
    </div>

    </form>
    <div class="card-footer text-muted">
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">90%</div>
        </div>
    </div>
</div>
</div>
<br>
<?php require("../courtier/componants/footer.php"); ?>