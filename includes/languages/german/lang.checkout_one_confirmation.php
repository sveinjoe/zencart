<?php
// -----
// Part of the One-Page Checkout plugin, provided under GPL 2.0 license by lat9.
// Copyright (C) 2013-2022, Vinos de Frutas Tropicales.  All rights reserved.
//
$define = [
    'NAVBAR_TITLE_1' => 'Kasse',  
    'NAVBAR_TITLE_2' => 'Bestellung bestätigen',  
      
    'HEADING_TITLE' => 'Bestellung finalisieren und bestätigen',  
      
    'HEADING_BILLING_ADDRESS' => 'Rechnungs-/Zahlungsinformationen',  
    'HEADING_DELIVERY_ADDRESS' => 'Liefer-/Versandinformationen',  
    'HEADING_SHIPPING_METHOD' => 'Versandart:',  
    'HEADING_PAYMENT_METHOD' => 'Zahlungsart:',  
    'HEADING_PRODUCTS' => 'Warenkorbinhalt',  
    'HEADING_TAX' => 'Steuer',  
    'HEADING_ORDER_COMMENTS' => 'Spezielle Anweisungen oder Bestellkommentare',  
    // kein Kommentar eingetragen  
    'NO_COMMENTS_TEXT' => 'Keine',  
      
    'BILLING_ADDRESS' => '(Rechnungsadresse) ',  
    'SHIPPING_ADDRESS' => '(Versandadresse) ',  
      
    'CAUTION_SHIPPING_CHANGED' => 'Die Versandkosten wurden neu berechnet, da die Lieferadresse wurde ändert.',  
    'ERROR_INVALID_SHIPPING_SELECTION' => 'Ungültige Versandauswahl. Bitte eine andere Auswahl treffen.',  
    'ERROR_PLEASE_RESELECT_SHIPPING_METHOD' => 'Ihre verfügbare Versandoptionen haben sich ändert. Bitte Ihre gewünschte Versandart erneut auswählen.',  
      
    'NO_JAVASCRIPT_MESSAGE' => 'JavaScript ist nicht aktiviert; bitte die Bestätigungsbutton unten anklicken, um Ihre Bestellung zu verarbeiten.',  
    'CHECKOUT_ONE_CONFIRMATION_LOADING' => 'confirmation_one_loading.gif',  
    'CHECKOUT_ONE_CONFIRMATION_LOADING_ALT' => 'Bitte warten...',  
    'ERROR_NOJS_ORDER_CHANGED' => 'Die Details Ihrer Bestellung haben sich ändert. Bitte die aktuellen Werte überprüfen und erneut übermitteln.',  
      
    'ERROR_INVALID_TEMPORARY_ENTRIES' => 'Einige von Ihren Eingaben sind nicht korrekt, bitte erneut eingeben.',

// -----
// If your store uses a payment method that needs "additional time" to process (like "Ceon Manual Card"), you can add some instructions
// to your customers on the checkout_one_confirmation page letting them know that the processing might take a while!
//
    'CHECKOUT_ONE_CONFIRMATION_INSTRUCTIONS' => '',
];
return $define;
