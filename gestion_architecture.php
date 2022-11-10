<?php
	$unControleur->setTable ("eco_rules");
	$unePratique = null;

	$tab="ARCHITECTURE";
	$lesPratiques = $unControleur->selectAllFiltre ($tab); 
	require_once("vue/vue_bonnes_pratiques_mosaique.php");
?>