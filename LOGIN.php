<?php
    
    $conexion = mysqli_connect('localhost','JonathanLazarte', 'Jonii1543104', 'jonathanlazarte');



    $busqueda = $_POST['busqueda'];

    if(!empty($busqueda)){
        $consulta = "SELECT * FROM usuarios2 WHERE email like '$busqueda%'";
        $resultado = mysqli_query($conexion, $consulta);
        if(!$resultado){die('Query Error' . mysqli_error($conexion));}

        $json = array();
        while ($fila = mysqli_fetch_array($resultado)) {

            $json[] = array(
                'nombre' => $fila['nombre'],
                'email' => $fila['email'],
                'contraseña' => $fila['contraseña']
            );
        }
        $jsonstring = json_encode($json);
        echo $jsonstring;

    }

?>