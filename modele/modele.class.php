<?php
    class Modele {

        private $unPdo , $uneTable, $unId; 

        public function   __construct ($serveur, $bdd, $user, $mdp)
        {
            $this->unPdo =null; 
            try{
        $this->unPdo = new PDO ("mysql:host=".$serveur.";dbname=".$bdd, $user, $mdp);
            }
            catch (PDOException $exp){
                echo "Erreur de connexion au serveur : ".$serveur."/".$bdd ;
            }
        }
        public function getTable (){
            return $this->uneTable ;
        }
        public function setTable ($uneTable)
        {
            $this->uneTable = $uneTable;
        }


        public function selectAllOrder ($tab) {
            if ($this->unPdo != null){
                $chaine = implode(", ", $tab); 
                $requete = "select ".$chaine." from " .$this->uneTable. " order by nom, prenom ; ";
                $select = $this->unPdo->prepare ($requete); 
                $select->execute (); 
                return $select->fetchAll();  
            } else {
                return null; 
            }
        }

        public function selectAll ($tab) {
            if ($this->unPdo != null){
                $chaine = implode(", ", $tab); 
                $requete = "select ".$chaine." from " .$this->uneTable. " ; ";
                $select = $this->unPdo->prepare ($requete); 
                $select->execute (); 
                return $select->fetchAll();  
            } else {
                return null; 
            }
        }
        public function selectAllBddPanier () {
            if ($this->unPdo != null){
                $requete = "
                        SELECT * from eco_rules
                        INNER JOIN panier
                        ON panier.idArticlePanier = eco_rules.ID; ";
                $select = $this->unPdo->prepare ($requete); 
                $select->execute (); 
                return $select->fetchAll();  
            } else {
                return null; 
            }
        }

        public function selectCaracBddPanier () {
            if ($this->unPdo != null){
                $requete = "
                        SELECT FamilleOrigine,ID,XIndicateurs,YIndicateurs,Indicateurs from eco_rules
                        INNER JOIN panier
                        ON panier.idArticlePanier = eco_rules.ID; ";
                $select = $this->unPdo->prepare ($requete); 
                $select->execute (); 
                return $select->fetchAll(PDO::FETCH_ASSOC);  
            } else {
                return null; 
            }
        }        

        public function viderPanier () {
            if ($this->unPdo != null){
                $requete = "truncate table panier;";
                $select = $this->unPdo->prepare ($requete); 
                $select->execute (); 
            }
        }


        public function selectAllFiltre ($nomFamilleOrigine) {
            if ($this->unPdo != null){
                $requete = "select * from eco_rules where FamilleOrigine"."= \"".$nomFamilleOrigine."\" ;";
                $select = $this->unPdo->prepare ($requete); 
                $select->execute (); 
                return $select->fetchAll();  
            }else {
                return null;
            }
        }

        public function selectIDFiltre ($incontournable) {
            if ($this->unPdo != null){
                $requete = "select ID from eco_rules where incontournables"."= \"".$incontournable."\" ;";
                $select = $this->unPdo->prepare ($requete); 
                $select->execute (); 
                return $select->fetchAll();  
            }else {
                return null;
            }
        }
                public function selectAllFiltrePanier ($idPanier) {
            if ($this->unPdo != null){
                $requete = "select * from eco_rules where ID"."= \"".$idPanier."\" ;";
                $select = $this->unPdo->prepare ($requete); 
                $select->execute (); 
                return $select->fetchAll();  
            }else {
                return null;
            }
        }



        public function insert ($tab){
            //$tab est le $_POST du formulaire 
            if ($this->unPdo != null){
                $listeChamps = array(); 
                $donnees =array();
                $listeAttributs =array();
                foreach ($tab as $cle => $valeur) {
                     $listeChamps[] = ":".$cle;
                     $donnees[":".$cle] = $valeur;
                     $listeAttributs[] = $cle;
                }
                $chaineChamps = implode(", ", $listeChamps);
                $chaineAttributs = implode(", ", $listeAttributs);

                $requete = "insert  into  ".$this->uneTable."(".$chaineAttributs.")  values( ".$chaineChamps.") ; " ;
                $insert = $this->unPdo->prepare ($requete); 
                $insert->execute ($donnees); 
            }
        }

               public function insertPanier ($Id){
                $requete = "insert  into  panier  values(null,  ".$Id.") ; " ;
                $insert = $this->unPdo->prepare ($requete); 
                $insert->execute ($donnees); 
            }
        

        public function nbTuples ()
        {
            if ($this->unPdo != null){
                $requete = "select count(*) as nb from  ".$this->uneTable. ";" ; 
                $count = $this->unPdo->prepare ($requete); 
                $count->execute (); 
                $resultat = $count->fetch(); 
                return $resultat['nb'];
            }
            else {
                return 0; 
            }
        }

        public function delete ($tab)
        {
            if ($this->unPdo != null){
                $listeChamps = array(); 
                $donnees =array();
                foreach ($tab as $cle => $valeur) {
                    $listeChamps[] = $cle." = ".":".$cle ;
                    $donnees[":".$cle] = $valeur;
                }
                $chaineChamps = implode(" and ", $listeChamps); 
                $requete ="delete from   ".$this->uneTable." where  ".$chaineChamps.";" ;
                 
                $delete = $this->unPdo->prepare ($requete); 
                $delete->execute ($donnees); 

            }
        }
        public function selectIdmembre ($emailentree) {
                $requete = "select idmembre from membre where email "."= \"".$emailentree."\" ;";
                $selectid = $this->unPdo->prepare ($requete); 
                $selectid->execute (); 
                $resultat = $selectid->fetch(); 
                return $resultat[0];
        }
        public function selectOrder ($tab) {
                $requete = "select nom, prenom, idmembre from membre order by nom, prenom ;";
                $selectid = $this->unPdo->prepare ($requete); 
                $selectid->execute (); 
                $resultat = $selectid->fetch(); 
                return $resultat[0];
        }
        public function selectFiltre ($filtre) {
                $requete = "select * from eco_rules where CRITERE "."= \"".$filtre."\" ;";
                $selectid = $this->unPdo->prepare ($requete); 
                $selectid->execute (); 
                $resultat = $selectid->fetch(); 
                return $resultat;
        }
        public function selectMembreOrder ($tab) {
                $requete = "select nom, prenom, idmembre from membre order by nom,prenom ;";
                $select = $this->unPdo->prepare ($requete); 
                $select->execute (); 
                return $select->fetchAll(); 

        }

        public function selectCount ()
        {
                $requete = "select count(*) as nb from membre;;" ; 
                $count = $this->unPdo->prepare ($requete); 
                $count->execute (); 
                $resultat = $count->fetch(); 
                return $resultat['nb'];
            
        }




        public function selectMembre ($emailentree){
        $sql = "SELECT idmembre FROM membre WHERE email ='$emailentree'";
        $req = mysqli_query($sql); 
        return $req;
        }
        public function selectIDMembre1 ($emailentree){
            $sql = 'select idmembre from membre where email ='.$emailentree.';' ;
            $req = $bdd->query($sql);
            $req -> $idmembre;
            return $idmembre;
        }
        


        public function selectWhere ($tab)
        {
            if ($this->unPdo != null){
                $listeChamps = array(); 
                $donnees =array();
                foreach ($tab as $cle => $valeur) {
                    $listeChamps[] = $cle." = ".":".$cle ;
                    $donnees[":".$cle] = $valeur;
                }
                $chaineChamps = implode(" and ", $listeChamps); 

                $requete = "select * from   ".$this->uneTable. " where ".$chaineChamps.";" ;
                $select = $this->unPdo->prepare ($requete); 
                $select->execute ($donnees); 
                return $select->fetch(); 
            }
            else
            {
                return null; 
            }
        }
        public function update($tab, $where)
        {
            if ($this->unPdo != null){
                $listeChamps = array(); 
                $donnees =array();
                foreach ($where as $cle => $valeur) {
                    $listeChamps[] = $cle." = ".":".$cle ;
                    $donnees[":".$cle] = $valeur;
                }
                $chaineChamps = implode(" and ", $listeChamps); 

                $listeValeurs = array ();
                foreach ($tab as $cle => $valeur) {
                    $listeValeurs[] = $cle." = ".":".$cle ;
                    $donnees[":".$cle] = $valeur;
                }
                $chaineValeurs = implode(", ", $listeValeurs);
                $requete = " update  ".$this->uneTable." set ".$chaineValeurs."  where  ".$chaineChamps.";"; 
                
                $update = $this->unPdo->prepare ($requete); 
                $update->execute ($donnees); 
            }
        }
    }
?>
