<?php
// -----
// Part of the One-Page Checkout plugin, provided under GPL 2.0 license by lat9 (cindy@vinosdefrutastropicales.com).
// Copyright (C) 2022, Vinos de Frutas Tropicales.  All rights reserved.
//
// Last updated for OPC v2.4.2.
//
$define = [];
if (defined('CHECKOUT_ONE_ENABLED') && CHECKOUT_ONE_ENABLED == 'true') {
    $define['MODULE_ORDER_TOTAL_GV_REDEEM_INSTRUCTIONS'] = '<p>Um bereits auf Ihrem Konto vorhandene ' . TEXT_GV_NAME . ' Guthaben zu nutzen, geben Sie in das Feld "Anwendbare Menge" die Menge ein, die Sie verwenden möchten. Anschließend müssen Sie eine Zahlungsmethode wählen und dann unten auf der Seite den "Absenden" Button klicken, um das Guthaben auf Ihre Bestellung anzuwenden.</p><p>Wenn Sie eine <em>neue</em> ' . TEXT_GV_NAME . ' einlösen, geben Sie die Nummer in das Feld neben "Rabattcode". Der eingelöste Betrag wird Ihrem Konto hinzugefügt, wenn Sie auf den rechten Button klicken.</p>';
}
return $define;
