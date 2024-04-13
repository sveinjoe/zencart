<?php
$define = [
    'MODULE_PAYMENT_PAYPAL_TEXT_ADMIN_TITLE' => 'Paiements PayPal Standard',  
    'MODULE_PAYMENT_PAYPAL_TEXT_ADMIN_TITLE_NONUSA' => 'Paiements Standard du Site PayPal',  
    'MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_TITLE' => 'PayPal',  
    'MODULE_PAYMENT_PAYPAL_MARK_BUTTON_IMG' => 'https://www.paypal.com/fr_FR/i/logo/PayPal_mark_37x23.gif',  
    'MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT' => 'Payer avec PayPal',  
    'MODULE_PAYMENT_PAYPAL_ACCEPTANCE_MARK_TEXT' => 'Gagnez du temps. Effectuez votre paiement en toute sécurité. <br>Payer sans partager vos informations financières.',  
    'MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_TITLE' => 'Tous les articles de votre panier (voir détails dans la boutique et sur votre reçu).',  
    'MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_ITEMNUM' => STORE_NAME . ' Achat',  
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX' => 'Frais uniques liés à ',  
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_SURCHARGES_SHORT' => 'Surcharges',  
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_SURCHARGES_LONG' => 'Frais de gestion et autres frais applicables',  
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_DISCOUNTS_SHORT' => 'Remises',  
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_DISCOUNTS_LONG' => 'Crédits appliqués, incluant coupons de réduction, chèques cadeaux, etc.',  
    'MODULES_PAYMENT_PAYPALSTD_NOT_RECOMMENDED' => 'Veuillez noter que ce module n’est plus recommandé. Voir <a href="https://docs.zen-cart.com/fr/user/payment/paypal_standard/" target="_blank" rel="noreferrer noopener">cette page</a> pour plus d’explications.',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME' => 'Prénom:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME' => 'Nom:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME' => 'Nom de l’entreprise:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME' => 'Nom du destinataire:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET' => 'Rue:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY' => 'Ville:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE' => 'État de l\'adresse:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP' => 'Code postal:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY' => 'Pays de l\'adresse:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS' => 'Email du payeur:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID' => 'ID Ebay:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID' => 'ID du payeur:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS' => 'Statut du payeur:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS' => 'Statut de l\'adresse:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE' => 'Type de paiement:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS' => 'Statut du paiement:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON' => 'Raison du retard:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE' => 'Facture:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE' => 'Date de paiement:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY' => 'Devise:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT' => 'Montant brut:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE' => 'Frais de paiement:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE' => 'Taux de change:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS' => 'Articles du panier:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE' => 'Type de transaction:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID' => 'ID de transaction:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID' => 'ID de transaction parent:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_COMMENTS' => 'Commentaires du système: ',
];

if (IS_ADMIN_FLAG === true) {  
    $define['MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION'] = '<strong>PayPal Paiements Standard</strong> (Service PayPal plus ancien, moins fiable que le Paiement Express)<br><a href="https://www.paypal.com" rel="noreferrer noopener" target="_blank">Gérer votre compte PayPal.</a><br><br><b>Instructions de configuration:</b><br>1. <a href="https://www.zen-cart.com/partners/paypal-std" rel="noopener" target="_blank">S’inscrire pour un compte PayPal - cliquez ici.</a><br>2. Dans votre compte PayPal, sous "Profil",<ul><li>régler vos <strong>Paramètres de Notification de Paiement Instantané</strong> URL à:<br><pre>' . str_replace('index.php?main_page=index', 'ipn_main_handler.php', zen_catalog_href_link(FILENAME_DEFAULT)) . '</pre><br>(Si une autre URL valide est déjà renseignée, vous pouvez la laisser.)<br><span class="alert">Assurez-vous que la case à cocher pour activer IPN est cochée!</span><br><br></li><li>dans les <strong>Paramètres de Paiement sur Site</strong>, réglez votre <strong>URL de Retour Automatique</strong> à:<br><pre>' . zen_catalog_href_link(FILENAME_CHECKOUT_PROCESS, '', 'SSL', false) . '</pre></li>' . (defined('MODULE_PAYMENT_PAYPALSTD_STATUS') ? '' : '<li>... et cliquez sur "installer" ci-dessus pour activer le support PayPal Standard... et "modifier" pour indiquer à Zen Cart les paramètres de votre PayPal.</li>') . '</ul><hr><strong>Exigences:</strong><br><br>*<strong>Compte PayPal</strong> (<a href="https://www.zen-cart.com/partners/paypal-std" rel="noopener" target="_blank">cliquez pour configurer</a>)<br>*<strong>CURL avec SSL</strong> est fortement recommandé<br>*<strong>Port 80 (et port 443 si SSL est activé)</strong> est utilisé pour la communication <strong>*bidirectionnelle*</strong> avec la passerelle, donc il doit être ouvert sur le routeur/pare-feu de votre hébergeur.<br>*<strong>Paramètres</strong> dans votre compte PayPal doivent être configurés comme décrit ci-dessus.';  
} else {  
    $define['MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION'] = '<strong>PayPal</strong>';  
}
$define['MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_LOGO'] = '<img src="' . $define['MODULE_PAYMENT_PAYPAL_MARK_BUTTON_IMG'] . '" alt="' . $define['MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT_FR'] . '" title="' . $define['MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT'] . '"> &nbsp;' .  
    '<span class="smallText">' . $define['MODULE_PAYMENT_PAYPAL_ACCEPTANCE_MARK_TEXT'] . '</span>';

return $define;
