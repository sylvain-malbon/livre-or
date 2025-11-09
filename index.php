<?php
session_start();
require_once './config/config.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livre d'or</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>

    <?php include_once 'includes/header.php'; ?>

    <main>
        <section class="hero">

            <video autoplay muted loop playsinline class="hero-video">
                <source src="assets/videos/hero-video_livre-or.mp4" type="video/mp4">
                Votre navigateur ne supporte pas la vidéo.
            </video>

            <div class="hero-content">
                <h1>Bienvenue dans notre <span class="logotype">Livre d'or</span></h1>
                <p>
                    <a href="pages/connexion.php">Laissez un commentaire</a>
                    ou
                    <a href="pages/livre-or.php">consultez le livre d'or.</a>
                </p>
            </div>

        </section>
    </main>

    <?php include_once 'includes/footer.php'; ?>

</body>

</html>