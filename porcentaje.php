<?php
class porcentaje
{

    public $digito;
    public $resultado;


    public function __construct($digito){
        $this->digito = $digito;
    }

    public function porcentaje(){
        $resultado = ($this->digito  %30);
        return $resultado;
    }


}




?>