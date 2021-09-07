<?php
$Nome		= $_POST["nome"];	// Pega o valor do campo Nome
$Fone		= $_POST["fone"];	// Pega o valor do campo Telefone
$Email		= $_POST["email"];	// Pega o valor do campo Email

$Preciso = implode(",", $_POST['preciso'] );
$Tipo = $_POST['tipo'];
$Mensagem	= $_POST["mensagem"];	// Pega os valores do campo Mensagem

$Total = $_POST["total"];


//===CONVERTER TIPO====
if ($Tipo = 500.00) {$Tipo = 'Ladding Page';}
if ($Tipo = 1100.00) {$Tipo = 'Website Médio';}
if ($Tipo = 1600.00) {$Tipo = 'Website Completo';}


// Variável que junta os valores acima e monta o corpo do email

$Vai 		= "
================INFORMAÇÕES DE CONTATO================\n
            Nome: $Nome\n
            E-mail: $Email\n
            Telefone: $Fone \n
            Email do desenvolvedor: emilyleme.dev@gmail.com\n\n

================INFORMAÇÕES DO PROJETO================\n
            Tipo: $Tipo\n
            Elementos: $Preciso\n
            Mensagem:   $Mensagem\n
            Valor Total: $Total";
            

//FIM DO CORPO

require("PHPMailer-master/src/PHPMailer.php");
require("PHPMailer-master/src/SMTP.php");

define('GUSER', '**');	// <-- Insira aqui o seu GMail
define('GPWD', '**');		// <-- Insira aqui a senha do seu GMail

function smtpmailer($para, $de, $de_nome, $assunto, $corpo) { 
    global $error;

	$mail = new PHPMailer\PHPMailer\PHPMailer();
	$mail->IsSMTP();		// Ativar SMTP
	$mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
	$mail->SMTPAuth = true;		// Autenticação ativada
	$mail->SMTPSecure = 'ssl';	// SSL REQUERIDO pelo GMail
	$mail->Host = 'smtp.gmail.com';	// SMTP utilizado
	$mail->Port = 465;  		// A porta 587 deverá estar aberta em seu servidor
	$mail->Username = GUSER;
	$mail->Password = GPWD;
	$mail->SetFrom($de, $de_nome);
    $mail->Subject = $assunto;
    $mail->Body = $corpo;

	$mail->AddAddress($para);
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo; 
		return false;
	} else {
		
		return true;
	}
}

// Insira abaixo o email que irá receber a mensagem, o email que irá enviar (o mesmo da variável GUSER), 
//o nome do email que envia a mensagem, o Assunto da mensagem e por último a variável com o corpo do email.

 if (smtpmailer('emilyleme.dev@gmail.com', '**', 'Formulario Pedidos - Leme Code', 'Novo chamado recebido!', $Vai)) {

	header("Location: pedido.php");

      die();

}
if (!empty($error)) echo $error;
?>