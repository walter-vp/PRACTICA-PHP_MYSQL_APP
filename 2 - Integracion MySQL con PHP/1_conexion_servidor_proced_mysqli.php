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
    $servername = "localhost";
    $username = "root";
    $password= "";

    //Creando conexion con el servidor
    $conn = mysqli_connect($servername, $username, $password);

    //Verificando conexion con el servidor
    if(!$conn){
        die("Conexión fallida: ".mysqli_connect_error());
    }else{
        echo "Conexion exitosa - Metodo: Procedimiento de MySQLi";
    };
    ?>
</body>
</html>
