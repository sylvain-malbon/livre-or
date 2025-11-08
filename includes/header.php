<header class="header">
    <div class="container">
        <nav class="header-navbar">
            <a href="<?= BASE_PATH ?>index.php" class="logo" title="Accueil">
                <img src="<?= BASE_PATH ?>assets/images/logo_livre-or.png" alt="Logo du site">
            </a>
            <ul class="nav-list">

                <?php if (isset($_SESSION['login'])) : ?>
                    <li><a href="<?= BASE_PATH ?>pages/profil.php">Modifier mon profil</a></li>
                    <li class="separateur">|</li>
                    <li><a href="<?= BASE_PATH ?>pages/commentaire.php">Laisser un commentaire</a></li>
                    <li class="separateur">|</li>
                    <li><a href="<?= BASE_PATH ?>index.php">Déconnexion</a></li>
                <?php else : ?>
                    <li><a href="<?= BASE_PATH ?>index.php">Accueil</a></li>
                    <li class="separateur">|</li>
                    <li><a href="<?= BASE_PATH ?>pages/inscription.php">S'inscrire pour commenter</a></li>
                    <li class="separateur">|</li>
                    <li><a href="<?= BASE_PATH ?>pages/livre-or.php">Consulter le livre d'or</a></li>
                    <li class="separateur">|</li>
                    <li><a href="<?= BASE_PATH ?>pages/connexion.php" title="login">Se connecter</a></li>
                <?php endif; ?>

            </ul>
        </nav>
    </div>
</header>