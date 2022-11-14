<center><h1>Back End</h1></center>
<?php
	echo "<div class ='container_box'>";
	foreach ($lesPratiques as $unePratique) {

					echo "<div class ='box'>
						<div class ='boxBlank'>";
							echo $unePratique['FamilleOrigine'];
						echo "</div>";
						echo "<div class ='boxDetail'>";
							echo $unePratique['CRITERES'];
						echo"</div>";
					echo "<a href='index.php?page=2&idpratique=".$unePratique['ID']."'><div class ='boxInfo'>
							<div class='boxBtAjouter'<button type='submit'>Ajouter</button></div></a>";
							echo"<a href='#'><div class ='boxInf'>";
							echo "</div></a>
						</div>
					</div>";

	}
	echo"</div>";
	?>