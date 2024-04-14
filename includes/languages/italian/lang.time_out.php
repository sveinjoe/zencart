<?php
$define = [
    'NAVBAR_TITLE' => 'Tempo di Login Scaduto',  
    'HEADING_TITLE' => 'Ops! La tua sessione è scaduta.',  
    'HEADING_TITLE_LOGGED_IN' => 'Ops! Scusa, ma non ti è permesso di eseguire l\'azione richiesta.',  
    'TEXT_INFORMATION' => '<p>Se stavi effettuando un ordine, ti preghiamo di effettuare il login e il tuo carrello verrà ripristinato. Potrai quindi tornare alla procedura di pagamento e completare i tuoi acquisti finali.</p><p>Se avevi completato un ordine e desideri revisionarlo' . (DOWNLOAD_ENABLED == 'true' ? ', o aveva un download e desideri recuperarlo' : '') . ', ti preghiamo di andare alla tua pagina <a href="' . zen_href_link(FILENAME_ACCOUNT) . '">Mio Account</a> per visualizzare il tuo ordine.</p>',  
    'TEXT_INFORMATION_LOGGED_IN' => 'Sei ancora connesso al tuo account e puoi continuare a fare shopping. Scegli una destinazione dal menu.',  
    'HEADING_RETURNING_CUSTOMER' => 'Login',
];

return $define;
