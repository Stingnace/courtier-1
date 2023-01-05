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
    <style>
        html,
        body {
            margin: 0;
            height: 100vh;
            width: 100vw;
            overflow: hidden;
        }

        body {
            font-family: "Roboto", sans-serif;
            background-image: linear-gradient(135deg, #f18a04 0%, #ff8400 100%);
        }



        .nav-wrapper {
            display: flex;
            position: relative;
            flex-direction: row;
            flex-wrap: nowrap;
            align-items: center;
            justify-content: space-between;
            margin: auto;
            width: 90%;
            height: 80px;
            border-radius: 0 0 15px 15px;
            padding: 0 25px;
            z-index: 2;
            background: #fff;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        }

        .logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo {
            height: 60px;
        }

        .nav-tabs {
            display: flex;
            font-weight: 600;
            font-size: 18px;
            list-style: none;
        }

        .nav-tab:not(:last-child) {
            padding: 10px 25px;
            margin: 0;
            border-right: 1px solid #eee;
        }

        .nav-tab:last-child {
            padding: 10px 0 0 25px;
        }

        .nav-tab,
        .menu-btn {
            cursor: pointer;
        }

        .hidden {
            display: none;
        }

        @media screen and (max-width: 917px) {
            .nav-container {
                position: fixed;
                display: none;
                overflow-y: auto;
                z-index: -1;
                top: 0;
                right: 0;
                width: 280px;
                height: 100%;
                background: #fff;
                box-shadow: -1px 0 2px rgba(0, 0, 0, 0.2);
            }

            .nav-tabs {
                flex-direction: column;
                align-items: flex-end;
                margin-top: 80px;
                width: 100%;
            }

            .nav-tab:not(:last-child) {
                padding: 20px 25px;
                margin: 0;
                border-right: unset;
                border-bottom: 1px solid #f5f5f5;
            }

            .nav-tab:last-child {
                padding: 15px 25px;
            }

            .menu-btn {
                position: relative;
                display: block;
                margin: 0;
                width: 20px;
                height: 15px;
                cursor: pointer;
                z-index: 2;
                padding: 10px;
                border-radius: 10px;


            }

            .menu-btn.menu {
                display: block;
                width: 100%;
                height: 2px;
                border-radius: 2px;
                background: #111;
            }

            .menu-btn .menu:nth-child(2) {
                margin-top: 4px;
                opacity: 1;
            }

            .menu-btn .menu:nth-child(3) {
                margin-top: 4px;
            }

            #menuToggle:checked+.menu-btn .menu {
                transition: transform 0.2s ease;
            }

            #menuToggle:checked+.menu-btn .menu:nth-child(1) {
                transform: translate3d(0, 6px, 0) rotate(45deg);
            }

            #menuToggle:checked+.menu-btn .menu:nth-child(2) {
                transform: rotate(-45deg) translate3d(-5.71429px, -6px, 0);
                opacity: 0;
            }

            #menuToggle:checked+.menu-btn .menu:nth-child(3) {
                transform: translate3d(0, -6px, 0) rotate(-45deg);
            }

            #menuToggle:checked~.nav-container {
                z-index: 1;
                display: flex;
                animation: menu-slide-left 0.3s ease;
            }

            @keyframes menu-slide-left {
                0% {
                    transform: translateX(200px);
                }

                to {
                    transform: translateX(0);
                }
            }
        }

        @media screen and (min-width: 917px) {
            .icone {
                display: none;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="nav-wrapper">
            <div class="logo-container">
                <img class="logo" src="../file/img/logoCourtierProvisoire.png" alt="Logo">
            </div>
            <nav>
                <input class="hidden" type="checkbox" id="menuToggle">
                <label class="menu-btn" for="menuToggle">
                    <div class="icone"><i class="bi bi-list"></i></div>
                    <div class="menu"></div>
                    <div class="menu"></div>
                    <div class="menu"></div>
                </label>
                <div class="nav-container">
                    <ul class="nav-tabs">
                        <li class="nav-tab">Acceuil</li>
                        <li class="nav-tab">Crédit immobilier</li>
                        <li class="nav-tab">Rachat de crédit</li>
                        <li class="nav-tab">Contact</li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>




    <script src="nav.js"></script>

</body>

</html>