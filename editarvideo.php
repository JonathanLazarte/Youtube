<?php

$conexion = mysqli_connect('localhost','JonathanLazarte','Jonii1543104','jonathanlazarte');

     $id = $_POST['id'];
     $titulo = $_POST['titulo'];
     $archivo = $_POST['archivo'];
     $UsuarioVideo = $_POST['UsuarioVideo'];

     $query = "UPDATE videos SET titulo = '$titulo', archivo = '$archivo', usuariovideo = '$UsuarioVideo' WHERE id = '$id'";
     $consulta = mysqli_query($conexion,$query);
      echo $consulta

?>