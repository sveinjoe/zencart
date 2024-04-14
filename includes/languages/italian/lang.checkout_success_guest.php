<?php
// -----
// Part of the One-Page Checkout plugin, provided under GPL 2.0 license by lat9 (cindy@vinosdefrutastropicales.com).
// Copyright (C) 2018-2022, Vinos de Frutas Tropicales.  All rights reserved.
//
// Last updated for OPC v2.4.2.
//
$define = [
    'TEXT_SEE_ORDERS_GUEST' => 'Puoi vedere lo stato di questo ordine accedendo alla pagina <a href="' . zen_href_link(FILENAME_ORDER_STATUS, '', 'SSL') . '">Stato dell\'ordine</a> e fornendo il numero dell\'ordine e il tuo indirizzo email.',

    'TEXT_GUEST_ADD_PWD_TO_CREATE_ACCT' => '<em>(opzionale)</em> Se desideri creare un account utilizzando le informazioni fornite in questo ordine, crei una password per accedere a quel conto.',
];
return $define;
