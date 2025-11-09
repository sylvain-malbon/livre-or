<?php
/* Au lieu de mettre une variable dans Header.php pour déterminer le chemin relatif vers la racine (plus propre) */
define('BASE_PATH', 'http://livre-or.test/');

// Paramètres de connexion
$host = "localhost";
$dbname = "livreor";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
