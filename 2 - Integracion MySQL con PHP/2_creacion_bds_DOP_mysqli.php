<!DOCTYPE html>
<html lang="en">
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

    try{
        //Creando conexión con el servidor
        $conn = new PDO("mysql:host=$servername", $username, $password);

        //Verificacion conexion con el servidor
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexion exitosa - Metodo: DOP de PHP"."<br>";

        //Creando Base de Datos miBD_Obj
        $sql = "CREATE DATABASE IF NOT EXISTS miBD_PDO";
        $conn->exec($sql);
        echo "Base de Datos miBD_Obj creada en forma exitosa". "<br>";
    }catch(PDOException $e){
        echo "Conexión fallida: ". $e->getMessage();
    };

    $conn = null;
    ?>

</body>
</html>