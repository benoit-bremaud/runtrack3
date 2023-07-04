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
        <h1>Jour 02 - Job 01</h1>
        <h2>Consignes</h2>
        <p>Créez un &lt;article&gt; ayant comme id "citation" et contenant le texte suivant : "La vie a beaucoup plus d’imagination que nous".</p>
        <p>Créez un &lt;button&gt; ayant comme id "button".</p>
        <p>Lorsque l’on clique sur le bouton, récupérez le contenu de l’élément ayant 
            comme id “citation” et affichez le contenu dans la console de développement.</p>
        <p>La fonction de récupération et d’affichage doit se nommer "citation()".</p>

        <h2>Code</h2>
        <article id="citation">La vie a beaucoup plus d'imagination que nous.</article>

        <button id="button" onclick="citation()">Afficher la citation</button>
    </main>
    <footer>

    </footer>
</body>
</html>