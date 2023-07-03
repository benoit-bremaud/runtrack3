<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <title>Jour 01 - Job 07</title>
</head>
<body>
    <header>
        <nav>

        </nav>
    </header>
    <main>
        <h1>Job07</h1>
        <h2>Consignes</h2>
        <p>Créez une <strong>fonction</strong> <em>"jourtravaille"</em> qui prend en paramètre une <strong>date</strong> au format <strong>Date</strong>.</p>
        <p>Si la date correspond à un jour férié de l’année 2020, la fonction affiche “Le $jour $mois $année est un jour férié”.</p>
        <p>Si elle correspond à un samedi ou un dimanche, alors le message affiché est “Non, $jour $mois $année est un week-end”, sinon afficher “Oui, 
            $jour $mois $année est un jour travaillé”.</p>
        <p>$jour correspond au numéro du jour, $mois au mois et $année à l’année. Les jours fériés sont référencés sur <a href="https://demarchesadministratives.fr/actualites/calendrier-des-jours-feries-2019-2020-2">Calendrier des jours fériée 2019-2020</a></p>
     
            
        <h2>Résultat</h2>
        <script>
            // Définition de la date
            const date = new Date("2020-05-01");

            // Appel de la fonction "jourtravaille()"
            jourtravaille(date);
        </script>
       
     
    </main>
    <footer>

    </footer>
</body>
</html>