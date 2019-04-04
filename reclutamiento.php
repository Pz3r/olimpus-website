<?php

  $nombre = $_POST["nombre"];
  $apellidos = $_POST["apellidos"];
  $celular = $_POST["celular"];
  $email = $_POST["email"];
  $sucursal = $_POST["sucursal"];
  $posicion = $_POST["posicion"];
  $trabajo = $_POST["trabajo"];
  $empresa = $_POST["empresa"];
  $experiencia = $_POST["experiencia"];
  $interes = $_POST["interes"];
  $disponibilidad = $_POST["disponibilidad"];

  $target_dir = "assets/docs/";
  $target_file = $target_dir . basename($_FILES["cv"]["name"]);
  $uploadOk = 1;

  // Check if file already exists
  if (file_exists($target_file)) {
      echo "Sorry" . $target_file . "file already exists.";
      $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["cv"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
  }

  $link_to_file = "http://olimpus.com.mx/" . $target_dir;
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
      if (move_uploaded_file($_FILES["cv"]["tmp_name"], $target_file)) {
          $link_to_file = $link_to_file . rawurlencode(basename($_FILES["cv"]["name"]));
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
  }

  //escribir mail
  $header = "Olimpus" . "\r\nContent-type: text/html\r\n";
  $header = "MIME-Version: 1.0\r\n";
  $header .= "Content-type: text/html; charset=iso-8859-1\r\n";

  //cuerpo del mensaje//
  $mensaje = "-----------------------------------\n";
  $mensaje .= "            Reclutamiento         \n";
  $mensaje .= "---------------------------------- <br> \n";
  $mensaje .= "NOMBRE:  " . $nombre . "<br> \n";
  $mensaje .= "APELLIDOS:  " . $apellidos . "<br> \n";
  $mensaje .= "CELULAR:  " . $celular . "<br> \n";
  $mensaje .= "EMAIL:  " . $email . "<br> \n";
  $mensaje .= "SUCURSAL:  " . $sucursal . "<br> \n";
  $mensaje .= "POSICIÓN:  " . $posicion . "<br> \n";
  $mensaje .= "TRABAJO:  " . $trabajo . "<br> \n";
  $mensaje .= "EMPRESA:  " . $empresa . "<br> \n";
  $mensaje .= "EXPERIENCIA:  " . $experiencia . "<br> \n";
  $mensaje .= "INTERES:  " . $interes . "<br> \n";
  $mensaje .= "DISPONIBILIDAD:  " . $disponibilidad . "<br> \n";
  $mensaje .= "LIGA A CV:  " . $link_to_file . "<br> \n";
  $mensaje .= "---------------------------------- \n";
  $mensaje .= "Enviado desde -----------------------------<br>Olimpus Reclutamiento";

  $para = "contacto@olimpus.com.mx";

  // Enviamos el mensaje
  $asunto ="Formulario de reclutamiento";
  //regresar el codigo

  mail($para,$asunto, utf8_decode($mensaje), $header);

  header("Location: http://olimpus.com.mx/agradecimiento_reclutamiento.html");

  exit();

?>
