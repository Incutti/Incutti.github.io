<?php
    $MED        = $_GET["MED"];
    $PAC        = $_GET["PAC"];
    $DRI        = $_GET["DRI"];
    $SHO        = $_GET["SHO"];
    $DEF        = $_GET["DEF"];
    $PAS        = $_GET["PAS"];
    $PHY        = $_GET["PHY"];
    $servername = "127.0.0.1";
    $database   = "ZLATAN";
    $username   = "alumno";
    $password   = "alumnoipm";
    $conexion = mysqli_connect($servername, $username, $password, $database); // se crea la conexion

    /*if($_SESSION == null)
    {
        $_SESSION["SESION_INICIADA"] = 0;
    }*/
    if (!$conexion) {
        die("Conexion fallida: " . mysqli_connect_error());
    }
    //else if($_SESSION["SESION_INICIADA"] == 1){
        //insertamos el resultado del formulario
        $IDCuenta=$_SESSION["idUsuario"];
        $resultado=mysqli_query($conexion,"insert into Carta values(null, '$MED', '$PAC', '$DRI', '$SHO', '$DEF', '$PAS', '$PHY', '$IDCuenta');");
        //seleccionamos todas las filas que haya en usuarios        
        echo "INFORMACION ENVIADA";
    /*}
    else{
        echo "ERROR";
    }*/
    mysqli_close($conexion);
?>