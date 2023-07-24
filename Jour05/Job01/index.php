<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="js/script.js" defer></script>
    <title>Accueil</title>
</head>
<body>
    <?php
    session_start();


    // Informations de connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "motdepasse1@";
    $dbname = "utilisateurs_db_j5j1";

    // Création de la connexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérification de la connexion
    if ($conn->connect_error) {
        die("Erreur de connexion à la base de données : " . $conn->connect_error);
    }

    // Vous pouvez maintenant exécuter des requêtes SQL sur la base de données en utilisant $conn

    // Fermeture de la connexion
    $conn->close();


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
