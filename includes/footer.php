<footer class="footer">
    <div class="container">
        <nav class="footer-navbar">

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
</footer>