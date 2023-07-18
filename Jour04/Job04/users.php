<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "motdepasse1@";
$dbname = "utilisateurs_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// Récupération des utilisateurs
$sql = "SELECT * FROM utilisateurs";
$result = $conn->query($sql);

// Création du tableau associatif des utilisateurs
$users = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
}

// Fermeture de la connexion à la base de données
$conn->close();

// Conversion en format JSON
$json = json_encode($users);

// Envoi de la réponse JSON
header('Content-Type: application/json');
echo $json;
?>
