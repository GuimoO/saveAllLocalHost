<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Introduction php</title>
</head>
<body>
	<h1>Intro php</h1>
	<h2>Insérer du code php</h2>
	<div>
		<p><strong>Ecrit en php</strong></p>
		<p><?php echo "hello world"; ?></p>		
		<p><strong>Ecrit en html</strong></p>
		<p>hello world</p>
	</div>

	<h2>Chaine de caractère</h2>
	<?php
		$hello = '<p>hello';
		$name = ' Florian</p>';
		echo $hello . $name;
	?>
	<h2>Integer</h2>
	<?php
		$val1 = 3;
		$val2 = 9;
		echo $val1 * $val2;
	?>
	<h2>Condition</h2>
	<?php 
		$plop = null;
		if ($plop == true){
			echo 'variable plop est défini';
		}
	?>
	<h2>Incrémentation</h2>
	<?php 
		$i = 0;
		echo $i;
		$i = $i + 5;
		$i++;
		$i--;
		echo $i;
	?>
	<h2>Modulo</h2>
	<?php 
		$int = 8;
		$result = $int % 2;
		if ($result == 0){
			echo $int . " est divisible par 2";
		}
		else{
			echo $int . " n'est pas divisible par 2";
		}
	?>
	<h2>Tableau</h2>
	<?php 
		$tab = [];
		$tab[0] = 'florian';
		$tab[1] = 'florent';
		$tab[2] = 'vincent';
		$tab[3] = array('wcs', 'bleau', 'paris');
		echo $tab[3][0];
		?><br><?php
		// Debuguage
		print_r($tab);
		var_dump($tab);
	?>

	<h2>Condition</h2>
	<?php 
		$foo = 12;
		$int = 9;
		// Je vérifie une égalitée
		if ($foo == 3) {
			echo 'condition 1';
		}
		// Je vérifie une égalitée
		elseif ($foo == 2) {
			echo 'condition 2';
		}
		// Je vérifie deux conditions avec &&
		elseif ($foo == 9 && $int == 4){
			echo 'condition 3';
		}
		// Ou exclusif avec ||
		elseif ($foo == 9 || $int == 4) {
			echo 'condition 4';
		}
		// Superieur à ...
		elseif($foo > $int){
			echo "condition 5";
		}
		// Superieur ou égal à ...
		elseif($foo >= $int){
			echo "condition 6";
		}
		// Inférieur ou egal à ...
		elseif($foo <= $int){
			echo "condition 7";
		}
		// Inférieur ou egal à ...
		elseif($foo <= $int && $foo < 12){
			echo "condition 8";
		}
		else{
			echo "je ne suis rentré null part";
		}
	?>

	<h2>Boucle</h2>
	<h3>Boucle de répétition</h3>
	<?php 
		for ($i=0; $i < 5; $i++) { 
			$timestart=microtime(true);
			echo $i . ' tour <br>';
			$timeend=microtime(true);
			$time=$timeend-$timestart;
			echo $time . '<br>';
		}
	?>
	<h3>Parcours tableau</h3>
	<?php 
		$tab = array('florian', 'florent', 'vincent', 'fabien', 'cecile', 'daphné');
		$nb_elem = count($tab);
		echo $nb_elem;

		for ($i=0; $i < $nb_elem; $i++) { 
			echo $tab[$i];
		}
	?>
<br>
</body>
</html>