<?php
	$nombre     = $_GET["nombre"];
	$apellido   = $_GET["apellido"];
    $usuario    = $_GET["usuario"];
    $email      = $_GET["email"];
    $password   = $_GET["password"];
    $servername = "127.0.0.1";
    $database   = "ZLATAN";
    $username   = "alumno";
    $passwordi   = "alumnoipm";
    
    $conexion = mysqli_connect($servername, $username, $passwordi, $database); // se crea la conexion

    $resultado = mysqli_query($conexion,"select idUsuario from Usuario where NombreDeUsuario = '$usuario' or CorreoElectronico = '$email';");
    $fila=mysqli_fetch_assoc($resultado);
    if (!$conexion) {
        die("Conexion fallida: " . mysqli_connect_error());
    }
    else{
        //insertamos el resultado del formulario
        if ($fila["idUsuario"] != NULL)
        {
            echo "ERROR";
        }
        else if ($fila["idUsuario"] == NULL)
        {
            
            $resultado=mysqli_query($conexion,"insert into Usuario values(null, '$nombre', '$apellido', '$usuario', '$email', '$password');");
            /*if($resultado==false){
                echo "ERROR";
                $_SESSION["SESION_INICIADA"] = 0;
            }else{*/
                echo "SESIÓN INICIADA";
                $_SESSION["SESION_INICIADA"] = 1;
            //}
            $consulta = mysqli_query($conexion, "select idUsuario from Usuario where NombreDeUsuario = '$usuario';");
            $ID = mysqli_fetch_assoc($consulta);
            $_SESSION["idUsuario"] = $ID["idUsuario"];
        }    
        //seleccionamos todas las filas que haya en usuarios
    }
    mysqli_close($conexion);
?>