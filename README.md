# LIVRE D'OR
Projet pédagogique La Plateforme — Application PHP/MySQL : gestion d'utilisateurs, sessions sécurisées (hachage des mots de passe) et système de commentaires.

## Points techniques et bonnes pratiques :
- Base de données MySQL nommée **livreor** avec tables **utilisateurs** et **commentaires** (script : `livreor.sql`).  
- Sécurité recommandée : **PDO** + requêtes préparées, hachage des mots de passe (`password_hash` / `password_verify`), nettoyage à l’affichage (`htmlspecialchars`).  
- Livrables obligatoires : `index.php`, `inscription.php`, `connexion.php`, `profil.php`, `livre-or.php`, `commentaire.php`, `style.css`, `livreor.sql`.
