<center><h1>UX/UI</h1></center>
<?php
	echo "<div class ='container'>";
	foreach ($lesPratiques as $unePratique) {

		echo "<div class ='card'>
				<div class='card-body'>
				<div class ='card-title'>";
				echo $unePratique['FamilleOrigine'];
		echo 	"</div>";
		echo "<div class ='card-text'>";
		echo $unePratique['CRITERES'];
		echo "</div>";
		echo "<a href='index.php?page=1&idpratique=" . $unePratique['ID'] . "'><div class ='boxInfo'>
			<div class='btn btn-primary'<button type='submit'>Ajouter</button></div></a>";
		echo "<a href='#'><div class ='boxInf'>";
		echo "</div></a>
							</div>
						</div>";
	
	}
	echo"</div>";
	?>