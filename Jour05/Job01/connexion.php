<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="js/script.js" defer></script>
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <form id="connexionForm" onsubmit="return validateForm(event)">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <span id="emailError" class="error"></span>

        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required>
        <span id="passwordError" class="error"></span>

        <input type="submit" value="Se connecter">
    </form>
</body>
</html>
