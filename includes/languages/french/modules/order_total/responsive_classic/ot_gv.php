<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2019 Jul 20 Modified in v1.5.7 $
 */

 define('MODULE_ORDER_TOTAL_GV_TITLE', TEXT_GV_NAMES); // 礼品券标题  
 define('MODULE_ORDER_TOTAL_GV_HEADER', TEXT_GV_NAMES . '/Coupons de réduction'); // 礼品券/折扣券标题  
 define('MODULE_ORDER_TOTAL_GV_DESCRIPTION', TEXT_GV_NAMES); // 礼品券描述  
 define('MODULE_ORDER_TOTAL_GV_USER_PROMPT', 'Appliquer le montant: '); // 请输入金额：  
 define('MODULE_ORDER_TOTAL_GV_TEXT_ENTER_CODE', TEXT_GV_REDEEM); // 请输入礼品券代码  
 define('TEXT_INVALID_REDEEM_AMOUNT', 'Le montant que vous avez essayé d\'appliquer ne semble pas correspondre à votre solde de chèques cadeaux. Veuillez réessayer.'); // 看起来您尝试使用的金额与您的礼品券余额不匹配。请重试。  
 define('MODULE_ORDER_TOTAL_GV_USER_BALANCE', 'Solde disponible: '); // 可用余额：  
   
 // -bof-one_page_checkout-lat9  *** 1 of 1 ***  
 if (defined('CHECKOUT_ONE_ENABLED') && CHECKOUT_ONE_ENABLED == 'true') {  
   define('MODULE_ORDER_TOTAL_GV_REDEEM_INSTRUCTIONS', '<p>Si vous souhaitez utiliser les fonds de votre chèque cadeaux déjà présents sur votre compte, veuillez indiquer le montant que vous souhaitez appliquer dans la zone indiquée "Appliquer le montant". Vous devez ensuite choisir un mode de paiement, puis cliquer sur le bouton soumettre situé au bas de la page pour appliquer les fonds à votre commande.</p><p>Si vous souhaitez utiliser un <em>nouveau</em> chèque cadeaux, veuillez indiquer le numéro dans la zone située à côté de "Code réduction". Le montant récupéré sera ajouté à votre compte lorsque vous cliquez sur le bouton à côté.</p>'); // 使用说明：若您希望使用账户中已有的礼品券资金，请在“请输入金额”处输入您希望使用的金额。然后，您需要选择一种支付方式，并点击页面底部的提交按钮，将资金应用于您的订单。若您正在使用一张<em>新的</em>礼品券，请在“折扣码”旁边的框中输入号码。当您点击旁边的按钮时，赎回的金额将添加到您的账户中。  
 } else {  
   define('MODULE_ORDER_TOTAL_GV_REDEEM_INSTRUCTIONS', '<p>Si vous souhaitez utiliser les fonds de votre chèque cadeaux déjà présents sur votre compte, veuillez indiquer le montant que vous souhaitez appliquer dans la zone indiquée "Appliquer le montant". Vous devez ensuite choisir un mode de paiement, puis cliquer sur le bouton continuer pour appliquer les fonds à votre panier.</p><p>Si vous souhaitez utiliser un <em>nouveau</em> chèque cadeaux, veuillez indiquer le numéro dans la zone située à côté de "Code de récupération". Le montant récupéré sera ajouté à votre compte lorsque vous cliquez sur le bouton continuer.</p>'); // 使用说明：若您希望使用账户中已有的礼品券资金，请在“请输入金额”处输入您希望使用的金额。然后，您需要选择一种支付方式，并点击继续按钮，将资金应用于您的购物车。若您正在使用一张<em>新的</em>礼品券，请在“赎回码”旁边的框中输入号码。当您点击继续按钮时，赎回的金额将添加到您的账户中。  
 }  
 // -eof-one_page_checkout-lat9  *** 1 of 1 ***  
 // 当重新计算设置为“无”时，才应设置“包含税”为true  
define('MODULE_ORDER_TOTAL_GV_INCLUDE_ERROR', 'Le réglage "Inclure la taxe" = vrai, ne devrait se produire que lorsque "Recalculer" = Aucun');