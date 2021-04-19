<?php 
    function chargeur($class){
        require "classes/".$class.".class.php";
    }
    spl_autoload_register("chargeur");
    session_start();
    $cpt = new Audience();
    // echo $cpt->afficher();
    
    // $jean = new Eleve();
    // $jean->welcome();
    $cpt->enregistrer();
    
?>