<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <title>Runtrack3</title>
</head>
<body>
    <header>
        <nav></nav>
    </header>
    <main>
        <h1>Jour 02 - Job 02</h1>
        <h2>Consignes</h2>
        <p>Créez une balise &lt;button&gt; ayant comme id "button".</p>
        <p>Lorsque l’on clique dessus, un &lt;article&gt; contenant le texte suivant est ajouté au 
            contenu de la page : "L'important n'est pas la chute, mais l'atterrissage."</p>
        <p>Si on clique à nouveau sur ce bouton, l’article disparaît.</p>
        <p>L’apparition / Disparition doivent être gérées dans une fonction nommée "showhide()".</p>

        <h2>Code</h2>
        <button id="button" onclick="showhide()">Cliquez ici</button>
        <article id="article"></article>
    </main>
    <footer>

    </footer>
</body>
</html>