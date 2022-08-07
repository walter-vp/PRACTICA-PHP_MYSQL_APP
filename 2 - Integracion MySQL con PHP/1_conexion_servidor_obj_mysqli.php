<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conecion Servidor Localhost</title>
</head>
<body>
    <?php 
    
    //Variables
    $servername ="localhost";
    $username = "root";
    $password="";

    //Creando conexion con el servidor
    $conn = new mysqli($servername, $username, $password);

    //Verificando conexion con el servidor
    if($conn->connect_error){
        die("Conexión fallida: ". $conn->connect_error );
    };
    echo "Conexion exitosa - Metodo: Orientado a objetos de MySQLi";

    //Cerrando conexion con el servidor
    $conn->close();

    echo "<br>";

    if(!$conn->connect_error){
        echo "Conexion cerrada con el servidor";
    }else{
        $conn->connect_error;
    }
    ?>
</body>
</html>