<?php

$name=$_POST['name'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$feedBack=$_POST['feedBack'];

ValidarDatos($name);
ValidarDatos($email);
ValidarDatos($tel);
ValidarDatos($feedBack);


$toAdreess='ventas@desarmaderoar.com.ar';
$subject='Consultas desde la web';
$mailContent='- Nombre : '.$name."<br/>"
			.'- E-mail : '.$email."<br/>"
			.'- Telefono : '.$tel."<br/>"
			.'- Consulta : '.$feedBack."<br/>";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: $email";

ini_set(sendmail_from,'ventas@desarmaderoar.com.ar');


mail($toAdreess, $subject, $mailContent, $headers);  




  function ValidarDatos($campo){
    //Array con las posibles cabeceras a utilizar por un spammer
    $badHeads = array("Content-Type:",
                                 "MIME-Version:",
                                 "Content-Transfer-Encoding:",
                                 "Return-path:",
                                 "Subject:",
                                 "From:",
                                 "Envelope-to:",
                                 "To:",
                                 "bcc:",
                                 "cc:");

    //Comprobamos que entre los datos no se encuentre alguna de
    //las cadenas del array. Si se encuentra alguna cadena se
    //dirige a una p�gina de Forbidden
    foreach($badHeads as $valor){
      if(strpos(strtolower($campo), strtolower($valor)) !== false){
        header("HTTP/1.0 403 Forbidden");
        exit;
      }
    }
  }
?>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Enviada - Autopartes Rosario</title>
   <!--fuentes del sitio-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@900&display=swap" rel="stylesheet">
    <!--empatar estilos basicos en diferentes navegadores-->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- carga de iconos-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--estilo del sitio-->
    <link rel="stylesheet" href="css/autopartes.css">
</head>

<body>
    <header>
        <div class="holder">
            <img src="img/logo.png" width="150" alt="Autopartes Rosario">
            <h1>AUTOPARTES ROSARIO</h1>
        </div>

        <div class="menu_bar">
            <a href="#" class="bt-menu"><i class="fas fa-bars"></i>Menu</a>
        </div>

    </header>

    <nav class="navS">
        <div class="holder">
            <ul>
                <li> <a href="index.html"><i class="fas fa-laptop-house"></i>Home</a></li>
                <li> <a href="empresa.html"><i class="fas fa-building"></i>Empresa</a></li>
                <li> <a href="servicios.html"><i class="fab fa-usps"></i>Servicios</a></li>
                <li> <a href="productos.html"><i class="fas fa-car"></i>Productos</a></li>
                <li> <a href="novedades.html"><i class="fas fa-newspaper"></i>Novedades</a></li>
                <li> <a href="contacto.html"><i class="fas fa-mail-bulk"></i>Contacto</a></li>
            </ul>
        </div>
    </nav>

    <main class="holder">
        <h2>CONSULTA ENVIADA</h2>
        <p>¡MUCHAS GRACIAS POR HABER REALIZADO SU CONSULTA!...</p>
        <p > a la brevedad estaremos poniendonos en contacto con usted
              para dar una respuesta a la misma</p>


        <div class="homeimg">
            <img src="img/novedades/Ar.jpg" alt="Ar">
        </div>

        


    </main>

    <footer>
        <a class="appWhatsapp" target="_blanck" href="https://api.whatsapp.com/send?phone=5493413507313&text=Consulta_Wsp">
            <img src="img/wpp.png" alt="Whatsapp">
        </a>

        <div class="holder">
            <h5> Todas las marcas y logos están presentes sólo a título informativo y son propiedad de sus respectivos
                dueños.</h5>
            <p> Autopartes Rosario&copy;2021 - Todos los derechos reservados.</p>
            <h5>Av. Eva Perón Nº 7201 - Rosario - Santa Fe - Argentina // WhatsApp: +3413507313 -
                ventas@desarmaderoar.com.ar</h5>
        </div>
    </footer>

    <script src="js/menu.js"></script>

</body>

</html>