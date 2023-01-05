<?php session_start();
var_dump($_SESSION);
?>



<?php require("../courtier/componants/header.php"); ?>
<br>
<div class="card text-center">
    <div class="card-header bg-warning">
        <h2> Où en êtes-vous dans votre projet ?<h2>
    </div>
    <div class="js_speak_projet">

        <form method="POST" action="./settings/form_back.php">
            <div class="main-container">
                <div class="radio-buttons">
                    <label class="custom-radio">
                        <input type="radio" required="required" name="search_situation" value="Je recherche encore un bien" />
                        <span class="radio-btn"><i class="las la-check"></i>
                            <div class="hobbies-icon">
                                <h3>Je recherche encore un bien</h3>
                            </div>
                        </span>
                    </label>
                    <label class="custom-radio">
                        <input type="radio" required="required" name="search_situation" value="j'ai trouve et pense faire une offre" />
                        <span class="radio-btn"><i class="las la-check"></i>
                            <div class="hobbies-icon">
                                <h3>J'ai trouve et pense faire une offre</h3>
                            </div>
                        </span>
                    </label>
                    <label class="custom-radio">
                        <input type="radio" required="required" name="search_situation" value="j'ai fait une offre au vendeur" />
                        <span class="radio-btn"><i class="las la-check"></i>
                            <div class="hobbies-icon">
                                <h3>J'ai fait une offre au vendeur</h3>
                            </div>
                        </span>
                    </label>
                    <label class="custom-radio">
                        <input type="radio" required="required" name="search_situation" value="je pense signer bientôt un compromis" />
                        <span class="radio-btn"><i class="las la-check"></i>
                            <div class="hobbies-icon">

                                <h3>Je pense signer bientôt un compromis</h3>
                            </div>
                        </span>
                    </label>
                    <label class="custom-radio">
                        <input type="radio" required="required" name="search_situation" value="J'ai signé un compromis" />
                        <span class="radio-btn"><i class="las la-check"></i>
                            <div class="hobbies-icon">

                                <h3>J'ai signé un compromis</h3>
                            </div>
                        </span>
                    </label>

                </div>
            </div>





            <input type="submit" class="btn btn-primary " style="width: 250px;" value="Suivant" name="next">
    </div>

    </form>
    <div class="card-footer text-muted">
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">45%</div>
        </div>
    </div>
</div>
</div>
<br>
<?php require("../courtier/componants/footer.php"); ?>