<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    //Variables
    $servername = "localhost";
    $username= "root";
    $password = "";
    $dbname = "miBD_Proc";

    //Creando conexion con el servidor
    $conn = mysqli_connect($servername, $username,$password, $dbname);

    //Verificando conexión con el servidor
    if(!$conn){
        die("Conexion Fallida ".mysqli_connect_error());
    }else{
        echo "Conexion exitosa - Método: Procedimiento de MySQLi". "<br>";
    };

    //Sentencia SQL para crear una tabla
    $sql ="CREATE TABLE MisInvitados(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP        
    )";

    if(mysqli_query($conn, $sql)){
        echo "Creación de tabla exitosa" . "<br>";
    }else{
        echo "Error al crear tabla: ".mysqli_error($conn). "<br>";
    };

    //Cerrando conexión con el servidor
    mysqli_close($conn);
    
    ?>
</body>
</html>