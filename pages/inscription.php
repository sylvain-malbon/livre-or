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
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>

    <?php include_once '../includes/header.php'; ?>

    <main>
        <div class="register-form-page">

            <h1>Inscription</h1>
            <p class="form-catchphrase">Créez votre compte pour laisser un message</p>

            <section class="register-form">
                <div class="form-content">

                    <form method="POST" class="form" action="">
                        <input type="hidden" name="" value="">

                        <div class="form-group">
                            <label for="">Nom d'utilisateur</label>
                            <input
                                type="text"
                                id="name"
                                name="name"
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

                        <div class="form-group">
                            <label for="password">Confirmation du mot de passe</label>
                            <input
                                type="password"
                                id="password_confirm"
                                name="password_confirm"
                                required
                                placeholder="Votre mot de passe">
                        </div>

                        <button type="submit" class="form-button">
                            S'inscrire
                        </button>
                    </form>

                </div>
            </section>

            <p class="form-bottom">Vous avez déjà un compte ?</p>
            <p class="form-bottom"><a href="connexion.php">Connectez-vous.</a></p>

        </div>
    </main>

    <?php include_once '../includes/footer.php'; ?>

</body>