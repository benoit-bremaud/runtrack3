// function show() {
//         article.style.display = "block";
//         article.innerHTML = "Les logiciels et les cathédrales, c'est un peu la même chose - d'abord on les construit, ensuite on prie";
// }

// function hide() {
//     article.style.display = "none";
//     article.innerHTML = "";
//     $("#affiche").hide();
// }

affiche.addEventListener("click", function() {
    article.style.display = "block";
    efface.style.display = "block";
    affiche.style.display = "none";
})

efface.addEventListener("click", function() {
    article.style.display = "none";
    efface.style.display = "none";
    affiche.style.display = "block";
})