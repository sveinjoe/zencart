<?php
// -----
// Part of the One-Page Checkout plugin, provided under GPL 2.0 license by lat9 (cindy@vinosdefrutastropicales.com).
// Copyright (C) 2022, Vinos de Frutas Tropicales.  All rights reserved.
//
// Last updated for OPC v2.4.2.
//
$define = [];
if (defined('CHECKOUT_ONE_ENABLED') && CHECKOUT_ONE_ENABLED === 'true') {
    // 请在以下折扣码框中输入您的优惠券代码。点击右侧的按钮或提交订单后，优惠券将应用于订单总额，并在订单显示中反映出来。请注意：每个订单只能使用一张优惠券。
    $define['MODULE_ORDER_TOTAL_COUPON_REDEEM_INSTRUCTIONS'] = '<p>Veuillez saisir votre code de coupon dans la zone de code de réduction ci-dessous. Votre coupon sera appliqué au total et apparaîtra dans l’affichage de votre commande après avoir cliqué sur le bouton à droite ou après avoir soumis votre commande. Veuillez noter : vous ne pouvez utiliser qu’un seul coupon par commande.</p>';
}
return $define;
