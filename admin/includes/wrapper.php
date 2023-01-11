<?php

?>
<div class="wrapper">
    <nav class="topnav navbar navbar-light">
        <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
            <i class="fe fe-menu navbar-toggler-icon"></i>
        </button>
        <form class="form-inline mr-auto searchform text-muted" method="GET">
            <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search"
                placeholder="Votre recherche.." aria-label="Recherche" name="q">
        </form>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
                    <i class="fe fe-sun fe-16"></i>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="avatar avatar-sm mt-2">
                        <img src="./assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Profil</a>
                    <a class="dropdown-item" href="#">Réglage</a>
                    <a class="dropdown-item" href="actions/deconnexion.php">Déconnexion</a>
                </div>
            </li>
        </ul>
    </nav>
    <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
            <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
            <!-- nav bar -->
            <div class="w-100 mb-4 d-flex">
                <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                    <img src="./assets/images/logo.jpg" width="70%" alt="">
                </a>

            </div>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <li class="nav-item dropdown">
                    <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                        <i class="fe fe-home fe-16"></i>
                        <span class="ml-3 item-text">Dashboard</span>
                    </a>
                    <ul class="collapse list-unstyled pl-4 w-100" id="dashboard">
                        <li class="nav-item active">
                            <a class="nav-link pl-3" href="./index.html"><span class="ml-1 item-text">Tableau de
                                    bord</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">Voir mon site</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
            <p class="text-muted nav-heading mt-4 mb-1">
                <span>Gestion</span>
            </p>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <li class="nav-item dropdown">
                    <a href="#ui-elements" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle nav-link">
                        <i class="fe fe-box fe-16"></i>
                        <span class="ml-3 item-text">Demandes</span>
                    </a>
                    <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="index.php?menu=immo"><span class="ml-1 item-text">Prêt
                                    Immobilier</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">Assurance</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">Rachat de
                                    crédit</span></a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                        <i class="fe fe-grid fe-16"></i>
                        <span class="ml-3 item-text">Clients</span>
                    </a>
                    <ul class="collapse list-unstyled pl-4 w-100" id="tables">
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">Clients</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">Adresses</span></a>
                        </li>

                    </ul>
                </li>

            </ul>

        </nav>