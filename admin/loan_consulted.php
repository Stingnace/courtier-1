<?php
require("includes/header_admin.php");
require('../componants/function.php');
require("includes/wrapper.php");
//   FONCTION POUR OBTENIR TOUTES LES INFORMATIONS SUR LES DEMANDES DE PRETS 
$ConsultedHomeLoans = GetConsultedHomeLoans($bdd);
?>

</aside>
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row align-items-center mb-2">
                    <div class="col">
                        <h2 class="h5 page-title"> Consulter les informations : </h2>
                    </div>
                </div>
                <div class="row">
                </div> <!-- / .card -->
            </div> <!-- / .col-md-6 -->



            <!-- ***********************INFOS SUR LES DEMANDES DE PRETS IMMOBILIERS********************************************* -->

            <div class="card shadow">
                <div class="card-body my-n2">
                    <h2>Les demandes de prêts immobiliers consultées</h2>
                    <table class="table table-striped table-hover table-borderless">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nature du projet</th>
                                <!-- <th>Id du demandeur</th> -->
                                <th>condition</th>
                                <th>usages</th>
                                <th>situation de recherche</th>
                                <th>situation actuelle</th>
                                <th>lieu du bien</th>
                                <th>valeur du bien </th>
                                <th>valeur des travaux </th>
                                <th>mode de prêt </th>
                                <th>contribution </th>
                                <th>choix de la banque </th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($ConsultedHomeLoans as  $ConsultedHomeLoan) { ?>
                                <tr>
                                    <td><?= $ConsultedHomeLoans['id'] ?></td>
                                    <!-- <th scope="col"></th> -->
                                    <td><?= htmlspecialchars($ConsultedHomeLoan['nature_property']) ?></td>
                                    <td><?= htmlspecialchars($ConsultedHomeLoan['conditions']) ?></td>
                                    <td><?= htmlspecialchars($ConsultedHomeLoan['usages']) ?></td>
                                    <td><?= htmlspecialchars($ConsultedHomeLoan['search_situation']) ?></td>
                                    <td><?= htmlspecialchars($ConsultedHomeLoan['situation_current_home']) ?></td>
                                    <td><?= htmlspecialchars($ConsultedHomeLoan['location_future_property']) ?></td>
                                    <td><?= htmlspecialchars($ConsultedHomeLoan['value_property']) ?></td>
                                    <td><?= htmlspecialchars($ConsultedHomeLoan['value_works']) ?></td>
                                    <td><?= htmlspecialchars($ConsultedHomeLoan['loan_mode']) ?></td>
                                    <td><?= htmlspecialchars($ConsultedHomeLoan['personal_contribution']) ?></td>
                                    <td><?= htmlspecialchars($ConsultedHomeLoan['choice_bank']) ?></td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Gérer
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Statut
                                                            de la demande
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Statut</option>
                                                            <option value="consultée">consultée</option>
                                                            <option value="en cours">en cours</option>
                                                            <option value="traitée">traitée</option>
                                                        </select>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                        <button type="button" class="btn btn-primary">Sauvegarder
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>


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

            </div>
        </div> <!-- Striped rows -->
    </div> <!-- .row-->
    </div> <!-- .col-12 --> <br> <br>


    <?php require("includes/footer_admin.php");
