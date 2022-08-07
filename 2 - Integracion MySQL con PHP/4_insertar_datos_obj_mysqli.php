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
    $dbname = "mibd_obj";

    //Creando conexión con el servidor
    $conn = new mysqli($servername, $username, $password, $dbname);

    //Verificando conexión con el servidor
    if($conn->connect_error){
        die("Conexión Fallida: " . $conn->connect_error);
    }else{
        echo "Conexion exitosa - Método: Orientado a Objetos de MySQLi" . "<br>";
    };

    //Sentencia SQL para insertar datos en una tabla
    $sql = "INSERT INTO misinvitados(firstname, lastname, email) VALUES ('Jhon Obj', 'Doe S Obj', 'john_Obj@example.com')";

    //Insertando datos la tabla
    if($conn->query($sql)===true){
        echo "Nuevo registro creado con éxito". "<br>";
    }else{
        echo "Error: ". $sql."<br>".$conn->error;
    }

    $conn->close();

    ?>

</body>
</html>