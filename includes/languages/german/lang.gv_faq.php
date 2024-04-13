<?php
$define = [
  'NAVBAR_TITLE' => TEXT_GV_NAME . ' FAQ',  
  'HEADING_TITLE' => TEXT_GV_NAME . ' FAQ',  
  'TEXT_INFORMATION' => '<a id="Top"></a>  
    <a href="' . zen_href_link(FILENAME_GV_FAQ, 'faq_item=1') . '">Kaufen von ' . TEXT_GV_NAMES . '</a><br>  
    <a href="' . zen_href_link(FILENAME_GV_FAQ, 'faq_item=2') . '">Wie sende ich ' . TEXT_GV_NAMES . '</a><br>  
    <a href="' . zen_href_link(FILENAME_GV_FAQ, 'faq_item=3') . '">Einkaufen mit ' . TEXT_GV_NAMES . '</a><br>  
    <a href="' . zen_href_link(FILENAME_GV_FAQ, 'faq_item=4') . '">Einlösen von ' . TEXT_GV_NAMES . '</a><br>  
    <a href="' . zen_href_link(FILENAME_GV_FAQ, 'faq_item=5') . '">Wenn Probleme auftreten</a><br>  
  ',  
  'SUB_HEADING_TITLE_1' => 'Kaufen von ' . TEXT_GV_NAMES,  
  'SUB_HEADING_TEXT_1' => TEXT_GV_NAMES . ' werden genauso wie jedes andere Artikel in unserem Shop kauft. Sie können  
    sie mit der Standardzahlungsmethode(n) des Shops bezahlen.  
    Sobald sie kaufen wurden, wird der Wert des ' . TEXT_GV_NAME . ' zu Ihrem persönlichem  
    ' . TEXT_GV_NAME . ' Guthaben hinzugefügt. Wenn Sie Guthaben auf Ihrem ' . TEXT_GV_NAME . ' Guthaben haben, werden Sie  
    merken, dass der Betrag jetzt auf der Seite Mein Konto angezeigt wird, und bietet  
    auch einen Link zu einer Seite, wo Sie das ' . TEXT_GV_NAME . ' per E-Mail an jemand senden können.',  
  'SUB_HEADING_TITLE_2' => 'Wie sende ich ' . TEXT_GV_NAMES,
  'SUB_HEADING_TEXT_2' => 'Sie können einen ' . TEXT_GV_NAME . ' von der Seite "Mein Konto" aus senden.  
  Wenn Sie einen ' . TEXT_GV_NAME . ' senden, müssen Sie folgende Angaben machen:  
  Der Name der Person, an die Sie den ' . TEXT_GV_NAME . ' senden;  
  Die E-Mail-Adresse der Person, an die Sie den ' . TEXT_GV_NAME . ' senden;  
  Der Betrag, den Sie senden möchten (Beachten Sie, dass Sie nicht den gesamten Betrag senden müssen,  
  der auf Ihrem ' . TEXT_GV_NAME . '-Guthaben steht.,  
  Eine optionale kurze Nachricht, die in der E-Mail erscheint;  
  Bitte stellen Sie sicher, dass Sie alle Informationen korrekt eingetragen haben, obwohl  
  Sie vor dem tatsächlichen Absenden der E-Mail die Möglichkeit haben, diese so oft zu ändern,  
  wie Sie möchten.',  
    'SUB_HEADING_TITLE_3' => 'Einkauf mit ' . TEXT_GV_NAMES,  
    'SUB_HEADING_TEXT_3' => 'Wenn Sie Guthaben auf Ihrem ' . TEXT_GV_NAME . '-Guthaben haben, können Sie dieses Guthaben verwenden,  
  um andere Artikel in unserem Shop zu kaufen. In der Checkout-Phase erscheint ein zusätzliches Feld,  
  welches Ihr Guthaben zeigt. Eingeben Sie den Betrag, den Sie von Ihrem ' . TEXT_GV_NAME . '-Guthaben verwenden möchten.  
  Bitte beachten: Sie müssen noch eine andere Zahlungsmethode auswählen, wenn Ihr ' . TEXT_GV_NAME . '-Guthaben  
  nicht ausreicht, um die Kosten für Ihren Kauf zu decken.  
  Falls Sie mehr Guthaben auf Ihrem ' . TEXT_GV_NAME . '-Guthaben haben, als die Gesamtkosten  
  Ihres Kaufs sind, wird das verbleibende Guthaben auf Ihrem ' . TEXT_GV_NAME . '-Guthaben bleiben,  
  für zukünftige Einkäufe.',  
    'SUB_HEADING_TITLE_4' => 'Einlösen von ' . TEXT_GV_NAMES,
    'SUB_HEADING_TEXT_4' => 'Wenn Sie per E-Mail eine ' . TEXT_GV_NAME . ' erhalten, enthält sie Details darüber, wer Ihnen die ' . TEXT_GV_NAME . ' gesendet hat, zusammen mit einer kurzen Nachricht von diesem. Die E-Mail wird auch die ' . TEXT_GV_NAME . ' und deren ' . TEXT_GV_REDEEM . ' enthalten. Es ist wahrscheinlich eine gute Idee, diese E-Mail für spätere Referenz auszudrucken. Sie können die ' . TEXT_GV_NAME . ' jetzt auf zwei Arten einlösen:<br><br>

    Durch Anklicken des Links, der in der E-Mail zu diesem Zweck enthalten ist. Dadurch werden Sie zur Einlösungsseite der ' . TEXT_GV_NAME . ' des Shops weiterleitet. Sie werden dann aufgefordert, ein Konto zu erstellen, bevor die ' . TEXT_GV_NAME . ' bestätigt und Ihrem ' . TEXT_GV_NAME . ' Guthaben hinzugefügt wird. Anschließend können Sie den Betrag für den Kauf eines beliebiges Artikels aus unserem Shop verwenden.<br><br>
    Während des Checkout-Prozesses auf der selben Seite, wo Sie eine Zahlungsmethode auswählen, gibt es ein Feld, in das Sie einen ' . TEXT_GV_REDEEM . ' eingeben können. Eingeben Sie den ' . TEXT_GV_REDEEM . ' hier und klicken Sie auf die Einlösen-Button. Der Code wird bestätigt und der Betrag Ihrem ' . TEXT_GV_NAME . ' Guthaben hinzugefügt. Anschließend können Sie den Betrag für den Kauf eines beliebiges Artikels aus unserem Shop verwenden.',
    'SUB_HEADING_TITLE_5' => 'Wenn Probleme auftreten.',
    'SUB_HEADING_TEXT_5' => 'Für alle Fragen bezüglich des ' . TEXT_GV_NAME . ' Systems, bitte kontaktieren Sie den Laden  
    mithilfe unserer <a href="' . zen_href_link(FILENAME_CONTACT_US) . '">Kontakt</a> Seite. Bitte stellen Sie sicher, dass Sie  
   möglichst viele Informationen zu dem Problem geben, damit wir es vollständig lösen können.',  
  'SUB_HEADING_TITLE_0' => '',  
  'SUB_HEADING_TEXT_0' => 'Bitte aus einer der oben stehenden Fragen auswählen.',  
  'TEXT_GV_REDEEM_INFO' => 'Bitte Ihren ' . TEXT_GV_NAME . ' Einlösungscode eingeben: ',  
  'TEXT_GV_REDEEM_ID' => 'Einlösungscode:',
];

return $define;
