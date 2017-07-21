/* Sélectionner */
	/* class */
	/* balise */
	/* id */
	/* cibler */
/* Ajouter du texte à un élément */
/* Ajout un élément au DOM */
/* Styliser un élément du DOM */
/* Ajouter un écouter un événement */
/* Retirer un écouteur d'événement */

/* BONUS */
/* SetTimeout */
/* SetInterval */

/*SELECTIONNER*/


/*CLASS*/


/*on déclare une variable et on select la class désirée grace à getElementByClassName
var paras = document.getElementsByClassName('paragraph');
console.log(paras);
*/


/*BALISES*/


/*ici on selectionne une balise avec le getElementByTagName
var paras = document.getElementsByTagName('div');
console.log(paras);
*/


/*Id*/

/*ici on selectionne une balise avec le getElementById*/
/*var paras = document.getElementById('wcs');*/
/*console.log(paras);*/

/*permet de voir le contenu text dans la balise visée ds la variable...
console.log(paras.textContent);

=

console.log(paras.innerHTML);
*/


/* CIBLER */

/* 2selecteurs existent*/

/* le 	.querySelector  */

/*var paras = document.querySelector('#fleur p:nth-child(1)');
console.log(paras);*/


/* le querySelectorAll */ 

/*var paras = document.querySelectorAll('div');
console.log(paras);*/


/* AJOUTER UN ECOUTER UN EVENEMENT */

/*var paras = document.querySelectorAll('#fleur p');*/

/*on boucle sur tous les éléments, on ajoute un évenement sur tous les p de #fleur au moment du click, 
ils deviennent rouge et change en coucou*/


/*for (var i=0; i<paras.length; i++){
	paras[i].addEventListener('click', function(){
		this.textContent = "Coucou";
		this.style.color = "red";
	});
}*/




var paras = document.querySelectorAll('#fleur p');

/*on boucle sur tous les éléments, on ajoute un évenement sur tous les p de #fleur au moment du survol de la souris, 
ils deviennent rouge et change en coucou*/


for (var i=0; i<paras.length; i++){
	paras[i].addEventListener('mouseover', function(){
		this.textContent = "Coucou";
		this.style.color = "red";
	});
}