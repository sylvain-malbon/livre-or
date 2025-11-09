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
        <div class="livredor-page">

            <h1>Livre d'or</h1>
            <p><a href='connexion.php'>Laissez un commentaire</a> ou <a href='livre-or.php'>consultez le livre d'or</a> :</p>

            <section class="livredor">
                <div class="livredor-content">
                    commentaire / nom d'utilisateur (id) / heure
                </div>
            </section>

        </div>
    </main>

    <?php include_once '../includes/footer.php'; ?>

</body>