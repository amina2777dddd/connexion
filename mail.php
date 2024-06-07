<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  require 'PHPMailer-master/src/Exception.php';
  require 'PHPMailer-master/src/PHPMailer.php';
  require 'PHPMailer-master/src/SMTP.php';

function send_mail($recipient,$subject,$message)
{

  // Création d'une nouvelle instance de la classe PHPMailer
  $mail = new PHPMailer();
  $mail->IsSMTP();
// Configuration du débogage SMTP (0 pour désactiver le débogage)
  $mail->SMTPDebug  = 0;  
  // Activation de l'authentification SMTP
  $mail->SMTPAuth   = TRUE;
  // Configuration du protocole de sécurité SMTP
  $mail->SMTPSecure = "tls";
  // Configuration du port SMTP
  $mail->Port       = 587;
  // Configuration de l'hôte SMTP (dans cet exemple, Gmail est utilisé)
  $mail->Host       = "smtp.gmail.com";
  //$mail->Host       = "smtp.mail.yahoo.com";
  // Configuration du nom d'utilisateur SMTP
  $mail->Username   = "nyacreation6@gmail.com";
  // Configuration du mot de passe SMTP
  $mail->Password   = "czexyavccgmynloc";

  
// Activation du format HTML pour le contenu du courriel
  $mail->IsHTML(true);
  // Ajout de l'adresse du destinataire et de son nom
  $mail->AddAddress($recipient, "esteemed customer");
  // Configuration de l'adresse expéditrice et de son nom
  $mail->SetFrom("nyacreation6@gmail.com", "nya");

 // Configuration facultative de la réponse à l'adresse
  //$mail->AddReplyTo("reply-to-email", "reply-to-name");
    // Configuration facultative de l'adresse en copie
  //$mail->AddCC("cc-recipient-email", "cc-recipient-name");
   // Configuration du sujet du courriel
  $mail->Subject = $subject;
  // Récupération du contenu du message
  $content = $message;
// Configuration du contenu HTML du courriel
  $mail->MsgHTML($content); 
  if(!$mail->Send()) {
    // En cas d'erreur lors de l'envoi du courriel, renvoyer false
    //echo "Error while sending Email.";
    //echo "<pre>";
    //var_dump($mail);
    return false;
  } else {
     // En cas de succès de l'envoi du courriel, renvoyer true
    //echo "Email sent successfully";
    return true;
  }

}