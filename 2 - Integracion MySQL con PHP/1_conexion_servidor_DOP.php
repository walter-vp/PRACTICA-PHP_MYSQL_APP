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
    $password = "";
    
    try{
        //Creando conexion con el servidor
        $conn = new PDO("mysql:host=$servername;dbname=ventas2015", $username, $password);

        //Verificacion conexion con el servidor
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexion exitosa - Metodo: DOP de PHP";
    }catch(PDOException $e){
        echo "Conexión fallida: " . $e->getMessage();
    }

    $conn = null;
    ?>
     
</body>
</html>