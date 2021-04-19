<?php 
class Compteur{
    private $nbr;
    private $fp;
    public function __construct(){
        $this->fp = fopen("compteur.txt","r+");
        $this->nbr = fgets($this->fp);
        $this->inc();
    }
    public function __destruct(){
        fclose($this->fp);
    }
    public function inc(){
        if(@$_SESSION["dejaVisite"]!="oui"){
            //on incrémente la valeur d'incrémentation
            $this->nbr++;
            //on se déplace au début du fichier
            fseek($this->fp,0);
            //on ajoute la nouvelle dans le fichier compteur.txt
            fputs($this->fp,$this->nbr);
            $_SESSION["dejaVisite"]="oui";
        }
    }
    public function afficher(){
        return $this->nbr;
    }
}



?>