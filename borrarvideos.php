<?php

   $coneccion = mysqli_connect('localhost','JonathanLazarte','Jonii1543104','jonathanlazarte');

    $id = $_POST['id'];
    $delete = "DELETE FROM videos WHERE id= $id";
    $resultado = mysqli_query($coneccion,$delete);
    

    echo "Video eliminado";

?>