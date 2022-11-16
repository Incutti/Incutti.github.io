<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zlatan Ibrahimovic</title>
    <link rel="shortcut icon" href="Img/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/Login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
    <script>
        function login(){
            $.ajax({
                method: "GET",
                url:"DBLogin.php",
                data: { Usuario: $("#UsuarioLogin").val(), Contrasena: $("#Contrasena").val()}
            })
            .done(function(msg){
            alert(msg);
            if(msg=="SESIÓN INICIADA"){
                location.href ="Incio.html";
            }
            if(msg=="ERROR"){
                location.href = "Login.html";
            }
            });
        }
    </script>
</head>

<body bgcolor="black">
    <header>
        <img id="fondohead" src="Img/ibrarecortado.JPG" alt="ZLATAN">
        <img id="espaciador" src="Img/zlattan perfil.png" alt="ZLATAN">
        <img id="FPerfil" src="Img/zlattan perfil.png" alt="ZLATAN">
        <h1 id="Titulo">Zlatan</h1>
        <h1 id="IBRA">Ibrahimovic</h1>
        <img id="EMilan" src="Img/escudo milan.png" alt="MILAN">
        <h1 id="ACMILAN">AC Milan</h1>
        <img id="Bandera" src="Img/Bandera_Suecia.png" alt="MILAN">
        <h1 id="NACION">Suecia</h1>
    </header>

    <nav>
        <ul>
            <li><a href="INICIO.html">Inicio</a></li>
            <li><a href="Trayectoria2.html">Trayectoria</a></li>
            <li><a href="Estadisticas2.html">Estadísticas</a></li>
            <li><a href="Login.html">Cuenta</a></li>
            <li><a href="CrearJugador.html">Valoración</a></li>
        </ul>
    </nav>

    <img id="Logo" src="Img/Logo.png" alt="LOGO"> 

        <div id="contenedor">
            <div id="central">
                <div id="login">
                    <div class="titulo">
                        BIENVENIDO
                    </div>
                    
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br>
</body>

</html>