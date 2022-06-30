<?php 

// Démarre la session 
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
        <link rel="stylesheet" href="/css/style-market-reward.css">
        <title>Fidelis ~ Les Commerces</title>
    </head>
    <body>
        <!--=============== NAV ===============-->
        <div class="nav" id="nav">
            <nav class="nav__content">
                <div class="nav__toggle" id="nav-toggle">
                     <i class='bx bx-chevron-right' ></i>
                </div>
    
                <a href="/html/market.html" class="nav__logo">
                    <i class="ri-body-scan-line" ></i>
                    <span class="nav__logo-name">Fidelis</span>
                </a>
    
                <div class="nav__list">
                    <a href="/html/market.html" class="nav__link active-link">
                        <i class='bx bx-store'></i>
                        <span class="nav__name">Commerces</span>
                    </a>
    
                    <a href="/html/reward.html" class="nav__link">
                        <i class='bx bx-gift'></i>
                        <span class="nav__name">Cadeaux</span>
                    </a>
    
                    <a href="/html/profile.html" class="nav__link">
                        <i class='bx bx-user'></i>
                        <span class="nav__name">Profile</span>
                    </a>
                </div>
            </nav>
        </div>

        <!--=============== MAIN ===============-->
        <main class="container market">
            <h1>Commerces</h1>

            <div class="searchbar">
                <label class="btn btn-aperçu" for="show-aperçu">Filtrer</label>
                <a href="/html/ProgressBar.html">
                    <label class="btn btn-aperçu" for="show-aperçu">Aperçu</label>
                </a>
            </div>


        </main>

        <section class="market section container" id="market">
            <h2 class="section__title">
                Boucherie
            </h2>

            <div class="market__container grid">
                <article class="market__card">
                    <span class="market__tag">Ouvert</span>

                    <img src="/assets/img/4.png" alt="" class="market__img">

                    <div class="market__data">
                        <h3 class="market__title">Boucherie La Vandé</h3>
                        <span class="market__price">Vente de viande de première qualité</span>
                    </div>

                    <!--<label class="btn btn-aperçu">En profiter</label>-->
                </article>
            </div>

           <!--<h2 class="section__title">
                Boulangérie
            </h2>
            <div class="market__container grid">
                <article class="market__card">
                    <span class="market__tag">FERMÉ</span>

                    <img src="/assets/img/4.png" alt="" class="market__img">

                    <div class="market__data">
                        <h3 class="market__title">Boulangérie laé</h3>
                        <span class="market__price">des pains chaud</span>
                    </div>
                </article>
            </div>-->

        </section>
        

        <!--=============== JS ===============-->
        <script src="/js/main.js"></script>
    </body>
</html>
