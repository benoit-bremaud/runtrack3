// alert('Hello Javascript');
// console.log('Hello Javascript !');

// Création de la fonction test si année bisextile
function bissextile(annee) {
    if ((annee % 4 === 0 && annee % 100 !== 0) || annee % 400 ===0) {
        return true;
    }
    return false;
}

// Création de la fonction "afficherjourssemaines"
function afficherjourssemaines() {
    const jourssemaines = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
    for (let x in jourssemaines) {
        console.log(jourssemaines[x]);        
    }
}

// Création de la fonction "fizzbuzz"
function fizzbuzz() {
    for (let index = 1; index < 151; index++) {
        if (index % 3 === 0 && index % 5 === 0) {
            console.log('FizzBuzz');
        }
        else if (index % 3 === 0) {
            console.log('Fizz');
        }
        else if (index % 5 === 0) {
            console.log('Buzz');
        }
        else
        {
            console.log(index);                        
        }
    }
}