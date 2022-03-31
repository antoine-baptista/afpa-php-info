<?php
  $headers  = "From: \"toto\"<toto@titi.fr>\n";
  $headers .= "Reply-To: toto@titi.fr\n";
  $headers .= "Cc: alphonse@lycos.fr, georges@usa.com\n";
  $headers .= "Bcc: fred@free.fr\n";
  $headers .= "X-Priority: 1\n";
  $headers .= "Content-Type: text/plain; charset=\"iso-8859-1\"\n";
  $headers .= "Content-Transfer-Encoding: 8bit";

  $subject  = 'Un site à voir absolument !';

  $message  = "Salut à tous, \n\n";
  $message .= "Un site super à voir absolument : \n";
  $message .= "https://www.phpcodeur.net\n\n";
  $message .= "A demain\n\n";
  $message .= "toto";

  $result = mail('francois@wanadoo.fr', $subject, $message, $headers);

  if( $result == true )
  {
      echo 'l\'email a bien été envoyé';
  }
  else
  {
      echo 'l\'email n\'a pas pu être envoyé !';
  }
?>