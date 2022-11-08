<?php
	session_start();
	require_once ("controleur/controleur.class.php");
	//require_once ("conf/config.ini"); 
	//instancier la classe Controleur 
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Design4Green</title>
		<meta charset="utf-8">
	</head>
	
<body>	
		<?php echo "<div id='content'>"; ?>
		
			<?php

			//include 'header.php' ;
		
			if(isset($_GET['page'])) $page = $_GET['page']; 
				else  $page = 0;
			switch ($page)
			{
				case 0 :   
					require_once("accueil.php");
				break; 
				case 1 : 
				    require_once("");
				break; 
				case 2 :
					require_once("");
				break; 		
			} 
		?>
		<?php echo "</div>"; ?>
</body>
<?php //include 'footer.php'; ?>
</html>