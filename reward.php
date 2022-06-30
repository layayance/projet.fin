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
        <link rel="stylesheet" href="/css/style-market-reward.css">
        <title>Fidelis ~ Les Récompenses</title>
    </head>
    <body>
        <!--=============== NAV ===============-->
        <div class="nav" id="nav">
            <nav class="nav__content">
                <div class="nav__toggle" id="nav-toggle">
                     <i class='bx bx-chevron-right' ></i>
                </div>
    
                <a href="/reward.php" class="nav__logo">
                    <i class="ri-body-scan-line" ></i>
                    <span class="nav__logo-name">Fidelis</span>
                </a>
    
                <div class="nav__list">
                    <a href="/market.php" class="nav__link active-link">
                        <i class='bx bx-store'></i>
                        <span class="nav__name">Commerces</span>
                    </a>
    
                    <a href="/reward.php" class="nav__link">
                        <i class='bx bx-gift'></i>
                        <span class="nav__name">Cadeaux</span>
                    </a>
    
                    <a href="/profile.php" class="nav__link">
                        <i class='bx bx-user'></i>
                        <span class="nav__name">Profile</span>
                    </a>
                </div>
            </nav>
        </div>

        <!--=============== MAIN ===============-->
        <main class="container market">
            <h1>Cadeaux</h1>

            <div class="searchbar">
                <a href="/market.php">
                    <label class="btn btn-aperçu" for="show-aperçu">Retour</label>
                </a>
                <a href="/progressbar.php">
                    <label class="btn btn-aperçu" for="show-aperçu">Aperçu</label>
                </a>
            </div>


        </main>

        <section class="market section container" id="market">
            <h2 class="section__title">
                promotions
            </h2>

            <div class="market__container grid">
                <article class="market__card">
                    <span class="market__tag"></span>

                    <i class='bx bx-gift'></i>

                    <div class="market__data">
                        <h3 class="market__title"> Promotion 25% - Epicérie Mendoza</h3>
                        <span class="market__price">55 points</span>
                    </div>
                    <label class="btn btn-aperçu">En profiter</label>
                </article>
                
            </div>

           <h2 class="section__title">
                achats
            </h2>
            <div class="market__container grid">
                <article class="market__card">
                    <span class="market__tag"></span>

                    <i class='bx bx-gift'></i>

                    <div class="market__data">
                        <h3 class="market__title">Lot de 3 glace à l'italienne - carmelé & cie</h3>
                        <span class="market__price">17 Points</span>
                    </div>
                    <label class="btn btn-aperçu">En profiter</label>
                </article>
            </div>

        </section>
        

        <!--=============== JS ===============-->
        <script src="/js/main.js"></script>
    </body>
</html>
