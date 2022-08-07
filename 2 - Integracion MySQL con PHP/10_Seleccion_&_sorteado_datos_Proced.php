<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Selección y sorteo de Datos</title>
</head>

<!--    Objetivo del aplicativo:
        Seleccionar y ordenar los datos de una tabla usando el Metodo: Procedimientos de MySQLi -->

<body>
    <?php 
    //Variables
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mibd_proc";

    //Creando conexión con el servidor
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //Verificando conexión del servidor
    if(!$conn){
        die("<h1>"."Coneción Fallida: ". mysqli_connect_error()."</h1>");
    }else{
        echo "<h1>"."Conexión Exitosa - Método: Procedimiento de MySQLi"."</h1>";
    };

    //Sentencia SQL para filtrar datos en una tabla
    $sql = "SELECT id, firstname, lastname, email FROM misinvitados WHERE id >10 and id <20 ORDER BY firstname DESC";

    //Ejecuta consulta SQL y asocia valores a la variable $result
    $result = mysqli_query($conn, $sql);

    //Verificar si se devuelve más de cero filas
    if(mysqli_num_rows($result)){
        /* 
        Si se devuleve más de cero filas, la función "fetch_assoc()" 
        coloca todos los resultados en una matriz asociativa que podemos recorrer.
        El bucle "WHILE{}" recorre el conjunto de resultados y genera los datos
        de las columnas: ID, firstname, lastneme, email, reg_date
        */

        //Datos de salidad de cada fila
        echo    "<table><tr>
                    <th>Id</th>
                    <th>Nombres</th>
                    <th>Email</th>
                </tr>";

            while($row = mysqli_fetch_assoc($result))
            {
                echo   "<tr> 
                            <td>". $row["id"] ."</td>
                            <td>". $row["firstname"] ." ". $row["lastname"] ."</td>
                            <td>". $row["email"] ."</td>
                        </tr>";
            };
            echo "</table>";
            }else{
                echo "<h1>"."Filas recibidas: 0 Filas"."</h1>";
            };
        mysqli_close($conn);

    ?>
</body>
</html>