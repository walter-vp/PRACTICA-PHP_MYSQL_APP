<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Selección y sorteo de Datos</title>
</head>
<body>
    <?php 
    //Declarando Clase TableRows para recorrer iteradores recursivos
    class TableRows extends RecursiveIteratorIterator{
            
        function __construct($it){
            parent::__construct($it, self::LEAVES_ONLY);
        }

        function beginChildren(): void {
            echo "<tr>";
        }

        function current(): mixed {
            return "<td>". parent::current() . "</td>";
        }

        function endChildren(): void {
            echo "</tr>" . "\n";
        }
    };

    //Variables
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mibd_pdo";

    //Estructurando la tabla que contendrá los datos a ser presentados
    echo "<table>
    <tr>
        <th>Id</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Email</th>
        <th>Fecha Reg</th>
    </tr>";

    try{
        //Creando conexión con el servidor
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);

        //Verificando conexión con el servidor
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<h1>"."Conexión Exitosa - Método: DOP de PHP" . "</h1>";

        //Preparar y unir declaraciones
        $stmt= $conn->prepare("SELECT id,firstname, lastname, email, reg_date FROM misinvitados WHERE id > 50 and id < 80 ORDER BY firstname DESC");

        //Ejecutar declaración
        $stmt->execute();

        //Verificar si se devuelve más de cero filas
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        /* 
        Si se devuleve más de cero filas, la función "fetch_assoc()" 
        coloca todos los resultados en una matriz asociativa que podemos recorrer.
        El bucle "FOREACH()" recorre el conjunto de resultados y genera los datos
        de las columnas: ID, firstname, lastneme, email, reg_date.
        En este caso se usa la sintaxis de un ITERADOR.
        Un iterador realiza el recorrido y también da acceso a los elementos de datos en un contenedor
        en el presente caso una base de datos y los almacena
        */

        //Mostrar datos seleccionados en pantalla
        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchALL())) as $key => $value)
        {
            /* Salida de la estructura de datos contenidas en la variable $value */
            echo $value;
        };

    } catch (PDOException $e) {
        //En caso de error
        echo "<h1>"."Creación fallida: ". $e->getMessage()."</h1>";
    }
    
    $conn = null;

    ?>
</body>
</html>