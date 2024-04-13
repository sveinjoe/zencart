<?php  
// 定义一个数组，用于存储优惠券相关的文本和标题  
$define = [  
    // 优惠券的标题  
    'MODULE_ORDER_TOTAL_COUPON_TITLE' => 'Coupon de réduction',  
    // 优惠券的头部信息  
    'MODULE_ORDER_TOTAL_COUPON_HEADER' => TEXT_GV_NAMES . '/Coupon de réduction',  
    // 优惠券的描述  
    'MODULE_ORDER_TOTAL_COUPON_DESCRIPTION' => 'Coupon de réduction',  
    // 输入优惠券代码的提示  
    'MODULE_ORDER_TOTAL_COUPON_TEXT_ENTER_CODE' => TEXT_GV_REDEEM,  
    // 优惠券的兑换说明  
    'MODULE_ORDER_TOTAL_COUPON_REDEEM_INSTRUCTIONS' => '<p>Veuillez saisir votre code de coupon dans la case située à côté du Code de récupération. Le coupon sera appliqué au total et apparaîtra dans votre panier après avoir cliqué sur continuer.</p><p>Veuillez noter : vous ne pouvez utiliser qu’un seul coupon par commande.</p>',  
    // 当前使用的优惠券代码的提示  
    'MODULE_ORDER_TOTAL_COUPON_TEXT_CURRENT_CODE' => 'Votre code de récupération actuel : ',  
    // 从订单中删除当前优惠券的命令  
    'TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER' => 'SUPPRIMER',  
    // 优惠券被请求删除的提示  
    'TEXT_REMOVE_REDEEM_COUPON' => 'Coupon de réduction supprimé par demande!',  
    // 设置Include tax为true时，只应在recalculate为None时发生  
    'MODULE_ORDER_TOTAL_COUPON_INCLUDE_ERROR' => 'La configuration Inclure la taxe = vrai, devrait uniquement être utilisée lorsque Récalculer = Aucun',  
];  
  
// 添加从订单中删除优惠券的说明  
$define['MODULE_ORDER_TOTAL_COUPON_REMOVE_INSTRUCTIONS'] = '<p>Pour supprimer un coupon de réduction de cette commande, remplacez le code du coupon par : ' . $define['TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER'] . '</p>';  
  
// 返回定义的数组  
return $define;