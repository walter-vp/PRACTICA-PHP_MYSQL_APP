<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertando Datos en la Tabla</title>
</head>
<body>
    <?php 
    //Variables
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mibd_proc";

    //Creando conexión con el Servidor
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //Verificado conexion con el Servidor
    if(!$conn){
        die("Conexion Fallida".mysqli_connect_error()). "<br>";
    }else{
        echo "Conexión exitosa - Método Procedimiento de MySQLi" . "<br>";
    }

    //Sentencia SQL para insertar datos en una tabla
    $sql = "INSERT INTO MisInvitados(firstname, lastname, email) VALUES ('Jhon Doe Proced', 'Doe S Proced', 'jhon_Proced@example.com')";

    //Insertando datos en la tabla
    if (mysqli_query($conn, $sql)){
        echo "Nuevo registro creado con éxito". "<br>";
    }else{
        echo "Error: ". $sql."<br>".mysqli_error($conn);
    }

    mysqli_close($conn);
    ?>

</body>
</html>