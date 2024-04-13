<?php
$define = [
    'NAVBAR_TITLE' => 'Login Timeout',  
    'HEADING_TITLE' => 'Hoppla! Ihre Sitzung ist abgelaufen.',  
    'HEADING_TITLE_LOGGED_IN' => 'Hoppla! Entschuldigen Sie, aber Sie sind nicht berechtigt, die angeforderte Aktion auszuführen.',  
    'TEXT_INFORMATION' => '<p>Falls Sie gerade einen Bestellung durchführten, bitte erneut anmelden, damit Ihr Warenkorb wiederherstellt wird. Dann können Sie zurück zum Checkout gehen und Ihre letzten Käufe abschließen.</p><p>Falls Sie eine Bestellung abgeschlossen haben und diese noch einmal überprüfen möchten' . (DOWNLOAD_ENABLED == 'true' ? ', oder einen Download hatten und diesen erneut abrufen möchten' : '') . ', bitte gehen Sie zu Ihrer <a href="' . zen_href_link(FILENAME_ACCOUNT) . '">Meine Konto</a> Seite, um Ihre Bestellung zu sehen.</p>',  
    'TEXT_INFORMATION_LOGGED_IN' => 'Sie sind noch angemeldet und können weiterhin einkaufen. Bitte aus einem Menu einen Zielpunkt auswählen.',  
    'HEADING_RETURNING_CUSTOMER' => 'Anmelden',
];

return $define;
