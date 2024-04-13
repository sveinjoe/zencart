<?php
$define = [
    'HEADING_CVV' => 'Qu\'est-ce que le CVV ?',  
    'TEXT_CVV_HELP1' => 'Visa, Mastercard, Discover - Numéro de vérification à 3 chiffres<br><br>  
                        Pour votre sécurité, nous vous demandons d\'entrer le numéro de vérification de votre carte.<br><br>  
                        Le numéro de vérification est un numéro à 3 chiffres imprimé au dos de votre carte.  
                        Il figure à la droite de votre numéro de carte.<br>' .  
            zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2visa.gif'),  
    'TEXT_CVV_HELP2' => 'American Express - Numéro de vérification à 4 chiffres<br><br>  
                        Pour votre sécurité, nous vous demandons d\'entrer le numéro de vérification de votre carte.<br><br>  
                        Le numéro de vérification American Express est un numéro à 4 chiffres imprimé au recto de votre carte.  
                        Il figure à la droite de votre numéro de carte.<br>' .  
            zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2amex.gif'),  
    'TEXT_CLOSE_CVV_WINDOW' => 'Fermer la fenêtre [x]',
];

return $define;
