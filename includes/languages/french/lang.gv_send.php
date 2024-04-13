<?php
$define = [
    'HEADING_TITLE' => 'Envoyer ' . TEXT_GV_NAME,  
    'HEADING_TITLE_CONFIRM_SEND' => 'Confirmation d\'envoi de ' . TEXT_GV_NAME,  
    'HEADING_TITLE_COMPLETED' => TEXT_GV_NAME . ' Envoyé',  
    'NAVBAR_TITLE' => 'Envoyer ' . TEXT_GV_NAME,  
    'EMAIL_SUBJECT' => 'Message de ' . STORE_NAME,  
    'HEADING_TEXT' => 'Veuillez entrer le nom, l\'adresse email et le montant du ' . TEXT_GV_NAME . ' que vous souhaitez envoyer. Pour plus d\'informations, veuillez consulter notre <a href="' . zen_href_link(FILENAME_GV_FAQ) . '">' . GV_FAQ . '.</a>',  
    'ENTRY_MESSAGE' => 'Votre Message :',  
    'ENTRY_AMOUNT' => 'Montant à Envoyer :',  
    'ERROR_ENTRY_TO_NAME_CHECK' => 'Le nom du destinataire n\'a pas été reçu. Veuillez le remplir ci-dessous. ',  
    'ERROR_ENTRY_AMOUNT_CHECK' => 'Le montant du ' . TEXT_GV_NAME . ' semble incorrect. Veuillez réessayer.',  
    'ERROR_ENTRY_EMAIL_ADDRESS_CHECK' => 'L\'adresse email est correcte ? Veuillez réessayer.',  
    'MAIN_MESSAGE' => 'Vous envoyez un ' . TEXT_GV_NAME . ' de %s à %s, dont l\'adresse email est %s. Si ces détails ne sont pas corrects, vous pouvez modifier votre message en cliquant sur le bouton <strong>modifier</strong>.<br><br>Le message que vous envoyez est :<br><br>',  
    'SECONDARY_MESSAGE' => 'Cher %s,<br><br>' . 'Vous avez reçu un ' . TEXT_GV_NAME . ' de %s pour %s',  
    'PERSONAL_MESSAGE' => '%s dit :',  
    'TEXT_SUCCESS' => 'Félicitations, votre ' . TEXT_GV_NAME . ' a été envoyé.',  
    'TEXT_SEND_ANOTHER' => 'Souhaitez-vous envoyer un autre ' . TEXT_GV_NAME . ' ?',  
    'EMAIL_GV_TEXT_SUBJECT' => 'Un cadeau de %s',  
    'EMAIL_SEPARATOR' => '----------------------------------------------------------------------------------------------------',  
    'EMAIL_GV_TEXT_HEADER' => 'Félicitations, vous avez reçu un ' . TEXT_GV_NAME . ' de %s',  
    'EMAIL_GV_FROM' => 'Ce ' . TEXT_GV_NAME . ' vous a été envoyé par %s',  
    'EMAIL_GV_MESSAGE' => 'avec un message disant : ',  
    'EMAIL_GV_SEND_TO' => 'Bonjour, %s',
    'EMAIL_GV_REDEEM' => 'Pour utiliser ce ' . TEXT_GV_NAME . ', veuillez cliquer sur le lien ci-dessous. Merci aussi de noter le ' . TEXT_GV_REDEEM . ' : %s pour le cas où vous rencontreriez des problèmes.',  
    'EMAIL_GV_LINK' => 'Pour utiliser, veuillez cliquer ici',  
    'EMAIL_GV_FIXED_FOOTER' => 'Si vous rencontrez des problèmes pour utiliser le ' . TEXT_GV_NAME . ' via le lien automatisé ci-dessus, ' . "\n" .  
        'vous pouvez aussi saisir le ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' pendant le processus de commande à notre boutique.',
    'EMAIL_GV_SHOP_FOOTER' => '',
];

return $define;
