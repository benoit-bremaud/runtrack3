// Code Konami : ↑ ↑ ↓ ↓ ← → ← → B A
const konamiCode = [
    'ArrowUp',
    'ArrowUp',
    'ArrowDown',
    'ArrowDown',
    'ArrowLeft',
    'ArrowRight',
    'ArrowLeft',
    'ArrowRight',
    'KeyB',
    'KeyA'
];

let konamiCodePosition = 0;
  
document.addEventListener('keydown', function(event) {
    if (event.code === konamiCode[konamiCodePosition]) {
        
        console.log(event.code);
        konamiCodePosition++;
        if (konamiCodePosition === konamiCode.length) {
        applyPlatformStyles();
        }
    }
    else
    {
        konamiCodePosition = 0;
    }
});
  
function applyPlatformStyles() {
    // Modifier les styles de la page pour refléter la charte graphique de La Plateforme_
    // Utilisez les couleurs trouvées sur https://laplateforme.io/
  
    console.log("Ca marche !");
    document.body.style.backgroundColor = '#ff00ff';
    document.body.style.color = '#ff0000';
    // Appliquez les autres styles nécessaires selon la charte graphique
}
  