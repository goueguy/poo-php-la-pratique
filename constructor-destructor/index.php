<?php 
    
    class Voiture{
    
        private $couleur;
        private $vitesse;
        //méthode magique __construct
        public function __construct($couleur="rouge",$vitesse=0){
            $this->couleur = $couleur;
            $this->vitesse = $vitesse;
        }
        public function __destruct(){
           $this->vitesse = 0;
        }
        public function afficherCouleur(){
            return $this->couleur;
        }
        public function repeindre($couleur){
            $this->couleur = $couleur;
        }
        public function accelerer(){
            $this->vitesse++;
        }
        public function afficherCompteur(){
            return $this->vitesse;
        }
        
    }
//créer un objet berline à partir la classe Voiture
$berline = new Voiture("BLANC",10); //instanciation de la classe voiture
echo $berline->afficherCompteur();
?>