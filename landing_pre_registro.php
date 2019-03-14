<?php

  $nombre = $_POST["nombre"];
  $alumno = $_POST["alumno"];
  $edad = $_POST["edad"];
  $celular = $_POST["celular"];
  $email = $_POST["email"];
  $numeroClases = $_POST["numeroClases"];
  $servicios = $_POST["servicios"];
  $comentarios = $_POST["mensaje"];
  $sucursal = $_POST["sucursal"];

  $header = "Olimpus" . "\r\nContent-type: text/html\r\n";
  $header = "MIME-Version: 1.0\r\n";
  $header .= "Content-type: text/html; charset=iso-8859-1\r\n";

  //cuerpo del mensaje//
  $mensaje = "-----------------------------------\n";
  $mensaje .= "            Pre Inscripción       \n";
  $mensaje .= "---------------------------------- <br> \n";
  $mensaje .= "NOMBRE:  " . $nombre . "<br> \n";
  $mensaje .= "ALUMNO:  " . $alumno . "<br> \n";
  $mensaje .= "EDAD:  " . $edad . "<br> \n";
  $mensaje .= "CELULAR:  " . $celular . "<br> \n";
  $mensaje .= "EMAIL:  " . $email . "<br> \n";
  $mensaje .= "NUMERO DE CLASES:  " . $numeroClases . "<br> \n";
  $mensaje .= "SERVICIO DE INTERES:  " . $servicios . "<br> \n";
  $mensaje .= "MENSAJE:  " . $comentarios . "<br> \n";
  $mensaje .= "SUCURSAL:  " . $sucursal . "<br> \n";
  $mensaje .= "---------------------------------- \n";
  $mensaje .= "Enviado desde -----------------------------<br>Olimpus Pre Inscripción";

  $para = "contacto@olimpus.com.mx";

  // Enviamos el mensaje
  $asunto ="Pre Inscripción Olimpus";
  //regresar el codigo

  mail($para,$asunto, utf8_decode($mensaje), $header);

  header("Location: http://olimpus.com.mx/agradecimiento.html");

  exit();

?>
