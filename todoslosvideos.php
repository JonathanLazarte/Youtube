<?php
       $coneccion = mysqli_connect('us-east.connect.psdb.cloud','nut3a9hwq2pqpvgybrp8','pscale_pw_qK7aQmJuY9gnk5kuDIf0zmpblqosqhOaX0T9og29uox','jonathanlazarte');
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