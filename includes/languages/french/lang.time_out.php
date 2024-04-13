<?php
$define = [
    'NAVBAR_TITLE' => 'Expiration de la Session',  
    'HEADING_TITLE' => 'Oops! Votre session a expiré.',  
    'HEADING_TITLE_LOGGED_IN' => 'Oops! Désolé, mais vous n’êtes pas autorisé à effectuer la demande d’action. ',  
    'TEXT_INFORMATION' => '<p>Si vous étaient en train de passer une commande, veuillez vous connecter et votre panier sera restauré. Vous pourrez ensuite revenir à la caisse et finaliser vos achats.</p><p>Si vous avez terminé une commande et souhaitez la revoir' . (DOWNLOAD_ENABLED == 'true' ? ', ou si vous avez téléchargé et souhaitez récupérer' : '') . ', veuillez accéder à votre page <a href="' . zen_href_link(FILENAME_ACCOUNT) . '">Mon Compte</a> pour voir votre commande.</p>',  
    'TEXT_INFORMATION_LOGGED_IN' => 'Vous êtes toujours connecté à votre compte et pouvez continuer à magasiner. Veuillez choisir une destination dans un menu.',  
    'HEADING_RETURNING_CUSTOMER' => 'Connexion',
];

return $define;
