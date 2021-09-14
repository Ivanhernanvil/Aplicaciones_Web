<?php

if(isset($_GET["operacion"])){

    $r = $_GET;
    $op= $r["operacion"];
    $numero_1= $_GET["num1"];
    $numero_2= $_GET["num2"];


    switch($op){
        case 'suma':
            $resultado = $numero_1 + $numero_2;

            break;
        case 'resta':
            $resultado = $numero_1 - $numero_2;
            break;

        case 'multiplicacion':
            $resultado = $numero_1 * $numero_2;
            break;

        case 'division':
            $resultado = $numero_1 / $numero_2;
            break;

        default:
            $resultado = "Falta de señalar la operacion a realizar";
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
    <title>Calculadora</title>
</head>
<body>

    <h1>Calculadora</h1>

    <form method="get" action="calculadora2.php" >



            <label for="">Numero 1:</label>
            <input type="text" name="num1">
            <label for="">Operacion:</label>
            <input type="text" name="operacion">
            <label for="">Numero 2</label>
            <input type="text" name="num2">

           <button type="submit"  >Calcular</button>
    </form>



    <h3><?php echo $resultado; ?></h3>



</body>
</html>

