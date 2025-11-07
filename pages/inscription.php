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
        <div class="form-page">

            <h1>Inscription</h1>
            <p>Créez votre compte pour laisser un message</p>

            <section class="register-form">
                <div class="form-content">

                    <form method="POST" class="form" action="">
                        <input type="hidden" name="" value="">

                        <div class="form-group">
                            <label for="">Nom d'utilisateur</label>
                            <input type="" id="" name="" required
                                value=""
                                placeholder="Votre nom d'utilisateur">
                        </div>

                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" id="password" name="password" required
                                placeholder="Votre mot de passe">
                        </div>

                        <div class="form-group">
                            <label for="password">Confirmation du mot de passe</label>
                            <input type="password" id="password" name="password" required
                                placeholder="Votre mot de passe">
                        </div>

                        <button type="submit" class="form-button">
                            S'inscrire
                        </button>
                    </form>

                </div>
            </section>

            <p>Vous possédez déjà un compte ? <a href="connexion.php">Connectez-vous</a> pour laisser un commentaire.</p>

        </div>
    </main>

    <?php include_once '../includes/footer.php'; ?>

</body>