<?php
      $conexion = mysqli_connect('sql10.freemysqlhosting.net:3306','sql10595142','vUpaIzDiLi','sql10595142');
     $query= "SELECT *FROM videos";
     $resultado= mysqli_query($conexion, $query);

     $array = array();
     while($filas = mysqli_fetch_array($resultado)){
           $array[] = array(
               'titulo' => $filas['titulo'],
               'archivo' => $filas['archivo'], 
               'id' => $filas['id'],
               'usuariovideo' => $filas['usuariovideo']
           );
     }

     $jsonstring = json_encode($array);
     echo $jsonstring

?>
