<?php
$define = [
    'HEADING_TITLE' => 'Invia ' . TEXT_GV_NAME,  
    'HEADING_TITLE_CONFIRM_SEND' => 'Invia ' . TEXT_GV_NAME . ' Conferma',  
    'HEADING_TITLE_COMPLETED' => TEXT_GV_NAME . ' Inviato',  
    'NAVBAR_TITLE' => 'Invia ' . TEXT_GV_NAME,  
    'EMAIL_SUBJECT' => 'Messaggio da ' . STORE_NAME,  
    'HEADING_TEXT' => 'Inserire il nome, l\'indirizzo email e l\'importo del ' . TEXT_GV_NAME . ' che si desidera inviare. Per maggiori informazioni, vedere la nostra <a href="' . zen_href_link(FILENAME_GV_FAQ) . '">' . GV_FAQ . '.</a>',  
    'ENTRY_MESSAGE' => 'Messaggio Personalizzato:',  
    'ENTRY_AMOUNT' => 'Importo da Inviare:',  
    'ERROR_ENTRY_TO_NAME_CHECK' => 'Non abbiamo ricevuto il nome del destinatario. Si prega di inserirlo. ',  
    'ERROR_ENTRY_AMOUNT_CHECK' => 'L\'importo del ' . TEXT_GV_NAME . ' non sembra essere corretto. Si prega di riprovare.',  
    'ERROR_ENTRY_EMAIL_ADDRESS_CHECK' => 'L\'indirizzo email è corretto? Si prega di riprovare.',  
    'MAIN_MESSAGE' => 'Stai inviando un ' . TEXT_GV_NAME . ' del valore di %s a %s, il quale ha l\'indirizzo email %s. Se i dettagli non sono corretti, puoi modificare il tuo messaggio cliccando sul pulsante <strong>modifica</strong>.<br><br>Il messaggio che stai inviando è:<br><br>',  
    'SECONDARY_MESSAGE' => 'Caro %s,<br><br>' . 'Ti è stato inviato un ' . TEXT_GV_NAME . ' del valore di %s da %s',  
    'PERSONAL_MESSAGE' => '%s dice:',  
    'TEXT_SUCCESS' => 'Congratulazioni, il tuo ' . TEXT_GV_NAME . ' è stato inviato.',  
    'TEXT_SEND_ANOTHER' => 'Vuoi inviare un altro ' . TEXT_GV_NAME . '?',  
    'EMAIL_GV_TEXT_SUBJECT' => 'Un regalo da %s',  
    'EMAIL_SEPARATOR' => '------------------------------------------------------------------------------------------------',  
    'EMAIL_GV_TEXT_HEADER' => 'Congratulazioni, hai ricevuto un ' . TEXT_GV_NAME . ' del valore di %s',  
    'EMAIL_GV_FROM' => 'Questo ' . TEXT_GV_NAME . ' è stato inviato a te da %s',  
    'EMAIL_GV_MESSAGE' => 'con un messaggio che dice: ',  
    'EMAIL_GV_SEND_TO' => 'Ciao, %s',

    'EMAIL_GV_REDEEM' => 'Per riscattare questo ' . TEXT_GV_NAME . ', clicca sul link sottostante. Ti consigliamo inoltre di annotare il ' . TEXT_GV_REDEEM . ': %s per ogni eventuale problema.',  
    'EMAIL_GV_LINK' => 'Per riscattare clicca qui',  
    'EMAIL_GV_FIXED_FOOTER' => 'Se hai problemi nel riscattare il ' . TEXT_GV_NAME . ' utilizzando il link automatizzato sopra, ' . "\n" .  
        'puoi anche inserire il ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' durante il processo di pagamento in nostro negozio.',  
    'EMAIL_GV_SHOP_FOOTER' => '',
];

return $define;
