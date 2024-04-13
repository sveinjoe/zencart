<?php
// -----
// Part of the One-Page Checkout plugin, provided under GPL 2.0 license by lat9
// Copyright (C) 2013-2022, Vinos de Frutas Tropicales.  All rights reserved.
//
// Last updated for OPC v2.4.2.
//
$define = [
    // when free shipping for orders over $XX.00 is active
    'FREE_SHIPPING_TITLE' => 'Kostenlose Lieferung',  
    'FREE_SHIPPING_DESCRIPTION' => 'Kostenlose Lieferung für Bestellungen über %s',  
      
    'ERROR_GUEST_CHECKOUT_PAGE_DISALLOWED' => 'Für den Zugriff auf diese Seite ist ein registriertes Konto erforderlich. Sie können ein Konto erstellen, indem Sie unsere <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '">Anmelde</a> Seite nutzen.',  
    'WARNING_GUEST_CHECKOUT_NOT_AVAILABLE' => 'Entschuldigung, unsere Gast-Checkout ist vorübergehend nicht verfügbar. Sie können fortfahren, indem Sie sich anmelden oder ein Konto erstellen.',  
      
    'WARNING_GUEST_NO_GCS' => '<b>Hinweis</b>: Sie müssen ein Konto mit unserem Laden haben (oder erstellen), um Geschenkgutscheine kaufen.',  
    'WARNING_GUEST_GCS_RESET' => 'Wenn Sie fortfahren mit <em>Checkout</em>, werden alle Informationen, die Sie während der &quot;Gast-Checkout&quot; eingegeben haben, verloren gehen.',  
    'WARNING_GUEST_REMOVE_GC' => 'Um die &quot;Gast-Checkout&quot; fortzusetzen, entfernen Sie bitte die Geschenkgutscheine aus Ihrem Warenkorb <em>vor</em> Sie auf einen &quot;Checkout&quot; Button oder Link klicken.',  
      
    // -----  
    // Dieser Konstante wird verwendet, wenn die temporäre Lieferadresse einer Bestellung durch die paypalwpp-Verarbeitung überschrieben wurde  
    // und identifiziert die Adresse, die von paypalwpp überschrieben wurde. Die Meldung wird sowohl dem Kunden angezeigt  
    // als auch als Kundensichtbare Auftragsstatus-Verlaufseintrag aufgezeichnet.  
    //  
    'WARNING_PAYPAL_SENDTO_CHANGED' => 'Die von Ihnen eingegebene Lieferadresse (%s) wurde durch die Adresse, die Sie bei PayPal ausgewählt haben, überschrieben. Bitte überprüfen Sie Ihre Bestellung und kontaktieren Sie uns, falls eine Aktualisierung erforderlich ist.',  
    'WARNING_PAYPALWPP_TOTAL_CHANGED' => 'Der Gesamtbetrag Ihrer Bestellung hat sich aufgrund der von Ihnen bei PayPal ausgewählten Lieferadresse ändert. Bitte überprüfen Sie Ihre Bestellung und erneut übermitteln.',  
    // -----  
    // Diese Sprachkonstante kann in der Aktualisierung des Shops zu /includes/modules/[IHR_TEMPLATE/]information.php verwendet werden,  
    // um den Kunden zu der order_status Seitenlink zu verweisen.  
    //  
    'BOX_INFORMATION_ORDER_STATUS' => 'Auftragsstatus',
];
return $define;
