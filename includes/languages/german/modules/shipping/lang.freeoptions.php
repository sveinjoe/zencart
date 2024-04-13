<?php
$define = [
    'MODULE_SHIPPING_FREEOPTIONS_TEXT_TITLE' => 'Kostenlose Lieferoptionen',  
    'MODULE_SHIPPING_FREEOPTIONS_TEXT_DESCRIPTION' => '  
    Kostenlose Optionen werden verwendet, um eine kostenlose Lieferoption anzeigen, wenn andere Liefermodule angezeigt werden.  
    Sie können basieren auf: Immer anzeigen, Gesamtbestellsumme, Gesamtbestellgewicht oder Anzahl der Bestellpositionen.  
    Das Kostenlose-Optionen-Modul wird nicht angezeigt, wenn Kostenlose Lieferung angezeigt wird.<br><br>  
    Die Einstellung Gesamtbestellsumme auf >= 0.00 und <= nichts (leer lassen) wird dieses Modul aktivieren, damit es mit allen Liefermodulen angezeigt wird, außer für Kostenlose Lieferung - freieshipper.<br><br>  
    HINWEIS: Wenn alle Einstellungen für Gesamtbestellsumme, Gewicht und Artikelnummer leer bleiben, wird dieses Modul deaktiviert.<br><br>  
    HINWEIS: Kostenlose Lieferoptionen werden nicht angezeigt, wenn Kostenlose Lieferung basierend auf 0 Gewicht Kostenlose Lieferung ist.  
    Siehe: freeshipper  
    ',  
    'MODULE_SHIPPING_FREEOPTIONS_TEXT_WAY' => 'Kostenlose Lieferung',
];

return $define;