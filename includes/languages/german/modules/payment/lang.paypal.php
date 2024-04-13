<?php
$define = [
    'MODULE_PAYMENT_PAYPAL_TEXT_ADMIN_TITLE' => 'PayPal Zahlung Standard',  
    'MODULE_PAYMENT_PAYPAL_TEXT_ADMIN_TITLE_NONUSA' => 'PayPal Website Zahlung Standard',  
    'MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_TITLE' => 'PayPal',  
    'MODULE_PAYMENT_PAYPAL_MARK_BUTTON_IMG' => 'https://www.paypal.com/de_DE/i/logo/PayPal_mark_37x23.gif', // 注意：此URL可能需要指向德语版本的PayPal标志  
    'MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT' => 'Mit PayPal bezahlen',  
    'MODULE_PAYMENT_PAYPAL_ACCEPTANCE_MARK_TEXT' => 'Zeit sparen. Sicher bezahlen. <br>Bezahlen, ohne Ihre finanziellen Informationen zu teilen.',  
    'MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_TITLE' => 'Alle Artikel in Ihrem Warenkorb (Details im Laden und auf Ihrer Rechnung).',  
    'MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_ITEMNUM' => STORE_NAME . ' Einkauf',  
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX' => 'Einmalige Gebühren für ',  
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_SURCHARGES_SHORT' => 'Zuschläge',  
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_SURCHARGES_LONG' => 'Bearbeitungskosten und andere anfallende Gebühren',  
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_DISCOUNTS_SHORT' => 'Rabatte',  
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_DISCOUNTS_LONG' => 'Guthaben einschließlich Rabattkupons, Geschenkgutscheine etc.',  
    'MODULES_PAYMENT_PAYPALSTD_NOT_RECOMMENDED' => 'Bitte beachten Sie, dass dieses Modul nicht mehr empfohlen wird. Weitere Informationen finden Sie <a href="https://docs.zen-cart.com/user/payment/paypal_standard/" target="_blank" rel="noreferrer noopener">auf dieser Seite</a>.',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME' => 'Vorname:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME' => 'Nachname:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME' => 'Firmenname:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME' => 'Adressname:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET' => 'Adressstraße:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY' => 'Adressstadt:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE' => 'Adresszustand:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP' => 'Adresspostleitzahl:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY' => 'Adressland:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS' => 'Zahlender Email:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID' => 'Ebay ID:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID' => 'Zahlender ID:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS' => 'Zahlender Status:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS' => 'Adressstatus:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE' => 'Zahlungsart:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS' => 'Zahlungsstatus:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON' => 'Ausstehender Grund:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE' => 'Rechnung:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE' => 'Zahlungsdatum:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY' => 'Währung:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT' => 'Bruttobetrag:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE' => 'Zahlungsgebühr:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE' => 'Wechselkurs:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS' => 'Warenkorbartikel:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE' => 'Transaktionstyp:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID' => 'Transaktions-ID:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID' => 'Übergeordnete Transaktions-ID:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_COMMENTS' => 'Systemkommentare: '
];

if (IS_ADMIN_FLAG === true) {
    $define['MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION'] = '<strong>PayPal Payments Standard</strong> (Älterer PayPal-Service, weniger zuverlässig als Express Checkout)<br><a href="https://www.paypal.com" rel="noreferrer noopener" target="_blank">Verwalten Sie Ihr PayPal-Konto.</a><br><br><b>Konfigurationsanweisungen:</b><br>1. <a href="https://www.zen-cart.com/partners/paypal-std" rel="noopener" target="_blank">Registrieren Sie Ihr PayPal-Konto - hier klicken.</a><br>2. In Ihrem PayPal-Konto unter "Profil",<ul><li>legen Sie Ihre <strong>Instant Payment Notification Preferences</strong> URL zu:<br><pre>' . str_replace('index.php?main_page=index', 'ipn_main_handler.php', zen_catalog_href_link(FILENAME_DEFAULT)) . '</pre><br>(Falls bereits eine gültige URL eingetragen ist, können Sie sie unverändert lassen.)<br><span class="alert">Stellen Sie sicher, dass die Checkbox zum Aktivieren von IPN aktiviert ist!</span><br><br></li><li>in <strong>Website Payments Preferences</strong> setzen Sie Ihre <strong>Automatic Return URL</strong> zu:<br><pre>' . zen_catalog_href_link(FILENAME_CHECKOUT_PROCESS, '', 'SSL', false) . '</pre></li>' . (defined('MODULE_PAYMENT_PAYPALSTD_STATUS') ? '' : '<li>... und oben "Installieren" klicken, um PayPal Standard Unterstützung zu aktivieren... und "Bearbeiten" klicken, um Zen Cart Ihre PayPal-Einstellungen mitteilen.</li>') . '</ul><hr><strong>Anforderungen:</strong><br><br>*<strong>PayPal-Konto</strong> (<a href="https://www.zen-cart.com/partners/paypal-std" rel="noopener" target="_blank">klicken Sie hier, um zu Setup/Konfiguration zu gehen</a>)<br>*<strong>CURL mit SSL</strong> wird dringend empfohlen<br>*<strong>Port 80 (und Port 443, wenn SSL aktiviert ist)</strong> wird für die <strong>*bidirektionale*</strong> Kommunikation mit dem Gateway verwendet, muss daher auf Ihrem Host-Router/Firewall offen sein.<br>*<strong>Einstellungen</strong> in Ihrem PayPal-Konto müssen wie oben beschrieben konfiguriert sein.';
} else {
    $define['MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION'] = '<strong>PayPal</strong>';
}
$define['MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_LOGO'] = '<img src="' . $define['MODULE_PAYMENT_PAYPAL_MARK_BUTTON_IMG'] . '" alt="' . $define['MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT'] . '" title="' . $define['MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT'] . '"> &nbsp;' .
        '<span class="smallText">' . $define['MODULE_PAYMENT_PAYPAL_ACCEPTANCE_MARK_TEXT'] . '</span>';

return $define;
