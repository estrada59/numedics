<?
// Field Name
$name = $_POST['name'];
if(iconv_strlen($name) < 2){echo '<div class="alert error fade in">Por favor ingrese su nombre.<a href="#" class="close-alert" data-dismiss="alert"></a></div>';exit();}
// Field Email
$email = $_POST['email'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {echo '<div class="alert error fade in">Por favor ingrese una dirección de correo electrónico válido.<a href="#" class="close-alert" data-dismiss="alert"></a></div>';exit();}
// Field Category
$category = $_POST['category'];
$subject = $_POST['subject'];
// Field Message
$message = $_POST['message'];
if(iconv_strlen($message) < 10){echo '<div class="alert error fade in">Por favor introdusca su mensaje. Debería ser mayor de 10 caracteres<a href="#" class="close-alert" data-dismiss="alert"></a></div>';exit();}
$pagina ="Página de NUMEDICS";
$email_numedics = "informes@numedics.com.mx";
$headers = "From: $pagina <$email_numedics>\r\n";
$headers .= 'Cc: recepcion@medicinanucleardechiapas.com' . "\r\n";
$headers .= "Cc: $name <$email>" . "\r\n";
mail('estrada@medicinanucleardechiapas.com', $subject,"E-mail del paciente: ". $email. "\n\nNombre:".$name."\n\nEspecialidad de la que requiere información: ".$category."\n\nMensaje:".$message, $headers);
echo "1";
?>

