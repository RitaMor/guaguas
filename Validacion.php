
<?php

class Validacion{
   private $error;

//Validacion de textos
    public function validaTexto($text, $min=false,$max=false,$espacios=true,$mensaje=''){

        if(!empty($min)){
            if(strlen(text) > $min){
                $this->error = $mensaje;
                return $this->error;

            }
        }
        if(!empty($max)){
            if(strlen(text) > $max){
                $this->error = $mensaje;
                return $this->error;

            }
        }
    }
 
}

?>