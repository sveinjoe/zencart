<?php
$define = [  
    'MODULE_ORDER_TOTAL_COUPON_TITLE' => 'Buono Sconto',  
    'MODULE_ORDER_TOTAL_COUPON_HEADER' => TEXT_GV_NAMES . '/Buono Sconto',  
    'MODULE_ORDER_TOTAL_COUPON_DESCRIPTION' => 'Buono Sconto',  
    'MODULE_ORDER_TOTAL_COUPON_TEXT_ENTER_CODE' => TEXT_GV_REDEEM,  
    'MODULE_ORDER_TOTAL_COUPON_REDEEM_INSTRUCTIONS' => '<p>Digitare il codice del buono nella casella accanto a Codice Rimborso. Il buono verrà applicato al totale e rifletterà nel carrello dopo aver cliccato su continua.</p><p>Attenzione: è possibile utilizzare solo un buono per ordine.</p>',  
    'MODULE_ORDER_TOTAL_COUPON_TEXT_CURRENT_CODE' => 'Codice Rimborso Corrente: ',  
    'TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER' => 'RIMUOVI',  
    'TEXT_REMOVE_REDEEM_COUPON' => 'Buono Sconto Rimosso per Richiesta!',  
    'MODULE_ORDER_TOTAL_COUPON_INCLUDE_ERROR' => 'Impostazione Include tassa = true, dovrebbe avvenire solo quando recalculate = Nessuno',  
];  
  
$define['MODULE_ORDER_TOTAL_COUPON_REMOVE_INSTRUCTIONS'] = '<p>Per rimuovere un Buono Sconto da questo ordine sostituire il codice del buono con: ' . $define['TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER'] . '</p>';  
  
return $define;
