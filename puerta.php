<?php

if(isset($_GET["numero"])){

    $r = $_GET;


    $op= $r["numero"];



    switch($op){
        case '1':
            $resultado = "FELICIDADES, TE GANASTE UN CARRO DEL AÑO!!!!!!!";

            break;
        case '2':
            $resultado = "FELICIDADES, TE GANASTE UNA PIEDROTA!!!!!!!";
            break;

        case '3':
            $resultado = "FELICIDADES, TE GANASTE UNA CABRA BIEN BONITA!!!!!!!";
            break;



        default:
            $resultado = "No elegiste ninguna puerta del 1 al 3, no te llevas nada";
            break;



    }

}

?>





<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puerta</title>
</head>
<body>

<form method="get" action="puerta.php" >



            <label for="">Elige el numero(solo del 1 al 3) : </label>
            <input type="text" name="numero">

           <button type="submit"  >Elegir</button>
    </form>

    <h3><?php echo $resultado; ?></h3>
</body>
</html>