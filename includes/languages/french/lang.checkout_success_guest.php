<?php
// -----
// Part of the One-Page Checkout plugin, provided under GPL 2.0 license by lat9 (cindy@vinosdefrutastropicales.com).
// Copyright (C) 2018-2022, Vinos de Frutas Tropicales.  All rights reserved.
//
// Last updated for OPC v2.4.2.
//
$define = [
    'TEXT_SEE_ORDERS_GUEST' => 'Vous pouvez consulter le statut de cette commande en accédant à la page <a href="' . zen_href_link(FILENAME_ORDER_STATUS, '', 'SSL') . '">Statut de la commande</a> et en indiquant ce numéro de commande ainsi que votre adresse email.',  
  
    'TEXT_GUEST_ADD_PWD_TO_CREATE_ACCT' => '<em>(optionnel)</em> Si vous souhaitez créer un compte à l’aide des informations que vous avez fournies pour cette commande, veuillez créer un mot de passe pour accéder à ce compte.',
];
return $define;
