<nav class="navbar bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><em>Profile</em></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Profile</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">
        <?php if(isset($_SESSION['user'])): ?>

<span>Je suis connecté</span>

<?php else: ?>

    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
               
               <li class="nav-item"> 
                   <a class="nav-link active" aria-current="page" href="login.php">Se connecter</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="inscription.php">S'inscrire</a>
               </li>
           </ul>

<?php endif; ?>
            
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Recherche</button>
            </form>
        </div>
    </div>
    </div>
</nav>