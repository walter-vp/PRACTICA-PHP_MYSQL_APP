<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Declaraciones preparadas</title>
</head>
<body>
    
    <?php 
    
    //Variables
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mibd_obj";

    //Creando conexión al servidor
    $conn = new mysqli($servername, $username, $password, $dbname);

    //Verificando conexion con el servidor
    if($conn->connect_error){
        die("Conexión Fallida: " . $conn->connect_error);
    }else{
        echo "Conexión exitosa - Metodo Objeto de MySQLi" . "<br>";
    }

    //Preparar y unir declaraciones
    $stmt_1 = $conn->prepare("INSERT INTO misinvitados (firstname, lastname, email) VALUES (?, ?, ?)");
    $stmt_1->bind_param("sss",$firstname, $lastname, $email);

    //Establecer parámetros y ejecutar
    /* insertar una fila */
    $firstname = "Edgar";
    $lastname = "Vásque P";
    $email = "edgar@example.com";
    $stmt_1->execute();

    /* insertar otra fila */
    $firstname = "Mary";
    $lastname = "Moe";
    $email = "mary@example.com";
    $stmt_1->execute();

    /* insertar otra fila */
    $firstname = "julie";
    $lastname = "Dooley";
    $email = "julie@example.com";
    $stmt_1->execute();

    echo "Nuevos registros creados con exito" . "<br>";

    //Accediendo a la última ID registrada
    $last_id = $conn->insert_id;
    echo "Ultimo ID registrado: " . $last_id . "<br>";

    $stmt_1->close();
    $conn->close();
    ?>

</body>
</html>