<?php
require_once '../config/config.php';
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livre d'or</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

    <?php include_once '../includes/header.php'; ?>

    <main>
        <div class="login-form-page">

            <h1>Connexion</h1>
            <p class="form-catchphrase">Connectez-vous à votre compte</p>

            <section class="login-form">
                <div class="form-content">

                    <form method="POST" class="form" action="">
                        <input type="hidden" name="" value="">

                        <div class="form-group">
                            <label for="">Nom d'utilisateur</label>
                            <input
                                type=""
                                id=""
                                name=""
                                required
                                value=""
                                placeholder="Votre nom d'utilisateur">
                        </div>

                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input
                                type="password"
                                id="password"
                                name="password"
                                required
                                placeholder="Votre mot de passe">
                        </div>

                        <button type="submit" class="form-button">
                            Se connecter
                        </button>
                    </form>

                </div>
            </section>

            <p class="form-bottom">Vous n'avez pas encore de compte ?</p>
            <p class="form-bottom"><a href="inscription.php">Inscrivez-vous.</a></p>

        </div>
    </main>

    <?php include_once '../includes/footer.php'; ?>

</body>