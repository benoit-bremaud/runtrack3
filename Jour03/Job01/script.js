// function show() {
//         article.style.display = "block";
//         article.innerHTML = "Les logiciels et les cathédrales, c'est un peu la même chose - d'abord on les construit, ensuite on prie";
// }

// function hide() {
//     article.style.display = "none";
//     article.innerHTML = "";
//     $("#affiche").hide();
// }

$("#affiche").click(function() {
    $("#article").show();
    $("#efface").show();
    $("#affiche").hide();
})

$("#efface").click(function() {
    $("#article").hide();
    $("#efface").hide();
    $("#affiche").show();
});