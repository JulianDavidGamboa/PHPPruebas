<?php

 class Conexion{
   private $servidor="localhost";
   private $usuario="root";
   private $contraseña="";
   private $BD="pruebas";

    public function __construct(){


    }

    function conectar() {
        $cone = new mysqli($this->servidor,$this->usuario,$this->contraseña, $this->BD);
        
        return $cone;

    }

 

}




?>