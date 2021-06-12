<?php 

$para = '';
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$asunto = 'Correo del sitio';

$correo = '<html>
 <head>
 </head>
 <body>
 	<h1>'.$nombre.'</h1>
 	<h2>'.$email.'</h2>
 	<p>'.$mensaje.'</p>
 </body>
 </html>';

$encabezado = 'From: Webmater<'. $para .">\r\n" .
    'Reply-To: 	NO_REPLY:<'. $para .">\r\n" .
    'X-Mailer: PHP/' . phpversion().">\r\n" .
    "MIME-version:1.0;\n".
    "Content-Type: text/html; charset=UTF-8";

$envio = mail($para, $asunto, $correo, $encabezado);

if ($envio == TRUE) {
	echo '<h1>Tu mensaje se envió exitosamente.</h1>';
} else {
	echo '<h1>Tu mensaje no se envió exitosamente, intenta más tarde o comunícate con el webmaster.</h1>';
}

 ?>