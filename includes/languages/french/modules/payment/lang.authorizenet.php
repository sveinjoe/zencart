<?php
$define = [
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_ADMIN_TITLE' => 'Authorize.net (SIM)',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CATALOG_TITLE' => 'Carte de crédit',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_TYPE' => 'Type:',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_OWNER' => 'Nom du propriétaire de la carte:',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_NUMBER' => 'Numéro de la carte:',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_EXPIRES' => 'Date d\'expiration:',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CVV' => 'Numéro CVV:',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_POPUP_CVV_LINK' => 'Qu\'est-ce que c\'est?',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_OWNER' => '* Le nom du propriétaire de la carte de crédit doit avoir au moins ' . CC_OWNER_MIN_LENGTH . ' caractères.\n',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_NUMBER' => '* Le numéro de la carte de crédit doit avoir au moins ' . CC_NUMBER_MIN_LENGTH . ' caractères.\n',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_CVV' => '* Le numéro CVV de 3 ou 4 chiffres doit être saisi à l\'arrière de la carte de crédit.\n',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR_MESSAGE' => 'Il y a eu une erreur lors du traitement de votre carte de crédit. Veuillez réessayer.',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_DECLINED_MESSAGE' => 'Votre carte de crédit a été refusée. Veuillez essayer une autre carte ou contacter votre banque pour plus d\'informations.',  
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR' => 'Erreur de carte de crédit!',
];

if (defined('MODULE_PAYMENT_AUTHORIZENET_STATUS') && MODULE_PAYMENT_AUTHORIZENET_STATUS == 'True') {
    $define['MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION'] = '<a rel="noreferrer noopener" target="_blank" href="https://account.authorize.net/">Connexion marchand Authorize.net</a>' . (MODULE_PAYMENT_AUTHORIZENET_TESTMODE != 'Production' ? '<br><br>Informations pour les tests:<br><b>Numéros de cartes de crédit pour approbation automatique:</b><br>Visa#: 4007000000027<br>MC#: 5424000000000015<br>Discover#: 6011000000000012<br>AMEX#: 370000000000002<br><br><b>Note:</b> Ces numéros de cartes de crédit renvoyeront un refus en mode réel, et une approbation en mode test. Toute date future peut être utilisé pour la date d’expiration, et tout numéro de 3 ou 4 chiffres (AMEX) peut être utilisé pour le code CVV.<br><br><b>Numéro de carte de crédit pour refus automatique:</b><br><br>Carte #: 4222222222222<br><br>Ce numéro de carte peut être utilisé pour recevoir les notifications de refus pour les tests.' : '') . '<br><br><strong>PARAMÉTRES</strong><br>Vos paramètres d’URL "response", "receipt" et "relay" dans votre profil marchand Authorize.net peuvent être laissés BLANCS, ou si nécessaire, vous pouvez définir l’"URL relay" pour pointer à https://votre_domaine.com/nom_dossier/index.php?main_page=checkout_process<br><br>Si vous rencontrez problèmes avec cela, voir <a href="https://docs.zen-cart.com/user/payment/authorizenet_sim/" rel="noreferrer noopener" target="_blank">l’article FAQ de configuration SIM</a> pour obtenir des instructions de configuration détaillées.';  
} else {
    $define['MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION'] = '<a rel="noreferrer noopener" target="_blank" href="https://reseller.authorize.net/application?resellerId=10023">Cliquez ici pour créer un compte</a><br><br><a rel="noreferrer noopener" target="_blank" href="https://account.authorize.net/">Cliquez pour vous connecter à la zone marchand d\'Authorize.net</a><br><br><strong>Conditions préalables:</strong><br><hr>*<strong>Compte Authorize.net</strong> (voir le lien ci-dessus pour créer un compte)<br>*<strong>Nom d\'utilisateur Authorize.net et clé de transaction</strong> disponibles dans votre zone marchand<br><br>Consultez <a href="https://docs.zen-cart.com/user/payment/authorizenet_sim/" rel="noreferrer noopener" target="_blank">l\'article FAQ de configuration SIM</a> pour obtenir des instructions détaillées de configuration.';
}
return $define;
