<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-violet-900 to-violet-200 text-white">
<header class="bg-purple-600 text-white p-4 flex items-center justify-between">
    <nav class="hidden md:flex space-x-4">
      <ul class="flex space-x-4">
        <li><a href="#accueil" class="hover:text-yellow-300 hover:cursor-pointer transition">Accueil</a></li>
        <li><a href="#inscription" class="hover:text-yellow-300 hover:cursor-pointer transition">Inscription</a></li>
        <li><a href="#connexion" class="hover:text-yellow-300 hover:cursor-pointer transition">Connexion</a></li>
        <li><a href="#rechercher" class="hover:text-yellow-300 hover:cursor-pointer transition">Rechercher</a></li>
      </ul>
    </nav>
    <!-- Bouton pour afficher/masquer le menu burger -->
    <button class="md:hidden focus:outline-none" id="menuToggle">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M4 6h16M4 12h16m-7 6h7"></path>
      </svg>
    </button>

  </header>
    <!-- Menu burger pour les petits écrans -->
    <div class="hidden md:hidden" id="mobileMenu">
    <nav class="bg-purple-600 text-white p-4">
      <ul class="space-y-4">
        <li><a href="#accueil" class="block hover:text-yellow-300">Accueil</a></li>
        <li><a href="#inscription" class="block hover:text-yellow-300">Inscription</a></li>
        <li><a href="#connexion" class="block hover:text-yellow-300">Connexion</a></li>
        <li><a href="#rechercher" class="block hover:text-yellow-300">Rechercher</a></li>
      </ul>
    </nav>
  </div>
    <main>
        <h1 class="text-3xl font-bold underline hover:bg-purple-700">
            Hello assHole!
        </h1>
        <section class="container mx-auto p-4">
            <h2 class="text-2xl font-bold text-purple-200">Créer un compte</h2>
            <form class="space-y-4">
            <!-- Civilité -->
            <div class="space-x-2">
                <label>
                    <input type="radio" name="civilite" value="M." class="form-radio" checked> M.
                </label>
                <label>
                    <input type="radio" name="civilite" value="Mme." class="form-radio"> Mme.
                </label>
            </div>

      <!-- Prénom -->
      <div>
        <label for="prenom" class="block font-bold text-purple-200">Prénom :</label>
        <input type="text" id="prenom" name="prenom" class="form-input">
      </div>

      <!-- Nom -->
      <div>
        <label for="nom" class="block font-bold text-purple-200">Nom :</label>
        <input type="text" id="nom" name="nom" class="form-input">
      </div>

      <!-- Adresse -->
      <div>
        <label for="adresse" class="block font-bold text-purple-200">Adresse :</label>
        <input type="text" id="adresse" name="adresse" class="form-input">
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block font-bold text-purple-200">Email :</label>
        <input type="email" id="email" name="email" class="form-input">
      </div>

      <!-- Mot de passe -->
      <div>
        <label for="password" class="block font-bold text-purple-200">Mot de passe :</label>
        <input type="password" id="password" name="password" class="form-input">
      </div>

      <!-- Validation du mot de passe -->
      <div>
        <label for="password_confirm" class="block font-bold text-purple-200">Confirmer le mot de passe :</label>
        <input type="password" id="password_confirm" name="password_confirm" class="form-input">
      </div>

      <!-- Passions -->
      <div>
        <label class="block font-bold text-purple-200">Passions :</label>
        <label class="inline-flex items-center">
          <input type="checkbox" name="passions" value="informatique" class="form-checkbox">
          <span lass="ml-2">Informatique</span>
        </label>
        <label class="inline-flex items-center ml-4">
          <input type="checkbox" name="passions" value="voyages" class="form-checkbox">
          <span class="m1-2">Voyages</span>
        </label>
        <label class="inline-flex items-center ml-4">
          <input type="checkbox" name="passions" value="sport" class="form-checkbox">
          <span class="m1-2">Sport</span>
        </label>
        <label class="inline-flex items-center ml-4">
          <input type="checkbox" name="passions" value="lecture" class="form-checkbox">
          <span class="m1-2">Lecture</span>
        </label>
      </div>

      <!-- Bouton de validation -->
      <button type="submit" class="bg-purple-600 text-white px-4 py-2 rounded">Valider</button>
    </form>
  </section>

    </main>
    <footer class="bg-purple-600 p-4 text-white text-center md:flex md:justify-center md:space-x-8">
        <!-- Menu burger pour le footer -->
        <button class="md:hidden focus:outline-none" id="footerMenuToggle">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
        <div class="hidden md:flex justify-between">
            <ul class="list-none space-x-4">
                <li><a href="index.php" class="text-white hover:text-yellow-300 hover:cursor-pointer transition">Accueil</a></li>
                <li><a href="index.php" class="text-white hover:text-yellow-300 hover:cursor-pointer transition">Inscription</a></li>
                <li><a href="index.php" class="text-white hover:text-yellow-300 hover:cursor-pointer transition">Connexion</a></li>
                <li><a href="index.php" class="text-white hover:text-yellow-300 hover:cursor-pointer transition">Rechercher</a></li>
            </ul>
        </div>
        <!-- Menu burger pour le footer -->
        <div class="hidden md:hidden space-y-reverse" id="footerMobileMenu">
            <nav class="bg-purple-600 text-white p-4">
                <ul class="space-y-4">
                    <li><a href="index.php" class="block hover:text-yellow-300">Accueil</a></li>
                    <li><a href="index.php" class="block hover:text-yellow-300">Inscription</a></li>
                    <li><a href="index.php" class="block hover:text-yellow-300">Connexion</a></li>
                    <li><a href="index.php" class="block hover:text-yellow-300">Rechercher</a></li>
                </ul>
            </nav>
        </div>
    </footer>
    <script>
        // JavaScript pour gérer le menu burger du header
        const headerMenuToggle = document.getElementById('headerMenuToggle');
        const headerMobileMenu = document.getElementById('headerMobileMenu');

        headerMenuToggle.addEventListener('click', () => {
        headerMobileMenu.classList.toggle('hidden');
        });

        // JavaScript pour gérer le menu burger du footer
        const footerMenuToggle = document.getElementById('footerMenuToggle');
        const footerMobileMenu = document.getElementById('footerMobileMenu');

        footerMenuToggle.addEventListener('click', () => {
        footerMobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>