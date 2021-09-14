<?php

if( isset($_GET['nombre'])){

    echo "<h1> Nombre: " .$_GET['nombre']."</h1>";
    echo "<h1> Apellido: ".$_GET['apellido']."</h1>";
    echo "<h1> Ciudad: ".$_GET['ciudad']."</h1>";
    echo "<h1> Edad: ".$_GET['edad']."</h1>";
    echo "<h1> Telefono: ".$_GET['telefono']."</h1>";
    echo "<h1> Correo: ".$_GET['correo']."</h1>";
    echo "<h1> Estado: ".$_GET['estado']."</h1>";


}

?>
<form >

Nombre : <input type="text" name="nombre" >
<br>
Apellido : <input type="text" name="apellido" >
<br>
Ciudad : <select name="ciudad" >
    <option > Guaymas</option>
    <option > Hermosillo</option>
    <option > Obregon</option>
    <option > Empalme</option>
    <option > Potam</option>
    <option > Nogales</option>
    <option > San Luis Rio Colorado</option>
    <option > Vicam</option>

</select>
<br>
Edad : <input type="number" name ="edad">
<br>
Telefono : <input type="text" name="telefono" >
<br>
Correo : <input type="text" name="correo" >
<br>
Estado civil
<input type="radio" name="estado"> <label>Soltero</label>

<input type="radio" name="estado"> <label>Casado</label>
<br>


<button>Enviar</button>

</form>