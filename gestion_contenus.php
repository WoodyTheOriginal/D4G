<?php

if ( isset($_GET['idpratique'])){
	$tmp = $_GET['idpratique'];
	$unControleur->setTable("panier");
	$tab=array("idArticlePanier"=>$tmp);
	$unControleur->insert($tab);
}

	$unControleur->setTable ("eco_rules");
	$laPratique = null;
	$familleOriginePratique ="Contenus";
	$lesPratiques = $unControleur->selectAllFiltre ($familleOriginePratique); 
	require_once("vue/vue_mosaique_contenus.php");
?>