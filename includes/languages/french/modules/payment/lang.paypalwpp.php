<?php
$define = [
    'MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_EC' => 'PayPal Express Checkout',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PRO20' => 'PayPal Express Checkout (Pro 2.0 Payflow Edition) (Royaume-Uni)',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PF_EC' => 'PayPal Payflow Pro - Gateway',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PF_GATEWAY' => 'PayPal Express Checkout via Payflow Pro',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_DESCRIPTION' => '<strong>PayPal</strong>',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_TITLE' => 'Carte de crédit',  
    'MODULE_PAYMENT_PAYPALWPP_EC_TEXT_TITLE' => 'PayPal',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_EC_HEADER' => 'Paiement rapide et sécurisé avec PayPal :',  
    'MODULE_PAYMENT_PAYPALWPP_EC_TEXT_TYPE' => 'PayPal Express Checkout',  
    'MODULE_PAYMENT_PAYPALWPP_DP_TEXT_TYPE' => 'Paiement direct PayPal',  
    'MODULE_PAYMENT_PAYPALWPP_PF_TEXT_TYPE' => 'Carte de crédit',  
    'MODULE_PAYMENT_PAYPALWPP_ERROR_HEADING' => 'Nous sommes désolés, mais nous n\'avons pas pu traiter votre carte de crédit.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_CARD_ERROR' => 'Les informations de votre carte de crédit contiennent une erreur. Veuillez les vérifier et réessayer.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_FIRSTNAME' => 'Prénom de la carte de crédit :',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_LASTNAME' => 'Nom de la carte de crédit :',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_OWNER' => 'Nom du titulaire de la carte :',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_TYPE' => 'Type de carte de crédit :',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_NUMBER' => 'Numéro de la carte de crédit :',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_EXPIRES' => 'Date d\'expiration de la carte de crédit :',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_ISSUE' => 'Date d\'émission de la carte de crédit :',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_CHECKNUMBER' => 'Numéro CVV :',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_CHECKNUMBER_LOCATION' => '(au dos de la carte de crédit)',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_DECLINED' => 'Votre carte de crédit a été refusée. Veuillez essayer avec une autre carte ou contactez votre banque pour plus d\'informations.',  
    'MODULE_PAYMENT_PAYPALWPP_INVALID_RESPONSE' => 'Nous n\'avons pas pu traiter votre commande. Veuillez réessayer, choisir un autre mode de paiement ou contacter le propriétaire du magasin pour obtenir assistance.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_GEN_ERROR' => 'Une erreur s\'est survenue lors de la communication avec le système de traitement des paiements. Veuillez réessayer, choisir un autre mode de paiement ou contacter le propriétaire du magasin pour obtenir assistance.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_EMAIL_ERROR_MESSAGE' => 'Cher propriétaire du magasin,' . "\n" . 'Une erreur s\'est survenue lors de la tentative d\'initiation d\'une transaction PayPal Express Checkout. Par précaution, seul le "numéro" de l\'erreur a été affiché à votre client. Les détails de l\'erreur sont indiqués ci-dessous.' . "\n\n",  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_EMAIL_ERROR_SUBJECT' => 'ALERTE : Erreur PayPal Express Checkout',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_ADDR_ERROR' => 'Les informations de l\'adresse que vous avez entrées ne semblent pas valides ou ne peuvent être confirmées. Veuillez sélectionner ou ajouter une autre adresse et réessayer.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_CONFIRMEDADDR_ERROR' => 'L\'adresse que vous avez sélectionnée sur PayPal n\'est pas une adresse confirmée. Veuillez retourner à PayPal, sélectionner ou ajouter une adresse confirmée, et réessayer.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_INSUFFICIENT_FUNDS_ERROR' => 'PayPal n\'a pas pu financer cette transaction. Veuillez choisir une autre option de paiement ou vérifier les options de financement de votre compte PayPal avant de continuer.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_PAYPAL_DECLINED' => 'Désolé. PayPal a refusé la transaction et nous avons été avisés de vous contacter le service client de PayPal pour plus d\'informations. Pour compléter votre achat, veuillez choisir un autre mode de paiement.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_ERROR' => 'Une erreur s\'est survenue lors du traitement de votre carte de crédit. Veuillez réessayer, choisir un autre mode de paiement ou contacter le propriétaire du magasin pour obtenir de l\'aide.',  
    'MODULE_PAYMENT_PAYPALWPP_FUNDING_ERROR' => 'Problème de source de financement; veuillez se rendre sur Paypal.com et effectuer le paiement directement à ' . STORE_OWNER_EMAIL_ADDRESS,  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_BAD_CARD' => 'Nous sommes désolés pour le désagrément, mais la carte de crédit que vous avez entrée n\'est pas acceptée. Veuillez utiliser une autre carte de crédit.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_BAD_LOGIN' => 'Un problème s\'est survenu lors de la validation de votre compte. Veuillez réessayer.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_JS_CC_OWNER' => '* Le nom du titulaire de la carte doit comporter au moins ' . CC_OWNER_MIN_LENGTH . ' caractères.\n',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_JS_CC_NUMBER' => '* Le numéro de la carte de crédit doit comporter au moins ' . CC_NUMBER_MIN_LENGTH . ' caractères.\n',  
    'MODULE_PAYMENT_PAYPALWPP_ERROR_AVS_FAILURE_TEXT' => 'ALERTE: Échec de la vérification d\'adresse. ',  
    'MODULE_PAYMENT_PAYPALWPP_ERROR_CVV_FAILURE_TEXT' => 'ALERTE: Échec de la vérification du code CVV de la carte. ',  
    'MODULE_PAYMENT_PAYPALWPP_ERROR_AVSCVV_PROBLEM_TEXT' => ' La commande est en attente d\'examen par le propriétaire du magasin.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_UNILATERAL' => ' - Vous devez enregistrer vos identifiants API PayPal avant de pouvoir effectuer des transactions avancées.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_STATE_ERROR' => 'Le statut affecté à votre compte n\'est pas valide. Veuillez accéder à vos paramètres de compte et le modifier.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_NOT_WPP_ACCOUNT_ERROR' => 'Nous sommes désolés pour le désagrément. Le paiement n\'a pas pu être initié car le compte PayPal configuré par le propriétaire du magasin n\'est pas un compte PayPal Website Payments Pro ou les services de passerelle PayPal n\'ont pas été achetés. Veuillez choisir un autre mode de paiement pour votre commande.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_SANDBOX_VS_LIVE_ERROR' => 'Nous sommes désolés pour l’inconvénient. Les paramètres d’authentification du compte PayPal n’ont pas encore été configurés, ou les informations de sécurité API sont incorrectes. Nous ne pouvons pas compléter votre transaction. Veuillez informer le propriétaire du magasin afin qu’il puisse corriger ce problème.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_WPP_BAD_COUNTRY_ERROR' => 'Nous sommes désolés -- le compte PayPal configuré par l’administrateur du magasin est basé dans un pays qui n’est pas actuellement pris en charge pour Website Payments Pro. Veuillez choisir un autre mode de paiement pour compléter votre commande.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_NOT_CONFIGURED' => '<span class="alert">&nbsp;(Remarque : Le module n’est pas encore configuré)</span>',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_GETDETAILS_ERROR' => 'Il y a eu un problème pour récupérer les détails de la transaction.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_TRANSSEARCH_ERROR' => 'Il y a eu un problème pour trouver les transactions correspondant aux critères que vous avez spécifiés.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_ERROR' => 'Il y a eu un problème pour annuler la transaction.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_ERROR' => 'Il y a eu un problème pour effectuer le remboursement du montant de transaction spécifié.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_ERROR' => 'Il y a eu un problème pour autoriser la transaction.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_CAPT_ERROR' => 'Il y a eu un problème pour capturer la transaction.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_REFUNDFULL_ERROR' => 'Votre demande de remboursement a été rejetée par PayPal.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_REFUND_AMOUNT' => 'Vous avez demandé un remboursement partiel sans préciser un montant.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_ERROR' => 'Vous avez demandé un remboursement complet sans cocher la case pour confirmer votre intention.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_AUTH_AMOUNT' => 'Vous avez demandé une autorisation sans préciser un montant.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_CAPTURE_AMOUNT' => 'Vous avez demandé une capture sans préciser un montant.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_CAPTURE_FULL_CONFIRM_ERROR' => 'Vous avez demandé la capture de fonds sans cocher la case de confirmation pour vérifier votre intention.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_INITIATED' => 'Le remboursement PayPal pour %s a été initié. ID de transaction : %s. Actualisez l\'écran pour voir les détails de confirmation mis à jour dans la section Historique/Commentaires de l\'état de la commande.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_INITIATED' => 'L\'autorisation PayPal pour %s a été initiée. Actualisez l\'écran pour voir les détails de confirmation mis à jour dans la section Historique/Commentaires de l\'état de la commande.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_CAPT_INITIATED' => 'La capture PayPal pour %s a été initiée. ID de reçu : %s. Actualisez l\'écran pour voir les détails de confirmation mis à jour dans la section Historique/Commentaires de l\'état de la commande.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_INITIATED' => 'La demande d\'annulation PayPal a été initiée. ID de transaction : %s. Actualisez l\'écran pour voir les détails de confirmation mis à jour dans la section Historique/Commentaires de l\'état de la commande.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_GEN_API_ERROR' => 'Une erreur s\'est produite lors de la transaction. Veuillez consulter le guide de référence API ou les logs de transaction pour obtenir des informations détaillées.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_ZONE_ERROR' => 'Nous sommes désolés pour le désagrément; néanmoins, à ce moment, nous ne pouvons pas utiliser PayPal pour traiter les commandes provenant de la région géographique que vous avez sélectionnée pour votre adresse PayPal. Veuillez continuer à utiliser le processus de paiement normal et sélectionner parmi les méthodes de paiement disponibles pour compléter votre commande.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_ORDER_ALREADY_PLACED_ERROR' => 'Il semble que votre commande a été soumise deux fois. Veuillez vérifier la section Mon compte pour voir les détails réels de la commande. Veuillez utiliser le formulaire Nous contacter si votre commande n\'apparaît pas ici mais est déjà payée de votre compte PayPal afin que nous puissions vérifier nos dossiers et réconcilier cela avec vous.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_BUTTON_ALTTEXT' => 'Cliquez ici pour payer via PayPal Express Checkout',  
    'MODULE_PAYMENT_PAYPALWPP_EC_BUTTON_IMG' => 'https://www.paypalobjects.com/webstatic/en_US/btn/btn_checkout_pp_142x27.png', // 注意这里我假设了法语版按钮图片的 URL，实际可能需要您去 PayPal 官方网站查找或确认  
    'MODULE_PAYMENT_PAYPALWPP_EC_BUTTON_SM_IMG' => 'https://www.paypalobjects.com/en_US/i/btn/btn_xpressCheckoutsm.gif', // 同上，假设的法语版小按钮图片 URL  
    'MODULE_PAYMENT_PAYPALWPP_MARK_BUTTON_TXT' => '',  
    'MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG' => 'https://www.paypalobjects.com/en_US/i/btn/btn1_for_hub.gif', // 假设的法语版标记按钮图片 URL  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_CHECK' => 'Confirmer',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_ERROR' => 'Vous avez demandé l\'annulation d\'une transaction mais vous n\'avez pas coché la case de confirmation pour vérifier votre intention.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_FULL_CONFIRM_CHECK' => 'Confirmer',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_CONFIRM_ERROR' => 'Vous avez demandé une autorisation mais vous n\'avez pas coché la case de confirmation pour vérifier votre intention.',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME' => 'Prénom:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME' => 'Nom:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME' => 'Nom de la société:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME' => 'Nom de l’adresse:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET' => 'Rue de l’adresse:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY' => 'Ville de l’adresse:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE' => 'État/Province de l’adresse:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP' => 'Code postal de l’adresse:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY' => 'Pays de l’adresse:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS' => 'Email du payeur :',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID' => 'ID Ebay :',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID' => 'ID du payeur :',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS' => 'Statut du payeur :',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS' => 'Statut de l\'adresse :',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE' => 'Type de paiement :',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS' => 'Statut du paiement :',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON' => 'Raison du retard :',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE' => 'Facture :',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE' => 'Date de paiement :',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY' => 'Devise :',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT' => 'Montant total :',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE' => 'Frais de paiement :',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE' => 'Taux de change :',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS' => 'Articles du panier :',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE' => 'Type de transaction :',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID' => 'ID de transaction :',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID' => 'ID de la transaction parent :',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TITLE' => '<strong>Remboursements de commande</strong>',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_FULL' => 'Si vous souhaitez rembourser cette commande en totalité, cliquez ici :',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_FULL' => 'Remboursement complet',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_PARTIAL' => 'Remboursement partiel',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_FULL_OR' => '<br>... ou saisissez le remboursement ',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PAYFLOW_TEXT' => 'Saisissez le ',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PARTIAL_TEXT' => 'montant de remboursement ici et cliquez sur Remboursement partiel',
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_SUFFIX' => '*Après un remboursement partiel, il ne pourra être accordé un remboursement intégral.<br>*Plusieurs remboursements partiels sont possibles jusqu’à concurrence du solde non remboursé.',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_COMMENTS' => '<strong>Remarque à afficher pour le client:</strong>',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_DEFAULT_MESSAGE' => 'Remboursé par l’administrateur du magasin.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_CHECK' => 'Confirmer : ',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_COMMENTS' => 'Commentaires système : ',  
    'MODULE_PAYMENT_PAYPALWPP_ENTRY_PROTECTIONELIG' => 'Éligibilité à la protection :',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_TITLE' => '<strong>Autorisations de commande</strong>',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_PARTIAL_TEXT' => 'Si vous souhaitez autoriser une partie de cette commande, veuillez saisir le montant ici :',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_BUTTON_TEXT_PARTIAL' => 'Autoriser',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_SUFFIX' => '',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TITLE' => '<strong>Capture des autorisations</strong>',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FULL' => 'Si vous souhaitez capturer la totalité ou une partie des montants autorisés pour cette commande, veuillez saisir le montant de capture et indiquer si cette capture est la dernière pour cette commande. Veuillez cocher la case de confirmation avant de soumettre votre demande de capture.<br>',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_BUTTON_TEXT_FULL' => 'Capturer',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_AMOUNT_TEXT' => 'Montant à capturer :',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FINAL_TEXT' => 'Est-ce la dernière capture ?',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_SUFFIX' => '',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TEXT_COMMENTS' => '<strong>Remarque à afficher pour le client :</strong>',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_DEFAULT_MESSAGE' => 'Merci pour votre commande.',  
    'MODULE_PAYMENT_PAYPALWPP_TEXT_CAPTURE_FULL_CONFIRM_CHECK' => 'Confirmer : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TITLE' => '<strong>Annuler les autorisations de commande</strong>',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_VOID' => 'Si vous souhaitez annuler une autorisation, veuillez saisir l\'ID d\'autorisation ici et confirmer:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TEXT_COMMENTS' => '<strong>Note à afficher pour le client:</strong>',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_VOID_DEFAULT_MESSAGE' => 'Merci pour votre confiance. Venez nous retrouver.',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_VOID_BUTTON_TEXT_FULL' => 'Annuler',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_VOID_SUFFIX' => '',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_TRANSSTATE' => 'État de la transaction:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_AUTHCODE' => 'Code d\'autorisation:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_AVSADDR' => 'Correspondance adresse AVS:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_AVSZIP' => 'Correspondance code postal AVS:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_CVV2MATCH' => 'Correspondance CVV2:',  
    'MODULE_PAYMENT_PAYPAL_ENTRY_DAYSTOSETTLE' => 'Jours pour régler:',  
    'EMAIL_EC_ACCOUNT_INFORMATION' => 'Les détails de connexion à votre compte, que vous pouvez utiliser pour consulter votre achat, sont les suivants:',  
    'MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX' => 'Frais ponctuels liés à ',  
    'MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_SHORT' => 'Surfrais',  
    'MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_LONG' => 'Frais de traitement et autres frais applicables',  
    'MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_SHORT' => 'Remises',  
    'MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_LONG' => 'Crédits appliqués, incluant bons de réduction, chèques-cadeaux, etc.',  
    'MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_SUBJECT' => 'Paiement en état de revue pour fraude: ',
    'MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_INTRO' => 'Ceci est une notification automatisée pour vous informer que PayPal a signalé que le paiement pour une nouvelle commande nécessite une révision du paiement par leur équipe antifraude. Normalement, la révision est terminée dans 36 heures. IL EST FORTEMENT RECOMMANDÉ que vous NE FAITES AUCUN ENVOI pour la commande jusqu\'à la fin de la révision du paiement. Vous pouvez voir le statut de la dernière révision de la commande en connectant à votre compte PayPal et en passant en revue les transactions récentes.',  
    'MODULES_PAYMENT_PAYPALWPP_TEXT_BLANK_ADDRESS' => 'PROBLÈME: Nous sommes désolés. PayPal a renvoyé une adresse vide par erreur. <br>Pour pouvoir terminer votre achat, veuillez fournir votre adresse en cliquant sur le bouton &quot;S&#39;inscrire&quot; ci-dessous pour créer un compte dans notre magasin. Vous pouvez ensuite sélectionner PayPal à nouveau lorsque vous poursuivrez votre paiement. Nous sommes désolés pour le désagrément. Si vous rencontrez des problèmes lors du paiement, veuillez cliquer sur le lien Contactez-nous pour nous expliquer les détails afin que nous pouvons vous aider à réaliser votre achat et éviter ce problème à l\'avenir. Merci.',  
    'MODULES_PAYMENT_PAYPALWPP_AGGREGATE_CART_CONTENTS' => 'Tous les articles de votre panier (voir les détails dans le magasin et sur votre reçu).',
];

if (IS_ADMIN_FLAG === true) {  
    if (!isset($define['MODULE_PAYMENT_PAYPALWPP_MODULE_MODE'])) {  
        $define['MODULE_PAYMENT_PAYPALWPP_MODULE_MODE'] = 'indéfini';  
    }  
    $define['MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_DESCRIPTION'] = '<strong>PayPal Express Checkout</strong>%s<br>' . (substr($define['MODULE_PAYMENT_PAYPALWPP_MODULE_MODE'], 0, 7) == 'Payflow' ? '<a href="https://manager.paypal.com/loginPage.do?partner=ZenCart" rel="noreferrer noopener" target="_blank">Gérer votre compte PayPal.</a>' : '<a href="https://www.paypal.com" rel="noopener" target="_blank">Gérer votre compte PayPal.</a>') . '<br><br><font color="green">Instructions de configuration:</font><br><span class="alert">1. </span><a href="https://www.zen-cart.com/partners/paypal-ec" rel="noopener" target="_blank">Inscrivez-vous à votre compte PayPal - cliquez ici.</a><br>' .  
        (defined('MODULE_PAYMENT_PAYPALWPP_STATUS') ? '' : '... et cliquez sur "installer" ci-dessus pour activer le support PayPal Express Checkout.<br><a href="https://www.zen-cart.com/getpaypal" rel="noopener" target="_blank">Pour obtenir une aide détaillée supplémentaire, consultez cet article de FAQ</a><br>') .  
        ($define['MODULE_PAYMENT_PAYPALWPP_MODULE_MODE'] == 'PayPal' && (!isset($define['MODULE_PAYMENT_PAYPALWPP_APISIGNATURE']) || $define['MODULE_PAYMENT_PAYPALWPP_APISIGNATURE'] === '') ? '<br><span class="alert">2. </span><strong>Informations d’identification API</strong> à partir de l’option Informations d’identification API dans la zone Paramètres de votre profil PayPal. (Cliquez <a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_get-api-signature&generic-flow=true" rel="noopener" target="_blank">ici pour obtenir les informations d’identification API</a>.) <br>Ce module utilise la <strong>signature API</strong> -- vous aurez besoin du nom d’utilisateur, du mot de passe et de la signature pour les champs ci-dessous.' : (substr($define['MODULE_PAYMENT_PAYPALWPP_MODULE_MODE'], 0, 7) == 'Payflow' && (!isset($define['MODULE_PAYMENT_PAYPALWPP_PFUSER']) || $define['MODULE_PAYMENT_PAYPALWPP_PFUSER'] == '') ? '<span class="alert">2. </span><strong>PAYFLOW identifiants</strong> Ce module nécessite vos <strong>paramètres PAYFLOW Partner+Vendor+User+Password</strong> saisies dans les 4 champs ci-dessous. Ces informations seront utilisées pour communiquer avec le système Payflow et autoriser les transactions sur votre compte.' : '<span class="alert">2. </span>Assurez-vous d’avoir saisi les données de sécurité appropriées pour le nom d’utilisateur/mot de passe, etc., ci-dessous.')).  
        ($define['MODULE_PAYMENT_PAYPALWPP_MODULE_MODE'] == 'PayPal' ? '<br><br><span class="alert">3. </span>Dans votre compte PayPal, activer <strong>Notification de paiement instantané</strong>:<br>sous "Profil", sélectionner <em>Préférences de notification de paiement instantané</em><ul style="margin-top: 0.5em;"><li>cliquez sur la case à cocher pour activer l’IPN</li><li>si aucune URL n’est déjà spécifiée, définissez la URL à:<br><nobr><pre>' . str_replace('index.php?main_page=index', 'ipn_main_handler.php', zen_catalog_href_link(FILENAME_DEFAULT)) . '</pre></nobr></li></ul>' : '') .  
'<font color="green"><hr><strong>Exigences:</strong></font><br><hr>*<strong>CURL</strong> est utilisé pour la communication sortante avec la passerelle sur les ports 80 et 443, donc il doit être activé sur votre serveur hébergeur et capable d’utiliser SSL.<br><hr>';
}

return $define;
