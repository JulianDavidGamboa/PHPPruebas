<?php
    session_start();
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--<link rel="stylesheet" href="css/estilo.css">-->

<body>
<?php
    require 'LogicaRegistro.php';
    require 'Conexion.php';
$c = new Conexion();



        //dia de hoy
        $e =$_POST["ev"];
        $_SESSION["doc"] = $_POST["doc"];
        $dia = date("D");
        $puntuacion = 0;


        if ($e == 1){
           //form 1
            $preg1 =$_POST["1"];
            $preg2 =$_POST["2"];
            $raiz =$_POST["raiz"];
            $preg4 =$_POST["4"];
            $fech =$_POST["dias"]; 

                if ($preg1=="ins") {
                    $puntuacion += 1;
                }
    
                if ($preg2 =="sol") {
                        $puntuacion +=1;
                }
    
                if($raiz == 20){
                    $puntuacion +=1;
                }
    
                if ($preg4== "pata") {
                  $puntuacion +=1;
                }
    
                if($dia == $fech){
                    $puntuacion +=1;
                }

                if ( $puntuacion >= 3 ) {
                    header('Location: FormEva2.php');
                } else {
                    echo '<div class="alert alert-danger text-center" style="margin: 250px auto; height: 100px; width: 350px;" role="alert">
                            <br>No has sido admitido al SENA. :(
                        </div>
                    ';
                     session_destroy();
                }
                 $sql = "UPDATE aspirantes SET Puntaje_eva_1 =".$puntuacion." where identificacion=".$_SESSION["doc"]; 
       
        }else {
            session_destroy();
            //form 2
            $pre1 =$_POST["p1"];
            $pre2 =$_POST["p2"];
            $pre3 =$_POST["p3"];
            $pre4 =$_POST["p4"];
            $pre5 =$_POST["p5"];
            $puntu = 0;

                if ($pre1=="ins") {
                    $puntu += 1;
                }
    
                if ($pre2 =="sol") {
                        $puntu +=1;
                }
    
                if($pre3 == 20){
                    $puntu +=1;
                }
    
                if ($pre4== "pata") {
                  $puntu +=1;
                }
    
                if($dia == $pre5){
                    $puntu +=1;
                }

                if ( $puntu >= 4 ) {
                    echo '<div class="alert alert-info text-center" style="margin: 250px auto; height: 100px; width: 350px;" role="alert">
                            <br>Has sido admitido al SENA. :)
                        </div>
                    ';
                } else {
                    echo '<div class="alert alert-danger text-center" style="margin: 250px auto; height: 100px; width: 350px;" role="alert">
                            <br>No has sido admitido al SENA. :(
                        </div>
                    ';
                     
                }
                $sql = "UPDATE aspirantes SET Puntaje_eva_2 =".$puntu." where identificacion=".$doc; 
      
        }

       
        $co= $c->conectar();
        $co->query($sql);
       
       


?>
</body>
