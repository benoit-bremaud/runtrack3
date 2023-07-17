// charger les images du jeu
var pieces = new Image();
var repereImg = new Image();
pieces.src = "assets/logo.jpg";
repereImg.src = "assets/repere.png";
 
window.onload = function() {
 
	// récupère le canva et son contexte
	var canvas = document.getElementById('canvas');
	var ctx = canvas.getContext('2d');
	var audio = document.getElementById('audio');
 
	// variables
	var W = 480;
	var H = 480;
	var T = 120;								// Taille des pièces
	var L = H/T; 								// Lignes
	var C = W/T;								// Colonnes
	var posX = canvas.offsetLeft;
	var posY = canvas.offsetTop;
	var repere; 
	var stockPieces;							// tableau de stockage des pièces
	var timer;
	init();
 
	// initialisation du jeu
	function init() {
 
		canvas.width = W;
		canvas.height = H;
		stockPieces = [];
 
		// boucle sur le nombre de pièces
		for (var i=0; i<L*C;i++){
			var piece = {x:i%C*T, y:parseInt(i/C)*T, width:T, height:T, place:i, depart:false, alpha:1};
			stockPieces.push(piece);				// ajout du conteneur au stock
			if(!i) {						// si la pièce est la première
				piece.alpha=0;					// elle est transparente
				piece.depart=true;				// elle est déjà mélangée
			} 
		}
 
		repere = {x:0,y:0};
		timer = setInterval(melange,15);
		render();
		canvas.addEventListener("click", choisir, false);
		canvas.addEventListener("mousemove", reperePos, false);
	}
 
	// mélanger les pièces
	function melange(){
 
		var P;
		var X;
		var Y;
		var E = 0;
		var i;
		var S = false;
 
		for (var i=0; i<stockPieces.length; i++) {
			if(stockPieces[i].alpha===0) {
				P = stockPieces[i];
				E = i;
				X = parseInt(i%C);
				Y = parseInt(i/C);
				break;
			}
		}
 
		for (var i=0; i<stockPieces.length; i++) {
			if(stockPieces[i]!=P && stockPieces[i].depart==false) {
				var D = parseInt(Math.random()*4)+1;// choisi une direction
				if (D==1 && X-1>=0 && E-1>0) deplace(stockPieces[E-1]);
				if (D==2 && X+1<=C && E+1<stockPieces.length) deplace(stockPieces[E+1]);
				if (D==3 && Y+1<=L && E+L<stockPieces.length) deplace(stockPieces[E+L]);
				if (D==4 && Y-1>=0 && E-L>0) deplace(stockPieces[E-L]);
			}
		}
 
		repere.x = P.x;
		repere.y = P.y;
		render();
 
		for (var i=0; i<stockPieces.length; i++) {
			if(!stockPieces[i].depart) return;
		}
 
		clearInterval(timer);
	}
 
	// déplacement de la pièce
	function deplace(P){
		// recherche le clip invisible
		var I = 0;
		var V;
		for (var i=0; i<stockPieces.length; i++) {
			if(stockPieces[i].alpha===0) {
				I = i;
				V = stockPieces[i];
			}
		}
		// vérifie si la tuile est à coté et inverse les index
		var D = stockPieces.indexOf(P);
		if((parseInt(V.x/T)==C-1 && D==I+1)) return;
		if((parseInt(V.x/T)==0 && D==I-1)) return;
		if(D==I+1 || D==I+L || D==I-L || D==I-1){
			stockPieces[D] = stockPieces[I];
			stockPieces[I] = P;
			if (stockPieces[I].depart==false) stockPieces[I].depart=true;
		}
		audio.play();
		gagne();
	}
 
	// cliquer sur une case
	function choisir(e){
		var id = parseInt((e.clientX-posX)/T)+parseInt((e.clientY-posY)/T)*L;
		var P = stockPieces[id];
		// recherche le clip invisible
		var I = 0;
		var V;
		for (var i=0; i<stockPieces.length;i++) {
			if(stockPieces[i].alpha===0) {
				I = i;
				V = stockPieces[i];
			}
		}
		// vérifie si la tuile est à coté et inverse les index
		var D = stockPieces.indexOf(P);
		if((parseInt(I%C)==C-1 && D==I+1)) return;
		if((parseInt(I%C)==0 && D==I-1)) return;
		if(D==I+1 || D==I+L || D==I-L || D==I-1){
			stockPieces[D] = stockPieces[I];
			stockPieces[I] = P;
			if (!stockPieces[I].depart) stockPieces[I].depart=true;
		}
		audio.play();
		render();
	}
 
	// vérifie si le joueur a gagné
	function gagne(){
		for (var i=0; i<stockPieces.length; i++) {
			if(i!=stockPieces[i].place) return;
		}
		repere.x = 0;
		repere.y = 0;
		finPartie();
	}
 
	// position du repère
	function reperePos(e){
		repere.x = parseInt((e.clientX-posX)/T)*T;
		repere.y = parseInt((e.clientY-posY)/T)*T;
		render();
	}
 
	// fin de partie
	function finPartie(){
		render();
		alert("Fin de partie, cliquez pour rejouer.");
		init();
	}
 
	// Dessine le jeu
	function render() {	
		ctx.fillStyle = "rgb(256,256,256)";
		ctx.fillRect(0, 0, W, H);
		for(var i=0; i<stockPieces.length; i++){
			var p = stockPieces[i];
			if(p.alpha!=0){
				ctx.drawImage(pieces, p.x, p.y, p.width, p.height, parseInt(i%C)*T, parseInt(i/C)*T, p.width, p.height);
			}
		}
		ctx.drawImage(repereImg, repere.x, repere.y);
	}
}