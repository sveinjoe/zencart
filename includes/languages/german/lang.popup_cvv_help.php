<?php
$define = [
    'HEADING_CVV' => 'Was ist CVV?',  
    'TEXT_CVV_HELP1' => 'Visa, Mastercard, Discover: 3-stellige Kartenprüfnummer<br><br>  
                        Für Ihre Sicherheit bitten wir Sie, die Prüfnummer Ihrer Karte eingeben.<br><br>  
                        Die Prüfnummer ist eine 3-stellige Nummer, die auf der Rückseite Ihrer Karte abgedruckt ist.  
                        Sie befindet sich rechts neben Ihrer Kartennummer.<br>' .  
            zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2visa.gif'),  
    'TEXT_CVV_HELP2' => 'American Express: 4-stellige Kartenprüfnummer<br><br>  
                        Für Ihre Sicherheit bitten wir Sie, die Prüfnummer Ihrer Karte eingeben.<br><br>  
                        Die American Express Prüfnummer ist eine 4-stellige Nummer, die auf der Vorderseite Ihrer Karte abgedruckt ist.  
                        Sie befindet sich rechts neben Ihrer Kartennummer.<br>' .  
            zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2amex.gif'),  
    'TEXT_CLOSE_CVV_WINDOW' => 'Fenster schließen [x]',
];

return $define;
