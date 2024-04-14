<?php
// -----
// Part of the One-Page Checkout plugin, provided under GPL 2.0 license by lat9 (cindy@vinosdefrutastropicales.com).
// Copyright (C) 2022, Vinos de Frutas Tropicales.  All rights reserved.
//
// Last updated for OPC v2.4.2.
//
$define = [];  
if (defined('CHECKOUT_ONE_ENABLED') && CHECKOUT_ONE_ENABLED == 'true') {  
    $define['MODULE_ORDER_TOTAL_GV_REDEEM_INSTRUCTIONS'] = '<p>Per utilizzare i fondi ' . TEXT_GV_NAME . ' già presenti sul tuo account, digita l\'importo che desideri applicare nella casella denominata "Applica Importo". Dovrai scegliere un metodo di pagamento, poi cliccare sul pulsante "Invia" in fondo alla pagina per applicare i fondi al tuo ordine.</p><p>Se stai riscattando un <em>nuovo</em> ' . TEXT_GV_NAME . ' dovrai digitare il numero nella casella accanto a "Codice Sconto". L\'importo riscattato verrà aggiunto al tuo account quando cliccherai sul pulsante a destra.</p>';  
}  
return $define;