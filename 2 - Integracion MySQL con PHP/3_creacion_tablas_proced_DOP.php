<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creación de Tablas</title>
</head>
<body>
    <?php 
    
    //Variables
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname= "miBD_PDO";

    try {
        //Creando conexión con el servidor
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        
        //Verificando conexión con el servidor
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexion exitosa - Metodo: DOP de PHP"."<br>";

        // Sentencia SQL para crear una tabla
        $sql ="CREATE TABLE MisInvitados(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP        
        )";

        //Creando TABLA 
        $conn->exec($sql);
        echo "Creación de tabla exitosa" . "<br>";
    } catch (PDOException $e) {
        //En caso de error
        echo "Creación fallida: ". $e->getMessage();
    }

    $conn = null;
    ?>
    
</body>
</html>