<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creacion de BDs</title>    
</head>
<body>
    <?php 
    //Variables
    $servername = "localhost";
    $username = "root";
    $password = "";

    //Creando conexion con el servidor
    $conn = new mysqli($servername, $username, $password);

    //Verificando conexión con el servidor
    if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
    }
    echo "Conexion exitosa - Método: Orientado a objetos de MySQLi" . "<br>";

    //Creando Base de Datos miBD_Obj
    $sql = "CREATE DATABASE IF NOT EXISTS miBD_Obj";
    if($conn->query($sql) === true){
        echo "Base de Datos miBD_Obj creada en forma exitosa". "<br>";
    }else{
        echo "Error al crear Base de Datos: ".$conn->error. "<br>";
    }

    //Cerrando conexion con el servidor
    $conn->close();

    ?>
</body>
</html>