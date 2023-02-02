<?php

      $coneccion = mysqli_connect('localhost','JonathanLazarte','Jonii1543104','jonathanlazarte');

      $consulta = "SELECT * FROM 'usuarios2'";
      $resultado = mysqli_query($coneccion, $consulta);
      echo $resultado;

?>