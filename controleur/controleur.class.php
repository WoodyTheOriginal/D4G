<?php
	require_once ("modele/modele.class.php"); 

	class Controleur {
		private $unModele ; 

		public function   __construct ($serveur, $bdd, $user, $mdp){
			//on instancie le modele 
			$this->unModele = new Modele ($serveur, $bdd, $user, $mdp); 
		}

		public function getTable (){
			return $this->unModele->getTable() ;
		}
		public function setTable ($uneTable)
		{
			$this->unModele->setTable($uneTable);
		}

		public function selectAllOrder ($tab)
		{
			//on récupère les clienst 
			$lesResultats = $this->unModele->selectAllOrder($tab); 

			//je traite les clients 

			//je renvoie les clients 
			return $lesResultats; 
		}
		

		public function selectAll ($tab)
		{
			//on récupère les clienst 
			$lesResultats = $this->unModele->selectAll($tab); 

			//je traite les clients 

			//je renvoie les clients 
			return $lesResultats; 
		}


		public function viderPanier ()
		{
			$lesResultats = $this->unModele->viderPanier(); 
		}

		public function selectAllBddPanier ()
		{
			$lesResultats = $this->unModele->selectAllBddPanier(); 
			return $lesResultats; 
		}

		public function selectCaracBddPanier ()
		{
			$lesResultats = $this->unModele->selectCaracBddPanier(); 
			return $lesResultats; 
		}		


		public function selectAllFiltre ($nomFamilleOrigine) {

		$lesResultats = $this->unModele->selectAllFiltre($nomFamilleOrigine); 
		return $lesResultats;
		}

		public function selectIDFiltre ($incontournable) {

			$lesResultats = $this->unModele->selectIDFiltre($incontournable); 
			return $lesResultats;
		}

		public function selectAllFiltrePanier ($idPanier) {

		$lesResultats = $this->unModele->selectAllFiltre($idPanier); 
		return $lesResultats;
		}


		public function selectBackEnd ()
		{
			$lesResultats = $this->unModele->selectAll(); 
			return $lesResultats; 
		}
		



		public function selectMembreOrder ($tab) {
			$this->unModele->selectMembreOrder($tab);
		}


		public function insert ($tab){
			//on controle les données s'il ya lieu
			$this->unModele->insert($tab);
		}

		public function insertPanier ($tab){
			//on controle les données s'il ya lieu
			$this->unModele->insertPanier($tab);
		}


		public function selectIdmembre ($emailentree) {
			return $this->unModele->selectIdmembre($emailentree);
		}
		public function selectMembre ($emailentree) {
			return $this->unModele->selectMembre ($emailentree);
		}
		public function selectIDMembre1 ($emailentree){
		}
		public function selectFiltre ($filtre){
			return $this->unModele->selectFiltre($filtre);
		}

		public function selectCount (){
			return $this->unModele->selectCount();
		}


		public function selectOrder ($tab){
			return $this->unModele->selectOrder($tab);
		}




		
		public function nbTuples ($uneTable)
		{
			$this->setTable($uneTable); 
			return $this->unModele->nbTuples(); 
		}

		public function delete ($tab)
		{
			$this->unModele->delete ($tab);
		}

		public function selectWhere ($tab)
		{
			return $this->unModele->selectWhere($tab);
		}

		public function update($tab, $where){
			$this->unModele->update($tab, $where);
		}
		
	}

?>