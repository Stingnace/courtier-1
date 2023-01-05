<?php session_start();
var_dump($_SESSION); ?>



<?php require("../courtier/componants/header.php"); ?>
<br>

<div class="card text-center">
    <div class="card-header bg-warning">
        <h2> Où se situe votre futur bien ?<h2>
    </div>
    <div class="card-body">
        <div class="js_speak_projet">

            <form method="POST" action="./settings/form_back.php">
                <div class="main-container">
                    <div class="radio-buttons">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Ville</span>
                            <input type="text" required="required" class="form-control" name="location_future_property" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <select class="form-select" name="location_future_property2" aria-label="Default select example">
                            <option selected>Code postal</option>
                            <option value="57000">57000</option>
                            <option value="54000">54000</option>
                            <option value="55000">55000</option>
                        </select>
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