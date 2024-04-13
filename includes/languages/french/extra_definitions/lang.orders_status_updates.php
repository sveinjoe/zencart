<?php

$define = [
    'OSH_EMAIL_SEPARATOR' => '------------------------------------------------------', // 分隔符  
    'OSH_EMAIL_TEXT_SUBJECT' => 'Mise à jour de commande', // 主题：订单更新  
    'OSH_EMAIL_TEXT_ORDER_NUMBER' => 'Numéro de commande:', // 订单号：  
    'OSH_EMAIL_TEXT_INVOICE_URL' => 'Détails de la commande:', // 订单详情：  
    'OSH_EMAIL_TEXT_DATE_ORDERED' => 'Date de commande:', // 订单日期：  
    'OSH_EMAIL_TEXT_COMMENTS_UPDATE' => '<em>Les commentaires pour votre commande sont: </em>', // <em>您的订单评论如下：</em>  
    'OSH_EMAIL_TEXT_STATUS_UPDATED' => 'Le statut de votre commande a été mis à jour:' . "\n", // 您的订单状态已更新：\n  
    'OSH_EMAIL_TEXT_STATUS_NO_CHANGE' => 'Le statut de votre commande n\'a pas changé:' . "\n", // 您的订单状态未发生变化：\n  
    'OSH_EMAIL_TEXT_STATUS_LABEL' => '<strong>Statut actuel: </strong> %s' . "\n\n", // <strong>当前状态：</strong> %s\n\n  
    'OSH_EMAIL_TEXT_STATUS_CHANGE' => '<strong>Ancien statut:</strong> %1$s, <strong>Nouveau statut:</strong> %2$s' . "\n\n", // <strong>旧状态：</strong> %1$s, <strong>新状态：</strong> %2$s\n\n  
    'OSH_EMAIL_TEXT_STATUS_PLEASE_REPLY' => 'Si vous avez des questions, veuillez répondre à ce courrier électronique.' . "\n", // 如果您有任何问题，请回复此邮件。\n  
    'SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT' => '[ORDERS STATUS]', // [订单状态更新]
];

return $define;