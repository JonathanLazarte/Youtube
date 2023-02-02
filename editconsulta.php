<?php

$coneccion = mysqli_connect('localhost','JonathanLazarte','Jonii1543104','jonathanlazarte');

  $id = $_POST['id'];
  $busqueda = "SELECT * FROM videos WHERE id LIKE '$id'";
  $resultado = mysqli_query($coneccion, $busqueda);

       $cadena = array();
       while($fila = mysqli_fetch_array($resultado)){
            $cadena[]= array(
                'archivo' => $fila['archivo'],
                'titulo' => $fila['titulo'],
                'id' => $fila['id'],
                'usuariovideo' => $fila['usuariovideo']
            );
       }

  $jsonstring = json_encode($cadena);
  echo $jsonstring


?>