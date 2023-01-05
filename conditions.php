<?php session_start();
var_dump($_SESSION);
if (!isset($_SESSION['project']['nature'])) {
    header('location: ./nature_property.php');
    exit;
}
?>



<?php require("../courtier/componants/header.php"); ?>
<br>

<div class="card text-center">
    <div class="card-header bg-warning">
        <h2> Il s'agit d'un bien <h2>
    </div>
    <div class="card-body">
        <div class="js_speak_projet">

            <form method="POST" action="./settings/form_back.php">
                <div class="main-container">
                    <div class="radio-buttons">
                        <label class="custom-radio">
                            <input type="radio" required="required" name="conditions" value="neuf" />
                            <span class="radio-btn"><i class="las la-check"></i>
                                <div class="hobbies-icon">
                                    <h3>Neuf </h3>
                                </div>
                            </span>
                        </label>
                        <label class="custom-radio">
                            <input type="radio" required="required" name="conditions" value="ancien" />
                            <span class="radio-btn"><i class="las la-check"></i>
                                <div class="hobbies-icon">
                                    <h3>Ancien</h3>
                                </div>
                            </span>
                        </label>
                        <label class="custom-radio">
                            <input type="radio" required="required" name="conditions" value="Construire" />
                            <span class="radio-btn"><i class="las la-check"></i>
                                <div class="hobbies-icon">
                                    <h3>Vente sur plan</h3>
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
            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">25%</div>
        </div>
    </div>

</div>

<br>
<?php require("../courtier/componants/footer.php"); ?>