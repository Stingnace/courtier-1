<?php session_start();
var_dump($_SESSION);
?>


<?php require("../courtier/componants/header.php"); ?>
<br>
<div class="card text-center">
    <div class="card-header bg-warning">
        <h2> Votre situation<h2>
    </div>
    <div class="card-body">
        <div class="js_speak_projet">

            <form method="POST" action="./settings/form_back.php">
                <div class="main-container">
                    <div class="radio-buttons">
                        <label class="custom-radio">
                            <input type="radio" required="required" name="situation_current_home" value="propriétaire" />
                            <span class="radio-btn"><i class="las la-check"></i>
                                <div class="hobbies-icon">
                                    <h3>Propriétaire</h3>
                                </div>
                            </span>
                        </label>
                        <label class="custom-radio">
                            <input type="radio" required="required" name="situation_current_home" value="Locataire" />
                            <span class="radio-btn"><i class="las la-check"></i>
                                <div class="hobbies-icon">
                                    <h3>Locataire</h3>
                                </div>
                            </span>
                        </label>
                        <label class="custom-radio">
                            <input type="radio" required="required" name="situation_current_home" value="hébérgé à titre gratuit" />
                            <span class="radio-btn"><i class="las la-check"></i>
                                <div class="hobbies-icon">
                                    <h3>Hébérgé à titre gratuit</h3>
                                </div>
                            </span>
                        </label>
                        <label class="custom-radio">
                            <input type="radio" required="required" name="situation_current_home" value="logement de fonction" />
                            <span class="radio-btn"><i class="las la-check"></i>
                                <div class="hobbies-icon">

                                    <h3>Logement de fonction</h3>
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
            <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">55%</div>
        </div>
    </div>

</div>

<br>
<?php require("../courtier/componants/footer.php"); ?>