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
    <link rel="stylesheet" href="/css/progres.css">
    <link rel="stylesheet" href="/css/style-market-reward.css">
    <title>Fidelis ~ Aperçu</title>
  </head>
  <body>
    <div class="container">
      <div class="progress-container">
        <div class="progress" id="progress"></div>
        <div class="circle active">25 pts</div>
        <div class="circle">50 pts</div>
        <div class="circle">75 pts</div>
        <div class="circle">100 pts</div>
      </div>
      <button class="btn" id="next">Valider</button>
      <button onclick="reload()" class="btn" >Reload</button>
    </div>

            <!--=============== NAV ===============-->
            <div class="nav" id="nav">
                <nav class="nav__content">
                    <div class="nav__toggle" id="nav-toggle">
                         <i class='bx bx-chevron-right' ></i>
                    </div>
        
                    <a href="/market.php" class="nav__logo">
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
        
                        <a href="/profile.html" class="nav__link">
                            <i class='bx bx-user'></i>
                            <span class="nav__name">Profile</span>
                        </a>
                    </div>
                </nav>
            </div>
              <!--=============== HEADER ===============-->
               
              <header class="profile container">
               </header>
    
    <script src="/js/progress.js"></script>
  </body>
</html>
