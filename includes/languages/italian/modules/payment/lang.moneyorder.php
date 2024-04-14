<?php
$define = [  
    'MODULE_PAYMENT_MONEYORDER_TEXT_TITLE' => 'Assegno/Ordine Postale',  
    'MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION' => 'I clienti possono effettuare il pagamento tramite posta. La loro email di conferma dell’ordine li inviterà a:<br><br>Fate il vostro assegno o ordine postale a nome di:<br>' . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? MODULE_PAYMENT_MONEYORDER_PAYTO : '<br>(il nome di vostro negozio)') . '<br><br>Inviate il pagamento a:<br>' . nl2br(STORE_NAME_ADDRESS) . '<br><br>' . 'Il vostro ordine non verrà spedito fino a quando non riceveremo il pagamento.',  
];  
if (defined('MODULE_PAYMENT_MONEYORDER_STATUS')) {  
    $define['MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER'] = 'Fate il vostro assegno o ordine postale a nome di:' . "\n\n" . MODULE_PAYMENT_MONEYORDER_PAYTO . "\n\n" . 'Inviate il pagamento a:' . "\n" . STORE_NAME_ADDRESS . "\n\n" . 'Il vostro ordine non verrà spedito fino a quando non riceveremo il pagamento.';  
}

return $define;
