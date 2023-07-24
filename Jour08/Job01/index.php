<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header>
        <nav>

        </nav>
    </header>
    <main class="bg-slate-600">
        <h1 class="text-3xl font-bold underline hover:bg-sky-700">
            Hello assHole!
        </h1>
        <section>
    <h2>Créer un compte</h2>
    <form>
      <!-- Civilité -->
      <div>
        <label>
          <input type="radio" name="civilite" value="M." checked> M.
        </label>
        <label>
          <input type="radio" name="civilite" value="Mme."> Mme.
        </label>
      </div>

      <!-- Prénom -->
      <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom">
      </div>

      <!-- Nom -->
      <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom">
      </div>

      <!-- Adresse -->
      <div>
        <label for="adresse">Adresse :</label>
        <input type="text" id="adresse" name="adresse">
      </div>

      <!-- Email -->
      <div>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email">
      </div>

      <!-- Mot de passe -->
      <div>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password">
      </div>

      <!-- Validation du mot de passe -->
      <div>
        <label for="password_confirm">Confirmer le mot de passe :</label>
        <input type="password" id="password_confirm" name="password_confirm">
      </div>

      <!-- Passions -->
      <div>
        <label>Passions :</label>
        <label>
          <input type="checkbox" name="passions" value="informatique"> Informatique
        </label>
        <label>
          <input type="checkbox" name="passions" value="voyages"> Voyages
        </label>
        <label>
          <input type="checkbox" name="passions" value="sport"> Sport
        </label>
        <label>
          <input type="checkbox" name="passions" value="lecture"> Lecture
        </label>
      </div>

      <!-- Bouton de validation -->
      <button type="submit">Valider</button>
    </form>
  </section>

    </main>
    <footer>
        <ul class="list-disc">
            <li><a href="index.php"></a>Accueil</li>
            <li><a href="index.php"></a>Inscription</li>
            <li><a href="index.php"></a>Connexion</li>
            <li><a href="index.php"></a>Rechercher</li>
        </ul>
    </footer>
</body>
</html>