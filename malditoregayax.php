<?php

   $coneccion = mysqli_connect('localhost:3306','JonathanLazarte','Jonii1543104','jonathanlazarte');
          $Name = trim($_POST['usuario']);
          $Email = trim($_POST['email']);
          $Password = trim($_POST['contraseña']);
          $consultaemail= "SELECT * FROM `usuarios` WHERE email = '$Email'";
          $resultadoemail= mysqli_query($coneccion, $consultaemail);
          $numerodeemails = mysqli_num_rows($resultadoemail);

    if (strlen($Name) >= 1 && strlen($Email) >= 1 && strlen($Password) >= 1){
      if($numerodeemails == 0){
        if($_POST['contraseña'] == $_POST['contraseña2']){          
          $Fechareg = date("d/m/y");
          $consulta = "INSERT INTO `usuarios`(`nombre`, `email`, `contraseña`) VALUES ('$Name','$Email','$Password')";
          $resultado = mysqli_query($coneccion, $consulta);         
          echo $resultado;
          if($resultado){
                  echo "Registrado correctamente";                  
          }
        } else { echo "Las contraseñas no coinciden, vuelva a intentarlo";}
      } else {echo "El email ya se encuentra en uso";}     
} else { echo "Porfavor, complete los campos";}
?>
