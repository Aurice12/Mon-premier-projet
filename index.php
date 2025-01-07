<?php
require_once 'includes/config.php';
require_once 'includes/db.php';
require_once 'includes/functions.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Système de Récupération des Pièces d'Identité - Cameroun</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="images/logo.png" alt="Logo du Système">
            </div>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="reseach.php">Rechercher</a></li>
                <li><a href="repport.php">Signaler</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <h1>Bienvenue sur le Système de Récupération des Pièces d'Identité</h1>
            <p>Un service innovant pour retrouver vos documents perdus au Cameroun</p>
            <div class="cta-buttons">
                <a href="reseach.php" class="btn btn-primary">Rechercher un document</a>
                <a href="repport.php" class="btn btn-secondary">Signaler un document trouvé</a>
            </div>
        </section>

        <section class="features">
            <h2>Nos Services</h2>
            <div class="feature-grid">
                <div class="feature-item">
                    <h3>Recherche Rapide</h3>
                    <p>Trouvez facilement vos documents perdus en quelques clics.</p>
                </div>
                <div class="feature-item">
                    <h3>Signalement Simple</h3>
                    <p>Signalez rapidement les documents que vous avez trouvés.</p>
                </div>
                <div class="feature-item">
                    <h3>Sécurité Garantie</h3>
                    <p>Vos informations personnelles sont protégées et sécurisées.</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Système de Récupération des Pièces d'Identité - Cameroun. Tous droits réservés.</p>
    </footer>

    <script src="js/main.js"></script>
</body>
</html>
