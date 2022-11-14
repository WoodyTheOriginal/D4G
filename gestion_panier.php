<?php
$unControleur->setTable ("eco_rules");
/*
echo'<form class = "btPanier" action="index.php?page=9" method="post">
 <p><input type="submit" name ="viderPanier" value="Vider le panier"></p>
</form>';
echo'<form class = "btPanier" action="index.php?page=9" method="post">
 <p><input type="submit" name ="extrairePDF" value="Extraire en PDF"></p>
</form>';
*/



echo'<form action="index.php?page=9" method="post" class="btPanier">
  <div>
   <p> <input class="btPanierStyle" type="submit" name="viderPanier" value="Vider le panier"></p>
   <p> <input class="btPanierStyle" type="submit" name="extrairePDF" value="Extraire en PDF"></p>
  </div>
  
</form>';







if (!empty($_POST['viderPanier'])){
	$unControleur->setTable("panier");
	$unControleur->viderPanier();
}

if (isset($_GET['action']) && isset($_GET['idpratique']))
{
	$idPra = $_GET['idpratique']; 
	$action = $_GET['action'];

	switch ($action){
		case "sup" : 
			$unControleur->setTable("panier");
			$tab=array("idArticlePanier"=>$idPra); 
			$unControleur->delete($tab);
			break;
	}
}
$lesPratiques = $unControleur->selectAllBddPanier(); 
require_once("vue/vue_bilan.php");
  ?>



