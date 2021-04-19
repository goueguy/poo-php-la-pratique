<?php 
abstract class Compteur{
    protected $nbr;
    protected $fp;
    public function __construct(){
        $this->fp = fopen("compteur.txt","r+");
        $this->nbr = fgets($this->fp);
        $this->inc();
    }
    public function __destruct(){
        fclose($this->fp);
    }
    public function inc(){
            //on incrémente la valeur d'incrémentation
            $this->nbr++;
            //on se déplace au début du fichier
            fseek($this->fp,0);
            //on ajoute la nouvelle dans le fichier compteur.txt
            fputs($this->fp,$this->nbr);
            $_SESSION["dejaVisite"]="oui";
        
    }
    final public function afficher(){
        return $this->nbr;
    }
    abstract public function f();
}



?>