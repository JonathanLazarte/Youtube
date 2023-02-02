<?php

     $CONECCION = mysqli_connect('localhost','JonathanLazarte','Jonii1543104','jonathanlazarte');

     $email = trim($_POST['mail']);
     $contraseña = trim($_POST['pass']);
     $querymail = "SELECT * FROM usuarios WHERE email ='$email'";
     $resultadomail = mysqli_query($CONECCION, $querymail);
     $filasmail = mysqli_num_rows($resultadomail);
     
     


        if($filasmail==1){

            $querycontra = "SELECT * FROM usuarios WHERE email ='$email' and contraseña ='$contraseña'";
            $resultadocontra = mysqli_query($CONECCION, $querycontra);
            $filascontra = mysqli_num_rows($resultadocontra);

            if($filascontra ==1){
                echo "hola";
            }   else { echo "Contraseña invalida, vuelva a intentarlo";}
        }  else {echo "El correo que ha ingresado no se encuentra registrado";}


         
         

?>