document.addEventListener('DOMContentLoaded', function loaded() {
    let button = document.getElementById('button');

    let compteur = document.getElementById('compteur');

    console.log(compteur);

    var test = 0;

    button.addEventListener('click', function(){
        test++;
        compteur.innerHTML = test;
        console.log(test);
    })
})
