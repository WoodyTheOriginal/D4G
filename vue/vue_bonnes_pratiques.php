<center>
<h2> Liste des bonnes Pratiques</h2>

<table class ="styled-table" border = "1">
	<tr> <thead>
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
			<td> Incontournable </td>
			<td> Tags Opérationnels </td>
			<td> Indicateurs </td>
			<td> X Indicateur </td>
			<td> Y Indicateur </td>
			<td> Priorité </td>
			<td> Récurrence </td>
			<td> Use Case </td>
			<td> Exemple </td>
			<td> Limites </td>
			<td> Automatisable Y/N </td>
			<td> Automatisation </td>
	</thead></tr>

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
				<td>".$unePratique['Priorite']." </td>
				<td>".$unePratique['Recurrence']." </td>
				<td>".$unePratique['UseCase']." </td>
				<td>".$unePratique['Exemple']." </td>
				<td>".$unePratique['Limites']." </td>
				<td>".$unePratique['Automatisable(Y/N)']." </td>
				";

			 
				
			  echo "</tr>";
	}
	?>

</table>
</center>






