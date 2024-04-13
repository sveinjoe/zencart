<?php
//overrides for dd/mm/yyyy, kg, EUR
$locales = ['de_DE.UTF8', 'de-DE', 'German_Germany.1252', 'de']; 
@setlocale(LC_TIME, $locales);
$define = [
    'DATE_FORMAT' => 'd/m/Y',
    'DOB_FORMAT_STRING' => 'dd/mm/yyyy',
    'ENTRY_DATE_OF_BIRTH_ERROR' => 'La fecha de nacimiento debe tener el formato:DD/MM/YYYY (ej. 21/05/1970) o YYYY-MM-DD (ej 1970-05-21)',
    'ENTRY_DATE_OF_BIRTH_TEXT' => '* (ej. 21/05/1970 o 1970-05-21)',
    'LANGUAGE_CURRENCY' => 'EUR',
    'TEXT_PRODUCT_WEIGHT_UNIT' => ' kg',
    'TEXT_SHIPPING_WEIGHT' => ' kg',
];
return $define;
