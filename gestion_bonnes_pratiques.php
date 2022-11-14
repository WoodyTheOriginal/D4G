<?php
	$unControleur->setTable ("eco_rules");
	$tab=array("*");
	$lesPratiques = $unControleur->selectAll ($tab); 
	require_once("vue/vue_bonnes_pratiques.php");
  ?>



