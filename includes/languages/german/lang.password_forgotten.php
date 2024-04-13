<?php
$define = [
    'NAVBAR_TITLE_1' => 'Anmelden',  
    'NAVBAR_TITLE_2' => 'Passwort vergessen',  
    'HEADING_TITLE' => 'Passwort vergessen',  
    'TEXT_MAIN' => 'Bitte unten Ihre E-Mail-Adresse eingeben und wir senden Ihnen eine E-Mail mit Ihrem neuen Passwort.',  
    'EMAIL_PASSWORD_REMINDER_SUBJECT' => STORE_NAME . ' - Neues Passwort',  
    'EMAIL_PASSWORD_REMINDER_BODY' => 'Es wurde ein neues Passwort von ' . $_SERVER['REMOTE_ADDR'] . ' angefordert.' . "\n\n" . 'Ihr neues Passwort für \'' . STORE_NAME . '\' lautet:' . "\n\n" . '   %s' . "\n\n" . 'Nachdem Sie sich mit dem neuen Passwort eingeloggt haben, können Sie es ändern in der Bereich "Mein Konto".',  
    'SUCCESS_PASSWORD_SENT' => 'Danke. Wenn diese E-Mail-Adresse in unserem System ist, wir senden Ihnen die Wiederherstellungsanweisung für Ihr Passwort (bitte auch Ihren Spam-Ordner überprüfen).',
];

return $define;
