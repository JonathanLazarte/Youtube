<?php

        $coneccion = mysqli_connect('sql10.freemysqlhosting.net:3306','sql10595142','vUpaIzDiLi','sql10595142');

        $archivo = $_POST['archivo'];
        $titulo = $_POST['titulo'];
        $UsuarioVideo = $_POST['UsuarioVideo'];
        $insersion = "INSERT INTO videos(archivo, titulo, usuariovideo) VALUES ('$archivo','$titulo','$UsuarioVideo')";
        $consulta = mysqli_query($coneccion, $insersion);
        echo $consulta
?>

