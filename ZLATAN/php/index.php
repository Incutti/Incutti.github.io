<html>
    <head>
        <style>
            .contenedor{
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                grid-gap: 10px;
                grid-auto-rows: minmax(100px, auto);
            }
            table{
                grid-row: 1;
                grid-column: 2;
            }
            table, th, td {
                border: 1px solid black;
            }      
        </style>
    </head>
    <body>
        <div class="contenedor">
        <table>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
            </tr>
            <?php
                $servername = "127.0.0.1";
                $database = "paginaweb";
                $username = "alumno";
                $password = "alumnoipm";
            
                $conexion = mysqli_connect($servername, $username, $password, $database); // se crea la conexion
        
        
                if (!$conexion) {
                    die("Conexion fallida: " . mysqli_connect_error());
                }
                else{
                    $resultado = mysqli_query($conexion,"select * from usuarios;");
                    
                    while($fila=mysqli_fetch_assoc($resultado)){ // recorremos cada fila obtenida y mostramos el nombre y el apellido
                        ?>
                        <tr>
                            <td><?php echo $fila['id']?></td>
                            <td><?php echo $fila['nombre']?></td>
                            <td><?php echo $fila['apellido']?></td>
                        </tr>  
                        <?php
                    }
                }
                ?>
        </table>
    </body>
</html>