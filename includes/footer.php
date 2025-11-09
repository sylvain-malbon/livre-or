<footer class="footer">

    <nav class="footer-navbar">

        <ul class="nav-list">

            <?php if (isset($_SESSION['login'])) : ?>
                <li><a href="<?= BASE_PATH ?>pages/profil.php">modifier mon profil</a></li>
                <li class="separateur">|</li>
                <li><a href="<?= BASE_PATH ?>pages/commentaire.php">laisser un commentaire</a></li>
                <li class="separateur">|</li>
                <li><a href="<?= BASE_PATH ?>index.php" title="déconnexion">déconnexion</a></li>
            <?php else : ?>
                <li><a href="<?= BASE_PATH ?>index.php" title="accueil">accueil</a></li>
                <li class="separateur">|</li>
                <li><a href="<?= BASE_PATH ?>pages/inscription.php" title="inscription">s'inscrire pour commenter</a></li>
                <li class="separateur">|</li>
                <li><a href="<?= BASE_PATH ?>pages/livre-or.php" title="livre d'or">consulter le livre d'or</a></li>
                <li class="separateur">|</li>
                <li><a href="<?= BASE_PATH ?>pages/connexion.php" title="connexion">se connecter</a></li>
            <?php endif; ?>

        </ul>
    </nav>

</footer>