<?php 



if(strlen($_POST['nome']))
{
    if(sendMail($_POST['email'],'markintela@hotmail.com', $_POST['menssagem'], 'Formulário de contato'))
    {
        echo "Sua mensagem foi enviada com sucesso!";
    }
    else
    {
        echo "Ocorreu um erro ao enviar";
    }
    echo "<br><a href='index.html'>Voltar</a>";
    exit();
}

//FUNÇAO DE ENVIO DE EMAILS

function sendMail($de,$para,$mensagem,$assunto)
{
   
    require_once('phpmailer.php');
    $mail = new PHPMailer(true);
    $mail->IsSMTP();
    try {
      //$mail->SMTPDebug = 1;
      $mail->SMTPAuth   = true;
      $mail->Host       = 'smtp.gmail.com';
      $mail->SMTPSecure = "tls"; 
      $mail->Port       = 465;                
      $mail->Username   = 'markintela182@gmail.com';
      $mail->Password   = 'ha1_brujas_ha1';
      $mail->AddAddress($para);
      $mail->AddReplyTo($de);
      $mail->SetFrom($de);
      $mail->Subject = $assunto;
      $mail->MsgHTML($mensagem);
      $mail->Send();    
      $envio = true;


    } catch (phpmailerException $e) {
      $envio = false;
    } catch (Exception $e) {
      $envio = false;
    }
    return $envio;
}



?>