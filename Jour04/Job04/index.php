<!DOCTYPE html>
<html>
<head>
    <title>Liste des utilisateurs</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <table id="usersTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    <button id="updateButton">Update</button>

    <script>
    $(document).ready(function() {
        // Fonction pour mettre à jour le tableau
        function updateTable() {
            $.ajax({
                url: "users.php",
                type: "GET",
                dataType: "json",
                success: function(data) {
                    var tableBody = $("#usersTable tbody");
                    tableBody.empty(); // Vider le contenu précédent du tableau

                    $.each(data, function(index, user) {
                        var row = $("<tr>");
                        row.append($("<td>").text(user.id));
                        row.append($("<td>").text(user.nom));
                        row.append($("<td>").text(user.prenom));
                        row.append($("<td>").text(user.email));
                        tableBody.append(row);
                    });
                },
                error: function(xhr, status, error) {
                    console.log("Erreur lors de la récupération des utilisateurs : " + error);
                }
            });
        }

        // Mettre à jour le tableau lorsqu'on clique sur le bouton "Update"
        $("#updateButton").click(function() {
            updateTable();
        });

        // Mettre à jour le tableau une première fois lors du chargement de la page
        updateTable();
    });
    </script>
</body>
</html>
