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