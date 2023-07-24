// Fonction pour valider les formulaires
function validateForm(event) {
    event.preventDefault(); // Empêcher la soumission du formulaire

    // Réinitialiser les messages d'erreur
    var errorElements = document.getElementsByClassName('error');
    for (var i = 0; i < errorElements.length; i++) {
        errorElements[i].textContent = '';
    }

    // Validation du formulaire d'inscription
    if (event.target.id === 'inscriptionForm') {
        var nom = document.getElementById('nom').value;
        var prenom = document.getElementById('prenom').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var confirmPassword = document.getElementById('confirmPassword').value;

        // Vérifier les conditions de validation
        var valid = true;

        if (nom === '') {
            document.getElementById('nomError').textContent = 'Veuillez saisir votre nom.';
            valid = false;
        }

        if (prenom === '') {
            document.getElementById('prenomError').textContent = 'Veuillez saisir votre prénom.';
            valid = false;
        }

        if (email === '') {
            document.getElementById('emailError').textContent = 'Veuillez saisir votre email.';
            valid = false;
        }

        // ... Ajoutez des vérifications supplémentaires ici ...

        // Soumettre le formulaire si toutes les conditions sont remplies
        if (valid) {
            // Envoi du formulaire vers la page de connexion
            window.location.href = 'connexion.php';
        }
    }

    // Validation du formulaire de connexion
    if (event.target.id === 'connexionForm') {
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;

        // Vérifier les conditions de validation
        var valid = true;

        if (email === '') {
            document.getElementById('emailError').textContent = 'Veuillez saisir votre email.';
            valid = false;
        }

        // ... Ajoutez des vérifications supplémentaires ici ...

        // Soumettre le formulaire si toutes les conditions sont remplies
        if (valid) {
            // Enregistrement de la connexion dans la session
            sessionStorage.setItem('prenom', 'John'); // Remplacez par le prénom réel de l'utilisateur
            // Redirection vers la page d'accueil
            window.location.href = 'index.php';
        }
    }
}
