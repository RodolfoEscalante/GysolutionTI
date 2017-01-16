<meta charset="utf-8">
<?php

if(isset($_POST['enviocorreo'])){
	$correo=$_POST['correo'];
	$email_from=$correo;
	$email_subject= '';
	$email_to="gysolutionsac@gmail.com";

	$nombre=$_POST['nombre'];	
	$celular=$_POST['celular'];
	$comentarios=$_POST['Message'];

	$email_message= "Detalles del formulario de contacto:\n\n";
	$email_message.= "Nombre: " .$nombre. "\n";
	$email_message.= "E-mail: " .$correo. "\n";
	$email_message.= "Teléfono: " .$celular. "\n";
	$email_message.= "Comentarios: " .$comentarios. "\n\n";
	// Ahora se envía el e-mail usando la función mail() de PHP
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers);

	if (mail($email_to, $email_subject, $email_message, $headers)) { 
	echo "¡El formulario se ha enviado con éxito!"."<br>";
	echo '<a href="index.html">Regresa al INICIO</a>'; 
	} else { 
	echo "Lo sentimos, no se pudo conectar con el servidor de correo, intente comunicarse via Facebook"."<br>";
	echo '<a href="https://www.facebook.com/DesignAndSolutionTI"></a>';
	}
}else{
	echo '<script>alert("Debes Rellenar el formulario");</script>';
	echo '<a href="index.html">Regresa al INICIO</a>';
}
?>