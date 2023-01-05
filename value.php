<?php session_start();
var_dump($_SESSION); ?>



<?php require("../courtier/componants/header.php"); ?>
<br>
<div class="card text-center">
    <div class="card-header bg-warning">
        <h2> Définissons ensemble le montant de votre projet<h2>
    </div>
    <div class="card-body">
        <div class="js_speak_projet">

            <form method="POST" action="./settings/form_back.php">
                <div class="main-container">
                    <div class="radio-buttons">
                        <div class="input-group mb-3">
                            <span class="input-group-text">€</span>
                            <input type="text" required="required" required="required" class="form-control" name="value_property" placeholder=" Montant de l'acquisition" aria-label="Amount (to the nearest dollar)">
                            <span class="input-group-text">.00</span>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">€</span>
                            <input type="text" required="required" required="required" class="form-control" name="value_works" placeholder="Travaux estimé" aria-label="Amount (to the nearest dollar)">
                            <span class="input-group-text">.00</span>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">€</span>
                            <input type="text" required="required" required="required" class="form-control" name="personal_contribution" placeholder="Apport personnel" aria-label="Amount (to the nearest dollar)">
                            <span class="input-group-text">.00</span>
                        </div>

                    </div>
                </div>
        </div>




        <input type="submit" class="btn btn-primary " style="width: 250px;" value="Suivant" name="next">
    </div>
    </form>
    <div class="card-footer text-muted">
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">65%</div>
        </div>
    </div>

</div>

<br>
<?php require("../courtier/componants/footer.php"); ?>