<?php //https://github.com/torvista/Zen_Cart-Spanish_Language_Pack
//overrides for dd/mm/yyyy, kg, EUR
$locales = ['es_ES.UTF8', 'es-ES', 'Italian_Italy.1252', 'es'];
@setlocale(LC_TIME, $locales);
$define = [
    'DATE_FORMAT' => 'd/m/Y',  
    'DOB_FORMAT_STRING' => 'dd/mm/yyyy',  
    'ENTRY_DATE_OF_BIRTH_ERROR' => 'La data di nascita deve avere il formato: GG/MM/AAAA (ad es. 21/05/1970) o AAAA-MM-GG (ad es. 1970-05-21)',  
    'ENTRY_DATE_OF_BIRTH_TEXT' => '* (ad es. 21/05/1970 o 1970-05-21)',  
    'LANGUAGE_CURRENCY' => 'EUR',  
    'TEXT_PRODUCT_WEIGHT_UNIT' => ' kg',  
    'TEXT_SHIPPING_WEIGHT' => ' kg',
];
return $define;
