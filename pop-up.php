<?php

// Demarre la session
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/pop-up.css">
        <title>Fidelis ~ pop-up</title>
    </head>
    <body>
        <section class="pop container">
            <button class="pop__button" id="open-pop">
                Ouvrir
            </button>

            <div class="pop__container" id="pop-container">
                <div class="pop__content">
                    <div class="pop__close close-pop" title="Close">
                        <i class='bx bx-x'></i>
                    </div>

                    <img src="assets/img/star-trophy.png" alt="" class="pop__img">

                    <h1 class="pop__title">Voici votre carte !</h1>
                    <p class="pop__description">Utiliser la croix pour fermer</p>

                    <button class="pop__button pop__button-width">
                        <img src="/assets/img/1.png" alt="" srcset="">
                    </button>

                    <button class="pop__button-link close-pop">
                        Fermer
                    </button>
                    <a href="/profile.php"> <button class="pop__button-link close-pop">
                        Retourner au profil
                    </button></a>
                </div>
            </div>
        </section>

        <!--=============== MAIN JS ===============-->
        <script src="/js/pop.js"></script>
    </body>
</html>