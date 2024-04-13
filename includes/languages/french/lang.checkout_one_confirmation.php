<?php
// -----
// Part of the One-Page Checkout plugin, provided under GPL 2.0 license by lat9.
// Copyright (C) 2013-2022, Vinos de Frutas Tropicales.  All rights reserved.
//
$define = [
    'NAVBAR_TITLE_1' => 'Panier',  
    'NAVBAR_TITLE_2' => 'Confirmer votre commande',  
      
    'HEADING_TITLE' => 'Finaliser et confirmer votre commande',  
      
    'HEADING_BILLING_ADDRESS' => 'Informations de facturation/paiement',  
    'HEADING_DELIVERY_ADDRESS' => 'Informations de livraison/expédition',  
    'HEADING_SHIPPING_METHOD' => 'Méthode d\'expédition :',  
    'HEADING_PAYMENT_METHOD' => 'Méthode de paiement :',  
    'HEADING_PRODUCTS' => 'Contenu du panier',  
    'HEADING_TAX' => 'Taxe',  
    'HEADING_ORDER_COMMENTS' => 'Instructions spéciales ou commentaires sur la commande',  
    // aucun commentaire entré  
    'NO_COMMENTS_TEXT' => 'Aucun',  
      
    'BILLING_ADDRESS' => '(Adresse de facturation) ',  
    'SHIPPING_ADDRESS' => '(Adresse d\'expédition) ',  
      
    'CAUTION_SHIPPING_CHANGED' => 'Les frais de port ont été recalculés, puisque l\'adresse d\'expédition a été modifiée.',  
    'ERROR_INVALID_SHIPPING_SELECTION' => 'Choix d\'expédition incorrect. Veuillez faire une autre sélection.',  
    'ERROR_PLEASE_RESELECT_SHIPPING_METHOD' => 'Vos options d\'expédition disponibles ont changé. Veuillez ré-sélectionner votre méthode d\'expédition désirée.',  
      
    'NO_JAVASCRIPT_MESSAGE' => 'JavaScript n\'est pas activé; veuillez cliquer sur le bouton de confirmation ci-dessous pour traiter votre commande.',  
    'CHECKOUT_ONE_CONFIRMATION_LOADING' => 'confirmation_one_loading.gif',  
    'CHECKOUT_ONE_CONFIRMATION_LOADING_ALT' => 'Veuillez patienter...',  
    'ERROR_NOJS_ORDER_CHANGED' => 'Les détails de votre commande ont changé. Veuillez réviser les valeurs actuelles et soumettre à nouveau.',  
      
    'ERROR_INVALID_TEMPORARY_ENTRIES' => 'Certaines des informations que vous avez entrées ne sont pas correctes, veuillez les réentrer.',

// -----
// If your store uses a payment method that needs "additional time" to process (like "Ceon Manual Card"), you can add some instructions
// to your customers on the checkout_one_confirmation page letting them know that the processing might take a while!
//
    'CHECKOUT_ONE_CONFIRMATION_INSTRUCTIONS' => '',
];
return $define;
