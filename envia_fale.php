<?

$destinatario = "lugusdigital@gmail.com";

$nome = $_REQUEST['name'];
$email = $_REQUEST['email'];
$mensagem = $_REQUEST['message'];
$assunto = " Enviado via site";


$body = "===================================" . "\n";
$body = $body . "FALE CONOSCO - TESTE COMPROVATIVO" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Mensagem: " . $mensagem . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario,"$nome - $assunto" , $body, "From: $email\r\n");

?>