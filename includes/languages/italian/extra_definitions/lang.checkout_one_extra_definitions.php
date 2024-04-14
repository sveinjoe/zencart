<?php
// -----
// Part of the One-Page Checkout plugin, provided under GPL 2.0 license by lat9
// Copyright (C) 2013-2022, Vinos de Frutas Tropicales.  All rights reserved.
//
// Last updated for OPC v2.4.2.
//
$define = [
    // when free shipping for orders over $XX.00 is active
    'FREE_SHIPPING_TITLE' => 'Spedizione Gratuita',  
    'FREE_SHIPPING_DESCRIPTION' => 'Spedizione gratuita per ordini superiori a %s',  
      
    'ERROR_GUEST_CHECKOUT_PAGE_DISALLOWED' => 'L\'accesso a quella pagina richiede un account registrato. Puoi creare un account utilizzando la nostra <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '">pagina di accesso</a>.',  
    'WARNING_GUEST_CHECKOUT_NOT_AVAILABLE' => 'Spiacente, il nostro checkout per ospiti è temporaneamente non disponibile. Puoi continuare il checkout effettuando il login o creando un account.',  
      
    'WARNING_GUEST_NO_GCS' => '<b>Nota</b>: Devi avere (o creare) un account nel nostro negozio per acquistare Buoni Regalo.',  
    'WARNING_GUEST_GCS_RESET' => 'Se continui con <em>Checkout</em>, tutte le informazioni inserite durante il <em>Checkout Ospite</em> saranno perdute.',  
    'WARNING_GUEST_REMOVE_GC' => 'Per continuare con il <em>Checkout Ospite</em>, rimuovi i Buoni Regalo dal tuo carrello <em>prima</em> di cliccare un pulsante o link <em>Checkout</em>.',  
      
    // -----  
    // Questa costante viene utilizzata quando l'indirizzo temporaneo di spedizione di un ordine è stato sostituito dal processamento di paypalwpp  
    // e identifica l'indirizzo che è stato sostituito da paypalwpp. Il messaggio viene visualizzato sia al cliente che registrato come storia dello stato delle ordini visibile ai clienti.  
    //  
    'WARNING_PAYPAL_SENDTO_CHANGED' => 'L\'indirizzo di consegna che hai inserito (%s) è stato sostituito dall\'indirizzo selezionato su PayPal. Controlla l\'ordine e contattaci se è necessario un aggiornamento.',  
    'WARNING_PAYPALWPP_TOTAL_CHANGED' => 'Il totale del tuo ordine è cambiato, basato sull\'indirizzo di consegna selezionato su PayPal. Controlla l\'ordine e ri-invialo.',  
    // -----  
    // Questa costante di lingua può essere utilizzata nell\'aggiornamento del negozio a /includes/modules/[YOUR_TEMPLATE/]information.php  
    // per indicare al cliente il link alla pagina dello stato dell\'ordine.  
    //  
    'BOX_INFORMATION_ORDER_STATUS' => 'Stato dell\'Ordine',
];
return $define;
