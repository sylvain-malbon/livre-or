<footer class="footer">
    <div class="container">
        <nav class="footer-navbar">

            <ul class="nav-list">

                <?php if (isset($_SESSION['login'])) : ?>
                    <li><a href="/pages/profil.php">modifier mon profil</a></li>
                    <li class="separateur">|</li>
                    <li><a href="/pages/commentaire.php">laisser un commentaire</a></li>
                    <li class="separateur">|</li>
                    <li><a href="index.php">déconnexion</a></li>
                <?php else : ?>
                    <li><a href="index.php">accueil</a></li>
                    <li class="separateur">|</li>
                    <li><a href="/pages/inscription.php">laisser un commentaire</a></li>
                    <li class="separateur">|</li>
                    <li><a href="/pages/livre-or.php">consulter le livre d'or</a></li>
                    <li class="separateur">|</li>
                    <li><a href="/pages/connexion.php" title="login">se connecter</a></li>
                <?php endif; ?>

            </ul>
        </nav>
    </div>
</footer>