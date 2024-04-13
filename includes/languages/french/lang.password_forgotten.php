<?php
$define = [
    'NAVBAR_TITLE_1' => 'Connexion',  
    'NAVBAR_TITLE_2' => 'Mot de passe oublié',  
    'HEADING_TITLE' => 'Mot de passe oublié',  
    'TEXT_MAIN' => 'Entrez votre adresse email ci-dessous et nous vous enverrons un message électronique contenant votre nouveau mot de passe.',  
    'EMAIL_PASSWORD_REMINDER_SUBJECT' => STORE_NAME . ' - Nouveau mot de passe',  
    'EMAIL_PASSWORD_REMINDER_BODY' => 'Un nouveau mot de passe a été demandé depuis ' . $_SERVER['REMOTE_ADDR'] . '.' . "\n\n" . 'Votre nouveau mot de passe pour \'' . STORE_NAME . '\' est:' . "\n\n" . '   %s' . "\n\nAprès avoir connecté avec votre nouveau mot de passe, vous pouvez le modifier dans la section 'Mon compte'.",  
    'SUCCESS_PASSWORD_SENT' => 'Merci. Si cette adresse email est dans notre système, nous vous enverrons les instructions pour récupérer votre mot de passe à cette adresse (rappelez-vous de vérifier votre dossier de courrier indésirable)',
];

return $define;
