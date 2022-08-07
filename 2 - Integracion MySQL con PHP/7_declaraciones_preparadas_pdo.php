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
    $dbname = "mibd_pdo";

    try {
        //Creando conexión al servidor
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username,$password);

        //Verificando conexión con el servidor
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexión exitosa - Método: PDO de PHP" . "<br>";
        
        //reparar y unir declaraciones
        $stmt_1 = $conn->prepare("INSERT INTO MisInvitados (firstname, lastname, email) VALUES (:firstname, :lastname, :email)");
        $stmt_1->bindParam(':firstname', $firstname);
        $stmt_1->bindParam(':lastname', $lastname);
        $stmt_1->bindParam(':email', $email);

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
        $last_id = $conn->lastInsertId();
        echo "Ultimo ID registrado: " . $last_id . "<br>";

    } catch (PDOException $e) {
        //En caso de erro;
        echo "Creación fallida: ". $e->getMessage();
    }

    $stmt_1 = null;
    $conn = null;

    ?>

</body>
</html>