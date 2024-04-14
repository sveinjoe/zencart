<?php
$define = [
    'NAVBAR_TITLE' => 'Crea un Account',  
    'HEADING_TITLE' => 'Informazioni sul Mio Account',  
    'TEXT_ORIGIN_LOGIN' => '<strong class="note">NOTA:</strong> Se hai già un account con noi, ti preghiamo di effettuare il login alla <a href="%s">pagina di login</a>.',  
    'ERROR_CREATE_ACCOUNT_SPAM_DETECTED' => 'Grazie, la richiesta di creazione dell’account è stata inviata per revisione.',  
    'EMAIL_SUBJECT' => 'Benvenuto su ' . STORE_NAME,  
    'EMAIL_GREET_MR' => 'Caro Sig. %s,' . "\n\n",  
    'EMAIL_GREET_MS' => 'Cara Sig.ra %s,' . "\n\n",  
    'EMAIL_GREET_NONE' => 'Caro %s,' . "\n\n",  
    'EMAIL_WELCOME' => 'Desideriamo darLe il benvenuto su <strong>' . STORE_NAME . '</strong>.',  
    'EMAIL_SEPARATOR' => '--------------------',  
    'EMAIL_COUPON_INCENTIVE_HEADER' => 'Congratulazioni! Per rendere la Sua prossima visita al nostro negozio online una esperienza più gratificante, ecco i dettagli di un Buono Sconto creato esclusivamente per Lei!' . "\n\n",  
    'EMAIL_COUPON_REDEEM' => 'Per utilizzare il Buono Sconto, inserire il codice ' . TEXT_GV_REDEEM . ' al momento del pagamento: <strong>%s</strong>' . "\n\n",  
    'EMAIL_GV_INCENTIVE_HEADER' => 'Grazie per la Sua visita oggi, Le abbiamo inviato un ' . TEXT_GV_NAME . ' per %s!' . "\n",  
    'EMAIL_GV_REDEEM' => 'Il ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' è: %s ' . "\n\n" . 'Può inserire il codice ' . TEXT_GV_REDEEM . ' al momento del pagamento, dopo aver effettuato Le Sue selezioni nel negozio. ',  
    'EMAIL_GV_LINK' => ' Oppure, può riscattarlo ora seguendo questo link: ' . "\n",  
    'EMAIL_GV_LINK_OTHER' => 'Dopo aver aggiunto il ' . TEXT_GV_NAME . ' al Suo account, potrà utilizzarlo per Sé stesso, o inviarlo ad un amico!' . "\n\n",

    'EMAIL_TEXT' => 'Ora hai un account presso ' . STORE_NAME . ' che ti offre:' . "\n\n<ul>" . '<li><strong>Cronologia degli ordini</strong> - Visualizza i dettagli degli ordini.</li>' . "\n\n" . '<li><strong>Carrello permanente</strong> - I prodotti aggiunti al carrello rimarranno lì fino a quando non saranno rimossi o acquistati.</li>' . "\n\n" . '<li><strong>Rubrica indirizzi</strong> - Definire ulteriori indirizzi (ad esempio per spedire un regalo).</li>' . "\n\n" . '<li><strong>Recensioni dei prodotti</strong> - Condividi la tua opinione sulle nostre prodotti con altri clienti.</li>' . "\n\n</ul>",  
    'EMAIL_CONTACT' => 'Per aiuto su qualsiasi nostro servizio online, scrivi all\'admin del negozio: <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">' . STORE_OWNER_EMAIL_ADDRESS . "</a>\n\n",  
    'EMAIL_GV_CLOSURE' => "\n" . 'Cordialmente,' . "\n\n" . STORE_OWNER . "\nProprietario del negozio\n\n" . '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">' . HTTP_SERVER . DIR_WS_CATALOG . "</a>\n\n",  
    'EMAIL_DISCLAIMER_NEW_CUSTOMER' => 'Questo indirizzo email è stato fornito a noi direttamente da lei o da uno dei nostri clienti. Se lei non ha registrato un account, o crede di aver ricevuto questa email per errore, si prega di inviare un email a %s ',
];

return $define;
