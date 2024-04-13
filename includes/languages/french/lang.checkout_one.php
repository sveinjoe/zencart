<?php
// -----
// Part of the One-Page Checkout plugin, provided under GPL 2.0 license by lat9.
// Copyright (C) 2013-2022, Vinos de Frutas Tropicales.  All rights reserved.
//
// Last updated for OPC v2.4.2.
//
$define = [
    'NAVBAR_TITLE_1' => 'Paiement',  
    'NAVBAR_TITLE_2' => 'Choisissez l’expédition/le paiement et confirmez votre commande',  
      
    'HEADING_TITLE' => 'Paiement',  
    'BUTTON_SAVE_CHANGES_ALT' => 'Enregistrer les modifications',  
    'BUTTON_SAVE_CHANGES_TITLE' => 'Enregistrer les modifications apportées à cette adresse',  
    'BUTTON_CANCEL_CHANGES_ALT' => 'Annuler',  
    'BUTTON_CANCEL_CHANGES_TITLE' => 'Annuler toutes les modifications apportées à cette adresse',  
      
    'TEXT_ADD_TO_ADDRESS_BOOK' => 'Ajouter à mon carnet d’adresses',  
    'TITLE_ADD_TO_ADDRESS_BOOK' => 'Cochez cette case pour ajouter cette adresse à votre carnet d’adresses personnel',  
      
    'TITLE_CONTACT_INFORMATION' => 'Informations de contact',  
    'ENTRY_EMAIL_ADDRESS_CONF' => 'Confirmer Email :',  
    'ENTRY_EMAIL_ADDRESS_CONF_TEXT' => '*',  
    'ERROR_EMAIL_MUST_MATCH_CONFIRMATION' => 'L’<em>adresse Email</em> doit correspondre à la valeur de <em>Confirmation Email</em>.',  
    'TEXT_CONTACT_INFORMATION' => 'Nous utiliserons ces informations <em>uniquement</em> pour vous contacter concernant cette commande.',  
      
    'TEXT_SELECT_FROM_SAVED_ADDRESSES' => 'Choisir parmi les adresses enregistrées',  
      
    'TABLE_HEADING_SHIPPING_ADDRESS' => 'Adresse de livraison',  
    'TEXT_CHOOSE_SHIPPING_DESTINATION' => 'Votre commande sera envoyée à la adresse ci-dessus ou vous pouvez modifier l’adresse de livraison en cliquant sur le bouton <em>Modifier l’adresse</em>.',  
    'TITLE_SHIPPING_ADDRESS' => 'Adresse de livraison :',  
      
    'TABLE_HEADING_SHIPPING_METHOD' => 'Mode de livraison :',  
    'TEXT_CHOOSE_SHIPPING_METHOD' => '',  
    'TITLE_PLEASE_SELECT' => 'Veuillez sélectionner',  
    'TEXT_ENTER_SHIPPING_INFORMATION' => 'Ceci est actuellement le seul mode de livraison disponible pour cette commande.',  
    'TITLE_NO_SHIPPING_AVAILABLE' => 'Non disponible pour ce moment',  
    'TEXT_NO_SHIPPING_AVAILABLE' => '<span class="alert">Désolé, nous ne livrons pas dans votre région pour ce moment.</span><br>Veuillez nous contacter pour autres modalités.',  
      
    'TABLE_HEADING_COMMENTS' => 'Instructions spéciales ou commentaires',
    'ERROR_PLEASE_RESELECT_SHIPPING_METHOD' => 'Soit les options de livraison disponibles, soit le prix de la méthode de livraison choisi a changé. Veuillez ré-sélectionner/réviser votre méthode de livraison souhaitée.',  
    'ERROR_UNKNOWN_SHIPPING_SELECTION' => 'Une méthode de livraison inconnue a été envoyée. Veuillez contacter le propriétaire du magasin.',  
    'ERROR_INVALID_REQUEST' => 'Une demande inconnue a été reçue. Veuillez contacter le propriétaire du magasin.',  
      
    'ERROR_IN_BILLING' => '[Facturation] : ',  
    'ERROR_IN_SHIPPING' => '[Livraison] : ',  
      
    'JS_ERROR_SESSION_TIMED_OUT' => 'Désolé, votre session a expiré.\n\nLes articles de votre panier ont été sauvegardés et seront restaurés lors de votre prochaine connexion.',  
    'JS_ERROR_OPC_NOT_ENABLED' => 'Notre processus de paiement accéléré est temporairement indisponible. Vous serez redirigé vers notre autre processus de paiement.',  
      
    'JS_ERROR_AJAX_TIMEOUT' => 'Il faut plus de temps que normal pour mettre à jour les détails de votre commande.',  
    'JS_ERROR_AJAX_SHIPPING_TIMEOUT' => 'Il faut plus de temps que normal pour mettre à jour les frais de livraison de votre commande.',  
    'JS_ERROR_AJAX_PAYMENT_TIMEOUT' => 'Il faut plus de temps que normal pour mettre à jour le mode de paiement de votre commande.',  
    'JS_ERROR_AJAX_SET_ADDRESS_TIMEOUT' => 'Il faut plus de temps que normal pour définir l\'adresse de votre commande.',  
    'JS_ERROR_AJAX_RESTORE_ADDRESS_TIMEOUT' => 'Il faut plus de temps que normal pour restaurer les valeurs d\'adresse de votre commande.',  
    'JS_ERROR_AJAX_VALIDATE_ADDRESS_TIMEOUT' => 'Il faut plus de temps que normal pour valider les détails d\'adresse de votre commande.',  
      
    'JS_ERROR_AJAX_RESTORE_CUSTOMER_TIMEOUT' => 'Il faut plus de temps que normal pour restaurer les détails de votre client.',  
    'JS_ERROR_AJAX_VALIDATE_CUSTOMER_TIMEOUT' => 'Il faut plus de temps que normal pour valider les détails de votre client.',  
      
    'JS_ERROR_CONTACT_US' => '  Veuillez fermer ce message et réessayer.\n\nSi vous continuez à recevoir ce message, veuillez nous contacter.',
    'ERROR_NO_SHIPPING_SELECTED' => 'Vous devez choisir un mode de livraison pour votre commande avant de pouvoir la confirmer.',  
    'TITLE_BILLING_ADDRESS' => 'Adresse de facturation :',  
    'TITLE_BILLING_SHIPPING_ADDRESS' => 'Adresse de facturation/livraison :',  
    'TEXT_NOSCRIPT_JS_ERROR' => 'Désolé, mais notre processus d’achat accéléré ne peut être utilisé. Cliquez <a href="%s">ici</a> pour utiliser notre processus d’achat alternatif.',  
      
    'TABLE_HEADING_BILLING_ADDRESS' => 'Adresse de facturation',  
    'TEXT_SELECTED_BILLING_DESTINATION' => 'Votre adresse de facturation est affichée ci-dessus. L’adresse de facturation doit correspondre à l’adresse indiquée sur votre relevé de carte de crédit. Vous pouvez modifier l’adresse de facturation en cliquant sur le bouton <em>Modifier l’adresse</em>.',  
      
    'TABLE_HEADING_PAYMENT_METHOD' => 'Mode de paiement',  
    'TEXT_SELECT_PAYMENT_METHOD' => 'Veuillez sélectionner un mode de paiement pour cette commande.',  
    'TEXT_ENTER_PAYMENT_INFORMATION' => '',  
      
    'TITLE_NO_PAYMENT_OPTIONS_AVAILABLE' => 'Non disponible pour le moment',  
    'TEXT_NO_PAYMENT_OPTIONS_AVAILABLE' => '<span class="alert">Désolé, nous ne pouvons accepter les paiements de votre région pour le moment.</span><br />Veuillez nous contacter pour des modalités alternatives.',  
      
    'TABLE_HEADING_CONDITIONS' => '<span class="termsconditions">Conditions générales</span>',  
    'TEXT_CONDITIONS_DESCRIPTION' =>  '<span class="termsdescription">Veuillez cocher la case pour reconnaître les conditions générales qui s’appliquent à cette commande. Vous pouvez lire les conditions générales <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '"><span class="pseudolink">ici</span></a>.</span>',  
    'TEXT_CONDITIONS_CONFIRM' => '<span class="termsiagree">J’ai lu et accepté les conditions générales qui s’appliquent à cette commande.</span>',  
      
    'TEXT_CHECKOUT_AMOUNT_DUE' => 'Total dû : ',  
    'TEXT_YOUR_TOTAL' => 'Votre total',  
    'HEADING_BILLING_ADDRESS' => 'Informations de facturation/paiement',  
    'HEADING_DELIVERY_ADDRESS' => 'Informations de livraison/expédition',
    'HEADING_SHIPPING_METHOD' => 'Méthode de livraison :',  
    'HEADING_PAYMENT_METHOD' => 'Méthode de paiement :',  
    'HEADING_PRODUCTS' => 'Contenu du panier',  
    'HEADING_TAX' => 'Taxe',  
    'HEADING_ORDER_COMMENTS' => 'Instructions spéciales ou commentaires de commande',  
    // Aucun commentaire entré  
    'NO_COMMENTS_TEXT' => 'Aucun',  
      
    'TEXT_USE_BILLING_FOR_SHIPPING' => 'Utiliser la même adresse pour la facturation et l’expédition ?',  
    'ALT_TEXT_APPLY_DEDUCTION' => 'Appliquer',  
      
    'TEXT_CONFIRMATION_EMAILS_SENT_TO' => 'Une confirmation de cette commande sera envoyée à <b>%s</b>.',  //- Le %s est remplacé par l'adresse email du client  
      
    // -----  
    // Vous pouvez modifier cette définition pour changer le nom du bouton image/alt-text utilisé pour confirmer la commande du client.  
    //  
    'BUTTON_IMAGE_CHECKOUT_ONE_CONFIRM' => 'button_confirm_order.gif',  
    'BUTTON_CHECKOUT_ONE_CONFIRM_ALT' => 'Confirmer la commande',  
      
    'BUTTON_IMAGE_CHECKOUT_ONE_REVIEW' => 'button_continue_checkout.gif',  
    'BUTTON_CHECKOUT_ONE_REVIEW_ALT' => 'Revoir la commande',  
      
    'CHECKOUT_ONE_LOADING' => 'confirmation_one_loading.gif',  
    'CHECKOUT_ONE_LOADING_ALT' => 'Veuillez patienter...',  
      
    // -----  
    // Utilisez ces définitions pour définir les messages que vous souhaitez transmettre à vos clients sur la page de confirmation de commande.  
    //  
    // -----  
    // Cette constante définit les instructions que vous souhaitez afficher en haut de la page "checkout_one", avant l'entrée du formulaire.  
    //  
    'TEXT_CHECKOUT_ONE_TOP_INSTRUCTIONS' => '', //- Affiché dans des tags <p>...</p> s'il n'est pas vide.  
      
    // -----  
    // Ces constantes définissent les instructions insérées sous le panier/totaux et au-dessus du bouton "confirmer la commande".  
    //  
    'TEXT_CHECKOUT_ONE_INSTRUCTION_LABEL' => 'Instructions du bas', //- Affiché comme la valeur "legend" pour le fieldset qui entoure le message ci-dessous  
    'TEXT_CHECKOUT_ONE_INSTRUCTIONS' => 'Instructions du bas',      //-Displayed within a set of <p>...</p> tags if not empty
];
return $define;
