<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Selección y Filtadtro de Datos</title>
</head>

<!--    Objetivo del aplicativo:
        Seleccionar y filtrar datos de una tabla usando el Metodo: Orientado a Objetos -->

<body>
    <?php 
    //Variables
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname= "mibd_obj";

    //Creando conexión con el servidor
    $conn = new mysqli($servername, $username, $password, $dbname);

    //Verificando conexión con el servidor
    if($conn->connect_error){
        die("<h1>" . "Conexión Fallida: " . $connect_error . "<h1>");
    }else{
        echo "<h1>" . "Conexión exitosa - Método: Orientado a objetos de MySQLi" . "<h1>";
    }

    //Sentencia SQL para filtrar y selecionar datos en una tabla
    $sql = "SELECT id, firstname, lastname, email FROM `misinvitados` WHERE id >10 and id <20";

    //Ejecutar consulta SQL y asociar valores a la variable $result
    $result = $conn->query($sql);

    //Verificar si se devuelve mas de cero filas
    if($result->num_rows){

        /* 
        Si se devuleve más de cero filas, la función "fetch_assoc()" 
        coloca todos los resultados en una matriz asociativa que podemos recorrer.
        El bucle "WHILE{}" recorre el conjunto de resultados y genera los datos
        de las columnas: ID, firstname, lastneme, email, reg_date
        */

        //Datos de salida de cada fila
        echo    "<table><tr>
                    <th>Id</th>
                    <th>Nombres</th>
                    <th>Email</th>
                </tr>";
        
        while ($row = $result->fetch_assoc())
        {
            echo    "<tr>
                        <td>". $row["id"]."</td>
                        <td>". $row["firstname"]. " ".$row["lastname"]."</td>
                        <td>". $row["email"]."</td>
                    </tr>";
        };
        echo "</table>";

    }else{
        echo "Filas recibidas: 0 Filas";
    };

    $conn->close();
    ?>
</body>
</html>