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
        <p>Créez une fonction “tri” qui prend en paramètres un tableau de nombres nommé numbers” et une variable “order” qui contient “asc” ou “desc”.</p>
        <p>A l’aide de la fonction sort() d’un algorithme développé par vos soins, cette fonction doit trier le tableau dans l’ordre ascendant ou décroissant, selon le paramètre passé, puis retourner le tableau.</p>
     
            
        <h2>Résultat</h2>
        <script>
            // Définition des valeurs dans un tableau
            let numbers = [5, 2, 8, 1, 4];

            // Appel de la fonction tri puis mise en place des valeurs dans variable orderedNumbers
            // let orderedNumbers = tri(numbers, 'desc');
            let orderedNumbers = tri(numbers, 'asc');

            // Affichage dans la console du résultat
            console.log(orderedNumbers); // affiche [1, 2, 4, 5, 8]

        </script>
       
     
    </main>
    <footer>

    </footer>
</body>
</html>