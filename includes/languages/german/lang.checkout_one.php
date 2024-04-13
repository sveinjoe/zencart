<?php
// -----
// Part of the One-Page Checkout plugin, provided under GPL 2.0 license by lat9.
// Copyright (C) 2013-2022, Vinos de Frutas Tropicales.  All rights reserved.
//
// Last updated for OPC v2.4.2.
//
$define = [
    'NAVBAR_TITLE_1' => 'Checkout',  
    'NAVBAR_TITLE_2' => 'Versand/Zahlung auswählen und Bestellung bestätigen',  
      
    'HEADING_TITLE' => 'Checkout',  
    'BUTTON_SAVE_CHANGES_ALT' => 'Änderungen speichern',  
    'BUTTON_SAVE_CHANGES_TITLE' => 'Die Änderungen an dieser Adresse speichern',  
    'BUTTON_CANCEL_CHANGES_ALT' => 'Abbrechen',  
    'BUTTON_CANCEL_CHANGES_TITLE' => 'Alle Änderungen an dieser Adresse abbrechen',  
      
    'TEXT_ADD_TO_ADDRESS_BOOK' => 'Zu Adressbuch hinzufügen',  
    'TITLE_ADD_TO_ADDRESS_BOOK' => 'Markieren Sie dieses Feld, um diese Adresse zu Ihrem persönlichem Adressbuch hinzufügen',  
      
    'TITLE_CONTACT_INFORMATION' => 'Kontaktinformationen',  
    'ENTRY_EMAIL_ADDRESS_CONF' => 'Email bestätigen:',  
    'ENTRY_EMAIL_ADDRESS_CONF_TEXT' => '*',  
    'ERROR_EMAIL_MUST_MATCH_CONFIRMATION' => 'Die <em>Email-Adresse</em> muss mit dem Wert von <em>Email bestätigen</em> übereinstimmen.',  
    'TEXT_CONTACT_INFORMATION' => 'Wir werden diese Informationen <em>nur</em> verwenden, um Sie bezüglich dieser Bestellung zu kontaktieren.',  
      
    'TEXT_SELECT_FROM_SAVED_ADDRESSES' => 'Aus gespeicherten Adressen auswählen',  
      
    'TABLE_HEADING_SHIPPING_ADDRESS' => 'Versandadresse',  
    'TEXT_CHOOSE_SHIPPING_DESTINATION' => 'Ihre Bestellung wird an die oben stehende Adresse verschickt oder Sie können die Versandadresse ändern, indem Sie auf die <em>Adresse ändern</em> Button klicken.',  
    'TITLE_SHIPPING_ADDRESS' => 'Versandadresse:',  
      
    'TABLE_HEADING_SHIPPING_METHOD' => 'Versandart:',  
    'TEXT_CHOOSE_SHIPPING_METHOD' => '',  
    'TITLE_PLEASE_SELECT' => 'Bitte auswählen',  
    'TEXT_ENTER_SHIPPING_INFORMATION' => 'Dies ist derzeit die einzige verfügbare Versandart für diese Bestellung.',  
    'TITLE_NO_SHIPPING_AVAILABLE' => 'Zurzeit nicht verfügbar',  
    'TEXT_NO_SHIPPING_AVAILABLE' => '<span class="alert">Entschuldigung, wir derzeit nicht in Ihrer Region versenden.</span><br>Bitte kontaktieren Sie uns für alternative Vereinbarungen.',  
      
    'TABLE_HEADING_COMMENTS' => 'Spezielle Anweisungen oder Kommentare',
    'ERROR_PLEASE_RESELECT_SHIPPING_METHOD' => 'Entweder die verfügbare Versandoptionen oder der Preis der von Ihnen ausgewählte Versandmethode hat sich ändert. Bitte erneut auswählen/überprüfen Sie Ihre gewünschte Versandmethode.',  
    'ERROR_UNKNOWN_SHIPPING_SELECTION' => 'Es wurde eine unbekannte Versandmethode übermittelt. Bitte kontaktieren Sie den Ladenbesitzer.',  
    'ERROR_INVALID_REQUEST' => 'Es wurde eine unbekannte Anfrage empfangen. Bitte kontaktieren Sie den Ladenbesitzer.',  
      
    // -----  
    // Diese Definitionen werden vor jedem Fehlermeldung zu Adresswerte als Hinweis auf das bezogenes Adressfeld hinzugefügt.  
    //  
    'ERROR_IN_BILLING' => '[Rechnung]: ',  
    'ERROR_IN_SHIPPING' => '[Versand]: ',  
      
    // -----  
    // HINWEIS: Die folgenden Konstanten werden in der jscript_main.php Datei der Seite als JavaScript Textliterals verwendet. Wenn Sie Einzelanführungszeichen in einem Wert enthalten möchten, müssen Sie sie als \\\'; angeben. Für eine neue Zeile verwenden Sie \n. Stellen Sie sicher, dass die Zeichenfolge einer Konstante innerhalb eines Satzes von Einzelanführungszeichen steht, dann sollten Sie keine Probleme haben!  
    //  
    'JS_ERROR_SESSION_TIMED_OUT' => 'Entschuldigen Sie, Ihre Sitzung ist abgelaufen.\n\nDie Artikel in Ihrem Warenkorb wurden gespeichert und beim nächsten Login wiederherstellt.',  
    'JS_ERROR_OPC_NOT_ENABLED' => 'Unser beschleunigtes Checkout-Prozess ist vorübergehend nicht verfügbar. Sie werden zu unserem alternativen Checkout-Prozess weitergeleitet.',  
      
    'JS_ERROR_AJAX_TIMEOUT' => 'Es dauert etwas länger als normal, um die Details Ihrer Bestellung zu aktualisieren.',  
    'JS_ERROR_AJAX_SHIPPING_TIMEOUT' => 'Es dauert etwas länger als normal, um die Versandkosten Ihrer Bestellung zu aktualisieren.',  
    'JS_ERROR_AJAX_PAYMENT_TIMEOUT' => 'Es dauert etwas länger als normal, um die Zahlungsmethode Ihrer Bestellung zu aktualisieren.',  
    'JS_ERROR_AJAX_SET_ADDRESS_TIMEOUT' => 'Es dauert etwas länger als normal, um die Adresse Ihrer Bestellung zu setzen.',  
    'JS_ERROR_AJAX_RESTORE_ADDRESS_TIMEOUT' => 'Es dauert etwas länger als normal, um die Adresswerte Ihrer Bestellung wiederherzustellen.',
    'JS_ERROR_AJAX_VALIDATE_ADDRESS_TIMEOUT' => 'Die Überprüfung Ihrer Adressdetails für die Bestellung dauert etwas länger als normal.',  
  
    'JS_ERROR_AJAX_RESTORE_CUSTOMER_TIMEOUT' => 'Die Wiederherstellung Ihrer Kundendaten dauert etwas länger als normal.',  
    'JS_ERROR_AJAX_VALIDATE_CUSTOMER_TIMEOUT' => 'Die Überprüfung Ihrer Kundendaten dauert etwas länger als normal.',  
      
    'JS_ERROR_CONTACT_US' => 'Bitte schließen Sie diese Nachricht und versuchen Sie es erneut.\n\nWenn Sie weiterhin diese Nachricht erhalten, kontaktieren Sie uns bitte.',  
      
    'ERROR_NO_SHIPPING_SELECTED' => 'Sie müssen eine Versandart für Ihre Bestellung auswählen, bevor die Bestellung bestätigt werden kann.',  
    'TITLE_BILLING_ADDRESS' => 'Rechnungsadresse:',  
    'TITLE_BILLING_SHIPPING_ADDRESS' => 'Rechnungs-/Versandadresse:',  
      
    // -----  
    // 以下定义用于默认页面显示，当存在JavaScript/jQuery错误（或JavaScript被禁用）时。  
    // 客户无法通过OPC结账，因此我们将提供一个链接，使他们可以通过该链接访问“常规”的三页结账流程。  
    //  
    // 注意：链接中的 %s 值由 checkout_one 页面的模板填充，以包含禁用 OPC 的 checkout_shipping 页面的链接。  
    //  
    'TEXT_NOSCRIPT_JS_ERROR' => 'Entschuldigen Sie, aber unser beschleunigter Checkout-Prozess kann nicht verwendet werden. Klicken Sie <a href="%s">hier</a>, um unseren alternativen Checkout-Prozess zu nutzen.',  
      
    // ----- 从 checkout_payment -----  
      
    'TABLE_HEADING_BILLING_ADDRESS' => 'Rechnungsadresse',  
    'TEXT_SELECTED_BILLING_DESTINATION' => 'Ihre Rechnungsadresse ist oben angezeigt. Die Rechnungsadresse sollte mit der Adresse auf Ihrer Kreditkartenauszug übereinstimmen. Sie können die Rechnungsadresse ändern, indem Sie auf die Schaltfläche <em>Adresse ändern</em> klicken.',  
      
    'TABLE_HEADING_PAYMENT_METHOD' => 'Zahlungsmethode',  
    'TEXT_SELECT_PAYMENT_METHOD' => 'Bitte wählen Sie eine Zahlungsmethode für diese Bestellung.',  
    'TEXT_ENTER_PAYMENT_INFORMATION' => '', // 这个字段没有提供要翻译的内容，所以保持为空
    'TITLE_NO_PAYMENT_OPTIONS_AVAILABLE' => 'Zurzeit nicht verfügbar',  
    'TEXT_NO_PAYMENT_OPTIONS_AVAILABLE' => '<span class="alert">Entschuldigung, wir derzeit keine Zahlungen aus Ihrer Region akzeptieren.</span><br />Bitte kontaktieren Sie uns für alternative Möglichkeiten.',  
      
    'TABLE_HEADING_CONDITIONS' => '<span class="termsconditions">Allgemeine Geschäftsbedingungen</span>',  
    'TEXT_CONDITIONS_DESCRIPTION' =>  '<span class="termsdescription">Bitte bestätigen Sie die Allgemeine Geschäftsbedingungen dieser Bestellung durch Anklicken des folgenden Feldes. Die Allgemeine Geschäftsbedingungen können Sie <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '"><span class="pseudolink">hier</span></a> lesen.</span>',  
    'TEXT_CONDITIONS_CONFIRM' => '<span class="termsiagree">Ich habe die Allgemeine Geschäftsbedingungen dieser Bestellung gelesen und akzeptiert.</span>',  
      
    'TEXT_CHECKOUT_AMOUNT_DUE' => 'Gesamtbetrag zu zahlen: ',  
    'TEXT_YOUR_TOTAL' => 'Ihr Gesamtbetrag',  
      
    // ----- Vom checkout_confirmation -----  
    'HEADING_BILLING_ADDRESS' => 'Rechnungs-/Zahlungsinformationen',  
    'HEADING_DELIVERY_ADDRESS' => 'Liefer-/Versandinformationen',  
    'HEADING_SHIPPING_METHOD' => 'Versandart:',  
    'HEADING_PAYMENT_METHOD' => 'Zahlungsmethode:',  
    'HEADING_PRODUCTS' => 'Warenkorbinhalt',  
    'HEADING_TAX' => 'Steuer',  
    'HEADING_ORDER_COMMENTS' => 'Spezielle Anweisungen oder Bestellungskommentare',  
    // keine Kommentare eingegeben  
    'NO_COMMENTS_TEXT' => 'Keine',  
      
    'TEXT_USE_BILLING_FOR_SHIPPING' => 'Lieferadresse gleich wie Rechnungsadresse?',  
    'ALT_TEXT_APPLY_DEDUCTION' => 'Anwenden',  
      
    'TEXT_CONFIRMATION_EMAILS_SENT_TO' => 'Eine Bestellungsbestätigung wurde an <b>%s</b> versendet.',  //-%s wird mit der Kunden-E-Mail-Adresse ausgefüllt  
      
    // -----  
    // Sie können diese Definition ändern, um den Namen des Bildbuttons/Alt-Text zu ändern, der verwendet wird, um die Bestellung des Kunden zu bestätigen.  
    //  
    'BUTTON_IMAGE_CHECKOUT_ONE_CONFIRM' => 'button_confirm_order.gif',  
    'BUTTON_CHECKOUT_ONE_CONFIRM_ALT' => 'Bestellung bestätigen',

    'BUTTON_IMAGE_CHECKOUT_ONE_REVIEW' => 'button_continue_checkout.gif',
    'BUTTON_CHECKOUT_ONE_REVIEW_ALT' => 'Bestellung überprüfen',

    'CHECKOUT_ONE_LOADING' => 'confirmation_one_loading.gif',
    'CHECKOUT_ONE_LOADING_ALT' => 'Bitte warten...',

// -----
// Use these definitions to set any messages you might want to convey to your customers on the checkout-one page.
//
    // -----
    // This constant defines the instructions you want displayed at the very top of the "checkout_one" page, before the form entry.
    //
    'TEXT_CHECKOUT_ONE_TOP_INSTRUCTIONS' => '', //-Displayed within a set of <p>...</p> tags if not empty.
    
    // -----
    // These constants define the instructions that are inserted below the shopping-cart/totals and above the "confirm order" button.
    //
    'TEXT_CHECKOUT_ONE_INSTRUCTION_LABEL' => 'Anweisungen unten', //-Displays as the "legend" value for the fieldset that surrounds the message below
    'TEXT_CHECKOUT_ONE_INSTRUCTIONS' => 'Anweisungen unten',      //-Displayed within a set of <p>...</p> tags if not empty
];
return $define;
