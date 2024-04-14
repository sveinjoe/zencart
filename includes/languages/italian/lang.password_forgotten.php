<?php
$define = [
    'NAVBAR_TITLE_1' => 'Accesso',  
    'NAVBAR_TITLE_2' => 'Password Dimenticata',  
    'HEADING_TITLE' => 'Password Dimenticata',  
    'TEXT_MAIN' => 'Inserisci il tuo indirizzo email qui sotto e ti invieremo un messaggio con la tua nuova password.',  
    'EMAIL_PASSWORD_REMINDER_SUBJECT' => STORE_NAME . ' - Nuova Password',  
    'EMAIL_PASSWORD_REMINDER_BODY' => 'Una nuova password è stata richiesta da ' . $_SERVER['REMOTE_ADDR'] . '.' . "\n\n" . 'La tua nuova password per \'' . STORE_NAME . '\' è:' . "\n\n" . '   %s' . "\n\n" . 'Dopo aver effettuato l\'accesso con la nuova password, puoi cambiarla nella sezione "Il Mio Account".',  
    'SUCCESS_PASSWORD_SENT' => 'Grazie. Se quel indirizzo email è nel nostro sistema, invieremo istruzioni per il recupero della password a quel indirizzo (ricordati di controllare la cartella Spam)',
];

return $define;
