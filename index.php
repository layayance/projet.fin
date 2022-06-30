<?php
// demarre la session
session_start();

?>

<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="/css/style-begin-login.css">
        <link rel="manifest" href="/sw/manifest.webmanifest">			
        <title>Fidelis ~ Page d'ouverture</title>
    </head>
    <body>
        <!--=============== HEADER ===============-->
        <header class="Base container">
           <a href="begin.php">
            <i class="ri-body-scan-line" id="theme-button"></i>
           </a>

            <div class="Base__container grid">
                <div class="Base__data">
                    <div class="Base__border">
                        <img src="/assets/img/1.png" alt="">
                    </div>

                    <h2 class="Base__first-text">Gagner des récompenses grâce aux petits commerces avec Fidelis !</h2>
                    <h3 class="Base__scd-text">Fidelis est un dispositif de fidelisation qui identifie et récompense les clients des petits commercants qui decouvrent ou achètent régulièrement dans leurs commerces !</h3>
                </div>

                <div class="Base__buttons">

                     <a href="inscription.php"  class="button"> 
                        Commencer <i class="ri-arrow-right-s-line"></i>
                    </a>
                </div>
            </div>
        </header>    

        <!--=============== FOOTER ===============-->
        <?php require_once 'layouts/footer.php'; ?>

        <!--=============== JS ===============-->
        <script src="/js/main.js"></script>
        <script src="/sw/serviceworker.js"></script>		
    </body>
</html>
</html>