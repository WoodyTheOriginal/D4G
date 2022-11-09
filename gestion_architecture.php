<?php
	$unControleur->setTable ("eco_rules");
	$laPratique = null;

	$tab=array("*");
	$lesPratiques = $unControleur->selectAll ($tab); 
	require_once("vue/vue_bonnes_pratiques_mosaique.php");
?>