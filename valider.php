<?php

/*recupere ensemble passé dans l'objet reference par id="email"*/

$email = $_REQUEST["email"];
if (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
  echo "Votre email est invalide";
}

else
{
  echo "votre email est valide";
}



?>
