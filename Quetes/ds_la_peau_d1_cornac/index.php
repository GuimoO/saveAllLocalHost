<?php include 'includes/header.php' ?>



<?php include 'table_program.php' ?>

<table>

	<thead>
		<tr>
			<th>Heure</th>
			<th>Titre Spectacle</th>
			<th>Artistes</th>
			<th>Photos</th>

		</tr>
	</thead>
	<tbody>
		<tr>

<?php foreach ($tabprog as $infoprog) {
		
		echo "<td>" . $infoprog . "</td>";  
					
}?>
		</tr>
		<tr>

<?php foreach ($tabprog1 as $infoprog1) {

		echo "<td>" . $infoprog1 . "</td>";

}?>

		</tr>
		<tr>

<?php foreach ($tabprog2 as $infoprog2) {

		echo "<td>" . $infoprog2 . "</td>";

}?>

		</tr>
		<tr>

<?php foreach ($tabprog3 as $infoprog3) {

		echo "<td>" . $infoprog3 . "</td>";

}?>

		</tr>

	</tbody>

</table>

<?php include 'includes/footer.php' ?>


