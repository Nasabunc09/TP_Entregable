<?php

class Pasajero{

    private $nombre;
    private $apellido;
    private $documento;
    

    /*constructor
    * @param String  $nombre
	* @param String  $apellido
	* @param Integer $documento
	*/
    public function __constructor ($nombre,$apellido,$documento){

        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->documento = $documento;
      
    }
    

    // getter y setter
    public function getNombre(){

        return $this->nombre;       
    }
    
    public function setNombre($nombre){

        return $this->nombre = $nombre;
    }

    public function getApellido(){

        return $this->apellido;
    }

    public function setApellido($apellido){

        return $this->apellido = $apellido;
    }
    
    public function getDocumento(){

        return $this->documento;
    }

    public function setDocumento($documento){

        return $this->documento = $documento;
    }

    public function __toString(){
		
    return "\n Nombre: " .$this->getNombre . "\n Apellido: " .$this->getApellido. "\n Documento: " .$this->getDocumento;
    
    }
   
}


?>
