<?php session_start();
var_dump($_SESSION);
?>


<?php require("../courtier/componants/header.php"); ?>
<br>

<div class="card text-center">
    <div class="card-header bg-warning">
        <h2> Précisons le type de bien<h2>
    </div>
    <div class="card-body">
        <div class="js_speak_projet">

            <form method="POST" action="./settings/form_back.php">
                <div class="main-container">
                    <div class="radio-buttons">
                        <label class="custom-radio">
                            <input type="radio" required="required" name="loan_mode" value="Seul(e)" />
                            <span class="radio-btn"><i class="las la-check"></i>
                                <div class="hobbies-icon">
                                    <h3>Seul(e)</h3>
                                </div>
                            </span>
                        </label>
                        <label class="custom-radio">
                            <input type="radio" required="required" name="loan_mode" value="Avec un co-emprunteur" />
                            <span class="radio-btn"><i class="las la-check"></i>
                                <div class="hobbies-icon">
                                    <h3>Avec un co-emprunteur</h3>
                                </div>
                            </span>
                        </label>
                        <label class="custom-radio">
                            <input type="radio" required="required" name="loan_mode" value="Dans le cadre d'une S.C.I" />
                            <span class="radio-btn"><i class="las la-check"></i>
                                <div class="hobbies-icon">
                                    <h3>Dans le cadre d'une S.C.I</h3>
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
            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">75%</div>
        </div>
    </div>

</div>

<br>


<?php require("../courtier/componants/footer.php"); ?>