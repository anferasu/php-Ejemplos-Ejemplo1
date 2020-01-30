<?php

namespace clases;
class Numeros {

    public $numero;
    
    public function __construct($numero) {
        $this->numero = $numero;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    public function sumaValores(){
        $vector = [];
        $vector = $this->getNumero();
        $salida = array_sum($vector);
        return "la suma es " . $salida;
    }
    
    
    public function restaValores(){
        $vector = [];
        $vector = $this->getNumero();
        $salida=$vector[1]-$vector[0];       
                
        return 'La resta es '. $salida;        
    }
    
    public function productoValores(){
         $vector = [];
        $vector = $this->getNumero();
        $salida=$vector[1]*$vector[0];       
                
        return 'El producto es '. $salida;  
    }
    
       
    public function divisionValores(){
         $vector = [];
        $vector = $this->getNumero();
        $salida=$vector[1]/$vector[0];       
                
        return 'La division es '. $salida;  
    }
    
}
