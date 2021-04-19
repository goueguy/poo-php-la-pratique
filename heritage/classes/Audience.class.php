<?php 

class Audience extends Compteur{
    private $id;
    public function __construct(){
        parent::__construct();
        $this->id = fopen("audience.txt","a+");
    }
    public function enregistrer(){
        fputs( $this->id,date("Y-m-d H:i:s").":".$this->nbr."\r\n");
        
    }
    public function f(){
        echo "TEST";
    }
    
}




?>