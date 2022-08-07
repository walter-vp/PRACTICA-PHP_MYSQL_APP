<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Selección de Datos</title>
</head>
<body>
    <?php 
    
    //Variables
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mibd_proc";

    //Creando conexión con el servidor
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //Verificando conexión con el servidor
    if(!$conn){
        die("<h1>"."Conexión Fallida: " . mysqli_connect_error()."<h1>");
    }else{
        echo "<h1>"."Conexión exitosa - Método: Procedimiento de MySQLi"."</h1>";
    }

    //Sentencia SQL para seleccionar datos de una tabla
    $sql = "SELECT id, firstname, lastname, email, reg_date FROM misinvitados";

    //Ejecuta consulta SQL y asocia valores a una variable
    $result = $conn->query($sql);

    //Verificar si se devuelve más de cero filas
    if(mysqli_num_rows($result) > 0){

        /* 
        Si se devuleve más de cero filas, la función "fetch_assoc()" 
        coloca todos los resultados en una matriz asociativa que podemos recorrer.
        El bucle "WHILE{}" recorre el conjunto de resultados y genera los datos
        de las columnas: ID, firstname, lastneme, email, reg_date
        */

        //Datos de salida de cada fila
        echo "<table><tr>
                <th>Id</th>
                <th>Nombres</th>
                <th>Email</th>
                <th>Fecha Reg</th>
            </tr>";
        while ($row = mysqli_fetch_assoc($result))
            {
            echo   "<tr> 
                        <td>". $row["id"] ."</td>
                        <td>". $row["firstname"] ." ". $row["lastname"] ."</td>
                        <td>". $row["email"] ."</td>
                        <td>". $row["reg_date"] ."</td>
                    </tr>";
            }
        echo "</table>";
        }else{
            echo "<h1>"."Filas recibidas: 0 Filas"."<h1>";
        }

    mysqli_close($conn);
    ?>
</body>
</html>