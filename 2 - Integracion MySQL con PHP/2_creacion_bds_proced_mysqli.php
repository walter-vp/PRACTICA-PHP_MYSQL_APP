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
    $conn = mysqli_connect($servername, $username, $password);

    //Verificando conexión con el servidor
    if(!$conn){
        die("Conexion Fallida ".mysqli_connect_error());
    };
    echo "Conexion exitosa - Método: Procedimiento de MySQLi". "<br>";

    //Creando Base de Datos miBD_Obj
    $sql = "CREATE DATABASE IF NOT EXISTS miBD_Proc";
    if(mysqli_query($conn, $sql)){
        echo "Base de Datos miBD_Proc creada en forma exitosa". "<br>";
    }else{
        echo "Error al crear Base de Datos: ". mysqli_connect_error()."<br>";
    };

    //Cerrando conexion con el servidor
    mysqli_close($conn);
    ?>

</body>
</html>