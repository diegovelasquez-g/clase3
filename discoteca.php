<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso a discoteca</title>
</head>
<body>
    <form method="post">
        <input type="number" name="altura" placeholder="Ingrese su altura en cm">
        <input type="date" name="fechanac">
        <input type="submit" name="calcular" value="Analizar">
    </form>
</body>
</html>
<?php

if(isset($_POST["calcular"]) && !empty($_POST["calcular"])){
        $fechaN=$_POST["fechanac"];
        $altura = $_POST["altura"];
        $hoy =date("Y-m-d");
        $edad = date_diff(date_create($fechaN), date_create($hoy));
        $can=$edad->format('%y');
        
        if(($can>=0)&&($can<18)&&($altura<120)){
            echo "Es menor de edad no puede ingresar a la discoteca";
        }elseif(($can>=18)&&($can<65)&&($altura>=120)){
            echo "Bienvenido su ticket es:";
        }
    }
?>