    <?php
    require("includes/header_admin.php");
    require('../componants/function.php');
    require("includes/wrapper.php");
    //   FONCTION POUR OBTENIR TOUTES LES INFORMATIONS SUR LES DEMANDES DE PRETS 
    $HomeLoans = GetAllHomeLoans($bdd);
    $userLoans = GetUserAndLoan($bdd);

    ?>

    </aside>
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row align-items-center mb-2">
                        <div class="col">
                            <h2 class="h5 page-title">Bienvenue ! Consulter les informations : </h2>
                            <?php var_dump($userLoans); ?>
                        </div>
                    </div>
                    <div class="row">
                    </div> <!-- / .card -->
                </div> <!-- / .col-md-6 -->



                <!-- ***********************INFOS SUR LES DEMANDES DE PRETS IMMOBILIERS********************************************* -->

                <div class="card shadow ">
                    <div class="card-body my-n2">
                        <h2>Les demandes de prêts immobiliers</h2>
                        <table class="table  table-striped table-hover table-borderless">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Email</th>
                                    <th>projet</th>
                                    <th>Valeur du bien</th>
                                    <th>Localisation du bien</th>
                                    <th>Voir la demande</th>



                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($userLoans as $userLoan) { ?>
                                <tr>
                                    <td><?= $userLoan['name'] ?></td>
                                    <td><?= $userLoan['first_name'] ?></td>
                                    <td><?= $userLoan['mail'] ?></td>
                                    <td><?= $userLoan['nature_property'] ?></td>
                                    <td><?= $userLoan['value_property'] ?></td>
                                    <td><?= $userLoan['location_future_property'] ?></td>



                                    <td>
                                        <a href="" class="btn btn-success"> hello</a>
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