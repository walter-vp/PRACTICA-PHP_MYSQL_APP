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
    $dbname = "mibd_obj";

    //Creando conexión con el servidor
    $conn = new mysqli($servername, $username, $password, $dbname);

    //Verificando conexion con el servidor
    if($conn->connect_error){
        die("Conexion fallida: ".$conn->connect_error
        ."<br>");
    }else{
        echo "Conexión exitosa - Método: Orientado a objetos de MySQLi". "<br>";
    }

    //Sentencia SQL para insertar multiples datos en una tabla
   
    $sql = "INSERT INTO  misinvitados (firstname,lastname,email) VALUES
      ('Addison','Zephr Jenkins','volutpat.nulla@google.org'),
      ('Dolan','Kiona Mann','phasellus@google.org'),
      ('Raja','Xena Robinson','non.massa@yahoo.org'),
      ('Chester','Rae Lester','maecenas.libero@icloud.couk'),
      ('Peter','Emi Kramer','pede@hotmail.edu'),
      ('Rafael','Miranda Shaw','ipsum.nunc@icloud.edu'),
      ('Gage','Alfreda Byers','et.libero.proin@protonmail.com'),
      ('Wayne','Hiroko Woodward','amet.massa@google.com'),
      ('Timon','Malcolm Michael','blandit.congue.in@yahoo.net'),
      ('Akeem','Dolan Pollard','mauris.a.nunc@google.edu');";

    $sql .= "INSERT INTO  misinvitados (firstname,lastname,email) VALUES
      ('Len','Chaney Kerr','sed.auctor@aol.edu'),
      ('Joel','Alexa Gray','nulla.tincidunt@hotmail.com'),
      ('Kyle','Gwendolyn Maxwell','nulla@hotmail.net'),
      ('Dieter','Libby Porter','metus.aenean@icloud.org'),
      ('Vladimir','Deacon Rodgers','fermentum.convallis.ligula@icloud.net'),
      ('Baker','Hadassah Nichols','vivamus@aol.ca'),
      ('Chadwick','Ishmael Ellison','morbi@yahoo.com'),
      ('Elijah','Ashely Nicholson','enim.sit@icloud.couk'),
      ('Elmo','Valentine Britt','est.mauris@aol.org'),
      ('Thomas','Lani Elliott','metus.in@outlook.org');";

    $sql .= "INSERT INTO  misinvitados (firstname,lastname,email) VALUES
      ('Wang','Hedley Solomon','velit.in@protonmail.org'),
      ('Martin','Victor Beach','adipiscing.elit.aliquam@protonmail.edu'),
      ('Orlando','Nevada Ball','quis@yahoo.org'),
      ('Duncan','Laura Rowland','curae@hotmail.couk'),
      ('Fritz','Melodie Garza','purus@hotmail.couk'),
      ('Cruz','Carol Whitney','vel.sapien@protonmail.couk'),
      ('Russell','Wallace Howe','iaculis@google.ca'),
      ('Kuame','Knox Lynch','vitae.sodales@protonmail.edu'),
      ('Giacomo','Fallon Walton','in.aliquet.lobortis@icloud.ca'),
      ('Armand','Anjolie Andrews','a.feugiat@yahoo.couk');";

    $sql .= "INSERT INTO  misinvitados (firstname,lastname,email) VALUES
      ('Wayne','Jacqueline Holman','non.magna@outlook.com'),
      ('Herrod','Nehru Wilcox','ullamcorper@google.edu'),
      ('Solomon','Craig Castro','diam.at@google.com'),
      ('Yasir','Dylan Hurst','quisque@yahoo.edu'),
      ('Alec','Rina Cleveland','sociis@yahoo.ca'),
      ('Steven','Cullen Clayton','in.mi.pede@hotmail.net'),
      ('Stone','Curran Burt','natoque.penatibus.et@icloud.edu'),
      ('Theodore','May Dickson','proin@protonmail.edu'),
      ('Kasimir','Louis Garner','justo.faucibus@aol.org'),
      ('Jasper','Chantale Whitley','vulputate.eu.odio@aol.ca');";

    $sql .= "INSERT INTO  misinvitados (firstname,lastname,email) VALUES
      ('Talon','Remedios Moss','libero.lacus@outlook.net'),
      ('Keefe','Aidan York','fringilla@icloud.org'),
      ('Abel','Cedric Beach','eleifend.egestas.sed@icloud.net'),
      ('Branden','Kylie Ward','leo@protonmail.org'),
      ('Zachery','Maggie Bean','sed@hotmail.edu'),
      ('Alvin','Mechelle Serrano','pellentesque.ut@yahoo.net'),
      ('Quentin','Talon Head','leo.in@hotmail.couk'),
      ('Samson','Alea Butler','arcu.vivamus.sit@outlook.com'),
      ('Vaughan','Autumn West','vitae.aliquam@outlook.org'),
      ('Tobias','Alika Weber','tristique.pharetra@hotmail.com');";

    $sql .= "INSERT INTO  misinvitados (firstname,lastname,email) VALUES
      ('Gage','Melanie Harper','auctor@yahoo.couk'),
      ('Rigel','Chelsea Huff','proin.ultrices@google.ca'),
      ('Kenyon','Jin Gay','consectetuer.mauris@hotmail.couk'),
      ('Walker','Merrill Vaughan','ac.feugiat.non@icloud.ca'),
      ('Griffith','Alea Ballard','morbi.vehicula@google.com'),
      ('Bernard','Yael Gregory','at.risus@yahoo.com'),
      ('Geoffrey','Justine Hess','tellus.eu@icloud.net'),
      ('Lucius','Bell Roth','turpis.nulla@protonmail.couk'),
      ('Honorato','Irene Velez','luctus@aol.com'),
      ('Damon','Dana Leach','libero.dui@aol.edu');";

    $sql .= "INSERT INTO  misinvitados (firstname,lastname,email) VALUES
      ('Rajah','Vivien Barber','enim.gravida@icloud.edu'),
      ('Leonard','Charissa Abbott','feugiat.metus@google.couk'),
      ('Drake','Dennis Larson','vel.mauris.integer@outlook.com'),
      ('Arsenio','Tamara Ferrell','metus.facilisis@icloud.com'),
      ('Zachary','Nola Wallace','ante.dictum.mi@outlook.org'),
      ('Merritt','Mira Hunt','sapien@aol.com'),
      ('Ivan','Slade Gates','fringilla@google.org'),
      ('Ray','Ryan Nash','vitae.velit@icloud.net'),
      ('Jeremy','Xena Britt','venenatis.a.magna@google.ca'),
      ('Bruno','Baxter Davenport','amet@protonmail.org');";

    $sql .= "INSERT INTO  misinvitados (firstname,lastname,email) VALUES
      ('Ira','Hamilton Durham','iaculis.lacus.pede@aol.net'),
      ('Ryan','Basil Allison','aliquet.metus@aol.org'),
      ('Quamar','Yvette Stevenson','sagittis@yahoo.org'),
      ('Cameron','Bree Salas','molestie.sodales.mauris@hotmail.com'),
      ('Fuller','Sonia Dyer','vitae.dolor@protonmail.org'),
      ('Len','Raphael Compton','purus@icloud.couk'),
      ('Steven','Brandon Wynn','posuere@icloud.net'),
      ('Cedric','Otto Saunders','egestas.duis@google.net'),
      ('Fulton','Tatyana Guthrie','magna@protonmail.org'),
      ('Cadman','Allistair Warren','ut@hotmail.com');";

    $sql .= "INSERT INTO  misinvitados (firstname,lastname,email) VALUES
      ('Elmo','Ulric Rowland','venenatis.a@yahoo.ca'),
      ('Ali','Driscoll Jackson','elit@hotmail.org'),
      ('Carson','Theodore Rivera','facilisis.lorem@google.net'),
      ('Burton','Stewart Burton','nisi.sem@aol.ca'),
      ('Chadwick','Adrian Neal','et@outlook.org'),
      ('Nathan','Darrel Sims','luctus.et.ultrices@hotmail.org'),
      ('Samuel','Mallory Russo','justo.praesent@google.com'),
      ('Louis','Baxter Bates','cursus@outlook.com'),
      ('Dane','Myles Wyatt','lobortis.risus.in@hotmail.com'),
      ('Allen','Fletcher Clay','magna.lorem@aol.net');";

    $sql .= "INSERT INTO  misinvitados (firstname,lastname,email) VALUES
      ('Joshua','Kristen Santana','magna.praesent@protonmail.edu'),
      ('Amos','Kevyn Mendez','tristique.senectus@outlook.com'),
      ('Ira','Rebekah Leach','lectus.quis@google.org'),
      ('Orson','Timothy Butler','dui.nec@outlook.org'),
      ('Kennan','Sawyer Simon','luctus.lobortis@hotmail.ca'),
      ('Dane','Andrew House','facilisis.lorem@icloud.edu'),
      ('Addison','Oleg Sykes','commodo.hendrerit@yahoo.ca'),
      ('Macaulay','Nayda Callahan','iaculis.odio.nam@aol.net'),
      ('Dominic','Nita Summers','ante@icloud.com'),
      ('Channing','Ingrid Rivas','lorem@yahoo.edu')";

    //Insertando datos la tabla
    if($conn->multi_query($sql)===true){
        echo "Nuevo registro creado con éxito". "<br>";
    }else{
        echo "Error: ". $sql."<br>".$conn->error;
    }

    $conn->close();

    ?>
</body>

</html>