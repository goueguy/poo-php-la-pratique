<?php 
    
    class Facture{
        const TVA = 20;
        private static $attribute;
        public function __construct(){
            self::$attribute="PDO";
        }
        public static function montantTTC($ht){
            return $ht+(1+self::TVA/100);
        }
        //GETTER
        public function afficherAttribute(){
            return self::$attribute;
        }
        //SETTER
        public function setAttribute($attribute){
            self::$attribute = $attribute;
        }
    }
    $ob = new Facture();
    $ob2 = new Facture();
    $ob->setAttribute("MYSQL");
    echo "<br>";
    echo $ob->afficherAttribute();
    echo "<br>";
    $ob->setAttribute("MongoDB");
    echo $ob2->afficherAttribute();
?>