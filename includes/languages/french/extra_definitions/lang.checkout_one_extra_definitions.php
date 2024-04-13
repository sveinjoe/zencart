<?php
// -----
// Part of the One-Page Checkout plugin, provided under GPL 2.0 license by lat9
// Copyright (C) 2013-2022, Vinos de Frutas Tropicales.  All rights reserved.
//
// Last updated for OPC v2.4.2.
//
$define = [  
    // 当满$XX.00订单免运费功能激活时  
    'FREE_SHIPPING_TITLE' => 'Livraison gratuite',  
    'FREE_SHIPPING_DESCRIPTION' => 'Livraison gratuite pour les commandes de plus de %s',  
  
    'ERROR_GUEST_CHECKOUT_PAGE_DISALLOWED' => 'Accéder à cette page nécessite un compte enregistré. Vous pouvez créer un compte à partir de notre page de <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '">connexion</a>.',  
    'WARNING_GUEST_CHECKOUT_NOT_AVAILABLE' => 'Désolé, la commande sans compte est temporairement indisponible. Vous pouvez poursuivre votre commande en vous connectant ou en créant un compte.',  
  
    'WARNING_GUEST_NO_GCS' => '<b>Remarque</b> : Vous devez avoir (ou créer) un compte sur notre boutique pour acheter des chèques-cadeaux.',  
    'WARNING_GUEST_GCS_RESET' => 'Si vous continuez à <em>Commander</em>, toute l’information que vous avez saisie pendant la <em>Commande sans compte</em> sera perdue.',  
    'WARNING_GUEST_REMOVE_GC' => 'Pour poursuivre la <em>Commande sans compte</em>, veuillez supprimer les chèques-cadeaux de votre panier <em>avant</em> de cliquer sur le bouton ou le lien <em>Commander</em>.',  
  
// -----  
// 当订单的临时送货地址被paypalwpp的处理覆盖时，该常量会被使用，并标识出被paypalwpp覆盖的地址。该消息会同时展示给客户，并记录为客户可见的订单状态历史记录。  
//  
    'WARNING_PAYPAL_SENDTO_CHANGED' => 'L\'adresse de livraison que vous avez entrée (%s) a été remplacée par l\'adresse que vous avez sélectionnée sur PayPal. Veuillez vérifier votre commande et contactez-nous si une mise à jour est nécessaire.',  
    'WARNING_PAYPALWPP_TOTAL_CHANGED' => 'Le total de votre commande a changé, basé sur l\'adresse de livraison que vous avez sélectionnée sur PayPal. Veuillez vérifier votre commande et soumettre à nouveau.',
  
// -----  
// 这个语言常量可以在商店的更新中用于/includes/modules/[YOUR_TEMPLATE/]information.php，以指向客户到订单状态页面的链接。  
//
    // 以指导客户访问订单状态页面链接。  
    //  // 订单状态（法语：État de la commande）  
    'BOX_INFORMATION_ORDER_STATUS' => 'État de la commande',
];
return $define;
