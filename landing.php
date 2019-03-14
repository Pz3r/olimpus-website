<?php

  $nombre = $_POST["nombre"];
  $celular = $_POST["celular"];
  $email = $_POST["email"];
  $ciudad = $_POST["ciudad"];
  $edad = $_POST["edad"];
  $sucursal = $_POST["sucursal"];
  $descargable = $_POST["descargable"];

  $header = "Olimpus" . "\r\nContent-type: text/html\r\n";
  $header = "MIME-Version: 1.0\r\n";
  $header .= "Content-type: text/html; charset=iso-8859-1\r\n";

  //cuerpo del mensaje//
  $mensaje = "-----------------------------------\n";
  $mensaje .= "            Descargable               \n";
  $mensaje .= "---------------------------------- <br> \n";
  $mensaje .= "NOMBRE:  " . $nombre . "<br> \n";
  $mensaje .= "CELULAR:  " . $celular . "<br> \n";
  $mensaje .= "CORREO:  " . $email . "<br> \n";
  $mensaje .= "CIUDAD:  " . $ciudad . "<br> \n";
  $mensaje .= "EDAD:  " . $edad . "<br> \n";
  $mensaje .= "SUCURSAL:  " . $sucursal . "<br> \n";
  $mensaje .= "DESCARGABLE:  " . $descargable . "<br> \n";
  $mensaje .= "---------------------------------- \n";
  $mensaje .= "Enviado desde -----------------------------<br>Olimpus Descargables";

  $para = "contacto@olimpus.com.mx";

  // Enviamos el mensaje
  $asunto ="Formulario descargables Olimpus";
  //regresar el codigo

  mail($para,$asunto, utf8_decode($mensaje), $header);

  header("Location: http://olimpus.com.mx/" . $descargable . ".html");

  exit();

?>
