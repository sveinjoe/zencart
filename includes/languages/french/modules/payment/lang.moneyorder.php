<?php  
$define = [  
    'MODULE_PAYMENT_MONEYORDER_TEXT_TITLE' => 'Chèque/Ordre de paiement',  
    'MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION' => 'Les clients peuvent envoyer leur paiement par la poste. Leur email de confirmation de commande leur demandera de :<br><br>Faites votre chèque ou votre ordre de paiement à nom de :<br>' . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? MODULE_PAYMENT_MONEYORDER_PAYTO : '<br>(votre nom de magasin)') . '<br><br>Envoyez votre paiement à :<br>' . nl2br(STORE_NAME_ADDRESS) . '<br><br>' . 'Votre commande ne sera expédiée que lorsque nous aurons reçu le paiement.',  
];  
if (defined('MODULE_PAYMENT_MONEYORDER_STATUS')) {  
    $define['MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER'] = 'Faites votre chèque ou votre ordre de paiement à nom de :' . "\n\n" . MODULE_PAYMENT_MONEYORDER_PAYTO . "\n\n" . 'Envoyez votre paiement à :' . "\n" . STORE_NAME_ADDRESS . "\n\n" . 'Votre commande ne sera expédiée que lorsque nous aurons reçu le paiement.';  
}  
  
return $define;