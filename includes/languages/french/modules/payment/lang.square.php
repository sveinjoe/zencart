<?php
$define = [
    'MODULE_PAYMENT_SQUARE_TEXT_DESCRIPTION' => 'Accepter cartes de crédit en moins de 5 minutes.<br>Aucun frais mensuel ni frais d\'installation.<br>PCI conforme. Le client ne quitte jamais votre boutique!<br>Les taux standards sont de 2.9% + $0.30 par transaction.<br>Les fonds sont déposés sur votre compte bancaire en 1-2 jours ouvrables.<br><br>  
    <a href="https://www.zen-cart.com/partners/square" rel="noopener" target="_blank">Obtenir plus d\'informations, ou créer un compte</a><br><br>  
    <a href="https://squareup.com/login" rel="noopener" target="_blank">Se connecter à votre compte Square</a>',  
    'MODULE_PAYMENT_SQUARE_TEXT_ADMIN_TITLE' => 'Square',  
    'MODULE_PAYMENT_SQUARE_TEXT_CATALOG_TITLE' => 'Carte de crédit',  
    'MODULE_PAYMENT_SQUARE_TEXT_NOTICES_TO_CUSTOMER' => '',  
    'MODULE_PAYMENT_SQUARE_TEXT_CREDIT_CARD_POSTCODE' => 'Code postal :',  
    'MODULE_PAYMENT_SQUARE_TEXT_CREDIT_CARD_NUMBER' => 'Numéro de carte :',  
    'MODULE_PAYMENT_SQUARE_TEXT_CREDIT_CARD_EXPIRES' => 'Date d\'expiration :',  
    'MODULE_PAYMENT_SQUARE_TEXT_CVV' => 'Numéro CVV :',  
    'MODULE_PAYMENT_SQUARE_TEXT_CREDIT_CARD_TYPE' => 'Type de carte de crédit :',  
    'MODULE_PAYMENT_SQUARE_TEXT_ERROR' => '(SQ-ERR) Votre transaction n\'a pas pu être complétée à cause d\'une erreur : ',  
    'MODULE_PAYMENT_SQUARE_TEXT_MISCONFIGURATION' => 'Votre transaction n\'a pas pu être complétée à cause d\'une mauvaise configuration de notre boutique. Merci de signaler cette erreur à le propriétaire de la boutique : SQ-MISCONF',  
    'MODULE_PAYMENT_SQUARE_TEXT_COMM_ERROR' => 'Impossible de traiter le paiement à cause d\'une erreur de communication. Vous pouvez réessayer ou nous contacter pour obtenir assistance.',  
    'MODULE_PAYMENT_SQUARE_ERROR_INVALID_CARD_DATA' => 'Nous n\'avons pas pu lancer votre transaction à cause d\'un problème avec les données de la carte que vous avez entrées. Merci de corriger les données de la carte, ou signaler cette erreur à le propriétaire de la boutique : SQ-NONCE-FAILURE',  
    'MODULE_PAYMENT_SQUARE_ERROR_DECLINED' => 'Désolé, votre paiement n\'a pas pu être autorisé. Merci de choisir une autre méthode de paiement.',
    'MODULE_PAYMENT_SQUARE_ENTRY_TRANSACTION_ACTIONS' => '<strong>Actions</strong>',  
    'MODULE_PAYMENT_SQUARE_TEXT_UPDATE_FAILED' => 'Désolé, la mise à jour de la transaction a échoué inopinément. Consultez les logs pour plus de détails.',  
    'MODULE_PAYMENT_SQUARE_TEXT_REFUND_CONFIRM_ERROR' => 'Erreur : Vous avez demandé un remboursement sans cocher la case de confirmation.',  
    'MODULE_PAYMENT_SQUARE_TEXT_INVALID_REFUND_AMOUNT' => 'Erreur : Vous avez demandé un remboursement mais avez saisi un montant invalide.',  
    'MODULE_PAYMENT_SQUARE_TEXT_REFUND_INITIATED' => 'Remboursement initié de ',  
    'MODULE_PAYMENT_SQUARE_TEXT_CAPTURE_CONFIRM_ERROR' => 'Erreur : Vous avez demandé une capture sans cocher la case de confirmation.',  
    'MODULE_PAYMENT_SQUARE_TEXT_TRANS_ID_REQUIRED_ERROR' => 'Erreur : Vous devez spécifier un ID de transaction.',  
    'MODULE_PAYMENT_SQUARE_TEXT_CAPT_INITIATED' => 'Capture de fonds initiée. ID de transaction : %s',  
    'MODULE_PAYMENT_SQUARE_TEXT_VOID_CONFIRM_ERROR' => 'Erreur : Vous avez demandé une annulation sans cocher la case de confirmation.',  
    'MODULE_PAYMENT_SQUARE_TEXT_VOID_INITIATED' => 'Annulation initiée. ID de transaction : %s',
];

// Check current directory to see if SquareWebpay is installed have include lang.square_webPay.php in case it changes before Square is fully removed from zen cart
// This prevents the duplication message as square_webPay defines all below as constants.
if (file_exists(dirname(__FILE__) . '/square_webPay.php') === false && file_exists(dirname(__FILE__) . '/lang.square_webPay.php') === false) {
    $defineExtra = [
        'MODULE_PAYMENT_SQUARE_ENTRY_TRANSACTION_SUMMARY' => '<strong>Récapitulatif de la transaction</strong>',  
        'MODULE_PAYMENT_SQUARE_ENTRY_REFUND_TITLE' => '<strong>Remboursement de la transaction</strong>',  
        'MODULE_PAYMENT_SQUARE_ENTRY_REFUND' => 'Vous pouvez rembourser l’argent à le client ici :',  
        'MODULE_PAYMENT_SQUARE_TEXT_REFUND_CONFIRM_CHECK' => 'Cochez cette case pour confirmer votre intention : ',  
        'MODULE_PAYMENT_SQUARE_ENTRY_REFUND_AMOUNT_TEXT' => 'Entrez le montant que vous souhaitez rembourser',  
        'MODULE_PAYMENT_SQUARE_ENTRY_REFUND_TEXT_COMMENTS' => 'Notes (sera affichée sur l’historique de la commande) :',  
        'MODULE_PAYMENT_SQUARE_ENTRY_REFUND_DEFAULT_MESSAGE' => 'Remboursement émis',  
        'MODULE_PAYMENT_SQUARE_ENTRY_REFUND_SUFFIX' => 'Vous pouvez rembourser une commande pendant 120 jours, jusqu’à le montant original payé. Vous devez fournir le numéro de transaction original et le numéro de paiement<br>Consultez le site Square pour plus d\'<a href="https://squareup.com/help/us/en/article/5060" rel="noopener" target="_blank">informations sur les remboursements Square</a>.',  
        'MODULE_PAYMENT_SQUARE_ENTRY_REFUND_BUTTON_TEXT' => 'Effectuer le remboursement',  
        'MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE_TITLE' => '<strong>Capture de la transaction</strong>',  
        'MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE' => 'Vous pouvez capturer les fonds autorisés précédemment ici :',  
        'MODULE_PAYMENT_SQUARE_TEXT_CAPTURE_CONFIRM_CHECK' => 'Cochez cette case pour confirmer votre intention : ',  
        'MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE_TEXT_COMMENTS' => 'Notes (sera affichée sur l’historique de la commande) :',  
        'MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE_DEFAULT_MESSAGE' => '',  
        'MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE_SUFFIX' => 'Les captures doivent être effectuées dans les 6 jours suivant l’autorisation originale. Vous ne pouvez capturer une commande qu’une seule fois.',  
        'MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE_BUTTON_TEXT' => 'Effectuer la capture',  
        'MODULE_PAYMENT_SQUARE_ENTRY_VOID_TITLE' => '<strong>Annulation de la transaction</strong>',
        'MODULE_PAYMENT_SQUARE_ENTRY_VOID' => 'Vous pouvez annuler une autorisation qui n’a pas été capturée.',  
        'MODULE_PAYMENT_SQUARE_TEXT_VOID_CONFIRM_CHECK' => 'Cochez cette case pour confirmer votre intention :',  
        'MODULE_PAYMENT_SQUARE_ENTRY_VOID_TEXT_COMMENTS' => 'Notes (sera affichée dans l’historique de la commande) :',  
        'MODULE_PAYMENT_SQUARE_ENTRY_VOID_DEFAULT_MESSAGE' => 'Transaction annulée',  
        'MODULE_PAYMENT_SQUARE_ENTRY_VOID_SUFFIX' => '',  
        'MODULE_PAYMENT_SQUARE_ENTRY_VOID_BUTTON_TEXT' => 'Annuler',
    ];
    $define = array_merge($define, $defineExtra);       
}


if (IS_ADMIN_FLAG === true) {  
    $define['MODULE_PAYMENT_SQUARE_TEXT_NEED_ACCESS_TOKEN'] =  
        '<span class="text-danger"><strong>ATTENTION: Le jeton d\'accès n\'a pas été défini:</strong></span> <br>  
    1. Assurez-vous que l\'URL de redirection OAuth dans votre compte Square "app" est réglée à <u><nobr><pre>' . str_replace(array('index.php?main_page=index' => 'http://'), array('square_handler.php' => 'https://'), zen_catalog_href_link(FILENAME_DEFAULT)) . '</pre></nobr></u><br>  
    2. Puis <a href="%s" rel="noopener" target="_blank" class="onClickStartCheck"><button class="btn btn-xs btn-success">Cliquez ici pour vous connecter et autoriser votre compte</button></a>';  
}

return $define;
