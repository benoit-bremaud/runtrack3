<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="js/script.js" defer></script>
    <title>Inscription</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>

</head>
<body>
    <h1>Inscription</h1>
    <form id="inscriptionForm" onsubmit="return validateForm(event)">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required>
        <span id="nomError" class="error"></span>

        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" required>
        <span id="prenomError" class="error"></span>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <span id="emailError" class="error"></span>

        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required>
        <span id="passwordError" class="error"></span>

        <label for="confirmPassword">Confirmez le mot de passe:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>
        <span id="confirmPasswordError" class="error"></span>

        <input type="submit" value="S'inscrire">
    </form>

    <div id="message"></div>

    <script>
        $(document).ready(function() {
            $('#inscriptionform').submit(function(e) {
                e.preventDefault();

                // Récupérer les données du formulaire
                var formData = $(this).serialize();

                // Envoyer les données au serveur via AJAX
                $.ajax({
                    type: 'POST',
                    url: 'inscription.php', // Remplacez par le script qui traite l'inscription côté serveur
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        // Traiter la réponse du serveur ici
                        $('#message').text(response.message);
                    },
                    error: function() {
                        // En cas d'erreur lors de la requête AJAX
                        $('#message').text("Une erreur s'est produite lors de l'inscription.");
                    }
                });
            });
        });
    </script>

</body>
</html>

