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
    $dbname = "mibd_proc";

    //Creando conexión con el Servidor
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //Verificando conexion con el servidor
    if(!$conn){
        die("Conexión Falliada: " . mysqli_connect_error());
    }else{
        echo "Conexión exitosa - Metodo Procedimiento de MySQLi" . "<br>";
    }

    //Sentencia SQL para insertar datos en una tabla
    $sql = "INSERT INTO misinvitados (firstname, lastname, email) VALUES ('Walter', 'Vásquez', 'walter@example.com')";

    //Insertando datos en la tabla
    if(mysqli_query($conn, $sql)){
        echo "Nuevo registro creado con éxito" . "<br>";

        //Accediendo a la última ID registrada
        $last_id = mysqli_insert_id($conn);
        echo "Ultimo ID registrado: " . $last_id . "<br>";

    }else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

    ?>
</body>
</html>