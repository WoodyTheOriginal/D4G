<center>
	<h1>Les Bonnes pratiques</h1>
</center>
<?php
	echo "<div class ='container_box'>";
	if (is_array($lesPratiques) || is_object($lesPratiques)) {
		foreach ($lesPratiques as $unePratique) {
			echo "<div class ='box'>
					<div class ='boxDate'>";
			echo $unePratique['Famille_Origine'];
			echo "</div>";
			echo "<div class ='boxDetail'>";
			echo $unePratique['CRITERES'];
			echo "</div>";
			echo "</div>
				</div>";

		}
	}
	else {
		echo "NON";
	}

	echo "</div>";
?>