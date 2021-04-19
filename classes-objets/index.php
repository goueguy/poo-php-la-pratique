<?php 
    
    class Voiture{
    
        private $couleur = "rouge";
        private $vitesse = 0;
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
$berline = new Voiture(); //instanciation de la classe voiture

$berline->accelerer();

$berline->accelerer();
$berline->accelerer();
$berline->accelerer();
echo $berline->afficherCompteur();
?>