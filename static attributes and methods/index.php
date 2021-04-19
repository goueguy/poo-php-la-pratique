<?php 
    
    class Facture{
        const TVA = 20;
        public function montantTTC($ht){
            return $ht+(1+self::TVA/100);
        }
    }
    $facture = new Facture();
    echo $facture->montantTTC(1000);
?>