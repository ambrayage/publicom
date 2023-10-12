<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un message</title>
</head>
<body>
    <header>
    <h1>Créer un message</h1>
    <menu>
        <li><button onclick="">Visualiser messages</button></li>
        <li><button onclick="">Liste des messages d'information</button></li>
        <li><button onclick="">Créer un message</button></li>
        <li><button onclick="">Déconnexion</button></li>
    </menu>
    <label for="name">Titre du message (32 caractères max.) :</label>
    <input type="text" name="titre" id="titre">
    <label for="name">Message (160 caractères max.) :</label>
    <input type="text" name="message" id="message">
    <button onclick="">Valider</button>
    <label for="switch">Afficher le message :</label>
    <!-- Rounded switch -->
    <label class="switch">
        <input type="checkbox">
        <span class="slider round"></span>
    </label>
    </header>
</body>
</html>