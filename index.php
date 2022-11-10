<?php
	session_start();
	require_once ("controleur/controleur.class.php");
	require_once ("conf/config.ini"); 
	$unControleur = new Controleur($serveur, $bdd, $user, $mdp);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Liste des Bonnes Pratiques</title>
		<meta charset="utf-8">
		<link rel="icon" href="image/D4G_rogne.jpg"/>
  		<link rel="stylesheet" type="text/css" href="css/style.css">
  		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
<body>	
		<?php echo "<div id='content'>"; ?>
		
			<?php

			include 'header.php' ;
		
			if(isset($_GET['page'])) $page = $_GET['page']; 
				else  $page = 0;
			switch ($page)
			{
				case 0 :   
					require_once("gestion_bonnes_pratiques.php");
				break; 
				case 1 : 
				    require_once("gestion_architecture.php");
				break; 
				case 2 :
					require_once("gestion_backEnd.php");
				break; 		
				case 3 :
					require_once("gestion_contenus.php");
				break;
				case 4 :
					require_once("gestion_frontEnd.php");
				break;
				case 5 :
					require_once("gestion_hebergement.php");
				break;
				case 6 :
					require_once("gestion_specifications.php");
				break;
				case 7 :
					require_once("gestion_strategie.php");
				break;
				case 8 :
					require_once("gestion_ux_ui.php");
				break;

			} 
		?>
		<?php echo "</div>"; ?>
</body>
<?php include 'footer.php'; ?>
</html>