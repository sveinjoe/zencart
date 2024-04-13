<?php
$define = [
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ADMIN_TITLE' => 'Authorize.net (AIM)',  
    // 管理员标题：Authorize.net (AIM)  
      
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR_CURL_NOT_FOUND' => 'Les fonctions CURL n\'ont pas été trouvées - nécessaires pour le module de paiement Authorize.net AIM',  
    // 错误信息：CURL函数未找到 - Authorize.net AIM支付模块所需  
      
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CATALOG_TITLE' => 'Carte de crédit',  
    // 目录标题：信用卡  
      
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_TYPE' => 'Type de carte:',  
    // 信用卡类型：  
      
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_OWNER' => 'Propriétaire de la carte:',  
    // 信用卡持卡人：  
      
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_NUMBER' => 'Numéro de la carte:',  
    // 信用卡卡号：  
      
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_EXPIRES' => 'Date d\'expiration:',  
    // 到期日期：  
      
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CVV' => 'Numéro CVV:',  
    // CVV号：  
      
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_POPUP_CVV_LINK' => 'Qu\'est-ce que c\'est?',  
    // 弹出框CVV链接：这是什么？  
      
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_OWNER' => '* Le nom du propriétaire de la carte de crédit doit avoir au moins ' . CC_OWNER_MIN_LENGTH . ' caractères.\n',  
    // JS验证：信用卡持卡人姓名必须至少有CC_OWNER_MIN_LENGTH个字符。  
      
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_NUMBER' => '* Le numéro de la carte de crédit doit avoir au moins ' . CC_NUMBER_MIN_LENGTH . ' caractères.\n',  
    // JS验证：信用卡卡号必须至少有CC_NUMBER_MIN_LENGTH个字符。  
      
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_CVV' => '* Le numéro CVV de 3 ou 4 chiffres doit être saisi à l\'arrière de la carte de crédit.\n',  
    // JS验证：必须从信用卡背面输入3或4位数的CVV号。  
      
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DECLINED_MESSAGE' => 'Votre carte de crédit n\'a pas pu être autorisée pour cette raison. Veuillez corriger les informations et réessayer ou contactez-nous pour obtenir une assistance supplémentaire.',  
    // 拒绝消息：由于某种原因，您的信用卡未能获得授权。请更正信息并重试或联系我们获取进一步帮助。  
      
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR' => 'Erreur de carte de crédit!',  
    // 错误信息：信用卡错误！  
      
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_COMM_ERROR' => 'Impossible de traiter le paiement en raison d\'une erreur de communication. Vous pouvez réessayer ou contactez-nous pour obtenir une assistance.',  
    // 通信错误：由于通信错误，无法处理付款。您可以重试或联系我们获取帮助。  
      
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_BUTTON_TEXT' => 'Effectuer le remboursement',  
    // 退款按钮文本：执行退款  
      
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_CONFIRM_ERROR' => 'Erreur: vous avez demandé un remboursement sans cocher la case de confirmation.',  
    // 退款确认错误：错误：您请求进行退款但未勾选确认框。
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_INVALID_REFUND_AMOUNT' => 'Erreur : Vous avez demandé un remboursement mais avez entré un montant incorrect.',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CC_NUM_REQUIRED_ERROR' => 'Erreur : Vous avez demandé un remboursement mais n’avez pas entré les 4 derniers chiffres du numéro de la carte de crédit.',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_INITIATED' => 'Remboursement initié. ID de transaction : %s - Code d’autorisation : %s',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPTURE_CONFIRM_ERROR' => 'Erreur : Vous avez demandé une capture mais n’avez pas coché la case de confirmation.',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_BUTTON_TEXT' => 'Effectuer la capture',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_INVALID_CAPTURE_AMOUNT' => 'Erreur : Vous avez demandé une capture mais devez entrer un montant.',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_TRANS_ID_REQUIRED_ERROR' => 'Erreur : Vous devez spécifier un ID de transaction.',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPT_INITIATED' => 'Capture de fonds initiée. Montant : %s. ID de transaction : %s - Code d’autorisation : %s',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_BUTTON_TEXT' => 'Annuler la transaction',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_CONFIRM_ERROR' => 'Erreur : Vous avez demandé une annulation mais n’avez pas coché la case de confirmation.',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_INITIATED' => 'Annulation initiée. ID de transaction : %s - Code d’autorisation : %s',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TITLE' => '<strong>Rembourser les transactions</strong>',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND' => 'Vous pouvez ici rembourser le montant à la carte de crédit du client :',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_CONFIRM_CHECK' => 'Cochez cette case pour confirmer votre intention : ',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_AMOUNT_TEXT' => 'Entrez le montant que vous souhaitez rembourser',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_CC_NUM_TEXT' => 'Entrez les 4 derniers chiffres de la carte de crédit pour laquelle vous effectuez le remboursement.',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TRANS' => 'Entrez l’ID de la transaction pour laquelle vous souhaitez effectuer le remboursement.',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TRANS_ID' => 'Entrez le numéro d’origine de la transaction :', // 输入原始交易ID：  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TEXT_COMMENTS' => 'Notes (sera affichée dans l’historique de commande) :', // 备注（将显示在订单历史中）：  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_DEFAULT_MESSAGE' => 'Remboursement effectué', // 已发放退款  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_SUFFIX' => 'Vous pouvez rembourser une commande jusqu’à le montant déjà capturé. Vous devez indiquer les 4 derniers chiffres du numéro de carte de crédit utilisé pour la commande initiale.<br>Les remboursements doivent être effectués dans les 120 jours suivant la date de la transaction originale.', // 您可以对订单进行退款，最多可退已捕获的金额。您必须提供在初始订单中使用的信用卡号的最后四位数字。<br>退款必须在原始交易日期后的120天内进行。  
      
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TITLE' => '<strong>Capture des transactions</strong>', // <strong>捕获交易</strong>  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE' => 'Vous pouvez capturer ici les fonds précédemment autorisés :', // 您可以在此捕获先前已授权的资金：  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_AMOUNT_TEXT' => 'Entrez le montant à capturer : ', // 输入要捕获的金额：  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPTURE_CONFIRM_CHECK' => 'Cochez cette case pour confirmer votre intention : ', // 勾选此框以确认您的意图：  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TRANS_ID' => 'Entrez le numéro d’origine de la transaction : ', // 输入原始交易ID：  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TEXT_COMMENTS' => 'Notes (sera affichée dans l’historique de commande) :', // 备注（将显示在订单历史中）：  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_DEFAULT_MESSAGE' => 'Règlement des fonds précédemment autorisés.', // 已结算先前授权的资金。  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_SUFFIX' => 'Les captures doivent être effectuées dans les 30 jours suivant l’autorisation originale. Vous ne pouvez capturer une commande qu’une seule fois.<br>Veuillez vous assurer que le montant spécifié est correct.<br>Si vous laissez le montant vide, le montant original sera utilisé à la place.', // 捕获必须在原始授权后的30天内进行。您只能捕获订单一次。<br>请确保指定的金额是正确的。<br>如果金额留空，将使用原始金额。  
      
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_TITLE' => '<strong>Annulation des transactions</strong>', // <strong>交易作废</strong>  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID' => 'Vous pouvez annuler une transaction qui n’a pas encore été réglée, ou une autorisation qui n’a pas été capturée.<br>Entrez le numéro de transaction non réglée ou le numéro d’autorisation non capturé :', // 您可以作废尚未结算的交易，或尚未捕获的授权。<br>请输入未结算的交易ID或未捕获的授权ID：
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_CONFIRM_CHECK' => 'Cochez cette case pour confirmer votre intention :',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_TEXT_COMMENTS' => 'Notes (sera affichée dans l’historique de commande) :',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_DEFAULT_MESSAGE' => 'Transaction annulée',  
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_SUFFIX' => 'Les annulations doivent être effectuées avant que la transaction originale soit réglée dans le lot quotidien.',
];

if (defined('MODULE_PAYMENT_AUTHORIZENET_AIM_STATUS') && MODULE_PAYMENT_AUTHORIZENET_AIM_STATUS == 'True') {
    $define['MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION'] = '<a rel="noreferrer noopener" target="_blank" href="https://account.authorize.net/">Connexion marchand Authorize.net</a>' . (MODULE_PAYMENT_AUTHORIZENET_AIM_TESTMODE != 'Production' ? '<br><br>Informations de test:<br><b>Numéros de cartes de crédit approuvées automatiquement:</b><br>Visa#: 4007000000027<br>MC#: 5424000000000015<br>Discover#: 6011000000000012<br>AMEX#: 370000000000002<br><br><b>Note:</b> Ces numéros de cartes de crédit retourneront un refus en mode réel, et une approbation en mode test. N\'importe quelle date future peut être utilisé pour la date d\'expiration, et n\'importe quel numéro à 3 ou 4 chiffres (AMEX) peut être utilisé pour le code CVV.<br><br><b>Numéro de carte de crédit refusée automatiquement:</b><br><br>Numéro de carte: 4222222222222<br><br>Ce numéro de carte peut être utilisé pour recevoir notifications de refus à des fins de test.<br><br>' : '') . '<br><br>Consultez <a href="https://docs.zen-cart.com/user/payment/authorizenet_aim/" rel="noreferrer noopener" target="_blank">l\'article FAQ sur la configuration AIM</a> pour obtenir des instructions de configuration détaillées.';
} else {
    $define['MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION'] = '<a rel="noreferrer noopener" target="_blank" href="https://reseller.authorize.net/application?resellerId=10023">Cliquez ici pour créer un compte</a><br><br><a rel="noreferrer noopener" target="_blank" href="https://account.authorize.net/">Espace marchand Authorize.net</a><br><br><strong>Conditions requises:</strong><br><hr>*<strong>Compte Authorize.net</strong> (voir le lien ci-dessus pour l\'inscription)<br>*<strong>CURL est nécessaire</strong> et DOIT être compilé avec le support SSL dans PHP par votre hébergeur<br>*<strong>Nom d\'utilisateur Authorize.net et clé de transaction</strong> disponibles dans votre Espace marchand<br><br>Consultez <a href="https://docs.zen-cart.com/user/payment/authorizenet_aim/" rel="noreferrer noopener" target="_blank">l\'article FAQ sur la configuration AIM</a> pour obtenir des instructions de configuration détaillées.';
}

return $define;
