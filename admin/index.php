<?php
session_start();

if (!empty($_SESSION) && $_SESSION['id'] == '2' && $_SESSION['email'] == "anthonydafonseca@yahoo.fr") {
    require("includes/header_admin.php");
    require('../componants/function.php');
    // FONCTIONS POUR OBTENIR LES 3 DERNIERES DEMANDES DE PRETS, ASSURANCE, RACHAT ET DERNIERS CLIENTS
    $lastHomeLoans = GetLastHomeLoans($bdd);
    $lastInsurances = GetLastInsurances($bdd);
    $lastRepurchases = GetLastRepurchases($bdd);
    $lastBorrowers = GetLastBorrowers($bdd);

    // FONCTIONS POUR OBTENIR LE NOMBRE DE DEMANDE DE PRET, ASSURANCE ET RACHAT DE CREDIT QUI ONT LE STATUT "consultée"
    $ConsultedHomeLoans = GetConsultedHomeLoansCount($bdd);
    $ConsultedInsurances = GetAllConsultedInsurancesCount($bdd);
    $ConsultedRepurchases = GetAllConsultedRepurchasesCount($bdd);

    // FONCTIONS POUR OBTENIR LE NOMBRE TOTAL DE DEMANDES DE PRET, ASSURANCE ET RACHAT DE CREDIT QUI ONT LE STATUT "en cours"
    $TreatingdHomeLoans = GetTreatingHomeLoansCount($bdd);
    $TreatingInsurances = GetTreatingInsurancesCount($bdd);
    $TreatingRepurchases = GetTreatingRepurchasesCount($bdd);

    // FONCTIONS POUR OBTENIR LE NOMBRE TOTAL DE DEMANDES DE PRET, ASSURANCE ET RACHAT DE CREDIT QUI ONT LE STATUT "traitée"
    $TreatedHomeLoans = GetTreatedHomeLoansCount($bdd);
    $TreatedInsurances = GetTreatedInsurancesCount($bdd);
    $TreatedRepurchases = GetTreatedRepurchasesCount($bdd);


    require("includes/wrapper.php");

?>

</aside>
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row align-items-center mb-2">
                    <div class="col">
                        <h2 class="h5 page-title">Bienvenue ! Consulter les informations : </h2>
                    </div>
                </div>
                <div class="row">
                </div> <!-- / .card -->
            </div> <!-- / .col-md-6 -->

            <!-- 
            // if (isset($_GET['q']) && !empty($_GET['q'])) {

            //     $getSearch = $bdd->query('SELECT * FROM home_loan WHERE usages OR id OR project LIKE "%' . $_GET['q'] . '%" ORDER BY id DESC');
            //     $results = $getSearch->fetchAll();
            //     echo "<pre>";
            //     var_dump($results);
            //     echo "</pre>";
            // };




            // if (isset($results)) {
            //     if ($results) {
            //         foreach ($results as $result) {
            //         }
            //     } else { ?>
            // <p>Aucun resultat...</p>
         




             LES 3 DERNIERS DEMANDES DE PRET IMMO -->
            <!-- Striped rows -->
            <div class="col-md-12 col-lg-8">
                <div class="bouttons_admin">
                    <a href="index.php?menu=immo" class="btn btn-primary">Prêts immobiliers</a>
                    <a href="index.php?menu=assurance" class="btn btn-primary">Assurance</a>
                    <a href="index.php?menu=rachat" class="btn btn-primary">Rachat de crédit</a>
                    <a href="index.php?menu=client" class="btn btn-primary">Clients</a>
                </div> <br>



                <?php if (isset($_GET['menu']) && $_GET['menu'] == "immo") { ?>

                <div class="card shadow">
                    <div class="card-body my-n2">
                        <h2>Les dernières demandes de prêts immobiliers</h2>
                        <table class="table table-striped table-hover table-borderless">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Projet</th>
                                    <th>Nature du bien</th>
                                    <!-- <th>Id du demandeur</th> -->
                                    <th>Statut</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($lastHomeLoans as $lastHomeLoan) { ?>
                                <tr>
                                    <td><?= htmlspecialchars($lastHomeLoan['id']) ?></td>
                                    <!-- <th scope="col"></th> -->
                                    <td><?= htmlspecialchars($lastHomeLoan['project']) ?></td>
                                    <td><?= htmlspecialchars($lastHomeLoan['nature_property']) ?></td>
                                    <td>
                                        <?= $lastHomeLoan['statut'] ?>
                                        <div class="dropdown">
                                            <button class="btn btn-sm dropdown-toggle more-vertical" type="button"
                                                id="dr1" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <span class="text-muted sr-only">statut</span>
                                            </button>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr1">
                                                <a class="dropdown-item" href="#">complétée</a>
                                                <a class="dropdown-item" href="#">en cours de traitement</a>
                                                <a class="dropdown-item" href="#">Traitée</a>
                                            </div>
                                        </div>
                                    </td>

                                </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <a href="loan.php" target="_blank" class="btn btn-primary">Voir l'ensemble des
                        demandes de
                        prêts immobiliers</a>
                </div>
            </div> <!-- Striped rows -->
        </div> <!-- .row-->
    </div> <!-- .col-12 --> <br> <br>
    <div class="container cartes">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <div>
                    <h4>Nombre de demandes traitées : </h4>
                    <p id="finies">
                        <?= htmlspecialchars($TreatedHomeLoans['treated']) ?>
                    </p>
                </div>

                <a href="loan_treated" class="btn btn-success">Voir les demandes traitées</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <div>
                    <h4>Nombre de demandes en cours de traitement : </h4>
                    <p id="current"><?= htmlspecialchars($TreatingdHomeLoans['treating']) ?></p>
                </div>

                <a href="loan_treating.php" class="btn btn-info">Voir toutes les demandes en cours de traitement</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <div>
                    <h4>Nombre de demandes consultées : </h4>
                    <p id="consult"><?= htmlspecialchars($ConsultedHomeLoans['consulted']) ?></p>
                </div>

                <a href="loan_consulted.php" class="btn btn-secondary">Voir toutes les demandes consultées</a>
            </div>
        </div>
    </div>


    <!-- ***********************INFOS SUR LES DEMANDES D ASSURANCE ********************************************* -->
    <?php } else if (isset($_GET['menu']) && $_GET['menu'] == "assurance") { ?>

    <div class="card shadow">
        <div class="card-body my-n2">
            <h2>Les dernières demandes d'assurances</h2>
            <table class="table table-striped table-hover table-borderless">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Type de prêt</th>
                        <th>Durée</th>
                        <!-- <th>Id du demandeur</th> -->
                        <th>Statut</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lastInsurances as $lastInsurance) { ?>
                    <tr>
                        <td><?= $lastInsurance['id'] ?></td>
                        <!-- <th scope="col"></th> -->
                        <td><?= $lastInsurance['type_loan'] ?></td>
                        <td><?= $lastInsurance['type_duration'] ?></td>
                        <td>
                            <!-- <div class="dropdown">
                                        <button class="btn btn-sm dropdown-toggle more-vertical" type="button" id="dr1"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted sr-only">statut</span>
                                        </button>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr1">
                                            <a class="dropdown-item" href="#">complétée</a>
                                            <a class="dropdown-item" href="#">en cours de traitement</a>
                                            <a class="dropdown-item" href="#">Traitée</a>
                                        </div>
                                    </div> -->
                        </td>

                    </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
        <a class="btn btn-primary" target="_blank" href="insurance.php">Voir l'ensemble des demandes d'assurance</a>
    </div>
    </div> <!-- Striped rows -->
    </div> <!-- .row-->
    </div> <!-- .col-12 --> <br> <br>
    <div class="container cartes">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <div>
                    <h4>Nombre de demandes traitées : </h4>
                    <p id="finies"><?= htmlspecialchars($TreatedInsurances['treated']) ?></p>
                </div>

                <a href="insurance_treated.php" class="btn btn-success">Voir toutes les demandes traitées</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <div>
                    <h4>Nombre de demandes en cours de traitement : </h4>
                    <p id="current"><?= htmlspecialchars($TreatingInsurances['treating']) ?></p>
                </div>

                <a href="insurance_treating.php" class="btn btn-info">Voir toutes les demandes en cours de
                    traitement</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <div>
                    <h4>Nombre de demandes consultées : </h4>
                    <p id="consult"><?= htmlspecialchars($ConsultedInsurances['consulted']) ?></p>
                </div>

                <a href="insurance_consulted.php" class="btn btn-secondary">Voir toutes les demandes consultées</a>
            </div>
        </div>
    </div>

    <!-- ***********INFOS SUR LES DEMANDES DE RACHATS DE CREDIT************************************* -->
    <?php } else if (isset($_GET['menu']) && $_GET['menu'] == "rachat") { ?>

    <div class="card shadow">
        <div class="card-body my-n2">
            <h2>Les dernières demandes de rachats de crédit</h2>
            <table class="table table-striped table-hover table-borderless">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Prix</th>
                        <th>nombres d'emprunts</th>
                        <!-- <th>Id du demandeur</th> -->
                        <th>Statut</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lastRepurchases as $lastRepurchase) { ?>
                    <tr>
                        <td><?= $lastRepurchase['id'] ?></td>
                        <!-- <th scope="col"></th> -->
                        <td><?= $lastHomeLoan['price'] ?></td>
                        <td><?= $lastHomeLoan['number_of_loans'] ?></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm dropdown-toggle more-vertical" type="button" id="dr1"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">statut</span>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr1">
                                    <a class="dropdown-item" href="#">complétée</a>
                                    <a class="dropdown-item" href="#">en cours</a>
                                    <a class="dropdown-item" href="#">Traitée</a>
                                </div>
                            </div>
                        </td>

                    </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
        <a class="btn btn-primary" href="repurchase.php">Voir l'ensemble des demandes de rachats de crédits </a>
    </div>
    </div> <!-- Striped rows -->
    </div> <!-- .row-->
    </div> <!-- .col-12 --> <br> <br>
    <div class="container cartes">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <div>
                    <h4>Nombre de demandes traitées : </h4>
                    <p id="finies"><?= htmlspecialchars($TreatedRepurchases['treated']) ?></p>
                </div>

                <a href="repurchase_treated.php" class="btn btn-success">Voir toutes les demandes traitées</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <div>
                    <h4>Nombre de demandes en cours de traitement : </h4>
                    <p id="current"><?= htmlspecialchars($TreatingRepurchases['treating']) ?></p>
                </div>

                <a href="repurchase_treating.php" class="btn btn-info">Voir toutes les demandes en cours de
                    traitement</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <div>
                    <h4>Nombre de demandes consultées : </h4>
                    <p id="consult"><?= htmlspecialchars($ConsultedRepurchases['consulted']) ?></p>
                </div>

                <a href="repurchase_consulted.php" class="btn btn-secondary">Voir toutes les demandes consultées</a>
            </div>
        </div>
    </div>


    <?php } else if (isset($_GET['menu']) && $_GET['menu'] == "client") { ?>

    <div class="card shadow">
        <div class="card-body my-n2">
            <h2>Les dernièrs clients inscrits </h2>
            <table class="table table-striped table-hover table-borderless">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>email</th>
                        <!-- <th>Id du demandeur</th> -->

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lastBorrowers as $lastBorrower) { ?>
                    <tr>
                        <td><?= $lastBorrower['id'] ?></td>
                        <!-- <th scope="col"></th> -->
                        <td><?= $lastBorrower['name'] ?></td>
                        <td><?= $lastBorrower['mail'] ?></td>
                        <td>

                        </td>

                    </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
        <a class="btn btn-primary" target="_blank" href="client.php">Voir l'ensemble des clients inscrits</a>
    </div>

    <?php } ?>


    <?php } else {
    header("location: ../../real_estate.php?error=falseadmin");
} ?>


    <?php require("includes/footer_admin.php");