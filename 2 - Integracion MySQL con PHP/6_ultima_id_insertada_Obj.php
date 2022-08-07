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
    $dbname = "mibd_obj";

    //Creando conexión con el servidor
    $conn = new mysqli($servername, $username, $password, $dbname);

    //Verificando conexion con el servidor
    if($conn->connect_error){
        die("Conexión fallida: ". $conn->connect_error."<br>");
    }else{
        echo "Conexion exitosa - Método: Orientado a objetos de MySQLi"."<br>";
    };

    //Sentencia SQL para insertar datos en una tabla
    $sql = "INSERT INTO misinvitados (firstname, lastname, email) VALUES ('Walter', 'Vásquez', 'walter@example.com')";

    //Insertando datos a la tabla
    if($conn->query($sql) === true){
        echo "Nuevo registro creado con éxito "."<br>";
        
        //Accediendo a la última ID registrada
        $last_id = $conn->insert_id;
        echo "Ultimo ID registrado: " . $last_id . "<br>";

    }else{
        echo "" . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();

    ?>
</body>
</html>