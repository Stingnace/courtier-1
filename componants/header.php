<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courtier</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
    <!-- 
    *    CSS only 
    *    CDN Bootstrap
    *    Icones Bootstrap
    -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <link rel="stylesheet" href="./style/js_style.css">
    <link rel="stylesheet" href="./style/js_medias_queries.css">
</head>

<body>

    <header>
        <!-- /!\ Logo provisoire à modifier plus tard -->
        <div id="jl_presBar" class="d-flex justify-content-between">
            <img src="./file/img/logoCourtierProvisoire.png" alt="logo" id="jl_logo">
            <!-- /!\ Adresse provisoire à modifier plus tard -->
            <div id="address"><i class="bi bi-geo-alt-fill"></i> 6 rue du palais, 57000 Metz</div>
            <div id="test">
                <a href="">Se connecter</a>
                <a class="btn btn-light">S'inscrire</a>
                <div id="jl_xsMenu">
                    <i class="bi bi-list"></i>
                </div>
            </div>
        </div>
        <nav class="m-0 p-0">
            <!-- MENU PRINCIPAL => HAMBURGER PETIT ECRAN -->
            <ul class="m-0 position-relative">
                <i class="bi bi-x-octagon-fill" id="jl_closingCross"></i>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Crédit immobilier</a></li>
                <li><a href="#">Assurance immobilier</a></li>
                <li><a href="#">Rachat de crédit</a></li>
                <li><a href="#">Contact</a></li>
                <li id="jl_xsMenuItem"><a href="#">Se connecter/S'inscrire</a></li>
            </ul>
        </nav>
    </header>