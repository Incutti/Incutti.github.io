<?php
    $usuario    = $_GET["usuario"];
    $password   = $_GET["password"];
    $servername = "127.0.0.1";
    $database   = "ZLATAN";
    $username   = "alumno";
    $passwordi   = "alumnoipm";
    
    
    session_start();
    $_SESSION["SESION_INICIADA"] = 0;
    $conexion = mysqli_connect($servername, $username, $passwordi, $database); // se crea la conexion


    if (!$conexion) {
        die("Conexion fallida: " . mysqli_connect_error());
    }
    else{
        //insertamos el resultado del formulario
        //$resultado=mysqli_query($conexion,"insert into usuarios values(null, '$nombre', '$apellido');");
        //seleccionamos todas las filas que haya en usuarios
		$resultado = mysqli_query($conexion,"select idUsuario from Usuario where NombreDeUsuario = '$usuario' and Contrasena = '$password';");
        $fila=mysqli_fetch_assoc($resultado);
        if ($fila["idUsuario"] == NULL)
        {
            $_SESSION["SESION_INICIADA"] = 0;
            echo "ERROR";
        }
        else
        {
            $_SESSION["SESION_INICIADA"] = 1;
            $_SESSION["idUsuario"] = $fila["idUsuario"];
            echo "SESIÓN INICIADA";
        }
    }
    mysqli_close($conexion);
?>