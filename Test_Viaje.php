<?php

include 'Viaje.php';
include 'Pasajero.php';

/** Muestra en pantalla el menu al usuario
    
    @return int $opcion */
    
    function menu(){
		
		echo "-----------Menu---------\n";
		echo "1- Ingresar pasajero. \n";
		echo "2- Modificar. \n";
		echo "3- Mostrar. \n";
		echo "0- Salir. \n";
		echo "-----------Menu---------\n";
		
		echo "Ingrese una opcion: ";
		$opcion = (int) trim(fgets(STDIN));
		
		return $opcion;
	}
	
/*Realiza la carga de los varoles de un pasajero
@return obj $pasajero*/
    function ingresaPasajero (){
     
            
            echo "\n Nombre: ";
			$nombre = strtoupper (trim (fgets(STDIN)));
			echo "\n Apellido: ";
			$apellido = strtoupper (trim (fgets(STDIN)));
			echo "\n Documento: ";
			$documento = strtoupper (trim (fgets(STDIN)));

			$pasajero  = ['nombre'    => $nombre,
						  'apellido'  => $apellido,
						  'documento' => $documento];

			return $pasajero;
 }
 
 /*Muestra los datos cargados
 @return obj $salida*/
     function  mostrarDatos ($arrayPasajeros){
        
        //for ($i = 0; $i < count($arrayPasajeros->getPasajeros); $i++) {
        // echo count($arrayPasajeros->getPasajeros);
         
         print_r ($arrayPasajeros);
		 //echo ($viaje);
		 //echo "Nombre:" .$viaje->getPasajeros()[$i]['nombre']."Apellido:".$viaje->getPasajeros()[$i]['apellido']."Documento".$viaje->getPasajeros()[$i]['documento']."\n";
          
        
      }
 
  function modificar_pasajero(){
  
           
      
  }
 
//programa principal	
    
    do{
		$opcion = menu();
		$band = "S";
	    switch ($opcion){
	    
	    case '0':
	    
	        echo "Fin del programa! \n";  
	        break;
	        	
		case '1': 
		
			$arrayPasajeros = array();
			echo "\n Ingrese codigo de viaje: ";
			$maxima_pasajeros = trim(fgets(STDIN));
			echo "\n Ingrese Destino: ";
			$maxima_pasajeros = trim(fgets(STDIN));
			echo "\n Ingrese la cantidad maxima de pasajeros: ";
			$maxima_pasajeros = trim(fgets(STDIN));
			
									
			for ($i = 0; $i < $maxima_pasajeros; $i++){
						 
				$pasajero = ingresaPasajero ();	 
						 
				$arrayPasajeros  = $pasajero;
			}
			
			echo "\n No se admiten mas pasajeros \n";
			
			
			
			break;
		 
		 case '2':
		      
		      echo "\n Ingrese el pasajero a modificar: ";
		      $modificar_pasajero = trim(fgets(STDIN));
		      
		      $pasajero [$modificar_pasajero];
		      $nuevo_pasajero = ingresaPasajero ();
		      $pasajero [$modificar_pasajero];
		      
		 
		 break;
		 
		 case '3':
				 mostrarDatos ($pasajero);
		 break;
		 
		 default : echo "\n Ingrese una opcion correcta \n";
		} 
      } while ($opcion != 0 );
   
 ?> 
