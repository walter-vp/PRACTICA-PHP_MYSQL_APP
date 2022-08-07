<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creación Tablas</title>
</head>

<body>

    <?php

    //Variables
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "miBD_Obj";

    //Creando conexión con el servidor
    $conn = new mysqli($servername, $username, $password, $dbname);

    //Verificando conexión con el servidor
    if ($conn->connect_error) {
        die("Conexión Fallida: " . $conn->connect_error);
    } else {
        echo "Conexión exitos - Método: Orientado a Objetos de MySQLi" . "<br>";
    };

    //Sentencia SQL para crear una tabla
    $sql = "CREATE TABLE MisInvitados(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP        
    )";

    if ($conn->query($sql)=== true) {
        echo "Tabla creada con éxito" . "<br>";
    } else {
        echo "Error al crear la Tabla MisInvitados" . $conn->error . "<br>";
    };

    $conn->close();

    ?>

</body>

</html>