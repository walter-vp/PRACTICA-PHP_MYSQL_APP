<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Multiples Datos</title>
</head>
<body>
   <?php 
   
   //Variables
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "mibd_pdo";

   try {
    //Creando conexión con el servidor
    $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    
    //Verificando conexión con el servidor
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa - Metodo DOP de PHP". "<br>";

    //Sentencia SQL para insertar datos en una tabla
    $sql = "INSERT INTO  misinvitados (firstname,lastname,email) VALUES 
    ('Garrett','Josephine Christian','porta.elit@hotmail.couk'),
    ('Devin','Dillon Paul','aliquam.eros@aol.net'),
    ('Ciaran','Matthew Jennings','pede.ac.urna@aol.ca'),
    ('Nero','Cole Sargent','elit.a@protonmail.couk'),
    ('Raja','Upton Durham','ac@google.ca'),
    ('Tucker','Ronan Stokes','hendrerit.a@hotmail.com'),
    ('Noah','Lee Lamb','nascetur.ridiculus@google.net'),
    ('Ishmael','Ima Mullen','nunc@icloud.edu'),
    ('Rooney','Azalia Foley','eu.elit@hotmail.edu'),
    ('Chaim','Rajah Mccullough','placerat.orci@google.org');";

    $sql .= "INSERT INTO  misinvitados (firstname,lastname,email) VALUES
    ('Jacob','Hammett Hopper','nec.luctus@icloud.com'),
    ('Amal','Jaquelyn Holman','mauris.blandit.enim@hotmail.couk'),
    ('Branden','Evelyn Tucker','ultrices.a.auctor@google.net'),
    ('Lamar','Amir Gomez','neque.in@icloud.net'),
    ('Branden','Kelly Gross','tempor@protonmail.org'),
    ('Dean','Hadassah Wall','ligula.nullam.feugiat@aol.org'),
    ('Linus','Richard Fischer','dignissim.magna@protonmail.org'),
    ('Cain','Driscoll Pratt','dolor.tempus@icloud.org'),
    ('Norman','Elton Sweeney','ac.facilisis@protonmail.ca'),
    ('Jonah','Serina Jordan','mus.proin.vel@google.com');";

    $sql .= "INSERT INTO  misinvitados (firstname,lastname,email) VALUES
    ('Myles','Hiroko Burt','facilisi.sed@outlook.com'),
    ('Richard','Tad Silva','in.condimentum@hotmail.org'),
    ('Dillon','Emerson Gray','diam@protonmail.couk'),
    ('Keith','Graiden Blanchard','felis.adipiscing.fringilla@icloud.ca'),
    ('Alfonso','Haviva Parker','nunc.ullamcorper@icloud.ca'),
    ('Phillip','Brendan Hernandez','morbi.quis.urna@outlook.org'),
    ('Owen','Jade Hamilton','dapibus.ligula@yahoo.com'),
    ('Vincent','Maite Ayers','nonummy.ultricies@aol.com'),
    ('Charles','Zenia Rush','lectus@aol.com'),
    ('Cody','Velma Conner','sit.amet@protonmail.couk');";

    $sql .= "INSERT INTO  misinvitados (firstname,lastname,email) VALUES
    ('Kadeem','Eleanor Benton','curabitur@aol.org'),
    ('Noble','Ramona Mathews','egestas.blandit@google.couk'),
    ('Raymond','Alec Ortega','bibendum.fermentum@aol.edu'),
    ('Reece','Diana Chen','pharetra.nibh.aliquam@yahoo.edu'),
    ('Kane','Jameson Curry','cras.sed.leo@yahoo.ca'),
    ('Dillon','Indira Lowery','at.velit@icloud.couk'),
    ('Gareth','Bruno Everett','posuere.at@icloud.org'),
    ('Yuli','Xyla Hicks','eros.nec@yahoo.ca'),
    ('Jin','Blossom Madden','quis@google.couk'),
    ('Berk','Ariana Diaz','cursus.a@protonmail.ca');";

    $sql .= "INSERT INTO  misinvitados (firstname,lastname,email) VALUES
    ('Galvin','Dieter Gregory','fermentum.convallis@google.ca'),
    ('Christian','Stephen Burton','suspendisse@google.edu'),
    ('Eagan','Dante Petty','lacus.mauris@protonmail.net'),
    ('Baker','Dara Hebert','commodo.auctor@icloud.couk'),
    ('Kibo','Wang Roth','nulla.magna.malesuada@yahoo.com'),
    ('Nathan','Reed Olsen','tristique.aliquet@protonmail.com'),
    ('Omar','Hector Buckner','tempus.eu@yahoo.ca'),
    ('Michael','Tamara Sexton','bibendum.fermentum.metus@protonmail.edu'),
    ('Thaddeus','Xander Patrick','fusce.mollis.duis@yahoo.ca'),
    ('Omar','Paki Russell','dictum.sapien@protonmail.org');";

    $sql .= "INSERT INTO  misinvitados (firstname,lastname,email) VALUES
    ('Laith','Dillon Pollard','amet@outlook.ca'),
    ('Brett','Garth Merrill','sed@hotmail.org'),
    ('Hilel','Jeremy Morgan','vivamus.nisi@google.couk'),
    ('Cairo','Kameko Barnes','praesent@icloud.net'),
    ('Silas','Signe Montgomery','urna.nunc@google.org'),
    ('Duncan','Cadman Spears','convallis@aol.ca'),
    ('Ezekiel','Akeem Sims','nec.ante@hotmail.org'),
    ('Zahir','Reece Burt','in.faucibus@google.edu'),
    ('Magee','Zachary Preston','malesuada.augue.ut@google.edu'),
    ('Ivor','Hilary Harvey','cubilia@google.edu');";

    $sql .= "INSERT INTO  misinvitados (firstname,lastname,email) VALUES
    ('Kadeem','Clementine Cervantes','enim@yahoo.net'),
    ('Theodore','Vladimir Rose','dis@outlook.edu'),
    ('Chandler','Kasper Buckley','donec@yahoo.couk'),
    ('Brendan','Gregory Knight','ac.fermentum.vel@yahoo.edu'),
    ('Mark','Olga Lowery','dui@hotmail.ca'),
    ('Clark','Bryar Larson','luctus.et.ultrices@yahoo.org'),
    ('Garrett','Blake Mckinney','diam.vel@aol.couk'),
    ('Evan','Sheila Poole','eu@hotmail.edu'),
    ('Murphy','Darius Mullen','mollis.integer@aol.com'),
    ('Lev','Mason Patton','aliquam@yahoo.org');";

    $sql .= "INSERT INTO  misinvitados (firstname,lastname,email) VALUES
    ('Drake','Carlos Pittman','luctus.vulputate.nisi@google.org'),
    ('Wade','Cheyenne Maxwell','ipsum.sodales@google.couk'),
    ('Salvador','Buffy Dodson','imperdiet.erat.nonummy@icloud.edu'),
    ('Boris','Walker Dudley','amet.ornare.lectus@yahoo.ca'),
    ('Jameson','Nora Clark','consectetuer.rhoncus@hotmail.edu'),
    ('Wing','Abel Ward','est.mauris.eu@icloud.org'),
    ('Hasad','Reece Lindsay','a@yahoo.net'),
    ('Ciaran','Juliet Vaughan','phasellus@yahoo.com'),
    ('Dane','Calista Stein','augue.eu.tempor@protonmail.couk'),
    ('Paul','Mary Durham','feugiat.metus.sit@hotmail.couk');";

    $sql .= "INSERT INTO  misinvitados (firstname,lastname,email) VALUES
    ('Moses','Abraham Hayden','cursus.non@protonmail.ca'),
    ('Andrew','Tanner Wilkins','ut.molestie.in@icloud.ca'),
    ('Howard','Shelley Pate','eu.enim@aol.ca'),
    ('Logan','Griffin English','et.netus@hotmail.net'),
    ('Lucius','Jakeem Melendez','vel.venenatis@aol.com'),
    ('Jared','Herman Fowler','donec@google.edu'),
    ('Russell','Nichole Deleon','vestibulum@google.couk'),
    ('Barclay','Rama Maldonado','vel.nisl@hotmail.org'),
    ('Graiden','Holly Puckett','nec@outlook.edu'),
    ('Raymond','Nelle Franco','nunc.quisque.ornare@hotmail.org');";

    $sql .= "INSERT INTO  misinvitados (firstname,lastname,email) VALUES
    ('Anthony','Todd Ayala','donec.est.nunc@google.couk'),
    ('Adam','Reagan Morris','eu.erat@google.org'),
    ('Brock','Ocean Morton','nonummy@yahoo.ca'),
    ('Mufutau','Chaney Coleman','non.enim@yahoo.edu'),
    ('Armand','Daquan Duran','posuere.cubilia@icloud.org'),
    ('Wylie','Barclay Weeks','tortor@icloud.net'),
    ('Stewart','Zahir Price','tellus.suspendisse.sed@icloud.net'),
    ('Sylvester','Hamish Walsh','dis.parturient@yahoo.couk'),
    ('Edward','Jonah Horne','scelerisque@hotmail.couk'),
    ('Xander','Marvin Huber','est.nunc@outlook.org')"; 

    //Insertando datos en la tabla
    $conn->exec($sql);
    echo "Nuevo registro creado con éxito". "<br>";

   } catch (PDOException $e) {
    //En caso de error;
    echo "Creación fallida: ". $sql ."<br>". $e->getMessage();
   }
   
   

   ?> 
</body>
</html>