<?php
$define = [
    'NAVBAR_TITLE' => 'Créer un compte',  
    'HEADING_TITLE' => 'Informations sur mon compte',  
    'TEXT_ORIGIN_LOGIN' => '<strong class="note">NOTE:</strong> Si vous avez déjà un compte avec nous, veuillez vous connecter à la <a href="%s">page de connexion</a>.',  
    'ERROR_CREATE_ACCOUNT_SPAM_DETECTED' => 'Merci, votre demande de compte a été soumise pour révision.',  
    'EMAIL_SUBJECT' => 'Bienvenue à ' . STORE_NAME,  
    'EMAIL_GREET_MR' => 'Cher Monsieur %s,' . "\n\n",  
    'EMAIL_GREET_MS' => 'Chère Madame %s,' . "\n\n",  
    'EMAIL_GREET_NONE' => 'Cher %s,' . "\n\n",  
    'EMAIL_WELCOME' => 'Nous vous souhaitons la bienvenue sur <strong>' . STORE_NAME . '</strong>.',  
    'EMAIL_SEPARATOR' => '--------------------',  
    'EMAIL_COUPON_INCENTIVE_HEADER' => 'Félicitations! Afin de rendre votre prochaine visite à notre boutique en ligne une expérience plus enrichissante, voici les détails d’un coupon de réduction créé spécialement pour vous!' . "\n\n",  
    'EMAIL_COUPON_REDEEM' => 'Pour utiliser le coupon de réduction, veuillez entrer le code ' . TEXT_GV_REDEEM . ' lors de la commande : <strong>%s</strong>' . "\n\n",  
    'EMAIL_GV_INCENTIVE_HEADER' => 'Pour votre visite aujourd’hui, nous vous avons envoyé un ' . TEXT_GV_NAME . ' pour %s!' . "\n",  
    'EMAIL_GV_REDEEM' => 'Le ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' est : %s ' . "\n\n" . 'Vous pouvez entrer le ' . TEXT_GV_REDEEM . ' lors du paiement, après avoir effectué vos sélections dans la boutique. ',  
    'EMAIL_GV_LINK' => ' Ou, vous pouvez l’utiliser maintenant par ce lien : ' . "\n",  
    'EMAIL_GV_LINK_OTHER' => 'Après avoir ajouté le ' . TEXT_GV_NAME . ' à votre compte, vous pouvez utiliser le ' . TEXT_GV_NAME . ' pour vous-même, ou l’envoyer à un ami!' . "\n\n",
    'EMAIL_TEXT' => 'Vous avez maintenant un compte avec ' . STORE_NAME . ' qui vous offre les services suivants:' . "\n\n<ul>" . '<li><strong>Historique des commandes</strong> - Consulter les détails de vos commandes.</li>' . "\n\n" . '<li><strong>Panier permanent</strong> - Les produits que vous ajoutez à votre panier y resteront jusqu’à ce qu’ils soient supprimés ou achetés.</li>' . "\n\n" . '<li><strong>Carnet d’adresses</strong> - Définir des adresses supplémentaires (par exemple pour envoyer un cadeau).</li>' . "\n\n" . '<li><strong>Avis sur les produits</strong> - Partager votre avis sur nos produits avec les autres clients.</li>' . "\n\n</ul>",  
    'EMAIL_CONTACT' => 'Pour obtenir assistance concernant nos services en ligne, veuillez envoyer un e-mail à le propriétaire du magasin: <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">' . STORE_OWNER_EMAIL_ADDRESS . "</a>\n\n",  
    'EMAIL_GV_CLOSURE' => "\n" . 'Cordialement,' . "\n\n" . STORE_OWNER . "\nPropriétaire du magasin\n\n" . '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">' . HTTP_SERVER . DIR_WS_CATALOG . "</a>\n\n",  
    'EMAIL_DISCLAIMER_NEW_CUSTOMER' => 'Cette adresse e-mail nous a été fournie par vous ou par l’un de nos clients. Si vous n’avez pas créé un compte, ou si vous pensez avoir reçu ce courrier par erreur, veuillez envoyer un e-mail à %s ',
];

return $define;
