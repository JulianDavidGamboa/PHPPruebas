<?php
    session_start();
    date_default_timezone_set("America/Bogota");
   
    require 'Conexion.php';

    
    $nombr =$_POST["nombre"];
    $docu =$_POST["doc"];
    $curs =$_POST["curso"];
    $fec =$_POST["fecha"];

    $_SESSION["doc"] = $_POST["doc"];
   
  $c = new Conexion();

  try {
    $con = $c->conectar();
    $sql = "INSERT INTO aspirantes (identificacion, Nombre_aprendiz, Fecha_nacimiento, Curso_a_ingresar)
            VALUES ('$docu', '$nombr', '$fec', '$curs')";
    $e=$con->query($sql);
  } catch (PDOException $e) {
    echo '<div class="alert alert-danger text-center" style="margin: 250px auto; height: 100px; width: 350px;" role="alert">
    <br>'.$e->getMessage().'
    </div>';
  }

    if($e==1) {
        header('Location: FormEva1.php');
    } else {
        echo "Error ". $con->error;
    
    }

        
?>