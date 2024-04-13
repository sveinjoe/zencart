<?php
$define = [
    'NAVBAR_TITLE' => 'Konto erstellen',  
    'HEADING_TITLE' => 'Meine Kontoinformationen',  
    'TEXT_ORIGIN_LOGIN' => '<strong class="note">HINWEIS:</strong> Wenn Sie bereits ein Konto bei uns haben, bitte anmelden Sie sich auf der <a href="%s">Anmeldeseite</a>.',  
    'ERROR_CREATE_ACCOUNT_SPAM_DETECTED' => 'Danke, Ihre Kontoanfrage wurde zur Überprüfung eingereicht.',  
    'EMAIL_SUBJECT' => 'Willkommen zu ' . STORE_NAME,  
    'EMAIL_GREET_MR' => 'Sehr geehrter Herr %s,' . "\n\n",  
    'EMAIL_GREET_MS' => 'Sehr geehrte Frau %s,' . "\n\n",  
    'EMAIL_GREET_NONE' => 'Sehr geehrte %s,' . "\n\n",  
    'EMAIL_WELCOME' => 'Wir möchten Sie herzlich zu <strong>' . STORE_NAME . '</strong> begrüßen.',  
    'EMAIL_SEPARATOR' => '--------------------',  
    'EMAIL_COUPON_INCENTIVE_HEADER' => 'Herzlichen Glückwunsch! Damit Ihr nächstes Besuch in unserem Online-Shop noch besser wird, finden Sie unten Einzelheiten zu einem Rabattkupon, der speziell für Sie erstellt wurde!' . "\n\n",  
    'EMAIL_COUPON_REDEEM' => 'Um den Rabattkupon zu nutzen, geben Sie bitte den ' . TEXT_GV_REDEEM . ' Code während des Checkouts ein: <strong>%s</strong>' . "\n\n",  
    'EMAIL_GV_INCENTIVE_HEADER' => 'Nur weil Sie heute vorbeischauen, haben wir Ihnen einen ' . TEXT_GV_NAME . ' für %s geschickt!' . "\n",  
    'EMAIL_GV_REDEEM' => 'Der ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' lautet: %s ' . "\n\n" . 'Sie können den ' . TEXT_GV_REDEEM . ' während des Checkouts eingeben, nachdem Sie Ihre Auswahl in dem Shop getroffen haben. ',  
    'EMAIL_GV_LINK' => ' Oder Sie können ihn jetzt einlösen, indem Sie diesem Link folgen: ' . "\n",  
    'EMAIL_GV_LINK_OTHER' => 'Sobald Sie das ' . TEXT_GV_NAME . ' zu Ihrem Konto hinzugefügt haben, können Sie das ' . TEXT_GV_NAME . ' für sich selbst nutzen oder es einem Freund senden!' . "\n\n",
    'EMAIL_TEXT' => 'Sie haben jetzt ein Konto bei ' . STORE_NAME . ', das bietet Ihnen:' . "\n\n<ul>" . '<li><strong>Bestellhistorie</strong> - Anzeigen von Bestelldetails.</li>' . "\n\n" . '<li><strong>Permanenter Warenkorb</strong> - Produkte, die Sie in Ihren Warenkorb legen, bleiben dort, bis Sie sie entfernen oder kaufen.</li>' . "\n\n" . '<li><strong>Adressbuch</strong> - Definieren Sie zusätzliche Adressen (zum Beispiel für Geschenksendungen).</li>' . "\n\n" . '<li><strong>Produktbewertungen</strong> - Teilen Sie Ihre Meinung zu unseren Produkten mit anderen Kunden.</li>' . "\n\n</ul>",
    'EMAIL_CONTACT' => 'Für Hilfe zu unseren Online-Services, bitte kontaktieren Sie den Ladenbesitzer: <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">' . STORE_OWNER_EMAIL_ADDRESS . "</a>\n\n",
    'EMAIL_GV_CLOSURE' => "\n" . 'Mit freundlichen Grüßen,' . "\n\n" . STORE_OWNER . "\nLadenbesitzer\n\n" . '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">' . HTTP_SERVER . DIR_WS_CATALOG . "</a>\n\n",
    'EMAIL_DISCLAIMER_NEW_CUSTOMER' => 'Diese E-Mail-Adresse wurde uns von Ihnen oder von einem unserer Kunden mitgeteilt. Wenn Sie kein Konto angemeldet haben oder Sie glauben, dass Sie diese E-Mail versehentlich erhalten haben, bitte senden Sie eine E-Mail an %s ',
];

return $define;
