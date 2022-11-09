<center><h1>Les Bonnes pratiques</h1></center>
<?php
	echo "<div class ='container_box'>";
	foreach ($lesPratiques as $unePratique) {

					echo "<div class ='box'>
						<div class ='boxDate'>";
							echo $unePratique['Famille Origine'];
						echo "</div>";
						echo "<div class ='boxDetail'>";
							echo $unePratique['CRITERES'];
						echo"</div>";
					echo "<a href='#'><div class ='boxTicInf'>
							<div class ='boxTicket'>Ajouter</div></a>";
							echo"<a href='#'><div class ='boxInfo'>";
							echo "</div></a>
						</div>
					</div>";

	}
	echo"</div>";
	?>



<?php
/*
<center><h1>Les Bonnes pratiques</h1></center>
<?php
	echo "<div class ='container_box'>";
	foreach ($lesPratiques as $unePratique) {

					echo "<div class ='box'>
						<div class ='boxDate'>";
							echo $unePratique['Famille Origine'];
						echo "</div>";
						echo "<div class ='boxDetail'>";
							echo "<img src=".$unePratique['RECOMMANDATION'].">";
						echo"</div>";
					echo "<a href='#'><div class ='boxTicInf'>
							<div class ='boxTicket'>Ajouter</div></a>";
							echo"<a href='#'><div class ='boxInfo'>";
							echo $unePratique['RECOMMANDATION'];
							echo "</div></a>
						</div>
					</div>";

	}
	echo"</div>";
	?>
*/

?>