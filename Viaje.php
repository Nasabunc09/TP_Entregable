<?php


class Viaje{

    private $codigo;
    private $destino;
    private $maxima_pasajeros;
    private $arrayPasajeros;
    

    /*constructor
    * @param Integer $codigo
	* @param String  $destino
	* @param Integer $maxima_pasajeros
	* @param Array   $arrayPasajeros
	
	* */
    public function __constructor ($codigo,$destino,$maxima_pasajeros,$arrayPasajeros){

        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->maxima_pasajeros = $maxima_pasajeros;
        $this->arrayPasajeros = $arrayPasajeros;
    }
    

    // getter y setter
    public function getCodigo(){

        return $this->codigo;       
    }
    
    public function setCodigo($codigo){

        return $this->codigo = $codigo;
    }

    public function getDestino(){

        return $this->destino;
    }

    public function setDestino($destino){

        return $this->destino = $destino;
    }
    
    public function getMaximaPasajeros(){

        return $this->maxima_pasajeros;
    }

    public function setMaximaPasajeros($maxima_pasajeros){

        return $this->maxima_pasajeros = $maxima_pasajeros;
    }

    public function getArrayPasajeros(){

        return $this->arrayPasajeros;
    }

    public function setArrayPasajeros($arrayPasajeros){

        return $this->arrayPasajeros = $arrayPasajeros;
    }
    
    public function __toString(){
		
    return "\n Codigo: " .$this->codigo . "\n Destino: " .$this->destino . "\n Max.Pasajeros: " .$this->maxima_pasajeros . "\n Pasajeros: " .$this->arrayPasajeros;
    
    }
   
}


?>
