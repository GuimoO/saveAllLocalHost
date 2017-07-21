<?php

include_once 'Cat.php';
include_once 'Collar.php';

/* je créer un nouvelle objet ici un chat*/

// sans collier

$gwenoa = new Cat('Gwenoa', 'gris');
//jecho mon chat qui prend en nom le getname qu'on lui écrit

	echo $gwenoa->getName();



//avec collier
//je definis l'attribut collier et lui donne des valeurs

$collier_gege = new Collar('12cm', 'red');

//je créer mon 2eme chat

$gege = new Cat('Gege ', 'red', $collier_gege);
//je lui donne une valeur fatigue
$gege->setFatigue(20);
//je lui donne une image 
$gege->setImage('http://www.oh-green.eu/docs/cms/17.jpg');

//jenvois mon programme, une boucle tant que le chat n'est pas fatigué il marche et s'incremente la fatigue de 10 à chaque
//tour de boucle et si il est fatigué (valeur fatigue >= à 100 il se repose et la fatigue revient à zero)

while ($gege->isTired() == false) {

	$gege->walk();
}

if ($gege->isTired() == true) {

	$gege->rest();

}
	echo $gege;

