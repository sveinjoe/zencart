<?php
$define = [  
    'MODULE_PAYMENT_MONEYORDER_TEXT_TITLE' => 'Scheck/Geldüberweisung',  
    'MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION' => 'Kunden können ihre Zahlung per Post einreichen. Ihre Bestellbestätigungs-E-Mail wird ihnen bitten:<br><br>Bitte stellen Sie Ihre Scheck oder Geldüberweisung an folgende Empfänger aus:<br>' . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? MODULE_PAYMENT_MONEYORDER_PAYTO : '<br>(Ihr Ladenname)') . '<br><br>Senden Sie Ihre Zahlung an folgende Adresse:<br>' . nl2br(STORE_NAME_ADDRESS) . '<br><br>' . 'Ihre Bestellung wird nicht versendet, bis wir die Zahlung erhalten haben.',  
];  
if (defined('MODULE_PAYMENT_MONEYORDER_STATUS')) {  
    $define['MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER'] = 'Bitte stellen Sie Ihre Scheck oder Geldüberweisung an folgende Empfänger aus:' . "\n\n" . MODULE_PAYMENT_MONEYORDER_PAYTO . "\n\n" . 'Senden Sie Ihre Zahlung an folgende Adresse:' . "\n" . STORE_NAME_ADDRESS . "\n\n" . 'Ihre Bestellung wird nicht versendet, bis wir die Zahlung erhalten haben.';  
}

return $define;
