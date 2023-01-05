<?php session_start();
var_dump($_SESSION);
?>


<?php require("../courtier/componants/header.php"); ?>
<br>

<div class="card text-center">
    <div class="card-header bg-warning">
        <h2> Quel sera l'usage de ce bien ?<h2>
    </div>
    <div class="card-body">
        <div class="js_speak_projet">

            <form method="POST" action="./settings/form_back.php">
                <div class="main-container">
                    <div class="radio-buttons">
                        <label class="custom-radio">
                            <input type="radio" required="required" name="usages" value="résidence principale" />
                            <span class="radio-btn"><i class="las la-check"></i>
                                <div class="hobbies-icon">
                                    <h3>Résidence principale</h3>
                                </div>
                            </span>
                        </label>
                        <label class="custom-radio">
                            <input type="radio" required="required" name="usages" value="résidence secondaire" />
                            <span class="radio-btn"><i class="las la-check"></i>
                                <div class="hobbies-icon">
                                    <h3>Résidence secondaire</h3>
                                </div>
                            </span>
                        </label>
                        <label class="custom-radio">
                            <input type="radio" required="required" name="usages" value="investissement locatif" />
                            <span class="radio-btn"><i class="las la-check"></i>
                                <div class="hobbies-icon">
                                    <h3>Investissement locatif</h3>
                                </div>
                            </span>
                        </label>
                        <label class="custom-radio">
                            <input type="radio" required="required" name="usages" value="usage professionnel ou commercial" />
                            <span class="radio-btn"><i class="las la-check"></i>
                                <div class="hobbies-icon">

                                    <h3>Usage professionnel ou commercial</h3>
                                </div>
                            </span>
                        </label>
                        <label class="custom-radio">
                            <input type="radio" required="required" name="usages" value="usage mixte du bien" />
                            <span class="radio-btn"><i class="las la-check"></i>
                                <div class="hobbies-icon">

                                    <h3>Usage mixte du bien</h3>
                                </div>
                            </span>
                        </label>
                    </div>
                </div>
        </div>




        <input type="submit" class="btn btn-primary " style="width: 250px;" value="Suivant" name="next">
    </div>
    </form>
    <div class="card-footer text-muted">
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">35%</div>
        </div>
    </div>

</div>


<br>
<?php require("../courtier/componants/footer.php"); ?>