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
    $dbname= "mibd_pdo";

    try {
        
        //Creando conexión con el servidor
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        //Verificando conexión con el servidor
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexión exitosa - Metódo: DOP de PHP" . "<br>";

        //Sentencia SQL para insertar datos en una tabla
        $sql = "INSERT INTO MisInvitados (firstname, lastname, email) VALUES ('Jhon DOP', 'Doe S DOP', 'john_DOP@example.com')";

        //Insertando datos en la tabla
        $conn->exec($sql);
        echo "Nuevo registro creado con éxito". "<br>";

    }   catch (PDOException $e) {
        //En caso de erro;
        echo "Creación fallida: ". $sql ."<br>". $e->getMessage();
    }
    
    $conn = null;
    ?>

</body>
</html>