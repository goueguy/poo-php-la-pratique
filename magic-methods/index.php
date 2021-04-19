<?php 
    class PHPString{
        
        private $tr;
        private $length;
        
        public function __construct($param){
            $this->str=$param;
            $this->length = strlen($this->str);
        }
        //execute when we intend to read undefined variable
        public function __get($attribute){
            return $this->$attribute;
        }
        //execute when we intend to modify undefined variable
        public function __set($attribute,$val){
            $this->$attribute=$val;
        }
        //converti une variable en chaine(convert variable in string)
        public function __toString(){
            return $this->str;
        }
        //verify if variable exists or not
        public function __isset($attribute){
            return isset($this->$attribute);
        }
        public function __unset($attribute){
            unset($this->$attribute);
        }
    }
    
    $str = new PHPString("GBAGBO LAURENT");
    unset($str->str);
    if(isset($str->str))
        echo "Existe";
    else
        echo "n existe pas";
 
?>