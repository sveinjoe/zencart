<?php
$define = [
    'HEADING_CVV' => 'Cos\'è il CVV?',  
    'TEXT_CVV_HELP1' => 'Visa, Mastercard, Discover: Numero di Verifica a 3 Cifre<br><br>  
                        Per la vostra sicurezza, è necessario inserire il numero di verifica della vostra carta.<br><br>  
                        Il numero di verifica è un numero a 3 cifre stampato sul retro della vostra carta.  
                        Appare dopo e a destra del numero della vostra carta.<br>' .  
            zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2visa.gif'),  
    'TEXT_CVV_HELP2' => 'American Express: Numero di Verifica a 4 Cifre<br><br>  
                        Per la vostra sicurezza, è necessario inserire il numero di verifica della vostra carta.<br><br>  
                        Il numero di verifica American Express è un numero a 4 cifre stampato sul lato anteriore della vostra carta.  
                        Appare dopo e a destra del numero della vostra carta.<br>' .  
            zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2amex.gif'),  
    'TEXT_CLOSE_CVV_WINDOW' => 'Chiudi Finestra [x]',
];

return $define;
