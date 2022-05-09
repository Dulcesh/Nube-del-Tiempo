
<?php
$name = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$edad = $_POST['edad'];
$telefono = $_POST['tel'];
$terminos = $_POST['terminos'];

$to = $myemail;
$message .="¡Tenemos un usuario NUEVO!: $subject";
$message .= "\n Su nombre es: $name+ $apellido \n Usuario: $usuario \n Correo: $correo \n Edad: $edad \n Teléfono: $tel \n Aceptó todos los términos y condiciones";

$para ='shds0106@gmail.com';
$asunto ='Nube';

mail($para, $asunto, utf_decode ($message),$header);
echo "Tu registro fue exitoso.";
?>
