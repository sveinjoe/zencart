<?php  
$define = [  
    'MODULE_ORDER_TOTAL_COUPON_TITLE' => 'Rabatt-Coupon',  
    'MODULE_ORDER_TOTAL_COUPON_HEADER' => TEXT_GV_NAMES . '/Rabatt-Coupon',  
    'MODULE_ORDER_TOTAL_COUPON_DESCRIPTION' => 'Rabatt-Coupon',  
    'MODULE_ORDER_TOTAL_COUPON_TEXT_ENTER_CODE' => TEXT_GV_REDEEM,  
    'MODULE_ORDER_TOTAL_COUPON_REDEEM_INSTRUCTIONS' => '<p>Bitte geben Sie Ihren Coupon-Code in das Feld neben Einlösungscode ein. Ihr Coupon wird auf die Gesamtsumme angewendet und in Ihrem Warenkorb angezeigt, nachdem Sie auf Weiter klicken.</p><p>Bitte beachten Sie: Sie können pro Bestellung nur einen Coupon verwenden.</p>',  
    'MODULE_ORDER_TOTAL_COUPON_TEXT_CURRENT_CODE' => 'Ihr aktueller Einlösungscode: ',  
    'TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER' => 'ENTFERNEN',  
    'TEXT_REMOVE_REDEEM_COUPON' => 'Rabatt-Coupon wurde aufgrund einer Anfrage entfernt!',  
    'MODULE_ORDER_TOTAL_COUPON_INCLUDE_ERROR' => 'Die Einstellung "Steuern einbeziehen" = true sollte nur erfolgen, wenn "Neuberechnung" = Keine',  
];  
  
$define['MODULE_ORDER_TOTAL_COUPON_REMOVE_INSTRUCTIONS'] = '<p>Um einen Rabatt-Coupon von dieser Bestellung zu entfernen, ersetzen Sie den Coupon-Code mit: ' . $define['TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER'] . '</p>';  
  
return $define;