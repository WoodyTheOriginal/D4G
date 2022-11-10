<?php
	$unControleur->setTable ("eco_rules");
	$laPratique = null;

	$tab="BACKEND";
	$lesPratiques = $unControleur->selectAllFiltre ($tab); 
	require_once("vue/vue_bonnes_pratiques_mosaique.php");
?>