<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="js/scripts.js" defer></script>
</head>
<body>
    <?php
    session_start();

    // Vérifier si l'utilisateur est connecté
    if (isset($_SESSION['prenom'])) {
        $prenom = $_SESSION['prenom'];
        echo "<p>Bonjour $prenom</p>";
    } else {
        echo '<a href="inscription.php">Inscription</a>';
        echo '<a href="connexion.php">Connexion</a>';
    }
    ?>
</body>
</html>
