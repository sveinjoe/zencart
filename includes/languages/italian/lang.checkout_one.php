<?php
// -----
// Part of the One-Page Checkout plugin, provided under GPL 2.0 license by lat9.
// Copyright (C) 2013-2022, Vinos de Frutas Tropicales.  All rights reserved.
//
// Last updated for OPC v2.4.2.
//
$define = [
    'NAVBAR_TITLE_1' => 'Checkout',  
    'NAVBAR_TITLE_2' => 'Seleziona Modalità di Spedizione/Pagamento e Conferma il Tuoro Ordine',  
      
    'HEADING_TITLE' => 'Checkout',  
    'BUTTON_SAVE_CHANGES_ALT' => 'Salva Modifiche',  
    'BUTTON_SAVE_CHANGES_TITLE' => 'Salva le modifiche apportate a questo indirizzo',  
    'BUTTON_CANCEL_CHANGES_ALT' => 'Annulla',  
    'BUTTON_CANCEL_CHANGES_TITLE' => 'Annulla tutte le modifiche apportate a questo indirizzo',  
      
    'TEXT_ADD_TO_ADDRESS_BOOK' => 'Aggiungi alla Rubrica',  
    'TITLE_ADD_TO_ADDRESS_BOOK' => 'Seleziona questa casella per aggiungere questo indirizzo alla tua rubrica personale',  
      
    'TITLE_CONTACT_INFORMATION' => 'Informazioni di Contatto',  
    'ENTRY_EMAIL_ADDRESS_CONF' => 'Conferma Email:',  
    'ENTRY_EMAIL_ADDRESS_CONF_TEXT' => '*',  
    'ERROR_EMAIL_MUST_MATCH_CONFIRMATION' => 'L\'<em>Indirizzo Email</em> deve corrispondere al valore dell\'<em>Email di Conferma</em>.',  
    'TEXT_CONTACT_INFORMATION' => 'Utilizzeremo queste informazioni <em>solo</em> per contattare tu riguardo questo ordine.',  
      
    'TEXT_SELECT_FROM_SAVED_ADDRESSES' => 'Seleziona dagli indirizzi salvati',  
      
    'TABLE_HEADING_SHIPPING_ADDRESS' => 'Indirizzo di Spedizione',  
    'TEXT_CHOOSE_SHIPPING_DESTINATION' => 'Il tuo ordine verrà spedito all\'indirizzo sopra riportato oppure puoi cambiare l\'indirizzo di spedizione cliccando sul pulsante <em>Cambia Indirizzo</em>.',  
    'TITLE_SHIPPING_ADDRESS' => 'Indirizzo di Spedizione:',  
      
    'TABLE_HEADING_SHIPPING_METHOD' => 'Modalità di Spedizione:',  
    'TEXT_CHOOSE_SHIPPING_METHOD' => '',  
    'TITLE_PLEASE_SELECT' => 'Seleziona',  
    'TEXT_ENTER_SHIPPING_INFORMATION' => 'Attualmente è l\'unica modalità di spedizione disponibile per questo ordine.',  
    'TITLE_NO_SHIPPING_AVAILABLE' => 'Non disponibile al momento',  
    'TEXT_NO_SHIPPING_AVAILABLE' => '<span class="alert">Spiacente, al momento non effettuiamo spedizioni nella tua area.</span><br>Contattaci per altre modalità.',  
      
    'TABLE_HEADING_COMMENTS' => 'Istruzioni Speciali o Commenti',  

    'ERROR_PLEASE_RESELECT_SHIPPING_METHOD' => 'Le opzioni di spedizione disponibili o il prezzo del metodo di spedizione scelto hanno cambiato. Si prega di selezionare nuovamente/rivedere il metodo di spedizione desiderato.',  
    'ERROR_UNKNOWN_SHIPPING_SELECTION' => 'È stato inviato un metodo di spedizione sconosciuto. Si prega di contattare il proprietario del negozio.',  
    'ERROR_INVALID_REQUEST' => 'È stato ricevuta una richiesta sconosciuta. Si prega di contattare il proprietario del negozio.',

// -----
// These definitions are prepended to any address-value-related error message as an indication
// of which address-field is being referenced.
//
    'ERROR_IN_BILLING' => '[Billing]: ',
    'ERROR_IN_SHIPPING' => '[Shipping]: ',

// -----
// NOTE: The following constants are used in the page's jscript_main.php file as javascript text literals.  If you want to include single-quotes in a value,
// you'll need to specify them as \\\'; for a new-line, use \n.  Just be sure to keep a constant's string within a set of single-quotes and you should be good-to-go!
//
    'JS_ERROR_SESSION_TIMED_OUT' => 'Siamo spiacenti, la vostra sessione è scaduta.\n\nGli articoli nel carrello sono stati salvati e verranno ripristinati la prossima volta che effettuerete il login.',  
    'JS_ERROR_OPC_NOT_ENABLED' => 'Il nostro processo di checkout rapido è momentaneamente non disponibile. Verrà effettuato il redirect al nostro alternativo processo di checkout.',  
    
    'JS_ERROR_AJAX_TIMEOUT' => 'Stiamo impiegando più tempo del solito per aggiornare i dettagli del vostro ordine.',  
    'JS_ERROR_AJAX_SHIPPING_TIMEOUT' => 'Stiamo impiegando più tempo del solito per aggiornare i costi di spedizione del vostro ordine.',  
    'JS_ERROR_AJAX_PAYMENT_TIMEOUT' => 'Stiamo impiegando più tempo del solito per aggiornare il metodo di pagamento del vostro ordine.',  
    'JS_ERROR_AJAX_SET_ADDRESS_TIMEOUT' => 'Stiamo impiegando più tempo del solito per impostare il indirizzo del vostro ordine.',  
    'JS_ERROR_AJAX_RESTORE_ADDRESS_TIMEOUT' => 'Stiamo impiegando più tempo del solito per ripristinare i valori del vostro indirizzo ordine.',  
    'JS_ERROR_AJAX_VALIDATE_ADDRESS_TIMEOUT' => 'Stiamo impiegando più tempo del solito per validare i dettagli del vostro indirizzo ordine.',  
    
    'JS_ERROR_AJAX_RESTORE_CUSTOMER_TIMEOUT' => 'Stiamo impiegando più tempo del solito per ripristinare i dettagli del vostro cliente.',  
    'JS_ERROR_AJAX_VALIDATE_CUSTOMER_TIMEOUT' => 'Stiamo impiegando più tempo del solito per validare i dettagli del vostro cliente.',  
    
    'JS_ERROR_CONTACT_US' => 'Chiudi questo messaggio e riprova.\n\nSe continui a ricevere questo messaggio, contattaci.',  
    
    'ERROR_NO_SHIPPING_SELECTED' => 'Devi scegliere un metodo di spedizione per il tuo ordine prima che possa essere confermato.',  
    'TITLE_BILLING_ADDRESS' => 'Indirizzo di fatturazione:',  
    'TITLE_BILLING_SHIPPING_ADDRESS' => 'Indirizzo di fatturazione/spedizione:',

// -----
// This definition is used on the default page display when there is a javascript/jQuery error (or when javascript is disabled).
// The customer can't checkout via the OPC so we'll give them a link through which they can access the
// "normal" 3-page checkout process.  
//
// NOTE: The %s value in the link is filled in by the checkout_one page's template to contain
// a link back to the checkout_shipping page with OPC disabled.
//
// ----- Da checkout_shipping -----  
  
    'TEXT_NOSCRIPT_JS_ERROR' => 'Scusi, ma il nostro procedimento di pagamento accelerato non può essere utilizzato. Clicca <a href="%s">qui</a> per utilizzare il nostro procedimento di pagamento alternativo.',  
    
    // ----- Da checkout_payment -----  
    
    'TABLE_HEADING_BILLING_ADDRESS' => 'Indirizzo di fatturazione',  
    'TEXT_SELECTED_BILLING_DESTINATION' => 'Il tuo indirizzo di fatturazione è mostrato sopra. Il tuo indirizzo di fatturazione deve corrispondere all\'indirizzo riportato sul tuo estratto conto. Puoi cambiare il tuo indirizzo di fatturazione cliccando sul pulsante <em>Cambia indirizzo</em>.',  
    
    'TABLE_HEADING_PAYMENT_METHOD' => 'Metodo di pagamento',  
    'TEXT_SELECT_PAYMENT_METHOD' => 'Si prega di selezionare un metodo di pagamento per questo ordine.',  
    'TEXT_ENTER_PAYMENT_INFORMATION' => '',  
    
    'TITLE_NO_PAYMENT_OPTIONS_AVAILABLE' => 'Non disponibile in questo momento',  
    'TEXT_NO_PAYMENT_OPTIONS_AVAILABLE' => '<span class="alert">Scusi, al momento non accettiamo pagamenti dalla vostra regione.</span><br />Si prega di contattarci per altri accordi.',  
    
    'TABLE_HEADING_CONDITIONS' => '<span class="termsconditions">Termini e condizioni</span>',  
    'TEXT_CONDITIONS_DESCRIPTION' => '<span class="termsdescription">Si prega di riconoscere i termini e condizioni vincolanti per questo ordine selezionando la seguente casella. I termini e condizioni possono essere letto <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '"><span class="pseudolink">qui</span></a>.</span>',  
    'TEXT_CONDITIONS_CONFIRM' => '<span class="termsiagree">Ho letto e accettato i termini e condizioni vincolanti per questo ordine.</span>',  
    
    'TEXT_CHECKOUT_AMOUNT_DUE' => 'Importo dovuto: ',  
    'TEXT_YOUR_TOTAL' => 'Il tuo totale',

    // ----- From checkout_confirmation -----
    'HEADING_BILLING_ADDRESS' => 'Informazioni sulla fatturazione/pagamento',  
    'HEADING_DELIVERY_ADDRESS' => 'Informazioni sulla consegna/spedizione',  
    'HEADING_SHIPPING_METHOD' => 'Metodo di spedizione:',  
    'HEADING_PAYMENT_METHOD' => 'Metodo di pagamento:',  
    'HEADING_PRODUCTS' => 'Contenuto del carrello',  
    'HEADING_TAX' => 'Imposta',  
    'HEADING_ORDER_COMMENTS' => 'Istruzioni speciale o commenti sull\'ordine',  
    // Nessun commento inserito  
    'NO_COMMENTS_TEXT' => 'Nessuno',  
    
    'TEXT_USE_BILLING_FOR_SHIPPING' => 'Indirizzo di spedizione, è lo stesso dell’indirizzo di fatturazione?',  
    'ALT_TEXT_APPLY_DEDUCTION' => 'Applica',  
  
    'TEXT_CONFIRMATION_EMAILS_SENT_TO' => 'Una conferma di questo ordine verrà inviata via email a <b>%s</b>.', // - Il %s viene riempito con l'indirizzo email del cliente

// -----
// You can modify this definition to change the name of the image-button/alt-text used to confirm the customer's order.
//
    'BUTTON_IMAGE_CHECKOUT_ONE_CONFIRM' => 'button_confirm_order.gif',
    'BUTTON_CHECKOUT_ONE_CONFIRM_ALT' => 'Conferma Ordine',

    'BUTTON_IMAGE_CHECKOUT_ONE_REVIEW' => 'button_continue_checkout.gif',  
    'BUTTON_CHECKOUT_ONE_REVIEW_ALT' => 'Revisione Ordine',  
     
    'CHECKOUT_ONE_LOADING' => 'confirmation_one_loading.gif',  
    'CHECKOUT_ONE_LOADING_ALT' => 'Attendi ...',

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
    'TEXT_CHECKOUT_ONE_INSTRUCTION_LABEL' => 'Istruzioni inferiori', //-Visualizzato come valore "legenda" per il fieldset che circonda il messaggio riportato di seguito  
    'TEXT_CHECKOUT_ONE_INSTRUCTIONS' => 'Istruzioni inferiori',      //-Visualizzato all'interno di un insieme di tag <p>...</p> se non vuoto
];
return $define;
