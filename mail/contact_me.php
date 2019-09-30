<?php
// Check for empty fields

$formulario = $_POST['formulario'];

if($formulario != "formContactoFreshworks") {

if(empty($_POST['formulario']) || 
   empty($_POST['nombre'])  	 ||
   empty($_POST['email']) 	    ||
   empty($_POST['cargo']) 		 ||
   empty($_POST['empresa'])    ||
   empty($_POST['telefono']) 	 ||
   empty($_POST['mensaje'])	 ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
      echo "Error al procesar su consulta..!";
      return false;
}

}


if($formulario == "formContactoDemo" && empty($_POST['servicio'])) {
   echo "ContactoDemo: Error al procesar su consulta..!";
   return false;
}

if($formulario == "formContactoPrecios" && empty($_POST['servicio'])) {
   echo "ContactoPrecios: Error al procesar su consulta..!";
   return false;
}

if($formulario == "formContactoFreshworks" && empty($_POST['servicio'])) {
   echo "ContactoFreshworks: Error al procesar su consulta..!";
   return false;
}

switch ($formulario) {
   case 'formContacto':
      $nombre = $_POST['nombre'];
      $email_address = $_POST['email'];
      $numero = $_POST['telefono'];
      $cargo = $_POST['cargo'];
      $empresa = $_POST['empresa'];
      $mensaje = $_POST['mensaje'];
      $asunto = "Nuevo contacto web";
      $texto_completo = "Has recibido un correo electrónico de tu página web.\n\n"."Detalles:\n\nNombre: $nombre\n\nEmail: $email_address\n\nNúmero de Contacto: $numero\n\nCargo: $cargo\n\nEmpresa: $empresa\n\nMensaje:\n$mensaje\n\n";
   break;
   case 'formContactoDemo':
      $nombre = $_POST['nombre'];
      $email_address = $_POST['email'];
      $numero = $_POST['telefono'];
      $cargo = $_POST['cargo'];
      $empresa = $_POST['empresa'];
      $mensaje = $_POST['mensaje'];
      $servicio = $_POST['servicio'];
      $asunto = "Lead Demo ".$servicio;
      $texto_completo = "Has recibido un correo electrónico de tu página web.\n\n"."Detalles:\n\nNombre: $nombre\n\nEmail: $email_address\n\nNúmero de Contacto: $numero\n\nCargo: $cargo\n\nEmpresa: $empresa\n\nServicio: $servicio\n\nMensaje:\n$mensaje\n\n";
   break;
   case 'formContactoFreshworks':
      $nombre = $_POST['nombre'];
      $email_address = $_POST['email'];
      $empresa = $_POST['empresa'];
      $servicio = $_POST['servicio'];
      $asunto = "Lead ".$servicio;
      $texto_completo = "Has recibido un correo electrónico de tu página web.\n\n"."Detalles:\n\nNombre: $nombre\n\nEmail: $email_address\n\nEmpresa: $empresa\n\nServicio: $servicio\n\n";
   break;
   case 'formContactoPrecios':
      $nombre = $_POST['nombre'];
      $email_address = $_POST['email'];
      $numero = $_POST['telefono'];
      $cargo = $_POST['cargo'];
      $empresa = $_POST['empresa'];
      $mensaje = $_POST['mensaje'];
      $servicio = $_POST['servicio'];
      $asunto = "Lead Precios ".$servicio;
      $texto_completo = "Has recibido un correo electrónico de tu página web.\n\n"."Detalles:\n\nNombre: $nombre\n\nEmail: $email_address\n\nNúmero de Contacto: $numero\n\nCargo: $cargo\n\nEmpresa: $empresa\n\nServicio: $servicio\n\nMensaje:\n$mensaje\n\n";
   break;
}

	
// Create the email and send the mensaje
$to = 'hola@movigoo.com'; // Add your email address inbetween the '' replacing yournombre@yourdomain.com - This is where the form will send a mensaje to.
$email_subject = $asunto;
$email_body = $texto_completo;
$headers = "From: noreply@juanloropeza.com.ve\r\n"; // This is the email address the generated mensaje will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "CC:  paula@movigoo.com, veronica@movigoo.com, luis@movigoo.com\r\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>
