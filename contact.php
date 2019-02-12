<?php
if( isset($_POST['submit']) ){

    $sucursal = $_POST["sucursal"];
    $name = $_POST["name"];
    $email = $_POST["mail"];
    $phone = $_POST["phone"];
    $servicio_bebes = $_POST["servicio_bebes"];
	$servicio_ninos = $_POST["servicio_ninos"];
	$servicio_jovenes = $_POST["servicio_jovenes"];
	$servicio_embarazadas = $_POST["servicio_embarazadas"];
	$servicio_otro = $_POST["servicio_otro"];
	$clase_muestra = $_POST["clase_muestra"];
    $message = $_POST["message"];

    $header = "Olimpus" . "\r\nContent-type: text/html\r\n";
    $header = "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html; charset=iso-8859-1\r\n";

    //cuerpo del mensaje//
    $mensaje = "---------------------\n";
    $mensaje .= "            Contacto               \n";
    $mensaje .= "---------------------------------- <br> \n";
    $mensaje .= "SUCURSAL:  " . $sucursal . "<br> \n";
    $mensaje .= "NOMBRE:  " . $name . "<br> \n";
    $mensaje .= "CORREO:  " . $email . "<br> \n";
    $mensaje .= "TELEFONO:  " . $phone . "<br> \n";
    $mensaje .= "SERVICIOS: " . $servicio_bebes . " " . $servicio_ninos . " " . $servicio_jovenes . " " . $servicio_embarazadas . " " . $servicio_otro . "<br> \n";
	$mensaje .= "CLASE MUESTRA:  " . $clase_muestra . "<br> \n";
    
	/*
	foreach ($service as $item) {
        $mensaje .= $item . "\n";
    }
	*/
	
    $mensaje .= "<br> \n COMENTARIO:  " . $message . "<br> \n";
    $mensaje .= "FECHA:    " . date("d/m/Y") . "<br> \n";
    $mensaje .= "HORA:     " . date("h:i:s a") . " <br>\n";

    $mensaje .= "---------------------------------- \n";
    $mensaje .= "Enviado desde -----------------------------<br>Olimpus Contácto";

    $para = "contacto@olimpus.com.mx";
    // Enviamos el mensaje
    $asunto ="Contacto desde la pagina web de Olimpus";
    //regresar el codigo

    mail($para,$asunto, utf8_decode($mensaje), $header);

    echo '<script language = javascript>
             alert("Su mensaje se ha enviado correctamente")
             self.location = "http://www.olimpus.com.mx/"
             </script>';
    exit();
}
  ?>
