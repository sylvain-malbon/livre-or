<header class="header">
    <div class="container">
        <nav class="header-navbar">
            <a href="index.php" class="logo" title="Accueil">
                <img src="assets/images/logo_livre-or2.png" alt="Logo du site">
            </a>
            <ul class="nav-list">

                <?php if (isset($_SESSION['login'])) : ?>
                    <li><a href="/pages/profil.php">Modifier mon profil</a></li>
                    <li><a href="/pages/commentaire.php">Laisser un commentaire</a></li>
                    <li><a href="index.php">Déconnexion</a></li>
                <?php else : ?>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="/pages/inscription.php">S'inscrire</a></li>
                    <li><a href="/pages/livre-or.php">Consulter le livre d'or</a></li>
                    <li><a href="/pages/connexion.php" title="login">Se connecter</a></li>
                <?php endif; ?>

            </ul>
        </nav>
    </div>
</header>