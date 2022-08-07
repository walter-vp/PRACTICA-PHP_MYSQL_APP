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
    $dbname = "mibd_proc";

    //Creando conexión con el servidor
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //Verificando conexión con el servidor
    if (!$conn) {
      die("Conexión Fallida: " . mysqli_connect_errno()
        . "<br>");
    } else {
      echo "Conexión exitosa - Método: Procedimiento de MySQLi" . "<br>";
    }

    //Sentencia SQL para insertar multiples datos en una tabla

    $sql = "INSERT INTO  misinvitados (firstname,lastname,email) VALUES
      ('Cameron','Dominic Holt','pharetra@protonmail.ca'),
      ('Phillip','Ira Phelps','ut@hotmail.net'),
      ('Duncan','Ulysses Valenzuela','donec.fringilla.donec@hotmail.couk'),
      ('Arsenio','Quemby Moon','consectetuer@google.com'),
      ('Graiden','Elmo Gillespie','tristique.neque.venenatis@google.org'),
      ('James','Victor Bradley','eu@outlook.ca'),
      ('Nero','Martina Nelson','arcu@outlook.net'),
      ('Vincent','Kaitlin Ferrell','nam.ligula@icloud.com'),
      ('Hop','Yvonne Schmidt','nibh.enim@icloud.com'),
      ('Lawrence','Reece Mcdonald','malesuada.id@aol.org');";

    $sql .= "INSERT INTO  misinvitados (firstname,lastname,email) VALUES
      ('Sylvester','Branden Mendoza','nec@protonmail.org'),
      ('Hayes','Linus Pennington','turpis.aliquam.adipiscing@google.com'),
      ('Beck','Bethany Olsen','cursus.diam@google.couk'),
      ('Thaddeus','Kenneth Cabrera','neque.sed@outlook.net'),
      ('Jameson','Jane Cabrera','malesuada@icloud.edu'),
      ('Aidan','Keith Small','mauris.blandit.enim@outlook.com'),
      ('Galvin','Halla Schwartz','ac.urna@hotmail.net'),
      ('Brandon','Lawrence Kline','mauris@icloud.net'),
      ('Jamal','Kiara Cole','non.lobortis@yahoo.net'),
      ('Lucas','Oscar Webster','mollis.vitae.posuere@outlook.couk');";

    $sql .= "INSERT INTO  misinvitados (firstname,lastname,email) VALUES
      ('Dominic','Teegan Floyd','lacus@protonmail.edu'),
      ('Dolan','Buffy Ryan','in.dolor@aol.org'),
      ('Amos','Jackson Bates','facilisis.facilisis.magna@protonmail.org'),
      ('Derek','David Sawyer','dapibus@outlook.couk'),
      ('Jackson','Brynne Bowers','vulputate.nisi.sem@aol.com'),
      ('Oliver','Castor Black','urna@google.org'),
      ('Nolan','Colorado Hammond','varius@aol.com'),
      ('Chester','Bell Salinas','venenatis.lacus@hotmail.edu'),
      ('Bernard','Dustin Hogan','dictum.placerat.augue@icloud.couk'),
      ('Patrick','Slade Gregory','cras.vehicula@outlook.edu');";

    $sql .= "INSERT INTO  misinvitados (firstname,lastname,email) VALUES
      ('Murphy','Emi Martin','non@google.net'),
      ('Curran','Wing Kaufman','laoreet@aol.com'),
      ('Chaney','Celeste Fox','quis.tristique.ac@yahoo.org'),
      ('Kadeem','Hyacinth Pena','et.ultrices.posuere@yahoo.net'),
      ('Murphy','Jared Alston','molestie.tortor@yahoo.ca'),
      ('Felix','Rajah Rios','ligula.tortor@outlook.net'),
      ('Kenneth','Kiona Mercado','tellus@aol.com'),
      ('Denton','Elijah Hendricks','libero.dui@aol.ca'),
      ('Noah','Matthew Rich','non.lorem@google.couk'),
      ('Elmo','Odysseus Mcintosh','vel.pede.blandit@protonmail.com');";

    $sql .= "INSERT INTO  misinvitados (firstname,lastname,email) VALUES
      ('Dexter','Wang Campos','quisque.porttitor@yahoo.edu'),
      ('Fulton','Harriet Quinn','urna.suscipit@icloud.net'),
      ('Allistair','Preston Preston','augue.malesuada@hotmail.org'),
      ('Blake','Xandra Hoffman','tincidunt.vehicula@hotmail.edu'),
      ('Scott','Jerry Hudson','lacinia.at.iaculis@hotmail.edu'),
      ('Eaton','Barry Guy','lorem@yahoo.couk'),
      ('Sylvester','Mollie Henson','curae.phasellus@hotmail.couk'),
      ('Gregory','Rogan Merrill','ac.mattis.semper@icloud.edu'),
      ('Gavin','Cade Anthony','interdum@google.net'),
      ('Beck','Clementine Reilly','aliquet.phasellus.fermentum@google.ca');";

    $sql .= "INSERT INTO  misinvitados (firstname,lastname,email) VALUES
      ('Neville','Nadine Holman','sit@aol.org'),
      ('Zephania','Rhonda Mckinney','magna@outlook.edu'),
      ('Macaulay','Noel Cameron','vestibulum@yahoo.net'),
      ('Philip','Isabelle Turner','commodo.auctor@icloud.couk'),
      ('Ahmed','James Foreman','felis.eget@icloud.ca'),
      ('Otto','Kyle Kelley','proin.vel@google.net'),
      ('Jermaine','Jenette Kaufman','feugiat.metus.sit@protonmail.ca'),
      ('Quamar','Jack Spence','egestas.a.dui@icloud.edu'),
      ('Quentin','Leila Glover','arcu.vivamus.sit@outlook.org'),
      ('Cyrus','Odessa Nicholson','malesuada@hotmail.ca');";

    $sql .= "INSERT INTO  misinvitados (firstname,lastname,email) VALUES
      ('Kelly','Amela Shepherd','tempus.risus@hotmail.org'),
      ('Chancellor','Unity Walsh','integer@aol.org'),
      ('Price','Jaquelyn House','sagittis.semper@aol.com'),
      ('Cruz','Shafira Mckay','interdum.enim@yahoo.com'),
      ('Kermit','Althea Burke','sollicitudin.adipiscing@hotmail.couk'),
      ('Galvin','Sydnee Matthews','montes.nascetur@protonmail.couk'),
      ('Amal','Derek Melendez','laoreet.lectus@aol.ca'),
      ('Drew','Cameran Becker','sit.amet.metus@outlook.com'),
      ('Omar','Chastity Frazier','nunc.lectus@outlook.edu'),
      ('Wing','Evan Aguilar','ridiculus@outlook.ca');";

    $sql .= "INSERT INTO  misinvitados (firstname,lastname,email) VALUES
      ('Bevis','Libby O'donnell','sit@icloud.ca'),
      ('Kyle','Vivian Foster','sapien@outlook.net'),
      ('Timothy','Vivian Koch','fermentum.metus.aenean@aol.couk'),
      ('Chester','Bradley Bender','mauris@hotmail.couk'),
      ('Ian','Bruno Bennett','molestie@aol.com'),
      ('Brendan','Cain Wilkinson','semper.pretium@google.com'),
      ('Zachery','Zelenia Huffman','eu.euismod@outlook.net'),
      ('Cullen','Claire Wise','porta.elit.a@outlook.ca'),
      ('Linus','Regan Vazquez','phasellus.dolor.elit@outlook.couk'),
      ('Josiah','Charlotte Jennings','non.dui@protonmail.ca');";

    $sql .= "INSERT INTO  misinvitados (firstname,lastname,email) VALUES
      ('Camden','Callum Vance','velit.pellentesque.ultricies@protonmail.com'),
      ('Kaseem','Tucker Myers','ornare.lectus@google.edu'),
      ('Raphael','Lucas Gregory','dui.nec@yahoo.com'),
      ('Abel','Samson Henry','ac.turpis@hotmail.edu'),
      ('Declan','Garrison Bell','hendrerit.donec@outlook.com'),
      ('Honorato','Cherokee Justice','proin.dolor@hotmail.net'),
      ('Cody','Brent Cline','lorem@aol.couk'),
      ('Brandon','Kylee Miranda','lorem.ipsum.sodales@hotmail.com'),
      ('Graham','Ryder Barry','euismod.ac@google.ca'),
      ('Myles','Brenda Trevino','aenean@aol.couk');";

    $sql .= "INSERT INTO  misinvitados (firstname,lastname,email) VALUES
      ('Wesley','Alika Tate','nonummy.ipsum@hotmail.edu'),
      ('Garth','Joelle Cruz','tellus.justo.sit@hotmail.couk'),
      ('Thomas','Carol Diaz','laoreet.lectus.quis@icloud.ca'),
      ('Ashton','Hamish Lamb','vulputate@google.couk'),
      ('Keaton','Aiko Fowler','risus.in@icloud.ca'),
      ('Dolan','Kiona Kim','sit.amet.risus@protonmail.net'),
      ('Omar','Sandra Nielsen','at.libero.morbi@outlook.net'),
      ('Branden','Austin Perez','dolor@hotmail.org'),
      ('Zeus','Angela Walters','etiam.gravida.molestie@hotmail.org'),
      ('Lance','Lewis Ferrell','malesuada.integer@aol.net')";

    //Insertando datos en la tabla
    if (mysqli_multi_query($conn, $sql)) {
      echo "Nuevo registro creado con éxito" . "<br>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

    ?>
</body>

</html>