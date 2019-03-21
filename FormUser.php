<?php  session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="container">
        <div class="col-md-6 mx-auto mt-5">
            <div class="card ">
            <div class="card-header">
                <h3 class="text-center">Formulario</h3>
            </div>
                <div class="card-body">
                <form action ="LogicaRegistro.php"  method="POST">
                    <div class="form-group">
                        <label> Ingrese el nombre </label>
                        <input type="text" name="nombre" class="form-control">
                    </div>
                   
                    <div class="form-group">
                        <label> Documento </label>
                         <input type="number" name="doc" class="form-control">
                    </div>
                    <div class="form-group">
                        <label> Curso al que aspira </label>
                        <select id="" class="form-control" name ="curso">
                        <option value="adsi">ADSI</option>
                        <option value="grd">GRD</option>
                        <option value="med">MECDICE </option>
                        <option value="tai">TAI </option>
                        <option value="tps">TPS </option>
                        <option value="time">TIMEI </option>
                        </select>
                        
                    </div>
                    <div class="form-group">
                        <label> Ingrese fecha de nacimiento</label>
                        <input type="date" name="fecha" class="form-control">
                        </div>
                        <div class="form-group">
                        <input type="submit" value="enviar" class="btn btn-info btn-block">               
                    </div>
    </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>