<?php

$Nome   = $_POST["nome"]; // Pega o valor do campo Nome
$Email    = $_POST["email"];  // Pega o valor do campo Email
$Mensagem = $_POST["mensagem"]; // Pega os valores do campo Mensagem

// Variável que junta os valores acima e monta o corpo do email

$Vai    = "Nome: $Nome\n\nE-mail: $Email\n\nMensagem: $Mensagem\n";

require_once("phpmail/class.phpmailer.php");
define('GUSER', 'markintela182@gmail.com');  // <-- Insira aqui o seu GMail
define('GPWD', 'ha1_brujas_ha1');    // <-- Insira aqui a senha do seu GMail
define('DEST', 'markintela182@gmail.com');    // <-- Insira aqui a senha do seu GMail

function smtpmailer($para, $de, $de_nome, $assunto, $corpo) { 
  global $error;


  $mail = new PHPMailer();
  $mail->IsSMTP();    // Ativar SMTP
  $mail->SMTPDebug = 2;   // Debugar: 1 = erros e mensagens, 2 = mensagens apenas
  $mail->SMTPAuth = true; 
  //$mail->AuthType = 'LOGIN';  // Autenticação ativada
  $mail->SMTPSecure = 'ssl';  // SSL REQUERIDO pelo GMail
  $mail->Host = 'smtp.gmail.com'; // SMTP utilizado
  $mail->Port = 465;      // A porta 587 deverá estar aberta em seu servidor
  $mail->Username = GUSER;
  $mail->Password = GPWD;
  $mail->IsHTML(true);
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

function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

// Insira abaixo o email que irá receber a mensagem, o email que irá enviar (o mesmo da variável GUSER), o nome do email que envia a mensagem, o Assunto da mensagem e por último a variável com o corpo do email.

 if (smtpmailer('markintela182@gmail.com', $Email, $Nome, 'Assunto do Email', $Vai)) {
  
  phpAlert("mensagem enviada");
  $_SESSION['message'] = true;
  Header("Location: index.php?message=true"); 



}

if (!empty($error)) echo $error;

?>