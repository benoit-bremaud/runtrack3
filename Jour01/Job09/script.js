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

// Création de la fonction "jourtravaille"
function jourtravaille(date) {
    const weekdayOption = {
        weekday: 'long', // 'long' pour obtenir le nom complet du jour de la semaine
    };

    const monthOption = {
        month: 'long', // 'long' pour obtenir le nom complet du jour de la semaine
    };

    const nomJour = date.toLocaleDateString('fr-FR', weekdayOption);
    const nomMois = date.toLocaleDateString('fr-FR', monthOption);

    const jour = date.getDate();
    const mois = date.getMonth() + 1; // Les mois sont indexés à partir de 0
    const annee = date.getFullYear();
  
    const jourSemaine = date.getDay(); // Renvoie un chiffre de 0 (dimanche) à 6 (samedi)
  
    const joursFeries2020 = [
      "2020-01-01", // Jour de l'an
      "2020-04-13", // Lundi de Pâques
      "2020-05-01", // Fête du Travail
      "2020-05-08", // Victoire 1945
      "2020-05-21", // Ascension
      "2020-06-01", // Lundi de Pentecôte
      "2020-07-14", // Fête nationale
      "2020-08-15", // Assomption
      "2020-11-01", // Toussaint
      "2020-11-11", // Armistice 1918
      "2020-12-25" // Noël
    ];

    
  
    const dateFormatee = `${nomJour} ${jour} ${nomMois} ${annee}`;
  
    if (joursFeries2020.includes(date.toISOString().substr(0, 10))) {
      console.log(`Le ${dateFormatee} est un jour férié`);
    } else if (jourSemaine === 0 || jourSemaine === 6) {
      console.log(`Non, ${dateFormatee} est un week-end`);
    } else {
      console.log(`Oui, ${dateFormatee} est un jour travaillé`);
    }
}

function tri(numbers, order) {
    if (order === 'asc') {
      for (let i = 0; i < numbers.length - 1; i++) {
        for (let j = 0; j < numbers.length - i - 1; j++) {
          if (numbers[j] > numbers[j + 1]) {
            let temp = numbers[j];
            numbers[j] = numbers[j + 1];
            numbers[j + 1] = temp;
          }
        }
      }
    } else if (order === 'desc') {
      for (let i = 0; i < numbers.length - 1; i++) {
        for (let j = 0; j < numbers.length - i - 1; j++) {
          if (numbers[j] < numbers[j + 1]) {
            let temp = numbers[j];
            numbers[j] = numbers[j + 1];
            numbers[j + 1] = temp;
          }
        }
      }
    }
    return numbers;
  }
  
  