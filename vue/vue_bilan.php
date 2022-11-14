<center>
<h2>Panier</h2>

<table class ="styled-table2" border = "1">
	<tr>     
		<thead>
			<td> Famille Origine </td>
			<td> ID </td> 
			<td> Planet </td> 
			<td> People </td>
			<td> Prosperity </td>
			<td> Recommandation </td>
			<td> Criteres </td>
			<td> Justifications </td>
			<td> Etape Cycle de Vie </td>
			<td> Test 1.1.1 </td>
			<td> Test 1.1.2 </td>
			<td> Correspondance </td>
			<td> Lien </td>
			<td> Type </td>
			<td> Difficulté de mise en oeuvre </td>
			<td> Objectif(s) ODD </td>
			<td> Tags Opérationnels </td>
			<td> Indicateurs </td>
			<td> X Indicateur </td>
			<td> Y Indicateur </td>
			<td> Retirer </td>
		</thead>

	</tr>

	<?php 
	foreach ($lesPratiques as $unePratique) {
		echo "<tr> 
				<td>".$unePratique['FamilleOrigine']." </td>
				<td>".$unePratique['ID']." </td>
				<td>".$unePratique['Planet']." </td>
				<td>".$unePratique['People']." </td>
				<td>".$unePratique['prosperity']." </td>
				<td>".$unePratique['RECOMMANDATION']." </td>
				<td>".$unePratique['CRITERES']." </td>
				<td>".$unePratique['JUSTIFICATIONS']." </td>
				<td>".$unePratique['EtapeCycledeVie']." </td>
				<td>".$unePratique['TEST1.1.1']." </td>
				<td>".$unePratique['TEST1.1.2']." </td>
				<td>".$unePratique['CORRESPONDANCE']." </td>
				<td>".$unePratique['Lien']." </td>
				<td>".$unePratique['TYPE']." </td>
				<td>".$unePratique['DifficulteOeuvre']." </td>
				<td>".$unePratique['ObjectifODD']." </td>
				<td>".$unePratique['TagsOperationnel']." </td>
				<td>".$unePratique['Indicateurs']." </td>
				<td>".$unePratique['XIndicateurs']." </td>
				<td>".$unePratique['YIndicateurs']." </td>

				<td><a href='index.php?page=9&action=sup&idpratique=".$unePratique['ID']."'>
				<img src ='image/sup.png' height='30' witdh='30'> </a></td>
				";

			 
				
			  echo "</tr>";
	}
	?>

</table>
</center>






