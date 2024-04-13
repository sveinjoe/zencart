<?php
// -----
// Part of the One-Page Checkout plugin, provided under GPL 2.0 license by lat9 (cindy@vinosdefrutastropicales.com).
// Copyright (C) 2022, Vinos de Frutas Tropicales.  All rights reserved.
//
// Last updated for OPC v2.4.2.
//
$define = [];
if (defined('CHECKOUT_ONE_ENABLED') && CHECKOUT_ONE_ENABLED == 'true') {
    $define['MODULE_ORDER_TOTAL_GV_REDEEM_INSTRUCTIONS'] = '<p>Pour utiliser les fonds ' . TEXT_GV_NAME . ' déjà présents sur votre compte, veuillez saisir le montant que vous souhaitez appliquer dans la zone indiquée par "Appliquer le montant". Vous devrez ensuite choisir un mode de paiement, puis cliquer sur le bouton "Envoyer" au bas de la page pour appliquer les fonds à votre commande.</p><p>Si vous souhaitez utiliser un <em>nouveau</em> ' . TEXT_GV_NAME . ', veuillez saisir le numéro dans la zone située à côté de "Code de réduction". Le montant récupéré sera ajouté à votre compte lorsque vous cliquez sur le bouton situé à droite.</p>';
}
return $define;
