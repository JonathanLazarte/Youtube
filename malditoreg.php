<?php

   $conexion = mysqli_connect('localhost','JonathanLazarte', 'Jonii1543104', 'jonathanlazarte');

   if(isset($_POST['Registrate'])){

    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['imail']) >= 1 && strlen($_POST['contra']) >= 1) {
        if(($_POST['contra']) == ($_POST['contra2'])){
    $Name = trim($_POST['nombre']);
    $Email = trim($_POST['imail']);
    $Password = trim($_POST['contra']);
    $Fechareg = date("d/m/y");
    $consulta = "INSERT INTO usuarios(nombre, email, contraseña) VALUES ('$Name','$Email','$Password')";
    $resultado = mysqli_query($conexion,$consulta);
    if($resultado){
        echo "<h3 style='background-color:red;text-align:center;color:white;'> $Name $Email fue registrad@ correctamente el $Fechareg</h3> $resultado";  
        ?>
        <h3 style="color:white;background-color:red;" > <a href="index.html">Ingresar</a></h3>
        <?php
       } 
    } else {echo "Revisa la contraseña pa";}   
  } else {echo "Completa los campos";}
}
?>
