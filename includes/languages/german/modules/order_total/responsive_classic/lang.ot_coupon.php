<?php
// -----
// Part of the One-Page Checkout plugin, provided under GPL 2.0 license by lat9 (cindy@vinosdefrutastropicales.com).
// Copyright (C) 2022, Vinos de Frutas Tropicales.  All rights reserved.
//
// Last updated for OPC v2.4.2.
//
$define = [];
if (defined('CHECKOUT_ONE_ENABLED') && CHECKOUT_ONE_ENABLED === 'true') {
    $define['MODULE_ORDER_TOTAL_COUPON_REDEEM_INSTRUCTIONS'] = '<p>Bitte geben Sie Ihren Gutscheincode in das Feld für den Rabattcode unten ein. Der Rabatt wird automatisch auf den Gesamtwert angewendet und wird nach dem Anklicken des Buttons rechts oder nach dem Absenden Ihrer Bestellung in der Bestellungsansicht angezeigt. Bitte beachten Sie: Sie können nur einen Gutschein pro Bestellung verwenden.</p>';
}
return $define;
