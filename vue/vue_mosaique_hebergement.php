<center><h1>Hebergement</h1></center>
<?php
echo "<div class ='container'>";
foreach ($lesPratiques as $unePratique) {

	echo "<div class ='card'>
			<div class='card-body'>
				<div class ='card-title'>";
				echo $unePratique['FamilleOrigine'];
				echo "</div>";
				echo "<div class ='card-text'>";
				echo $unePratique['CRITERES'];
				echo "</div>";
				echo "<a href='index.php?page=5&idpratique=" . $unePratique['ID'] . "'><div class='btn btn-primary'<button type='submit'>Ajouter</button></div></a>";
				echo "<a href='#'><div class ='boxInf'></div></a>
			</div>
		</div>";

}
echo "</div>";
?>