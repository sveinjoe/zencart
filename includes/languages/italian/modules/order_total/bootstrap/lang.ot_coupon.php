<?php
// -----
// Part of the One-Page Checkout plugin, provided under GPL 2.0 license by lat9 (cindy@vinosdefrutastropicales.com).
// Copyright (C) 2022, Vinos de Frutas Tropicales.  All rights reserved.
//
// Last updated for OPC v2.4.2.
//
$define = [];  
if (defined('CHECKOUT_ONE_ENABLED') && CHECKOUT_ONE_ENABLED === 'true') {  
    $define['MODULE_ORDER_TOTAL_COUPON_REDEEM_INSTRUCTIONS'] = '<p>Inserisci il codice del tuo coupon nella casella del codice sconto qui sotto. Il coupon verrà applicato al totale e verrà visualizzato nel tuo ordine dopo aver cliccato il pulsante a destra o aver inviato il tuo ordine. Attenzione: puoi utilizzare solo un coupon per ordine.</p>';  
}  
return $define;
