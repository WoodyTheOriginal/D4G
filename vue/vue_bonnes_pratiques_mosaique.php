<center>
	<h1>Les Bonnes pratiques</h1>
</center>
<?php
	echo "<div class ='container_box'>";
		foreach ($lesPratiques as $unePratique) {
			echo "<div class ='box'>
					<div class ='boxDate'>";
			echo $unePratique['Famille_Origine'];
			echo "</div>";
			echo "<div class ='boxDetail'>";
			echo $unePratique['CRITERES'];
			echo "</div>";
			if ($unePratique['INCONTOURNABLE'] == 'INCONTOURNABLE') {
				echo "<input type='checkbox' checked/>";
			}
			else {
				echo "<input type='checkbox'/>";
			}			
			echo "</div>
				</div>";

		}
	echo "</div>";
?>