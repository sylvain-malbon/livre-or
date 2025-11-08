<footer class="footer">
    <div class="container">
        <nav class="footer-navbar">

            <ul class="nav-list">

                <?php if (isset($_SESSION['login'])) : ?>
                    <li><a href="<?= BASE_PATH ?>pages/profil.php">modifier mon profil</a></li>
                    <li class="separateur">|</li>
                    <li><a href="<?= BASE_PATH ?>pages/commentaire.php">laisser un commentaire</a></li>
                    <li class="separateur">|</li>
                    <li><a href="<?= BASE_PATH ?>index.php">déconnexion</a></li>
                <?php else : ?>
                    <li><a href="<?= BASE_PATH ?>index.php">accueil</a></li>
                    <li class="separateur">|</li>
                    <li><a href="<?= BASE_PATH ?>pages/inscription.php">s'inscrire pour commenter</a></li>
                    <li class="separateur">|</li>
                    <li><a href="<?= BASE_PATH ?>pages/livre-or.php">consulter le livre d'or</a></li>
                    <li class="separateur">|</li>
                    <li><a href="<?= BASE_PATH ?>pages/connexion.php" title="login">se connecter</a></li>
                <?php endif; ?>

            </ul>
        </nav>
    </div>
</footer>