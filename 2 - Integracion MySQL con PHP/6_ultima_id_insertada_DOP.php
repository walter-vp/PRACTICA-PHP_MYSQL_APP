<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultima ID insertada</title>
</head>
<body>
    <?php 
    //Variables
    $servername = "localhost";
    $username= "root";
    $password = "";
    $dbname = "mibd_pdo";

    try {
        
        //Creando creando conexión con el servidor
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        
        //Verificando 
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexión exitosa - Método: PDO de PHP" . "<br>";

        //Sentencia SQL para insertar datos en una tabla
        $sql = "INSERT INTO MisInvitados (firstname, lastname, email) VALUES ('Walter', 'Vásquez', 'walter@example.com')";

        //Insertando datos en la tabla
        $conn->exec($sql);
        echo "Nuevo registro creado con éxito" . "<br>";
        $last_id = $conn->lastInsertId();
        echo "Ultimo ID registrado: " . $last_id . "<br>";

    } catch (PDOException $e) {
        //En caso de erro;
        echo "Creación fallida: ". $sql ."<br>". $e->getMessage();
    }

    $conn = null;

    ?>
</body>
</html>