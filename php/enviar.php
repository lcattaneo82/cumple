<?php 
	$nombre = $_POST['name'];
	$asunto = 'Formulario Cumpleaños';
	$mensaje = "Nombre: ".$nombre."<br><br> Mensaje:".$_POST['message'];
    $para = 'cattaneolucas81@gmail.com'

	if(mail($para, $asunto, $mensaje)){
		echo "Correo enviado";
	}
 ?>